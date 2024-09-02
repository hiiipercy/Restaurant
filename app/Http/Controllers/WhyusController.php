<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Whyus;
use App\Traits\Base;
use App\Traits\UploadAble;
use App\Http\Requests\WhyusRequest;


class WhyusController extends Controller
{
    use UploadAble, Base;

    public function store_or_update($request){
        $collection = collect($request->validated());
        $created_at = $updated_at = Carbon::now();
        $created_by = $updated_by = auth()->user()->name;
        $section_name = 'WhyUsSection';

        if($request->update_id){
            $collection = $collection->merge(compact('updated_by','updated_at'));
        }else{
            $collection = $collection->merge(compact('section_name','created_by','created_at'));
        }
        return Whyus::updateOrCreate(['id'=>$request->update_id],$collection->all());
    }

    public function updateOrStore(WhyusRequest $request){
        if ($request->ajax()) {
            $result = $this->store_or_update($request);
            if($result){
                return $this->store_message($result,$request->update_id);
            }else{
                return $this->response_json('error','Data Cannot Save',null,204);
            }
        }
    }

    public function index()
    {
        $this->setPageTitle('WhyUs','WhyUs');
        $breadcrumb = ['WhyUs'=>''];
        $whyus = Whyus::where('section_name','WhyUsSection')->first();
        return view('backend.whyus.index',compact('breadcrumb','whyus'));
    }
}

