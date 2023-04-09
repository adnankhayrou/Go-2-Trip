<x-app-layout>
    {{-- @livewireStyles --}}
    <div class="container w-75 items-center">
        <button class=" col mt-3 mb-2 btn btn-dark"><a href="{{ url('landing') }}" class="text-decoration-none  text-light"><i class="fa-solid fa-arrow-left fa-beat"></i> Back</a></button>
    </div>
    <div class="container pt-3 w-75 bg-white rounded mb-5 shadow">
            <div class="row">

                <div class="col-12 mb-3 bg-light rounded" >
                    <img class="rounded mx-auto" src="{{asset('/storage/'.$products->image)}}" style="width: 40em">
                </div>

                <div class="col-6 my-3">
                    <p class="fs-4 me-2">
                        <b> {{$products->title}} </b>
                     </p>
                </div>
                <div class="col-6 my-3 ">
                  <p class="text-end fs-4 me-2">
                   <b>{{$products->prix}}{{$products->prix < 100 ? '.00DH' : 'DH'}} </b>
                  </p>
                </div>

                <div class="col-12 col-md-6 col-lg-6 mb-3">
        
                    <p class="text-secondary"><i class="bi bi-house"></i>  {{$products->city->nameCity}} - <i class="bi bi-clock-history"></i> listed {{$products->created_at->diffForHumans(null, false, false)}}</p>
                    
                </div>
                <div>
                    <hr class="my-3" />
                </div>
                <div class="col-lg-6 col-md-5 col-12">
                    <p class="me-2"><b>Category</b></p>
                      {{$products->category->nameCategory}}
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3 text-end">
                    <p class="text-light btn btn-success "><i class="bi bi-phone"></i><a href="tel:{{$products->telephone}}">{{$products->telephone}}</a> </p>
                </div>

                <div>
                    <hr class="my-2">
                </div>
                <div class="col-12 mb-3">
                    <p class=" me-2"><b>Description</b></p>
                    
                    {{$products->description}}
                </div>

            </div>

            
            <div>

           
            {{-- <div class="overflow-auto mb-3 p-3 bg-light"style="max-width: 100%; max-height: 20em;">
                This is an example of using <code>.overflow-auto</code>
                on an element with set width and height dimensions. By design, this content will vertically scroll.<br>
                on an element with set width and height dimensions. By design, this content will vertically scroll.<br>
                on an element with set width and height dimensions. By design, this content will vertically scroll.<br>
            </div> --}}
            <div wire:poll.5s>
                @livewireStyles
                <div class="container">
                    <div class="">
                        @foreach ($comments as $comment)
                        @if($products->id == $comment->product_id)
            
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
                            @endif
                            
                        @endforeach
            
                    </div>
            
                    <div >
                        <hr>
                        <form class="row" wire:submit.prevent="sendText({{$products->id}})">
                            <input wire:model="commentText" type="text" class="col form-control" placeholder="your message" />
                            <button class="col-2 ms-2 btn btn-success bg-success" type="submit">send</button>
                        </form>
                    </div>
                                
                </div>
                @livewireScripts
            </div>
            
        </div>
    </div>
</div>
@include('footer')
</x-app-layout>
