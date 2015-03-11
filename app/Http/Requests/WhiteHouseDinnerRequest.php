<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class WhiteHouseDinnerRequest extends Request
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
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email',
            'telephone'  => 'required',
            'invited_by' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Please enter your first name.',
            'last_name.required'  => 'Please enter your last name.',
            'email.required'      => 'Please enter your email address.',
            'email.email'         => 'Please enter a valid email address.',
            'telephone.required'  => 'Please enter your mobile/cell number.',
            'invited_by.required' => 'Please enter the name of the Fipra Network member who invited you.'
        ];
    }

}
