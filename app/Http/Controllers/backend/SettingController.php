<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function SocialSetting()
    {
        $social = DB::table('socials')
        return view('backend.setting.social');
    }
}
