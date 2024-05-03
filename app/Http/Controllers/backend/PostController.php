<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class PostController extends Controller
{
    public function Index()
    {

    }

    public function Create()
    {
        $category = Category::all();
        $district = District::all();

        Return view('backend.post.create', compact('category','district'));
    }

    public function Store()
    {

    }

    //___json data return___//
    public function GetSubCat($cat_id)
    {
       $sub = DB::table('subcategories')->where('category_id',$cat_id)->get();
       return response()->json($sub);
    }

    public function GetSubDist($dist_id)
    {
        $sub = DB::table('subdistricts')->where('district_id',$dist_id)->get();
        return response()->json($sub);
    }
}
