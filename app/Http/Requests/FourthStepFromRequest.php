<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FourthStepFromRequest extends FormRequest
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
            'present_in_uae' => 'required',
            'visa_status'=> 'required',
            'driving_license' => 'required',
            'own_car' => 'required',
            'work_experience' => 'required',
            'real_estate_experience' => 'required',
            'dubai_real_estate_experience' => 'required',
            'rera_card' => 'required'
        ];
    }
}
