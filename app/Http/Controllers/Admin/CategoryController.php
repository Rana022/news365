<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
         $categories = Category::with('childrenCategories')->get();
        return view('admin.category.index', compact('categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = Category::whereNull('category_id')
        ->with('childrenCategories')
        ->get();
      return view('admin.category.create', compact('categories'));
  }
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
         
        $request->validate([
            'name' => 'required|unique:categories|max:55'
        ]);
        $category = new Category;
        $category->name = str::title($request->name);
        $category->slug = str::slug($request->name);
        if($request->parentCategory){
            $category->category_id = $request->parentCategory;
        }
        $category->save();
        toastr::success('Your Tag Successfully Created :)', 'success');
        return redirect()->route('admin.category.index');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    
        $category = Category::find($id);
        $categories = Category::whereNull('category_id')
        ->with('childrenCategories')
        ->get();
      return view('admin.category.edit', compact('category','categories'));
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
        $category = Category::find($id);
        $category->name = str::title($request->name);
        $category->slug = str::slug($request->name);
        if($request->parentCategory){
            $category->category_id = $request->parentCategory;
        }
        $category->save();
        toastr::success('Your Tag Successfully updated :)', 'success');
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        toastr::success('Your Category Successfully Deleted :)', 'success');
        return redirect()->back();

    }
}
