<?php

namespace App\Http\Livewire;

use App\Models\Comments;
use App\Models\Products;
use Livewire\Component;



class Comment extends Component
{
    public $commentText;
    
    public function render($id)
    {
        $products = Products::find($id);
        $comments = Comments::all();

        return view('/show', ['products' => $products, 'comments' => $comments]);
    }

    public function sendText($id)
    {
        // dd("test") ;
        Comments::create([
            'user_id' => auth()->user()->id,
            'nameComment' => $this->commentText,
            'product_id' => $id,
        ]);
        $this->reset('commentText');
    }

}