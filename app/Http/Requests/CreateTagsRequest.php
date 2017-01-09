<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTagsRequest extends FormRequest
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
            //
            'IDLevel'=>'required|max:20',
            'upLevel'=>'max:20',
            'name'=>'required|max:20',
            'intro'=>'required|min:10|max:255',
            'published_at'=>'required|date',
        ];
    }
}
