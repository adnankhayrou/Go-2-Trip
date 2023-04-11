<?php

// namespace App\Http\Livewire;

// use App\Models\Comments;
// use App\Models\Products;
// use Livewire\Component;



// class Comment extends Component
// {
//     public $commentText;
//     public $productId;
    
//     public function render($id)
//     {
//         $products = Products::find($id);
//         $comments = Comments::all();

//         return view('livewire.comment', ['products' => $products, 'comments' => $comments]);
//     }

//     public function sendText($id)
//     {
//         dd("test") ;
//         Comments::create([
//             'user_id' => auth()->user()->id,
//             'nameComment' => $this->commentText,
//             'product_id' => $id,
//         ]);
//         $this->reset('commentText');
//     }

// }


namespace App\Http\Livewire;

use App\Models\Comments;
use App\Models\Products;
use Livewire\Component;



class Comment extends Component
{
    public $commentText;
    public $productId;
    // public $productId;
    public function sendText()
    {
        // dd("test") ;
        Comments::create([
            'user_id' => auth()->user()->id,
            'nameComment' => $this->commentText,
            'product_id' => $this->productId,
        ]);
        $this->reset('commentText');
        // $this->emit('commentAdded');
    }
    public function render()
    {
        
        return view('livewire.comment',['products' => $this->productId,
        'comments' => Comments::all()
    ]);
    }

    public function destroy($id){
        $comment = Comments::find($id);
        $comment->delete();
        $this->dispatchBrowserEvent('commentDeleted');

    }

    


}
