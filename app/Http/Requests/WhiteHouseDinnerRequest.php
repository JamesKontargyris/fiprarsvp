<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class WhiteHouseDinnerRequest extends Request {

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
			'name' => 'required',
            'email' => 'required|email',
            'telno' => 'required',
            'host' => 'required'
		];
	}

    public function messages()
    {
        return [
            'name.required' => 'Please enter your name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'telno.required' => 'Please enter your mobile/cell number.',
            'host.required' => 'Please enter the name of your Fipra host.'
        ];
    }

}
