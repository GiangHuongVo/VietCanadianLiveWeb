<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeExampleController extends Controller
{
    public function index()
    {
        // Retrieve categories with their latest 5 pages ordered by created_at timestamp
        $categories = Category::with(['pages' => function ($query) {
            $query->latest()->take(5); // Retrieve the latest 5 pages
        }])->get();
        
        return view('home_example', compact('categories'));
    }
}
