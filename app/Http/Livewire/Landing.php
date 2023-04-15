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
    // public $filter = '';

    protected $paginationTheme = 'bootstrap';
 
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        return view('livewire.landing',[
            'product' => Products::where('title', 'like', '%'.$this->searchbar.'%')->latest()->paginate(12),
            'category' => Categorys::all(),
        ]);
    }

    // public function filter()
    // {
    //     return view('livewire.landing',[
    //         'product' => Products::where('subCategory_id', 'like', '%'.$this->filter.'%')->paginate(8),
    //     ]);
    // }

}
