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

    public function Store(Request $request)
    {
        $validated = $request->validate([
            'title_bn' => 'required|unique:posts|max:100',
            'title_en' => 'required|unique:posts|max:100',
            'cat_id' => 'required',
            'dist_id' => 'required',
            'tags_bn' => 'required',
            'tags_en' => 'required',
            'details_bn' => 'required',
            'details_en' => 'required',
        ]);

        $data = array();
        $data['cat_id']=$request->cat_id;
        $data['subcat_id']=$request->subcat_id;
        $data['dist_id'] = $request->dist_id;
        $data['subdist_id'] = $request->subdist_id;
        $data['user_id']=$request->user_id;
        $data['title_bn']=$request->title_bn;
        $data['title_en'] = $request->title_en;
        $data['details_bn'] = $request->details_bn;
        $data['details_en']=$request->details_en;
        $data['tags_bn'] = $request->tags_bn;
        $data['tags_en']=$request->tags_en;
        $data['headline'] = $request->headline;
        $data['first_section'] = $request->first_section;
        $data['first_section_thumbnail'] = $request->first_section_thumbnail;
        $data['bigthumbnail'] = $request->bigthumbnail;
        $data['post_date'] = $request->post_date;
        $data['post_month'] = $request->post_month;

        $data['image'] = "hgd";

        return response()->json($data);

    //     toastr()->success('Data has been saved successfully!', 'Congrats', ['timeOut' => 5000]);
    //    return redirect()->back();
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
