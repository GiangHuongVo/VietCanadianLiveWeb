<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show($category_id){
        // Fetch category by ID along with its pages
        $category = Category::with('pages')->findOrFail($category_id);
        return view('category.show', compact('category'));
    }
}
