<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Testimonial;
use App\Traits\Base;
use App\Traits\UploadAble;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\TestimonialRequest;
use Yajra\DataTables\Facades\DataTables;

class TestimonialController extends Controller
{
    use UploadAble, Base;

    public function store_or_update($request){
        $collection = collect($request->validated());
        $created_at = $updated_at = Carbon::now();
        $created_by = $updated_by = auth()->user()->name;
        $section_name = 'TestimonialSection';

        if($request->update_id){
            $collection = $collection->merge(compact('updated_by','updated_at'));
        }else{
            $collection = $collection->merge(compact('section_name','created_by','created_at'));
        }
        return Testimonial::updateOrCreate(['id'=>$request->update_id],$collection->all());
    }


    public function index(Request $request){

        if($request->ajax()){
            $getData = Testimonial::orderBy('id','desc');
            return DataTables::eloquent($getData)
                ->addIndexColumn()
                ->filter(function ($query) use ($request) {
                    if (!empty($request->search)) {
                        $query->where('name', 'LIKE', "%$request->search%");
                    }
                })
                ->addColumn('created_at', function($row){
                    return date('Y-m-d', strtotime($row->created_at));
                })
                ->addColumn('bulk_check', function($row){
                    return table_checkbox($row->id);
                })
                ->addColumn('action', function($row){
                    $action = '<div class="d-flex align-items-center justify-content-end">';
                    $action .= '<button type="button" class="btn-style btn-style-edit edit_data ml-1" data-id="' . $row->id . '"><i class="fa fa-edit"></i></button>';
                    $action .= '<button type="button" class="btn-style btn-style-danger delete_data ml-1" data-id="' . $row->id . '" data-name="' . $row->role_name . '"><i class="fa fa-trash"></i></button>';
                    
                    $action .= '</div>';

                    return $action;
                })
                ->rawColumns(['bulk_check','action'])
                ->make(true);
        }

        $this->setPageTitle('Testimonial','Testimonial List');
        $breadcrumb = ['Testimonial'=>''];
   
        return view('backend.testimonial.index', ['breadcrumb'=>$breadcrumb]);
    }


    public function updateOrStore(TestimonialRequest $request){
        if ($request->ajax()) {
            $result = $this->store_or_update($request);
            if($result){
                return $this->store_message($result,$request->update_id);
            }else{
                return $this->response_json('error','Data Cannot Save',null,204);
            }
        }
    }


    public function edit(Request $request){
        if ($request->ajax()) {
            $data = Testimonial::find($request->id);
            if($data->count()){
                return $this->response_json('success',null,$data,201);
            }else{
                return $this->response_json('error','No Data Found',null,204);
            }
        }

    }


    public function delete(Request $request){
        if ($request->ajax()) {
            $result = Testimonial::find($request->id);
            if($result){
                $result->delete();
                return $this->delete_message($result);
            }else{
                return $this->response_json('error','Data Cannot Delete',null,204);
            }
            
        }else{
            return $this->response_json('error',null,null,401);
        }
    }


    public function bulkDelete(Request $request){
        if ($request->ajax()) {
            $result = Testimonial::whereIn('id',$request->ids)->get();
            if($result){
                Testimonial::destroy($request->ids);
                return $this->bulk_delete_message($result);
            }else{
                return $this->response_json('error','Data Cannot Delete',null,204);
            }
        }else{
            return $this->response_json('error',null,null,401);
        }
    }

}
