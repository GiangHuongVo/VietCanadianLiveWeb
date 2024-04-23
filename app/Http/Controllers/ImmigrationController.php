<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class ImmigrationController extends Controller
{
    public function index(){        
        $pages = Page::where('category_id', 1)->get(); 
        // Iterate through each page to read its content from the file
        foreach ($pages as $page) {
            // Check if the file exists before attempting to read its contents
            if (file_exists($page->content)) {
                // Read the content from the file
                $content = file_get_contents(public_path($page->content));

                // Assign the content to the page object
                $page->content = $content;
            } else {
                // Handle the case where the file doesn't exist
                // For example, you can set a default message or log an error
                break;
            }
        }
        // Pass the pages array to the view
        return view('immigration', ['pages' => $pages]);
    }
}
