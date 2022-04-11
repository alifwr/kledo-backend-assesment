<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetOvertimeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'date_started' => 'required|date_format:Y-m-d|before:' . $this->request->get('date_ended'),
            'date_ended' => 'required|date_format:Y-m-d|after:' . $this->request->get('date_started')
        ];
    }
}
