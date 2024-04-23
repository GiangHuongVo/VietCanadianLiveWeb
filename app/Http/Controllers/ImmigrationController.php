<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class ImmigrationController extends Controller
{
    public function index(){        
        $pages = Page::where('category_id', 1)->get(); 
        return view('immigration', ['pages' => $pages]);
    }
}
