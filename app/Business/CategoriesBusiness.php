<?php

namespace App\Business;
use App\Models\Categories;
use App\Models\Stories;

class CategoriesBusiness
{
    public function create($request) 
    {
        try {           
            $category = new Categories;

	        $category->name = $request->name;
            return $category->save();

        } catch (\Exception $e) {
            \Log::error("Manage: Create Category error" . $e->getMessage());
            return false;
        }
    }

    public function update($request, $id) 
    {
        try {           
            $category = Categories::find($id);

	        $category->name = $request->name;
            return $category->save();

        } catch (\Exception $e) {
            \Log::error("Manage: Update Category error" . $e->getMessage());
            return false;
        }
    }

    public function deleteStories($id)
    {
        try {
            return Stories::where('category_id', $id)->delete();
        } catch (Exception $e) {
            \Log::error("Manage: Delete Stories in Category" . $e->getMessage());
            return false;
        }
    }
}