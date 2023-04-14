<?php
namespace App\Http\Livewire;

use App\Models\Comments;
use Livewire\Component;



class Comment extends Component
{
    public $commentText;
    public $productId;
    public $updateComment;
    public $commentId;
    public $editingCommentId;
    
    public function sendText()
    {
        if($this->commentText == null){
          return  session()->flash('alert', 'Comment text is requered!');
        }
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


    public function update($id){

        if($this->updateComment == null){
            $comment = Comments::find($id);
            $comment->delete();
            return;
          }

        $comment = Comments::find($id);
        $comment->update(
            [
            'user_id' => auth()->user()->id,
            'nameComment' => $this->updateComment,
            'product_id' => $this->productId,
        ]);
    }

    


}
