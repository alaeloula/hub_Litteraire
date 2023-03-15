<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Livres;
use App\Models\groupe;
use App\Models\membre;
use App\Models\reaction;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users/index', [

            // 'livres'=>Livres::with('category')->get()
            'livres' => Livres::with(['category','reactions'])->get()->filter(function ($entry) {
                return $entry->isenabled === 1;
            }), 
            
        ]);

        
    }
    public function groupe()
    {
        return view('users/groupes', [

            // 'livres'=>Livres::with('category')->get()
            'groupes' => groupe::with(['createur', 'membres'])->get(),
            

        ]);
    }
    public function show(string $id)
    {
        return view('users.show', ['livre' => Livres::with('category')->findOrFail($id)]);
    }
}
