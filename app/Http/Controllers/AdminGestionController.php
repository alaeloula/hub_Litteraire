<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminGestionController extends Controller
{
    public function user()
    {
        return view('gestionAdmin.user',[
            
            'users'=>User::all(),
        ]);
    }
}
