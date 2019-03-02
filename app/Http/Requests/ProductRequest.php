<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
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
       // get the current product object
       $product = $this->route('product');

       return [
           
           'name' => [
               'required',
               'max:100',
               Rule::unique('products', 'name')->ignore(@$product->id)
           ],
           'type' => [
               'required',
               'max:255',
            ],
           'image_path' => [
               'max:255'
           ],
           'company_id' => [
               'required'
           ]
        ];
    }
}
