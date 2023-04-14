@extends('layouts.index')
@section('content')
<div class="container">

  <div class="text-center mt-4 mb-3">
    <h1 class="fw_bold text-dark "><b>Find Best Products For Your Trip</b></h1>
   </div>

  <div class="top_catagory_area section-padding-80 ">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Single Catagory -->
            @foreach($category as $category)
            <div class="col-12 col-sm-6 col-md-4 mb-4">
              <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img rounded shadow" style="background-image: url(/images/22.svg); height: 10rem;">
                  <div class="catagory-content ">
                      <a href="{{route('category.filterCategory', $category->id)}}" class="text-decoration-none text-light"><h1>{{$category->nameCategory}}</h1></a>
                  </div>
              </div>
          </div>
          @endforeach
            {{-- <!-- Single Catagory -->
            <div class="col-12 col-sm-6 col-md-4 mb-2">
                <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img rounded shadow" style="background-image: url(/images/23.svg); height: 10rem;">
                    <div class="catagory-content">
                        <a href="" class="text-decoration-none text-light"><h1>Shoes</h1></a>
                    </div>
                </div>
            </div>
            <!-- Single Catagory -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img rounded shadow" style="background-image: url(/images/24.svg); height: 10rem;">
                    <div class="catagory-content">
                        <a href="" class="text-decoration-none text-light"><h1>Shoes</h1></a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>

<div class="text-center mt-5">
  <h1 class="fw_bold text-dark "><b>Latest Items Listed</b></h1>
 </div>

   <div class="container row mx-auto">
  
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="cards">
            <div class="row mx-auto">
              @foreach ($product1 as $item)
                <div class="col-md-6 col-lg-4 col-xl-3 p-2 col-12">
                    <div class="card border bg-white shadow-lg rounded" >
                     <div class="rounded-top text-end" style="background-image:url({{"storage/".$item->image}}); background-position: center;
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
        </div>
        </div>
        <div class="carousel-item">
          <div class="cards">
            <div class="row mx-auto">
              @foreach ($product2 as $item)
                <div class="col-md-6 col-lg-4 col-xl-3 p-2 col-12">
                    <div class="card border bg-white shadow-lg rounded" >
                     <div class="rounded-top text-end" style="background-image:url({{"storage/".$item->image}}); background-position: center;
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
          </div>
        </div>
        <div class="carousel-item">
          <div class="cards">
            <div class="row mx-auto">
              @foreach ($product3 as $item)
                <div class="col-md-6 col-lg-4 col-xl-3 p-2 col-12">
                    <div class="card border bg-white shadow-lg rounded" >
                     <div class="rounded-top text-end" style="background-image:url({{"storage/".$item->image}}); background-position: center;
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

          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    
   {{-- @endforeach --}}
 </div> 
 <div class="text-end mb-5 mt-3 me-4">
    <button class="btn btn-dark"><a href="{{ url('landing') }}" class="text-decoration-none text-light">Find more <i class="fa-solid fa-arrow-right fa-beat"></i></a></button>
 </div>
</div>
@stop


@section('scripts')
<script>
    window.addEventListener("scroll", ()=>{
    document.querySelector("#nav").style.background = "whitesmoke"

if (window.scrollY === 0) {
    document.querySelector("#nav").style.backgroundColor = "transparent";
  }
})
</script>
@stop
