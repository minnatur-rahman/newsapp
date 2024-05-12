<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Social;
use App\Models\Website;
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

    public function NamazSetting()
    {
        $namaz = DB::table('namazs')->first();
        return view('backend.setting.namaz',compact('namaz'));
    }

    public function NamazUpdate(Request $request,$id)
    {
        DB::table('namazs')->where('id',$id)->update([
            'fojor' => $request->fojor,
            'johor' => $request->johor,
            'asor' => $request->asor,
            'magrib' => $request->magrib,
            'esha' => $request->esha,
            'jummah' => $request->jummah,


    ]);
       toastr()->success('Data has been update successfully!', 'Congrats', ['timeOut' => 5000]);
       return redirect()->back();

    }

    public function LiveTVSetting()
    {
        $tv = DB::table('livetvs')->first();
        return view('backend.setting.livetv',compact('tv'));
    }

    public function LiveTvUpdate(Request $request,$id)
    {
        DB::table('livetvs')->where('id',$id)->update([
            'embed_code' => $request->embed_code,
    ]);
    toastr()->success('Data has been update successfully!', 'Congrats', ['timeOut' => 5000]);
    return redirect()->back();
    }

    public function LiveTVActive($id)
    {
        DB::table('livetvs')->where('id',$id)->update(['status' => 1]);
        toastr()->success('Successfully Live TV on your website', 'Congrats', ['timeOut' => 5000]);
        return redirect()->back();
    }

    public function LiveTVDeActive($id)
    {
        DB::table('livetvs')->where('id',$id)->update(['status' => 0]);
        toastr()->success('Live TV off your website', 'Congrats', ['timeOut' => 5000]);
        return redirect()->back();
    }

    public function NoticeSetting()
    {
        $notice = DB::table('notices')->first();
        return view('backend.setting.notice',compact('notice'));
    }

    public function NoticeUpdate(Request $request,$id)
    {
        DB::table('notices')->where('id',$id)->update([
            'notice' => $request->notice,
    ]);
        toastr()->success('Data has been update successfully!', 'Congrats', ['timeOut' => 5000]);
        return redirect()->back();
    }

    public function NoticeActive($id)
    {
        DB::table('notices')->where('id',$id)->update(['status' => 1]);
        toastr()->success('Notice on your website', 'Congrats', ['timeOut' => 5000]);
        return redirect()->back();
    }

    public function NoticeDeActive($id)
    {
        DB::table('notices')->where('id',$id)->update(['status' => 0]);
        toastr()->success('Notice off your website', 'Congrats', ['timeOut' => 5000]);
        return redirect()->back();
    }

    public function ImportantWebsite()
    {
        $web = DB::table('websites')->get();
        return view('backend.setting.website',compact('web'));
    }

    public function WebsiteStore(Request $request)
    {
        DB::table('websites')->insert([
            'website_name' => $request->website_name,
            'website_link' => $request->website_link,
    ]);
       toastr()->success('Data has been insert successfully!', 'Congrats', ['timeOut' => 5000]);
       return redirect()->back();
    }

    public function WebsiteEdit($id)
    {
        $website = Website::find($id);
        return view('backend.setting.websiteEdit',compact('website'));
    }

    public function WebsiteUpdate(Request $request,$id)
    {
        DB::table('websites')->where('id',$id)->update([
            'website_name' => $request->website_name,
            'website_link' => $request->website_link,
    ]);
       toastr()->success('Data has been update successfully!', 'Congrats', ['timeOut' => 5000]);
       return redirect()->route('important.website');
    }

}
