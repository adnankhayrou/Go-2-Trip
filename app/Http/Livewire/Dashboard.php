<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Products;

class Dashboard extends Component
{
    use WithPagination;

    public $search = '';
 
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        return view('livewire.dashboard',[
            'product' => Products::where('title', 'like', '%'.$this->search.'%')->paginate(5),
        ]);
    }


}
