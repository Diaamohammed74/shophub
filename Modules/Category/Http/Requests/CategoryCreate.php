<?php

namespace Modules\Category\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class categoryCreate extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>['required','string'],
            'description' => ['sometimes', 'nullable', 'string'],
            'image'=>['sometimes','bail', 'nullable','file','image','mimes:png,jpg,jpeg'],
            'status'=>['required'],
            'parent-category'=>['sometimes', 'nullable'],
            // 'parent-category'=>['required'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
