<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\WhiteHouseDinnerRequest;
use Illuminate\Http\Request;

class FormsController extends Controller {

    public function whitehousedinner()
    {
        return view('forms.whitehousedinner');
	}

    public function whitehousedinnerprocess(WhiteHouseDinnerRequest $request)
    {
//        send the notification email
        return view('success');
    }

}
