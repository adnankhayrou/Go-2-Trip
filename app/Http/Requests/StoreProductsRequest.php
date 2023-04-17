<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductsRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20000',
            'description' => 'required',
            'prix' => 'required',
            'city_id' => 'required',
            'telephone' => 'required|regex:/^[\+]?(212)[6-8]{1}[0-9]{8}$/',
            'category_id' => 'required',
            'subCategory_id' => 'required',
        ];
       
    }
}
