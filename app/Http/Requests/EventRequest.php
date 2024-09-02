<?php

namespace App\Http\Requests;

use App\Http\Requests\FormRequest;
use Illuminate\Support\Facades\Auth;

class EventRequest extends FormRequest
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
            'title'           => 'required|string|max:255',
            'price'           => 'required|string|max:255',
            'description'     => 'required|string',
            'list_1'          => 'required|string',
            'list_2'          => 'required|string',
            'list_3'          => 'required|string',
            'image'           => 'nullable|image|mimes:jpg,png,jpeg',
      
        ];
    }
}
