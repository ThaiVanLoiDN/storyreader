<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * Display the result after search
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
    	
		$title = $request->title;

    	return view('frontend.search.search', compact('title'));
    }
}
