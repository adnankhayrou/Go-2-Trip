<?php
namespace App\Http\Livewire;

use App\Models\Comments;
use App\Models\Products;
use Livewire\Component;
use App\Http\Requests\storeComment;
use App\Http\Requests\updateComment;



class Comment extends Component
{
    public $commentText;
    public $productId;
    public $updateComment;
    public $commentId;
    public $editingCommentId;
    public $editedComment='';

    
    public function sendText()
    {
        Comments::create(
            [
            'user_id' => auth()->user()->id,
            'nameComment' => $this->commentText,
            'product_id' => $this->productId,
        ]);
        $this->reset('commentText');
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
    }

    public function edit($id){
        $this->editingCommentId = $id;
        $this->editedComment = Comments::find($id)->nameComment;
    }

    public function update(){
        $comment = Comments::find($this->commentId);
        $comment->nameComment->$this->updateComment;
        $comment->save();
    }

    


}
