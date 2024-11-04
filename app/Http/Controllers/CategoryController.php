<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class CategoryController extends Controller
{
    public function create(Request $request){
        Category::create(Attributes: [
            'title' => $request->title,
            'description' => $request->description,
        ]);
    }
}
