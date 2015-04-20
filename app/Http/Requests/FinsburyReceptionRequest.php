<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class FinsburyReceptionRequest extends Request
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
            'first_name'    => 'required',
            'last_name'     => 'required',
            'company_name'  => 'required',
            'email'         => 'required|email',
            'country_code' => 'required',
            'area_code'    => 'required|numeric',
            'tel_1'        => 'required|numeric',
            'tel_2'        => 'required|numeric',
            'fipra_contact' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required'    => 'Please enter your first name.',
            'last_name.required'     => 'Please enter your last name.',
            'company_name.required'  => 'Please enter the name of your company.',
            'email.required'         => 'Please enter your email address.',
            'email.email'            => 'Please enter a valid email address.',
            'country_code.required' => 'Please enter your telephone country code.',
            'area_code.required'    => 'Please enter your telephone area code.',
            'area_code.numeric'     => 'Please enter only numbers in your telephone number area code.',
            'tel_1.required'        => 'Please enter the first part of your full telephone number.',
            'tel_2.required'        => 'Please enter the second part of your full telephone number.',
            'tel_1.numeric'         => 'Please enter only numbers in the first part of your telephone number.',
            'tel_2.numeric'         => 'Please enter only numbers in the second part of your telephone number.',
            'fipra_contact.required' => 'Please enter the name(s) of your current Fipra Network contact(s).'
        ];
    }

}
