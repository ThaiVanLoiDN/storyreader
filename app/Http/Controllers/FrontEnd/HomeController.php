<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stories;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    	return view('frontend.home.index');
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
