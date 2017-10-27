<?php

namespace App\Common;
use App\Models\Stories;

class ListStory
{
    public static function showHotStories ()
    {
        $stories = Stories::orderBy('view', 'DESC')->limit(3)->get();
        
        return view('frontend.layouts.stories', compact('stories'));
    }

    public static function showNewStories ()
    {
        $stories = Stories::orderBy('id', 'DESC')->limit(3)->get();
        
        return view('frontend.layouts.stories', compact('stories'));
    }
}