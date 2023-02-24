<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Livres;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('livres.index',[
            
            // 'livres'=>Livres::with('category')->get()
            'livres'=>Livres::with('category')->get()->filter(function ($entry) {
                return $entry->isenabled === 1;
            }),'productCategories'=>Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('livres.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required',  
        ]);

        $livreModel =new Livres();
        $livreModel->title=strip_tags($request->input('title'));
        $livreModel->save();
        return redirect(route('livres.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('livres.show',['livre'=>Livres::findOrFail($id)]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('livres.edit',['livre'=>livres::findOrFail($id)]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=> 'required',
            
        ]);
        $to_update=Livres::findOrfail($id);
        $to_update->title = strip_tags($request->input('title'));
        $to_update->save();
        return redirect()->route('livres.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $to_delete=Livres::findOrfail($id);
        // dd($to_delete->isenabled);
         $to_delete->update(['isenabled' => 0]);;
        return redirect()->route('livres.index')->withSuccess("deleted");
    }
}
