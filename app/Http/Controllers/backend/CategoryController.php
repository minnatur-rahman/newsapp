<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function Index()
    {
        $category = DB::table('categories')->get();
        return view('backend.category.index', compact('category'));
    }

    public function Store(Request $request)
    {
        $validated = $request->validate([
            'category_en' => 'required|unique:categories|max:255',
            'category_bn' => 'required|unique:categories|max:255',
        ]);


        $data = array();
        $data['category_en']=$request->category_en;
        $data['category_bn']=$request->category_bn;
        DB::table('categories')->insert($data);

        return redirect()->back();
    }
}
