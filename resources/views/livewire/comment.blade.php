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

                          <form id="form-{{$comment->id}}" class="d-none"  wire:submit.prevent="update({{$comment->id}})">
                              <p>                                  
                                  <input id="cmt-input-{{$comment->id}}" type="text" wire:model.defer="updateComment" class="p-1 coment-content-input rounded border" value="">
                                  <button onclick="showComment('', 0)" class="edit-btn-dark" type="submit"><b class="text-secondary" style="font-size: .8em">Save</b></button>
                              </p>
                          </form>

                          <p id="cmt-txt-{{$comment->id}}" class="my-2 ms-4 text-secondary text-wrap">{{ $comment->nameComment }}</p>

                         <span class="text-secondary ms-4" style="font-size: .7em">{{ $comment->created_at->diffForHumans(null, false, false) }}</span>
                        
                         @if ($editingCommentId !== $comment->id)
                          <span><button onclick="showComment('{{ $comment->id }}', 1)" ><b class="text-secondary" style="font-size: .8em">edit</b></button> 
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
   
    @auth
    <hr class="my-3">
    <div class="container ">
        <form class="row" wire:submit.prevent="sendText">
            <input wire:model="commentText" type="text" class="col form-control" placeholder="your comment" />
            <button onclick="scrollToTop()" class="col-2 ms-2 btn btn-dark bg-dark text-light" type="submit"><i class="bi bi-send"></i></button>
        </form>
    </div>  
    @if (session('alert'))
    <small class="ms-1 text-danger">{{session('alert')}}</small>
    @endif

    @else
    <hr class="my-3">
    <div class="container ">
        <div class="row">
            <input type="text" class="col form-control" placeholder="your comment" />
            <button href="#modal-comment" data-bs-toggle="modal" class="col-2 ms-2 btn btn-dark bg-dark text-light"><i class="bi bi-send"></i></button>
        </div>
    </div> 
    @endauth
   
</div>


<!-- alert login form -->
<div  class="modal fade mt-5" id="modal-comment">
    <div class="modal-dialog">
        <div class="modal-content text-center w-75">
            <form action="{{ route('login') }}">
            
                <div class="modal-body">
        
                    <div class="mb-2">
                        <i class="bi bi-exclamation-circle text-warning" style="font-size: 3.5em;"></i>
                    </div>
                    <div class="mb-3">
                        <p class="mb-3"><b>login first</b></p>
                        <button type="submit" class="btn btn-dark bg-dark">login</button>
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