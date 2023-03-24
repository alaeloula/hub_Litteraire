<?php

namespace App\Http\Livewire;

use App\Models\Livres;
use Livewire\Component;

class SearchLivres extends Component
{
    public $search = '';
 
    public function render()
    {
        // return view('livewire.search-users', [
        //     'users' => User::where('username', $this->search)->get(),
        // ]);
        return view('users/test', [

            // 'livres'=>Livres::with('category')->get()
            'livres' => Livres::where('title', $this->search)->get()
            
        ]);
    }
}
?>