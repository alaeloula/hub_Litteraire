<?php

namespace App\Http\Livewire;

use App\Models\Livres;
use Livewire\Component;

class Catalog extends Component
{
    public $search = '';
    public function render()
    {
        return view('livewire/Catalog', [

            // 'livres'=>Livres::with('category')->get()
            'livres' => Livres::where('title', $this->search)->get()
            
        ]);
    }
}
