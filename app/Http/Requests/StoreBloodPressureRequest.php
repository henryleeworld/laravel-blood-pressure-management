<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreBloodPressureRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('blood_pressure_create');
    }

    public function rules()
    {
        return [
            'user_id' => [
                'required',
                'string',
                'exists:users,id',
            ],
            'measured_in' => [
                'required',
                'date_format:Y-m-d',
            ],
            'measured_at' => [
                'required',
                'date_format:H:i',
            ],
            'diastolic_pressure' => [
                'required',
                'integer',
            ],
            'systolic_pressure' => [
                'required',
                'integer',
            ],
            'pulse_pressure' => [
                'required',
                'integer',
            ],
            'remark' => [
                'nullable',
                'string',
                'max:100',
            ],
        ];
    }
}
