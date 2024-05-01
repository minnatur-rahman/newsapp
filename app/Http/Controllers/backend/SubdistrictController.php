<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubdistrictController extends Controller
{
    public function Index()
    {
        $sub = DB::table('subdistricts')->join('districts','subdistricts.district_id','districts.id')->select('districts.district_bn','subdistricts.*')->get();

        $district = DB::table('districts')->get();
        return view('backend.subdistrict.index',compact('district', 'sub'));
    }
}
