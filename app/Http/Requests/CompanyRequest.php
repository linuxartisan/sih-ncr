<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CompanyRequest extends FormRequest
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
       // get the current company object
       $company = $this->route('company');

       return [
           
           'name' => [
               'required',
               'max:100',
               Rule::unique('companies', 'name')->ignore(@$company->id)
           ]
       ];
    }
}
