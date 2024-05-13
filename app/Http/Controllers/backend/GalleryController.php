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

     public function PhotoEdit($id)
     {
        $photo=DB::table('photos')->where('id',$id)->first();
        return view('backend.gallery.editphoto',compact('photo'));
     }

     public function PhotoUpdate(Request $request,$id)
     {
        $data = array();
        $data['title']=$request->title;
        $data['type']=$request->type;


        $oldPhoto = $request->oldPhoto;


        if($request->file('photo')){
            $manager = new ImageManager(new Driver());
            $image_one = hexdec(uniqid()).'.'.$request->file('photo')->getClientOriginalExtension();
            $img = $manager->read($request->file('photo'));
            $img = $img->resize(500,310);

            $img->toJpeg(80)->save(base_path('public/photo_gallery/'.$image_one));
            $data['photo'] = 'photo_gallery/'.$image_one;

            DB::table('photos')->where('id',$id)->update($data);
            unlink($oldPhoto);

            toastr()->success('Photo update successfully!', 'Congrats', ['timeOut' => 5000]);
            return redirect()->route('photos.gallery');
        }
        //__jodi image na thaka noutn vaba__//
        $data['photo']=$oldPhoto;
        DB::table('photos')->where('id',$id)->update($data);

        toastr()->success('Photos update successfully!', 'Congrats', ['timeOut' => 5000]);
        return redirect()->route('photos.gallery');
     }

     public function PhotoDestroy($id)
     {
        $pic=DB::table('photos')->where('id',$id)->first();
        if (file_exists($pic->photo)) {
          unlink($pic->photo);
      }
        DB::table('photos')->where('id',$id)->delete();

          toastr()->success('Data has been deleted successfully!', 'Congrats', ['timeOut' => 5000]);
          return redirect()->back();
     }

     public function VideoGallery()
     {
        $videos = DB::table('videos')->get();
        return view('backend.gallery.video',compact('videos'));
     }

     public function VideoStore(Request $request)
     {
        $data = array();
        $data['title']=$request->title;
        $data['embed_code']=$request->embed_code;
        $data['type']=$request->type;

        DB::table('videos')->insert($data);

        toastr()->success('Video has been insert successfully!', 'Congrats', ['timeOut' => 5000]);
        return redirect()->back();

     }



}
