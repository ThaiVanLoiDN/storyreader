<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stories;
use App\Models\Categories;
use App\Business\StoriesBusiness;

class StoryController extends Controller
{

    private $_storiesBusiness;

    public function __construct (StoriesBusiness $storiesBusiness){
        $this->_storiesBusiness = $storiesBusiness;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = Stories::paginate(10);
        return view('backend.stories.index', compact('stories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('backend.stories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = $this->_storiesBusiness->create($request);

        dd($result);

        if ($result) {
            return redirect()->route('stories.index')->with('success', 'Story created successfully.');
        }
        else{
            return redirect()->route('stories.index')->with('fail', 'Story created failed.');
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
        $story = Stories::findOrFail($id);

        return view('backend.stories.show',compact('story'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $story = Stories::findOrFail($id);
        $categories = Categories::all();

        return view('backend.stories.edit',compact('story', 'categories'));
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
        $result = $this->_storiesBusiness->update($request, $id);

        if ($result) {
            return redirect()->route('stories.index')->with('success', 'Story updated successfully.');
        }
        else{
            return redirect()->route('stories.index')->with('fail', 'Story updated failed.');
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
        $story = Stories::findOrFail($id);
        $result = $story->delete();
        if ($result) {
            return redirect()->route('stories.index')->with('success', 'Story deleted successfully.');
        }
        else{
            return redirect()->route('stories.index')->with('fail', 'Story deleted failed.');
        }
    }
}
