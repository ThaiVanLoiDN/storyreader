<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stories;
use App\Models\Categories;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $categories = Categories::all();
    	return view('frontend.home.index', compact('categories'));
    }

    /**
     * Display the all story page.
     *
     * @return \Illuminate\Http\Response
     */
    public function all(){
        $stories = Stories::paginate(10);
    	return view('frontend.home.all', compact('stories'));
    }
}
