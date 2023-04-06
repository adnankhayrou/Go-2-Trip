<div>
    <div class="row items-center me-0">
            
        <h3 class="col fw-bold ms-3 mt-5">All items</h3>  
       
        @if (Route::has('login'))
          <button class="col-4 btn btn-dark w-auto mt-5 me-2" href="" data-bs-toggle="modal"><a href="{{ url('add') }}" class="text-decoration-none text-light
            "><b>+ </b> Add an item</a></button>
              @endif            
            </div>
       
            
            <div id="carouselExampleAutoplaying" class="carousel slide rounded" data-bs-ride="carousel">
                <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                        <img src="{{asset('images/22.svg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/23.svg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/24.svg')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            
            <div class="text-center mt-3">
             <h1 class="fw_bold text-dark ">Find Best Products For Your Trip</h1>
            </div>

        

            <div class="container items-center">
                <input class="mx-auto form-control form-control-borderless shadow me-1 mb-2" wire:model="searchbar" type="search" placeholder="Search here" style="width: 48.3%">
            </div>

            {{-- <div class="col mt-2">
                <img src="{{asset('images/22.svg')}}" class="w-100 h-25 border-bold rounded">
            </div> --}}

        
           <div class="row mx-auto">
           @foreach ($product as $item)
           {{-- @for($i=0;$i<8;$i++) --}}
             <div class="col-md-6 col-lg-3 p-2 col-12" href="#modal-meal" data-bs-toggle="modal" onclick="showModel()">
                 <div class="card border-dark bg-dark  shadow-lg  rounded">
                   <img src="{{asset('/storage/'.$item->image)}}" class="card-img-top" with="100"  height="100">
                 <div class="card-body text-center">
                   <h5 class="card-title fw-bold text-light">{{$item->title}}</h5>
                   <p class="mb-2 items-center text-light" ><i class="bi bi-geo-alt-fill"></i> : {{$item->city->nameCity}}</p>
                   <p class="card-text text-success"><i class="bi bi-phone"></i> : {{$item->telephone}}</p>
                   <hr class="my-1" />
                   <p class="fw-bold text-light">Available on : </p>
                   <p class="text-light"><span class="fw-bold text-light">Listed : </span>{{$item->created_at->diffForHumans(null, false, false)}}</p>
                 </div>    
               </div>
             </div>
             {{-- <div class="col-md-4 col-lg-3 p-2 col-12 card bg-dark rounded">
              <img src="{{asset('/images/22.svg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-light">Card title</h5>
                <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div> --}}
            {{-- @endfor --}}
           @endforeach
         </div> 
         <div class="container text-dark">
             {{$product->links()}}
         </div>
       </div>
    </div>
  </div>
</div>
    @livewireScripts
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</div>

