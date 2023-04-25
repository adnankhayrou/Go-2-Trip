<x-app-layout>
   
    <div class="container w-75 items-center">
        <button class=" col mt-3 mb-2 btn btn-dark"><a href="{{ url('landing') }}" class="text-decoration-none  text-light"><i class="fa-solid fa-arrow-left fa-beat"></i> Back</a></button>
    </div>
    <div class="container pt-3 w-75 bg-white rounded mb-5 shadow">
            <div class="row">

                <div class="col-12 mb-3 bg-light rounded" >
                    <img class="rounded mx-auto" src="{{asset('/storage/'.$products->image)}}" style="width: 40em;">
                </div>

                <div class="col-12 col-md-6 col-lg-6 my-3">
                    <p class="fs-4 me-2">
                        <b> {{$products->title}} </b>
                     </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 my-gl-3 mb-3">
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
                    <p class="me-2 mb-2"><b>Category > {{$products->category->nameCategory}} > {{$products->subCategory->nameSubCategory}}</b></p>
                     
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3 text-end mx-auto">
                    <p class="col-12 col-md-8 col-lg-4 text-light btn btn-dark mb-2"><i class="bi bi-phone"></i><a href="tel:{{$products->telephone}}">{{$products->telephone}}</a> </p>
                    <p class="col-12 col-md-8 col-lg-4 text-light btn btn-success mb-2"><i class="bi bi-whatsapp"></i> <a target="_blank" href='https://wa.me/{{$products->telephone}}?text=Hello, is this item "{{$products->title}}" still available on Go2Trip market?'> <b>Contact Seller</b></a> </p>
                </div>

                <div>
                    <hr class="my-2">
                </div>
                <div class="col-12 mb-5">
                    <p class=" me-2"><b>Description</b></p>
                    
                    {{$products->description}}
                </div>

            </div>

            
        <div>
            <div class="pb-3" wire:poll.1s>  
            @livewire('comment', ['productId' => $products->id])
        </div>
    </div>
</div>
@include('footer')
</x-app-layout>
