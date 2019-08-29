<?php

namespace App\Http\Controllers;
use Safaricom\Mpesa\Mpesa;

use Illuminate\Http\Request;

class MpesaTestController extends Controller
{
    //
    public function getview(){
        return view('shop.checkout');
    }
    public function postView(){
        $mpesa = new Mpesa();

    }
}
