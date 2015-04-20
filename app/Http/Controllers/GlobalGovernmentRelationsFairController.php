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
        $request->merge(['telephone' => $this->formatTelephoneNumber($request)]);

        $this->sendMail(env('EMAIL_RECIPIENT', 'james.kontargyris@fipra.com'), 'networkmeeting@fipra.com', 'Fipra Network Meeting RSVP System', 'Global Government Relations Fair', $request->except('_token', 'country_code', 'area_code', 'tel_1', 'tel_2'));

        return redirect('success_fipra')->with('first_name', $request->get('first_name'));
    }

}
