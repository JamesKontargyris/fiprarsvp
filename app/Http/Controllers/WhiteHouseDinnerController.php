<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\WhiteHouseDinnerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class WhiteHouseDinnerController extends FormsController {

    public function getIndex()
    {
        return view('forms.whitehousedinner');
    }

    public function postIndex(WhiteHouseDinnerRequest $request)
    {
        $request->merge(['telephone' => $this->formatTelephoneNumber($request)]);

        $this->sendMail(env('EMAIL_RECIPIENT', 'james.kontargyris@fipra.com'), 'networkmeeting@fipra.com', 'Fipra Network Meeting RSVP System', 'White House Dinner', $request->except('_token', 'country_code', 'area_code', 'tel_1', 'tel_2'));

        return redirect('success_fipra')->with('first_name', $request->get('first_name'));
    }

}
