<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Category::all(); // what is difference between attributes and original in dd() ??
        return view("category.index",['data'=>$data]);
        // return view("category.index",compact($data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $info=[
            'name'=>$request->name,
            'description'=>$request['description']
        ];
        // dd($info); //this is used to show data and then perform exit() function and stop execution
        
        Category::create($info); // this "Category" is accessible only because of line no. 5 if we don't write that thing then it will show error
        return redirect("/category")->with("success","Data Saved Successfully!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // dd($category);
        return view("category.edit",['info'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Category $category) // we can also do this with $id like line 79
    {
        // dd($request);
        // dd($category);
        // $category=Category::find($id); //this will fetch single record 
        $category->name=$request->name;
        $category->description=$request->description;
        $category->save(); 
        // dd($category);
        return redirect("/category")->with("success","Data Updated Successfully!!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // dd($id);
        $category=Category::find($id); //this will fetch single record
        $category->delete();
        return redirect("/category")->with("success","Data Deleted Successfully!!");
        // dd($category);
    }
}
