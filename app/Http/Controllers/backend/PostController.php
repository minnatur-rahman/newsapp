<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\District;
use Illuminate\Http\Request;
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
}
