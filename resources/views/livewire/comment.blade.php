{{-- <div>
    <form class="row" wire:submit.prevent="sendText">
        <input wire:model="commentText" type="text" class="col form-control" placeholder="your comment" />
        <button class="col-2 ms-2 btn btn-dark bg-dark text-light" type="submit"><i class="bi bi-send"></i></button>
    </form>
</div> --}}


<div class="container border p-3 rounded ">

    <div class="col-12 mb-3">
        <p class=" me-2"><b>Add your comment</b></p>
    </div>

    <div id="comentScroll"  class="overflow-auto mb-3 p-3 bg-light rounded"style="max-width: 100%; max-height: 20em;">
        @foreach ($comments as $comment)
        @if($products == $comment->product_id)

            
            @if ($comment->user->name == auth()->user()?->name )

                <div class="incoming_msg mb-4" >
                        
                    <pre><i class="fa-solid fa-user-large"></i> <b>{{ $comment->user->name }}</b></pre>
                    <div class="received_msg mt-1" style="overflow-wrap: break-word;">

                         {{-- <p class="my-2 ms-4 text-secondary text-wrap">{{ $comment->nameComment }}</p> --}}
                          {{-- edit form --}}
                          @if ($editingCommentId === $comment->id)
                                    
                          <form wire:submit.prevent="update('{{ $comment->id }}')">
                              <p>
                                  <input type="text" wire:model="updateComment" class="p-1 coment-content-input rounded border">
                                  <button class="edit-btn-dark" type="submit"><b class="text-secondary" style="font-size: .8em">Save</b></button>
                              </p>
                          </form>
                      
                          @else
                          <p class="my-2 ms-4 text-secondary text-wrap">{{ $comment->nameComment }}</p>
                          @endif
                          {{-- end of form --}}
                         <span class="text-secondary ms-4" style="font-size: .7em">{{ $comment->created_at->diffForHumans(null, false, false) }}</span>
                        
                         @if ($editingCommentId !== $comment->id)
                          <span><button wire:click="edit({{$comment->id}})"><b class="text-secondary" style="font-size: .8em">edit</b></button> 
                            @endif
                            <span><button wire:click="destroy({{$comment->id}})" onclick="return confirm('Are you sure?')" class="text-secondary " style="font-size: .8em;"><b>delete</b></button></span></span>
                    </div>
                    {{-- form update --}}
                    
                    {{-- end of form --}}

                </div>

            @else

            <div class="incoming_msg mb-4" >
                <pre><i class="fa-solid fa-user-large"></i> <b>{{ $comment->user->name }}</b></pre>
                <div class="received_msg mt-1" style="overflow-wrap: break-word;">
                    <p class="my-2 ms-4 text-secondary " >{{ $comment->nameComment }}</p>
                    <span class="text-secondary ms-4" style="font-size: .7em">{{ $comment->created_at->diffForHumans(null, false, false) }}</span>
                   </div>

           </div>

            @endif
            @endif
            
        @endforeach

    </div>
    @if (!Route::has('login'))
    <hr class="my-3">
    <div class="container ">
        <form class="row" wire:submit.prevent="sendText">
            <input wire:model="commentText" type="text" class="col form-control" placeholder="your comment" />
           
            <button onclick="scrollToTop()" class="col-2 ms-2 btn btn-dark bg-dark text-light" type="submit"><i class="bi bi-send"></i></button>
          
        </form>
    </div>  
    @else
    <hr class="my-3">
    <div class="container ">
        <div class="row">
            <input type="text" class="col form-control" placeholder="your comment" />
            <button href="#modal-comment" data-bs-toggle="modal" class="col-2 ms-2 btn btn-dark bg-dark text-light"><i class="bi bi-send"></i></button>
        </div>
    </div>  
    @endif         
</div>


<!-- edit category form -->
<div  class="modal fade mt-5" id="modal-comment">
    <div class="modal-dialog">
        <div class="modal-content text-center w-75">
            <form >
            
                {{-- <div class="mb-1">
                    <h5 class="modal-title fw-bold mt-4"><b>login first</b></h5>
                </div> --}}
                <div class="modal-body">
        
                        <div class="mb-4">
                            <i class="bi bi-exclamation-circle" style="font-size: 3.5em;"></i>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-dark"><a href="{{ route('login') }}" class="text-light text-decoration-none fs-bold">login first</a></button>

                        </div>
            
                </div>
            </form>
        </div>
    </div>
</div>
{{-- end form --}}
<script src="{{ asset('js/script.js') }}"></script>
<script>
    var element = document.querySelector('#comentScroll');

    function scrollToTop() {
        element.scrollTop = element.scrollHeight;;
    }
</script>