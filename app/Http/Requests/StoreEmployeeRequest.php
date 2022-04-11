<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:2|unique:employees,name',
            'status_id' => ['required', 'integer', Rule::exists('references', 'id')->where('code', 'employee_status')],
            'salary' => 'required|integer|min:2000000|max:10000000',
        ];
    }
}
