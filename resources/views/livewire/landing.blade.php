<div>
    <div class="row items-center me-0">
            
        <h3 class="col fw-bold ms-3 mt-5">All items</h3>  
       
        @auth
          <button class="col-4 btn btn-dark w-auto mt-5 me-2" href="" data-bs-toggle="modal"><a href="{{ url('add') }}" class="text-decoration-none text-light
            "><b>+ </b> Add an item</a></button>
            @else
            <button class="col-4 btn btn-dark w-auto mt-5 me-2" href="#modal-login" data-bs-toggle="modal"><a class="text-decoration-none text-light
              "><b>+ </b> Add an item</a></button>
              @endauth           
            </div>


            <!-- alert login form -->
            <div  class="modal fade ms-5 mt-5" id="modal-login">
              <div class="modal-dialog ">
                  <div class="modal-content text-center w-75 ">
                      <form class="" action="{{ route('login') }}">
                      
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
       
            
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner rounded ">
                    <div class="carousel-item active shadow rounded">
                        <img src="{{asset('images/cover2.jpg')}}" class="d-block w-100 rounded shadow">
                    </div>
                    <div class="carousel-item shadow rounded">
                        <img src="{{asset('images/23.svg')}}" class="d-block w-100 rounded shadow">
                    </div>
                    <div class="carousel-item shadow rounded">
                      <img src="{{asset('images/cover4.jpg')}}" class="d-block w-100 rounded shadow">
                  </div>
                    <div class="carousel-item shadow rounded">
                        <img src="{{asset('images/24.svg')}}" class="d-block w-100 rounded shadow">
                    </div>
                    <div class="carousel-item shadow rounded">
                        <img src="{{asset('images/cover1.jpg')}}" class="d-block w-100 rounded shadow">
                    </div>
                    <div class="carousel-item shadow rounded">
                        <img src="{{asset('images/22.svg')}}" class="d-block w-100 rounded shadow">
                    </div>
                    <div class="carousel-item shadow rounded">
                        <img src="{{asset('images/cover3.jpg')}}" class="d-block w-100 rounded shadow">
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
            <div class="">
              <input class="mx-auto form-control form-control-borderless shadow me-1 mb-2" wire:model="searchbar" type="search" placeholder="Search here" style="width: 48.3%">
            </div>
            </div>

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
         <div id="pageTop" class="container text-dark">
             {{$product->links()}}
         </div>
       </div>
    </div>
  </div>
</div>
    @livewireScripts
</div>


<link rel="stylesheet" href="{{asset('css\app.css')}}">
