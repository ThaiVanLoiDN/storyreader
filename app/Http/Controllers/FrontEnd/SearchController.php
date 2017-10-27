<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stories;

class SearchController extends Controller
{
    /**
     * Display the result after search
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
    	
		$title = $request->title;
        $stories = Stories::where('title', 'like', '%' . $title . '%')->orderBy('id', 'DESC')->limit(10)->get();

    	return view('frontend.search.search', compact('title', 'stories'));
    }
}
