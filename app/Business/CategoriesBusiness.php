<?php

namespace App\Business;
use App\Models\Categories;

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
}