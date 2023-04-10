<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comments;

class Show extends Component
{
    public $commentText;
    
    
    public function sendText($id)
    {
    
        Comments::create([
            'user_id' => auth()->user()->id,
            'nameComment' => $this->commentText,
            'product_id' => $id,
        ]);

        $this->reset('commentText');

        return view('livewire.comment');
    }

    // public function mount($productId){
    //     $this->productId = $productId;
    // }

    // public function sendText($id)
    // {
    //     dd("test") ;
    //     Comments::create([
    //         'user_id' => auth()->user()->id,
    //         'nameComment' => $this->commentText,
    //         'product_id' => $id,
    //     ]);
    //     $this->reset('commentText');
    // }

   
}
