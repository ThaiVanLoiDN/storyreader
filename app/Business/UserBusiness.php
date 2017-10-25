<?php

namespace App\Business;
use App\User;

class UserBusiness
{
    public function create($request) 
    {
        try {           
            $user = new User;

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->image = $request->image;
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
            if($request->image != null){
                $user->image = $request->image;
            }
            $user->role = $request->role;
            return $user->save();

        } catch (\Exception $e) {
            \Log::error("Manage: Update User error" . $e->getMessage());
            return false;
        }
    }
}