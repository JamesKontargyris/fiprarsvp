<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\WhiteHouseDinnerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormsController extends Controller {

    protected function sendMail($to, $fromAddress, $fromName, $event, $data, $view = 'emails.rsvp')
    {
        Mail::send($view, compact('data', 'event'), function($message) use ($to, $fromAddress, $fromName, $event, $data)
        {
            $message->to($to)
                    ->from($fromAddress, $fromName)
                    ->subject('RSVP: ' . $event);
        });
    }

}
