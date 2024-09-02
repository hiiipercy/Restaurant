<?php

namespace App\Http\Requests;

use App\Http\Requests\FormRequest;
use Illuminate\Support\Facades\Auth;

class SpecialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'           => 'required|string',
            'description'     => 'required|string',
            'filter_name'     => 'required|string|max:255',
            'image'           => 'nullable|image|mimes:jpg,png,jpeg',
        ];
        // if (request()->update_id) {
        //     $rules['title'][0]          = 'nullable';
        //     $rules['video_url'][0]      = 'nullable';
        //     $rules['description'][0]    = 'nullable';
        //     $rules['image'][0]          = 'nullable';
        // }

        // return $rules;
    }
}
