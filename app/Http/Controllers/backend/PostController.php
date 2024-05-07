<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\District;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class PostController extends Controller
{
    public function Index()
    {
        // $post = DB::table('posts')->join('categories','posts.cat_id','categories.id')
        //                           ->join('subcategories','posts.subcat_id','subcategories.id')
        //                           ->join('districts','posts.dist_id','districts.id')
        //                           ->join('subdistricts','posts.subdist_id','subdistricts.id')
        //                           ->get();


        $post = DB::table('posts')->join('categories','posts.cat_id','categories.id')
                                  ->join('subcategories','posts.subcat_id','subcategories.id')
                                  ->select('posts.*','categories.category_bn','subcategories.subcategory_bn')
                                  ->get();

                return view('backend.post.index',compact('post'));
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
        $data['user_id']= Auth::id();
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
        $data['post_date'] = date('d-m-Y');
        $data['post_month'] = date("F");


        if($request->file('image')){
            $manager = new ImageManager(new Driver());
            $image_one = hexdec(uniqid()).'.'.$request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            $img = $img->resize(500,310);

            $img->toJpeg(80)->save(base_path('public/uploadimg/'.$image_one));
            $data['image'] = 'uploadimg/'.$image_one;

            DB::table('posts')->insert($data);

        }

            toastr()->success('Data has been saved successfully!', 'Congrats', ['timeOut' => 5000]);
            return redirect()->back();




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

    public function Destroy($id)
    {
      $post=DB::table('posts')->where('id',$id)->first();
      if (file_exists($post->image)) {
        unlink($post->image);
    }
      DB::table('posts')->where('id',$id)->delete();

        toastr()->success('Data has been deleted successfully!', 'Congrats', ['timeOut' => 5000]);
        return redirect()->back();
    }

    public function Edit($id)
    {
        $post=DB::table('posts')->where('id',$id)->first();
        $category = Category::all();
        $district = District::all();

        return view('backend.post.edit',compact('post','category','district'));
    }
}
