<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRConroller extends Controller
{
    public function index()
    {
        return view('qrcode');
    }

}
