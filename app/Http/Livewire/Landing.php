<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Products;
use App\Models\Categorys;

class Landing extends Component
{
   
    use WithPagination;

    public $searchbar = '';

    protected $paginationTheme = 'bootstrap';
 
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        return view('livewire.landing',[
            'product' => Products::where('title', 'like', '%'.$this->searchbar.'%')->paginate(12),
        ]);
    }

}
