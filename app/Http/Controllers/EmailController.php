<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactMailWebRequest;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function contactWeb(ContactMailWebRequest $request)
    {
        Mail::send('emails.contactWeb', $request->all(), function ($msj) use ($request) {

            $msj->from($request->email, $request->name);

            $msj->subject('Mensaje desde fourcomex');

            $msj->to('no-respond@fourcomex.ml', 'fourcomex');

        });

        Toastr::success('EMail enviado correctamente', '', ["positionClass" => "toast-top-right", "progressBar" => "true"]);
        return back();
    }
}
