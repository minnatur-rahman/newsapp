<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class GalleryController extends Controller
{
    public function PhotoGallery()
    {
        $photo = DB::table('photos')->get();
        return view('backend.gallery.photo',compact('photo'));
    }

    public function PhotoStore(Request $request)
    {

        $data = array();
        $data['title']=$request->title;
        $data['type']=$request->type;


        if($request->file('photo')){
            $manager = new ImageManager(new Driver());
            $image_one = hexdec(uniqid()).'.'.$request->file('photo')->getClientOriginalExtension();
            $img = $manager->read($request->file('photo'));
            $img = $img->resize(500,310);

            $img->toJpeg(80)->save(base_path('public/photo_gallery/'.$image_one));
            $data['photo'] = 'photo_gallery/'.$image_one;

            DB::table('photos')->insert($data);

            toastr()->success('Data has been insert successfully!', 'Congrats', ['timeOut' => 5000]);
            return redirect()->back();

        }else{
            return redirect()->back();
        }
    }
}
