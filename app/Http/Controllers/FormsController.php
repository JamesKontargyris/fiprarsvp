<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\WhiteHouseDinnerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormsController extends Controller {

    protected $ignoredFormFields = ['_token', 'country_code', 'area_code', 'tel_1', 'tel_2'];

    protected function sendMail($to, $fromAddress, $fromName, $event, $data, $view = 'emails.rsvp')
    {
        Mail::send($view, compact('data', 'event'), function($message) use ($to, $fromAddress, $fromName, $event, $data)
        {
            $message->to($to)
                    ->from($fromAddress, $fromName)
                    ->subject('RSVP: ' . $event);
        });
    }

    protected function formatTelephoneNumber(&$request)
    {
        return '+' . $request->country_code . ' ' . $request->area_code . ' ' . $request->tel_1 . ' ' . $request->tel_2;
    }

}
