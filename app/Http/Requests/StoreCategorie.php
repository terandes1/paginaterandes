<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategorie extends FormRequest
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
            'language_id'=>'required',
            'name'=>'required|unique:categories,name',
            'img'=>'required',
            'description'=>'required',
            'status'=>'required',
            /*'slug'=>'required|unique:categories,slug'*/
        ];
    }
}
