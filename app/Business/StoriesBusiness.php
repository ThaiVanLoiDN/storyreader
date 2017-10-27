<?php

namespace App\Business;
use App\Models\Stories;
use Auth;

class StoriesBusiness
{
	
	public function create($request)
	{
		try {

			//$image = $request->file('image')->store('public/story-image');


			$story = new Stories;
			$story->title = $request->title;
			$story->author = $request->author;
			$story->file = '';
			$story->image = '';
			$story->preview = $request->preview;
			$story->category_id = $request->category_id;
			$story->user_id = Auth::id();
			return $story->save();

			return $image;

		} catch (\Exception $e) {
			\Log::error("Manage: Create Story error" . $e->getMessage());
			return false;
		}
		# code...
	}

	public function update($request, $id) 
    {
        try {           
            $story = Stories::find($id);

	        $story->title = $request->title;
			$story->author = $request->author;
			$story->file = '';
			$story->image = '';
			$story->preview = $request->preview;
			$story->category_id = $request->category_id;

            return $story->save();

        } catch (\Exception $e) {
            \Log::error("Manage: Update Category error" . $e->getMessage());
            return false;
        }
    }
}
?>