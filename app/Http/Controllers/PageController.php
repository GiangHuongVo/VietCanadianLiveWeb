<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index() {
        // To get all products from DB
        $pages=Page::all();
        // return view index blade inside products folder
        //return view('products.index');
        // Pass all product to view
        return view('newspage', ['pages'=>$pages]);
        //'products' go to view
    }
}
