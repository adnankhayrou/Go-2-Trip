<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Comments;

class AllComments extends Component
{
    public $productId;
    public $updateComment; 
    
    use WithPagination;

    public $search = '';
 
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        return view('livewire.all-comments',[
            'Comments' => Comments::where('nameComment', 'like', '%'.$this->search.'%')->latest()->paginate(5),
            'comments' => Comments::all(),
        ]);
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

    public function destroy($id){
        $comment = Comments::find($id);
        $comment->delete();
    }
}
