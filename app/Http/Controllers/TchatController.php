<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TchatController extends Controller
{
    public function index() {
        $req = Http::get('http://languelite.com/api/user/obtenirDesMessageTchatSiteWebApresCurseur?messageid=2');
        $response = $req->json()['data'];

        return view('tchat')->with(['comments' => $response]);
    }
}
