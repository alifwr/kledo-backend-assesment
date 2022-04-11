<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetCalculatedRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'month' => 'required|date_format:Y-m'
        ];
    }
}
