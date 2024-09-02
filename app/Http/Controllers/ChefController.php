<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Chef;
use App\Traits\Base;
use App\Traits\UploadAble;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ChefRequest;
use Yajra\DataTables\Facades\DataTables;

class ChefController extends Controller
{
    use UploadAble, Base;

    public function store_or_update($request){
        $collection = collect($request->validated());
        $created_at = $updated_at = Carbon::now();
        $created_by = $updated_by = auth()->user()->name;
        $section_name = 'ChefSection';
        $image = $request->old_image;
        if($request->hasFile('image')){
            $image = $this->upload_file($request->file('image'),EVENT_AVATAR_PATH);
            if(!empty($request->old_image)){
                $this->delete_file($request->old_image,EVENT_AVATAR_PATH);
            }
        }

        if($request->update_id){
            $collection = $collection->merge(compact('image','updated_by','updated_at'));
        }else{
            $collection = $collection->merge(compact('section_name','image','created_by','created_at'));
        }
        // if($request->password){
        //     $collection = $collection->merge(with(['password' => $request->password ]));
        // }
        return Chef::updateOrCreate(['id'=>$request->update_id],$collection->all());
    }


    public function index(Request $request){

        if($request->ajax()){
            $getData = Chef::orderBy('id','desc');
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
                ->addColumn('image', function($row){
                    if ($row->image != null) {
                        $attach = '<img src="'.url('uploads/'.EVENT_AVATAR_PATH.$row->image).'" width="50px">';
                    }else{
                        $attach = '';
                    }
                    return $attach;
                })
                ->addColumn('action', function($row){
                    $action = '<div class="d-flex align-items-center justify-content-end">';
                    $action .= '<button type="button" class="btn-style btn-style-edit edit_data ml-1" data-id="' . $row->id . '"><i class="fa fa-edit"></i></button>';
                    $action .= '<button type="button" class="btn-style btn-style-danger delete_data ml-1" data-id="' . $row->id . '" data-name="' . $row->role_name . '"><i class="fa fa-trash"></i></button>';
                    
                    $action .= '</div>';

                    return $action;
                })
                ->rawColumns(['bulk_check','image','action'])
                ->make(true);
        }

        $this->setPageTitle('Chef','Chef List');
        $breadcrumb = ['Chef'=>''];
   
        return view('backend.chef.index', ['breadcrumb'=>$breadcrumb]);
    }


    public function updateOrStore(ChefRequest $request){
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
            $data = Chef::find($request->id);
            if($data->count()){
                return $this->response_json('success',null,$data,201);
            }else{
                return $this->response_json('error','No Data Found',null,204);
            }
        }

    }


    public function delete(Request $request){
        if ($request->ajax()) {
            $result = Chef::find($request->id);
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
            $result = Chef::whereIn('id',$request->ids)->select('image')->get();
            if($result){
                foreach ($result as $value) {
                    $this->delete_file($value->image,EVENT_AVATAR_PATH);
                }
                Chef::destroy($request->ids);
                return $this->bulk_delete_message($result);
            }else{
                return $this->response_json('error','Data Cannot Delete',null,204);
            }
        }else{
            return $this->response_json('error',null,null,401);
        }
    }

}
