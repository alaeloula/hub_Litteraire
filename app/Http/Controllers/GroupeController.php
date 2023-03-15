<?php

namespace App\Http\Controllers;

use App\Models\groupe;
use App\Models\membre;
use App\Models\commment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupeController extends Controller
{
    public function index()
    {
        return view('users/groupes',[
            
            // 'livres'=>Livres::with('category')->get()
            'groupes'=>groupe::with(['createur'])->get(),
            
        ]);
    }
    public function addGroupe(Request $request)
    {
       
        $request->validate([
            'title'=> 'required',  
        ]);

        $groupeModel =new groupe();
        $groupeModel->title=strip_tags($request->input('title'));
        $groupeModel->id_user=Auth::user()->id;
        $groupeModel->save();
        return redirect(route('groupes'));
    }
    public function joinGroupe(int $id)
    {
        $membreModel =new membre();
        $membreModel->groupe_id=$id;
        $membreModel->user_id=Auth::user()->id;
        $membreModel->save();
         return redirect(route('groupes'));
        
    }


    public function show($id)
    {
        return view('users/groupe',[
            
            // 'livres'=>Livres::with('category')->get()
            // 'commments'=>commment::select("*")->where("groupe_id","=",$id)->get(),
            'groupe'=>groupe::with(['membres','comments'])->findOrFail($id),
            
        ]);
    }
}
