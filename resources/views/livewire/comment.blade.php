{{-- @include('header') --}}
{{-- <div wire:poll.5s>
    <div class="container">
        <div class="">
            @if($products->id == $comment->product_id)
            @foreach ($comments as $comment)

                @if ($comment->user->name == auth()->user()->name)
                    <div style="margin-left: 10em;" class="text-end">
                        <div class="border rounded bg-info-subtle ">
                            <p class="mt-2 me-2">{{ $comment->nameComment }}</p>
                        </div>
                        <div class="time_date">{{ $comment->created_at->diffForHumans(null, false, false) }}</div>
                    </div>

                @else

                    <div class="incoming_msg">
                        {{ $comment->user->name }}
                        <div class="received_msg">
                            <div class="border rounded bg-primary-subtle w-75">
                                <p class="mt-2 ms-2">{{ $comment->nameComment }}</p>
                            </div>
                            <div class="time_date">{{ $comment->created_at->diffForHumans(null, false, false) }}</div>

                        </div>
                    </div>

                @endif
            @endforeach
            @endif

        </div>
        
        <div >
            <hr>
            <form class="row" wire:submit.prevent="sendText(1)">
                <input wire:model="commentText" type="text" class="col form-control" placeholder="your message" />
                <button class="col-2 ms-2 btn btn-success" type="submit">send</button>
            </form>
        </div>
                    
    </div>
</div>
@livewireScripts --}}





