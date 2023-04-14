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
                        <img src="{{asset('images/22.svg')}}" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/23.svg')}}" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/24.svg')}}" class="d-block w-100">
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
             <h3 class="fw_bold text-dark "><b>Find Best Products For Your Trip</b></h3>
            </div>

        

            <div class="container">
              {{-- <div class="container">
                <select wire:model="filter">
                  <option value="">All items</option>
                  @foreach($category as $category)
                  <option value="{{$category->id}}">{{$category->nameCategory}}</option>
                  @endforeach
                 </select>
            </div> --}}
            <div class="">
              <input class="mx-auto form-control form-control-borderless shadow me-1 mb-2" wire:model="searchbar" type="search" placeholder="Search here" style="width: 48.3%">
            </div>
            </div>

            {{-- <div class="col mt-2">
                <img src="{{asset('images/22.svg')}}" class="w-100 h-25 border-bold rounded">
            </div> --}}
           
              
          

        
           <div class="row mx-auto">
           @foreach ($product as $item)
             <div class="col-md-6 col-lg-4 col-xl-3 p-2 col-12">
                 <div class="card border bg-white shadow-lg rounded" >
                  <div class="rounded-top text-end" style="background-image:url({{'/storage/'.$item->image}}); background-position: center;
                    background-size: cover;
                        height:10em">
                        <button class="btn btn-light m-2">{{$item->prix}} {{$item->prix < 100 ? '.00dh' : '00'}}</button>
                  </div>
                 <div class="card-body ">

                   <h5 class="card-title fw-bold text-center text-black text-truncate" title="{{$item->title}}">{{$item->title}}</h5>
                   <hr class="my-1" />

                  <div class="row text-light items-start mt-2">
                    <div class="col text-truncate">
                     <p class="mb-2 items-center text-black text-center" title="{{$item->city->nameCity}}" ><i class="bi bi-geo-alt text-black"></i><br>{{$item->city->nameCity}}</p>
                    </div>
                    <div class="col">
                     <p class="text-dark items-center text-center text-truncate" title="{{$item->created_at->diffForHumans(null, false, false)}}"><i class="bi bi-clock-history text-black"></i><br>{{$item->created_at->diffForHumans(null, false, false)}}</p>
                   </div>
                 </div>
                 <div class="text-center">
                   <p class="card-text text-success"><i class="bi bi-phone"></i><br>{{$item->telephone}}</p>
                 </div>
                   
                   <div class="text-center mt-3">
                    <a href="{{ route('product.show', $item->id) }}" class="btn btn-dark">See Details</a>
                  </div>

                 </div>    
               </div>
             </div>
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

