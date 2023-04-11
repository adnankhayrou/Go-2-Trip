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

    <div id="comentScroll" class="overflow-auto mb-3 p-3 bg-light"style="max-width: 100%; max-height: 20em;">
        @foreach ($comments as $comment)
        @if($products == $comment->product_id)

            @if ($comment->user->name == auth()->user()->name)

                <div class="incoming_msg mb-4">
                    <pre><i class="fa-solid fa-user-large"></i> <b>{{ $comment->user->name }}</b></pre>
                    <div class="received_msg mt-1" style="overflow-wrap: break-word;">
                         <p class="my-2 ms-4 text-secondary text-wrap">{{ $comment->nameComment }}</p>
                         <span class="text-secondary ms-4" style="font-size: .7em">{{ $comment->created_at->diffForHumans(null, false, false) }}</span> <span><a href=""><b class="text-secondary" style="font-size: .8em">edit</b></a> <span><button wire:click="destroy({{$comment->id}})" onclick="return confirm('Are you sure!')" class="text-secondary " style="font-size: .8em;"><b>delete</b></button></span></span>
                    </div>

                </div>

            @else

            <div class="incoming_msg mb-4">
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
    
    <hr class="my-3">
    <div class="container ">
        <form class="row" wire:submit.prevent="sendText">
            <input wire:model="commentText" type="text" class="col form-control" placeholder="your comment" />
            <button onclick="scrollToTop()" class="col-2 ms-2 btn btn-dark bg-dark text-light" type="submit"><i class="bi bi-send"></i></button>
        </form>
    </div>           
</div>

<script>
    var element = document.querySelector('#comentScroll');

    function scrollToTop() {
        element.scrollTop = element.scrollHeight;;
    }
    
</script>