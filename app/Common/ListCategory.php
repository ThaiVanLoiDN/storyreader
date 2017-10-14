<?php

namespace App\Common;
use App\Models\Categories;

class ListCategory
{
    public static function list ()
    {
        $categories = Categories::all();
        
        return view('frontend.layouts.categories', compact('categories'));
    }
}