<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\WhiteHouseDinnerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormsController extends Controller {

    private function send($to, $fromAddress, $fromName, $subject, $data, $view = 'emails.rsvp')
    {
        Mail::send($view, compact('data', 'subject'), function($message) use ($to, $fromAddress, $fromName, $subject, $data)
        {
            $message->to('james.kontargyris@fipra.com')
                    ->from($fromAddress, $fromName)
                    ->subject($subject);
        });
    }

}
