<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticlesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false;
        /**
         * 修改为 true，表示不需要认证，或者是通过认证
         */
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
            /**
             * 表单验证
             * 需要在控制器中引入该Requests方法文件
             *
             */
            'title' => 'required|min:3|max:100',
            'intro' => 'required|max:255',
            'content' => 'required|min:100',
            'level1' => 'required|max:20',
            'level2' => 'required|max:20',
            'published_at' => 'required|date'

        ];
    }
}
