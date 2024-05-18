<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Session;

class ExtraController extends Controller
{
    public function LangEnglish()
    {
        Session::get('lang');
        Session::forget('lang');
        Session::put('lang','english');
        return redirect()->back();
    }

    public function LangBangla()
    {
        Session::get('lang');
        Session::forget('lang');
        Session::put('lang','bangla');
        return redirect()->back();
    }
}
