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
       // get the current forum object
       $forum = $this->route('forum');

       return [
           'title' => [
               'required',
               'max:255',
           ],
           'problem' => [
               'required',
               'max:2000',
           ],
           'solution' => [
               'required',
               'max:2000',
            ],
           'component_id' => [
               'required'
           ]
        ];
    }
}