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
        $social = DB::table('socials')->first();
        return view('backend.setting.social',compact('social'));
    }

    public function SocialUpdate(Request $request,$id)
    {
        $validated = $request->validate([
            'facebook' => 'required|max:55',
            'twitter' => 'required|max:55',
            'youtube' => 'required|max:55',
            'instagram' => 'required|max:55',
            'linkedin' => 'required|max:55',
       ]);

        DB::table('socials')->where('id',$id)->update([
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,

    ]);

        toastr()->success('Data has been update successfully!', 'Congrats', ['timeOut' => 5000]);
        return redirect()->back();
    }

    public function SeoSetting()
    {
       $seo = DB::table('seos')->first();
       return view('backend.setting.seo',compact('seo'));
    }

    public function SeoUpdate(Request $request,$id)
    {
        $validated = $request->validate([
            'meta_author' => 'required|max:55',
            'meta_title' => 'required|max:55',
            'meta_keyword' => 'required|max:55',
            'meta_description' => 'required|max:55',


       ]);

        DB::table('seos')->where('id',$id)->update([
            'meta_author' => $request->meta_author,
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_description,
            'google_analytics' => $request->google_analytics,
            'google_verification' => $request->google_verification,
            'alexa_analytics' => $request->alexa_analytics,

    ]);

        toastr()->success('Data has been update successfully!', 'Congrats', ['timeOut' => 5000]);
        return redirect()->back();
    }
}
