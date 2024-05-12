<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function PhotoGallery()
    {
        $photo = DB::table('photos')->get();
        return view('backend.gallery.photo',compact('photo'));
    }
}
