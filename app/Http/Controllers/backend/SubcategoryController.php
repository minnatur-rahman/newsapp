<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubcategoryController extends Controller
{
    public function Index()
    {
       $sub = DB::table('subcategories')->get();
       $category = DB::table('categories')->get();
        return view('backend.subcategory.index', compact('sub', 'category'));
    }
}
