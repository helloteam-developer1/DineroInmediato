<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Mail\landing\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactEmailController extends Controller
{
    public function send(Request $request )
    {

        // try {

            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactEmail($request->all()));

            return response()->json(['response' => 'true'], 200);

        // } catch (\Throwable $th) {

            // return response()->json(['response' => 'false'], 401);
        // }
    }
}
