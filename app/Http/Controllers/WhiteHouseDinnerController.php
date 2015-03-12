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
        $this->sendMail(env('EMAIL_RECIPIENT', 'james.kontargyris@fipra.com'), 'networkmeeting@fipra.com', 'Fipra Network Meeting RSVP System', 'White House Dinner', $request->except('_token'));

        return redirect('success_fipra')->with('first_name', $request->get('first_name'));
    }

}
