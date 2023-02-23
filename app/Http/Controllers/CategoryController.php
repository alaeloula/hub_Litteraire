<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('categories.index',[
            
            'cats'=>Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required',  
        ]);

        $catModel =new Category();
        $catModel->title=strip_tags($request->input('title'));
        $catModel->save();
        return redirect(route('cats.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('categories.show',['category'=>Category::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('categories.edit',['category'=>Category::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=> 'required',
            
        ]);
        $to_update=Category::findOrfail($id);
        $to_update->title = strip_tags($request->input('title'));
        $to_update->save();
        return redirect()->route('cats.show',$id);
    }
    // public function update(Request $request, Category $category)
    // {
    //     $request->validate([
    //         'title'=> 'required',
            
    //     ]);
    //     // $to_update=Category::findOrfail($id);
    //     $category->title = strip_tags($request->input('title'));
    //     $category->save();
    //     return redirect()->route('cats.show',$category);
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $to_delete=Category::findOrfail($id);
        // dd($to_delete);
        // dd($category)
         $to_delete->delete();
        return redirect()->route('cats.index')->withSuccess("deleted");
    }
}
