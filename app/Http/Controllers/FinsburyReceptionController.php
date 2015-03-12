<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\FinsburyReceptionRequest;
use Illuminate\Http\Request;

class FinsburyReceptionController extends FormsController {

    public function getIndex()
    {
        return view('forms.finsburyreception');
    }

    public function postIndex(FinsburyReceptionRequest $request)
    {
        $this->sendMail(env('EMAIL_RECIPIENT', 'james.kontargyris@fipra.com'), 'networkmeeting@fipra.com', 'Fipra Network Meeting RSVP System', 'Finsbury Reception', $request->except('_token'));

        return redirect('success_finsbury')->with('first_name', $request->get('first_name'));
    }

}
