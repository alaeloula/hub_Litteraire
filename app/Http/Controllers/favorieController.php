<?php

namespace App\Http\Controllers;

use App\Models\favorie;
use App\Models\Livres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class favorieController extends Controller
{
    public function index()
    {
        return view('users.favorie',[  
            'livres'=>favorie::with('Livres')->where('user_id',Auth::user()->id)->get(),
        ]);
    }
    public function addFavorie($id)
    {
        $favorieModel =new favorie();
        $favorieModel->user_id=Auth::user()->id;
        $favorieModel->livres_id=$id;
        $favorieModel->save();
    }
}
