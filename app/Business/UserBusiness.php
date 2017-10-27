<?php

namespace App\Business;
use App\User;
use App\Models\Stories;

class UserBusiness
{
    public function create($request) 
    {
        try {           

            if ($request->image !== null) {
                $image_tmp = $request->file('image')->store('public/avatars');
                $arImage = explode('/', $image_tmp);
                $image = end($arImage);
            }else{
                $image = env('NO_AVATAR');
            }

            $user = new User;

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->image = $image;
            $user->role = $request->role;
            return $user->save();

        } catch (\Exception $e) {
            \Log::error("Manage: Create User error" . $e->getMessage());
            return false;
        }
    }

    public function update($request, $id) 
    {
        try {           
            $user = User::find($id);

	        $user->name = $request->name;
            $user->email = $request->email;
            
            // Want to keep the old values
            if($request->password != ''){
                $user->password = bcrypt($request->password);
            }
            
            if ($request->image !== null) {
                $image_tmp = $request->file('image')->store('public/avatars');
                $arImage = explode('/', $image_tmp);
                $image = end($arImage);

                $user->image = $image;
            }

            $user->role = $request->role;
            return $user->save();

        } catch (\Exception $e) {
            \Log::error("Manage: Update User error" . $e->getMessage());
            return false;
        }
    }

    public function deleteStories($id)
    {
        try {
            return Stories::where('category_id', $id)->delete();
        } catch (Exception $e) {
            \Log::error("Manage: Delete Stories in User" . $e->getMessage());
            return false;
        }
    }
}