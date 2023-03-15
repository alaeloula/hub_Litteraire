<?php

namespace App\Http\Controllers;

use App\Models\reaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function store($id)
    {
        $reactionModel =new reaction();
        $reactionModel->isliked=1;
        $reactionModel->livres_id=$id;
        $reactionModel->user_id=Auth::user()->id;
        $reactionModel->save();
        //  return redirect(route('/home'));
    }
}
