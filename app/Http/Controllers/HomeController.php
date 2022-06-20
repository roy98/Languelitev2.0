<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class HomeController extends Controller
{

    public function index() {
        return view('home');
    }

    public function contact(ContactRequest $request) {
        Mail::to('christoroybiaga@gmail.com')
            ->send(new Contact($request->except('_token')));

        return view('home')->with(['message_sent' => true]);
    }
}
