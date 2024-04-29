<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function Index()
    {
       $category = DB::table('categories')->get();

        return view('backend.category.index', compact('category'));
    }


   public function Store (Request $request)
    {

        $validated = $request->validate([
            'category_bn' => 'required|unique:categories|max:55',
            'category_en' => 'required|unique:categories|max:55',
        ]);

        DB::table('categories')->insert([
            'category_bn' => $request->category_bn,
            'category_en' => $request->category_en,
        ]);

        toastr()->success('Data has been saved successfully!', 'Congrats', ['timeOut' => 5000]);
       return redirect()->back();
 }

   public function Destroy($id)
   {


     // DB::table('categories')->where('id',$id)->delete();

        //  $category = Category::find($id);
        //  $category->delete();

        Category::destroy($id);

        toastr()->success('Data has been deleted successfully!', 'Congrats', ['timeOut' => 5000]);
        return redirect()->back();
   }

   public function Edit($id)
   {
        $category = Category::find($id);
        return view('backend.category.edit',compact('category'));
   }



}
