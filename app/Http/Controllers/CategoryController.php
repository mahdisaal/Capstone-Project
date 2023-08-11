<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->paginate(20);

        return view('admin.pages.categories', \compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('admin.pages.new_category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'image'=>'required',
            'desc'=>'required'
        ]);
        $image = $request->image;
        $name = $image->getClientOriginalName();
        $new_name = time().$name;
        $dir = "storage/images/categories/";
        $image->move($dir, $new_name);

        $category = new Category;
        $category->title = $request->title; 
        $category->desc = $request->desc; 
        $category->user_id = auth()->id();
        $category->image = $new_name;
        $category->save(); 
        Session::flash('message', 'Category Created Successfully');
        Session::flash('alert-class', 'alert_success'); 
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::find($id);
        return view('admin.pages.single_category', \compact("category"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('admin.pages.edit_category', \compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $image='';
        $name='';
        $new_name='';
        $dir='';
        if($request->image) {
            $image = $request->image;
            $name = $image->getClientOriginalName();
            $new_name = time().$name;
            $dir = "storage/images/categories/";
            $image->move($dir, $new_name);
        }

        $category = Category::find($id);
        if ($request->title) {
            $category->title = $request->title;

        }
        if ($request->desc) {
            $category->desc = $request->desc;
        }

        if ($request->image) {
            $category->image = $new_name;
        }

        $category->save(); 
        Session::flash('message', 'Category Updated Successfully');
        Session::flash('alert-class', 'alert_success'); 
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        
        Session::flash('message', 'Category Deleted Successfully');
        Session::flash('alert-class', 'alert-success');
        return back();
    }
}
