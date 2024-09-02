<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\About;
use App\Traits\Base;
use App\Traits\UploadAble;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\AboutRequest;


class AboutController extends Controller
{
    use UploadAble, Base;

    public function store_or_update($request){
        $collection = collect($request->validated());
        $created_at = $updated_at = Carbon::now();
        $created_by = $updated_by = auth()->user()->name;
        $section_name = 'AboutSection';
        $image = $request->old_image;
        if($request->hasFile('image')){
            $image = $this->upload_file($request->file('image'),ABOUT_AVATAR_PATH);
            if(!empty($request->old_image)){
                $this->delete_file($request->old_image,ABOUT_AVATAR_PATH);
            }
        }

        if($request->update_id){
            $collection = $collection->merge(compact('image','updated_by','updated_at'));
        }else{
            $collection = $collection->merge(compact('image','section_name','created_by','created_at'));
        }
        return About::updateOrCreate(['id'=>$request->update_id],$collection->all());
    }

    public function updateOrStore(AboutRequest $request){
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
        $this->setPageTitle('About','About');
        $breadcrumb = ['About'=>''];
        $about = About::where('section_name','AboutSection')->first();
        return view('backend.abouts.index',compact('breadcrumb','about'));
    }
}

