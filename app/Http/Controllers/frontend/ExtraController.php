<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use session;

class ExtraController extends Controller
{
    public function LangEnglish()
    {
        session::get('lang');
        session()->forget('lang');
        sesssion()->put('lang','english');
    }

    public function LangBangla()
    {

    }
}
