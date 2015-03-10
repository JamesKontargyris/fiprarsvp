<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\GlobalGovernmentRelationsFairRequest;
use Illuminate\Http\Request;

class GlobalGovernmentRelationsFairController extends FormsController {

    public function getIndex()
    {
        return view('forms.globalgovernmentrelationsfair');
    }

    public function postIndex(GlobalGovernmentRelationsFairRequest $request)
    {
        $this->sendMail(env('EMAIL_RECIPIENT', 'james.kontargyris@fipra.com'), 'networkmeeting@fipra.com', 'Fipra Network Meeting RSVP System', 'Global Government Relations Fair', $request->except('_token'));

        return redirect('success')->with('first_name', $request->get('first_name'));
    }

}
