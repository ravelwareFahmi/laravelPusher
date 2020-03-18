<?php

namespace App\Http\Controllers;

use App\Events\formSubmited;
use Illuminate\Http\Request;

class PusherController extends Controller
{
    public function index(){
        return view('sender');
    }

    public function show(Request $request){
        $text = $request->text;

        event(new formSubmited($text));
        return view('sender');
    }
}
