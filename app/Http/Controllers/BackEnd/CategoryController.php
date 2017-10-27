<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Business\CategoriesBusiness;

class CategoryController extends Controller
{

    private $_categoriesBusiness;

    public function __construct (CategoriesBusiness $categoriesBusiness)
    {
        $this->_categoriesBusiness = $categoriesBusiness;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::paginate(10);
        return view('backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = $this->_categoriesBusiness->create($request);

        if ($result) {
            return redirect()->route('categories.index')->with('success', 'Category created successfully.');
        }else{
            return redirect()->route('categories.index')->with('fail', 'Category created fail.');
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
        $category = Categories::findOrFail($id);

        return view('backend.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Categories::findOrFail($id);

        return view('backend.categories.edit', compact('category'));
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
        $result = $this->_categoriesBusiness->update($request, $id);

        if ($result) {
            return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
        }else{
            return redirect()->route('categories.index')->with('fail', 'Category updated fail.');
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
        $category = Categories::findOrFail($id);

        $this->_categoriesBusiness->deleteStories($id);
        $result = $category->delete();

        if ($result) {
            return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
        }else{
            return redirect()->route('categories.index')->with('fail', 'Category deleted fail.');
        }
    }
}
