<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\WhiteHouseDinnerRequest;
use Illuminate\Http\Request;

class WhiteHouseDinnerController extends FormsController {

    public function getIndex()
    {
        return view('forms.whitehousedinner');
    }

    public function postIndex(WhiteHouseDinnerRequest $request)
    {
        $this->sendMail(env('EMAIL_RECIPIENT', 'james.kontargyris@fipra.com'), 'networkmeeting@fipra.com', 'White House Dinner RSVP', 'White House Dinner RSVP', $request->except('_token'));

        return view('success');
    }

}
