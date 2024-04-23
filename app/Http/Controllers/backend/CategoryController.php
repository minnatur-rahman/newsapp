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
}
