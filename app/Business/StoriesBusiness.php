<?php

namespace App\Business;
use App\Models\Stories;
use Auth;

class StoriesBusiness
{
	
	public function create($request)
	{
		try {

			if ($request->image !== null) {
				$image_tmp = $request->file('image')->store('public/stories');
				$arImage = explode('/', $image_tmp);
				$image = end($arImage);
			}else{
				$image = env('NO_IMAGE');
			}

			if ($request->file !== null) {
				$file_tmp = $request->file('file')->store('public/stories-pdf');
				$arFile = explode('/', $file_tmp);
				$file = end($arFile);
			}else{
				$file = env('NO_FILE');
			}

			$story = new Stories;
			$story->title = $request->title;
			$story->author = $request->author;
			$story->file = $file;
			$story->image = $image;
			$story->preview = $request->preview;
			$story->category_id = $request->category_id;
			$story->user_id = Auth::id();
			return $story->save();

		} catch (\Exception $e) {
			\Log::error("Manage: Create Story error: " . $e->getMessage());
			return false;
		}
	}

	public function update($request, $id) 
    {
        try {    

            $story = Stories::find($id);

        	if ($request->image !== null) {
				$image_tmp = $request->file('image')->store('public/stories');
				$arImage = explode('/', $image_tmp);
				$image = end($arImage);

				$story->image = $image;
			}

			if ($request->file !== null) {
				$file_tmp = $request->file('file')->store('public/stories-pdf');
				$arFile = explode('/', $file_tmp);
				$file = end($arFile);
				
				$story->file = $file;
			}      

	        $story->title = $request->title;
			$story->author = $request->author;
			$story->preview = $request->preview;
			$story->category_id = $request->category_id;

            return $story->save();

        } catch (\Exception $e) {
            \Log::error("Manage: Update Story error: " . $e->getMessage());
            return false;
        }
    }
}
?>