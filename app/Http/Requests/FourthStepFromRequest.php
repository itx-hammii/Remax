<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use http\Message;
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
            'work_experience' => 'required',
            'real_estate_experience' => 'required',
            'dubai_real_estate_experience' => 'required',
            'expiry_date' => 'date|before_or_equal:'.Carbon::today()->addDays(60),
        ];
    }

    public function messages()
    {
        return [
            'expiry_date.before_or_equal' => 'Visit Visa Expiry date must be within or equal to 60 days.',
        ];
    }
}
