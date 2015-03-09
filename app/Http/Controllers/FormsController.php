<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\WhiteHouseDinnerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormsController extends Controller {

    public function whitehousedinner()
    {
        return view('forms.whitehousedinner');
	}

    public function whitehousedinnerprocess(WhiteHouseDinnerRequest $request)
    {
        $data = [];
        $data['form-data'] = $request->except('_token');
        $data['subject'] = 'White House Dinner RSVP';

        Mail::send('emails.rsvp', compact('data'), function($message) use ($data)
        {
            $message->to('james.kontargyris@fipra.com')
                    ->from('networkmeeting@fipra.com', 'Fipra RSVP System')
                    ->subject($data['subject']);
        });

        return view('success');
    }

}
