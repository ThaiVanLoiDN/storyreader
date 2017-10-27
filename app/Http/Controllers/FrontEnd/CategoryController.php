<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Stories;

class CategoryController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug, $id)
    {
        $category = Categories::findOrFail($id);
        $listStories = Stories::where('category_id', $id)->orderBy('id', 'DESC')->paginate(10);
    	return view('frontend.categories.show', compact('listStories','category'));
    }
}