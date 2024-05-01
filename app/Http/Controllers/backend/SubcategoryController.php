<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubcategoryController extends Controller
{
    public function Index()
    {
       $sub = DB::table('subcategories')->join('categories','subcategories.category_id','categories.id')->select('categories.category_bn','subcategories.*')->get();

       $category = DB::table('categories')->get();
        return view('backend.subcategory.index', compact('sub', 'category'));
    }


    public function Store(Request $request)
    {
        $validated = $request->validate([
            'subcategory_bn' => 'required|unique:subcategories|max:55',
            'subcategory_en' => 'required|unique:subcategories|max:55',
            'category_id' => 'required',
        ]);

        DB::table('subcategories')->insert([
            'subcategory_bn' => $request->subcategory_bn,
            'subcategory_en' => $request->subcategory_en,
            'category_id' => $request->category_id,
        ]);

       toastr()->success('Data has been saved successfully!', 'Congrats', ['timeOut' => 5000]);
       return redirect()->back();
    }

    public function Destroy($id)
    {
        Subcategory::destroy($id);

        toastr()->success('Data has been deleted successfully!', 'Congrats', ['timeOut' => 5000]);
        return redirect()->back();
    }

    public function Edit($id)
    {
         $sub = Subcategory::find($id);
         $category = DB::table('categories')->get();
         return view('backend.subcategory.edit',compact('sub', 'category'));
    }

    public function Update(Request $request,$id)
    {
        $validated = $request->validate([
            'subcategory_bn' => 'required|max:55',
            'subcategory_en' => 'required|max:55',
            'category_id' => 'required',
        ]);

        $data = array();
        $data['subcategory_bn']=$request->subcategory_bn;
        $data['subcategory_en']=$request->subcategory_en;
        $data['category_id'] = $request->category_id;

        DB::table('subcategories')->where('id',$id)->update($data);

       toastr()->success('Data has been updated successfully!', 'Congrats', ['timeOut' => 5000]);
       return redirect()->route('subcategories');



    }



}
