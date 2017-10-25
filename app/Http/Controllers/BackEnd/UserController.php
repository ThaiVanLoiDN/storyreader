<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Business\UserBusiness;

class UserController extends Controller
{
    private $_userBusiness;
    
    public function __construct (UserBusiness $userBusiness)
    {
        $this->_userBusiness = $userBusiness;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('backend.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = $this->_userBusiness->create($request);
        
        if ($result) {
            return redirect()->route('users.index')->with('success', 'User created successfully.');
        }else{
            return redirect()->route('users.index')->with('fail', 'User created fail.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('backend.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('backend.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result = $this->_userBusiness->update($request, $id);
        
        if ($result) {
            return redirect()->route('users.index')->with('success', 'User updated successfully.');
        }else{
            return redirect()->route('users.index')->with('fail', 'User updated fail.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $result = $user->delete();

        if ($result) {
            return redirect()->route('users.index')->with('success', 'User deleted successfully.');
        }else{
            return redirect()->route('users.index')->with('fail', 'User deleted fail.');
        }
    }
}
