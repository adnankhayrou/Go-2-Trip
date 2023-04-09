@extends('layouts.index')
@section('content')
<div class="container">

  <div class="text-center mt-4 mb-3">
    <h1 class="fw_bold text-dark ">Find Best Products For Your Trip</h1>
   </div>

  <div class="top_catagory_area section-padding-80 ">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Single Catagory -->
            <div class="col-12 col-sm-6 col-md-4 mb-2">
              <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img rounded shadow" style="background-image: url(/images/22.svg); height: 10rem;">
                  <div class="catagory-content ">
                      <a href="" class="text-decoration-none text-light"><h1>Shoes</h1></a>
                  </div>
              </div>
          </div>
            <!-- Single Catagory -->
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
            </div>
        </div>
    </div>
</div>

<div class="text-center mt-5">
  <h1 class="fw_bold text-dark ">Find Best Products For Your Trip</h1>
 </div>

   <div class="container row mx-auto">
   {{-- @foreach ($meals as $meal) --}}
     {{-- <div class="col-md-4 col-lg-3 p-3 col-12" href="#modal-meal" data-bs-toggle="modal" onclick="showModel()">
         <div class="card border-dark bg-dark  shadow-lg  rounded">
           <img src="{{asset('/images/22.svg')}}" class="card-img-top" with="100"  height="200">
         <div class="card-body text-center">
           <h5 class="card-title fw-bold text-light">test</h5>
           <p class="mb-2 items-center text-light" ><i class="bi bi-geo-alt-fill"></i> : test</p>
           <p class="card-text text-success">test</p>
           <hr class="my-1" />
           <p class="fw-bold text-light">Available on :</p>
           <p class="text-light"><span class="fw-bold text-light">Date :</span> 12:03:2022</p>
         </div>    
       </div>
     </div>

     <div class="col-md-4 col-lg-3 p-3 col-12" href="#modal-meal" data-bs-toggle="modal" onclick="showModel()">
        <div class="card border-dark bg-dark  shadow-lg  rounded">
          <img src="{{asset('/images/22.svg')}}" class="card-img-top" with="100"  height="200">
        <div class="card-body text-center">
          <h5 class="card-title fw-bold text-light">test</h5>
          <p class="mb-2 items-center text-light" ><i class="bi bi-geo-alt-fill"></i> : test</p>
          <p class="card-text text-success">test</p>
          <hr class="my-1" />
          <p class="fw-bold text-light">Available on :</p>
          <p class="text-light"><span class="fw-bold text-light">Date :</span> 12:03:2022</p>
        </div>    
      </div>
    </div>

    <div class="col-md-4 col-lg-3 p-3 col-12" href="#modal-meal" data-bs-toggle="modal" onclick="showModel()">
        <div class="card border-dark bg-dark  shadow-lg  rounded">
          <img src="{{asset('/images/22.svg')}}" class="card-img-top" with="100"  height="200">
        <div class="card-body text-center">
          <h5 class="card-title fw-bold text-light">test</h5>
          <p class="mb-2 items-center text-light" ><i class="bi bi-geo-alt-fill"></i> : test</p>
          <p class="card-text text-success">test</p>
          <hr class="my-1" />
          <p class="fw-bold text-light">Available on :</p>
          <p class="text-light"><span class="fw-bold text-light">Date :</span> 12:03:2022</p>
        </div>    
      </div>
    </div>

    <div class="col-md-4 col-lg-3 p-3 col-12" href="#modal-meal" data-bs-toggle="modal" onclick="showModel()">
        <div class="card border-dark bg-dark  shadow-lg  rounded">
          <img src="{{asset('/images/22.svg')}}" class="card-img-top" with="100"  height="200">
        <div class="card-body text-center">
          <h5 class="card-title fw-bold text-light">test</h5>
          <p class="mb-2 items-center text-light" ><i class="bi bi-geo-alt-fill"></i> : test</p>
          <p class="card-text text-success">test</p>
          <hr class="my-1" />
          <p class="fw-bold text-light">Available on :</p>
          <p class="text-light"><span class="fw-bold text-light">Date :</span> 12:03:2022</p>
        </div>    
      </div>
    </div> --}}

    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="cards-wrapper">
            {{-- @for($i=0;$i<3;$i++) --}}
            <div class="card bg-dark rounded">
              <img src="{{asset('/images/22.svg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-light">Card title</h5>
                <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            {{-- @endfor --}}
        </div>
        </div>
        <div class="carousel-item">
          <div class="cards-wrapper">
            {{-- @for($i=0;$i<3;$i++) --}}
            <div class="card bg-dark rounded">
              <img src="{{asset('/images/22.svg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-light">Card title</h5>
                <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            {{-- @endfor --}}
          </div>
        </div>
        <div class="carousel-item">
          <div class="cards-wrapper">
            
            {{-- <div class="col-md-4 col-lg-3 p-3 col-12" href="#modal-meal" data-bs-toggle="modal" onclick="showModel()">
              <div class="card border-dark bg-dark  shadow-lg  rounded">
                <img src="{{asset('/images/22.svg')}}" class="card-img-top" with="100"  height="200">
              <div class="card-body text-center">
                <h5 class="card-title fw-bold text-light">test</h5>
                <p class="mb-2 items-center text-light" ><i class="bi bi-geo-alt-fill"></i> : test</p>
                <p class="card-text text-success">test</p>
                <hr class="my-1" />
                <p class="fw-bold text-light">Available on :</p>
                <p class="text-light"><span class="fw-bold text-light">Date :</span> 12:03:2022</p>
              </div>    
            </div>
          </div> --}}
          {{-- @for($i=0;$i<3;$i++) --}}
            <div class="card bg-dark rounded">
              <img src="{{asset('/images/22.svg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-light">Card title</h5>
                <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card bg-dark rounded">
              <img src="{{asset('/images/22.svg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-light">Card title</h5>
                <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card bg-dark rounded">
              <img src="{{asset('/images/22.svg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-light">Card title</h5>
                <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            
            {{-- @endfor --}}

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
