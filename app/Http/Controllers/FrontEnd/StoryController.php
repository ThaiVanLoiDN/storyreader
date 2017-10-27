<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stories;

class StoryController extends Controller
{
	/**
     * Display preview the story
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function preview($slug, $id)
    {
        $story = Stories::findOrFail($id);

        return view('frontend.stories.preview',compact('story'));
    }

    /**
     * Display show the story
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug, $id)
    {
        $story = Stories::findOrFail($id);

        $otherStories = Stories::where('category_id', '!=', $story->category_id)->orderBy('id', 'DESC')->limit(5)->get();

        return view('frontend.stories.show',compact('story', 'otherStories'));
    }

}
