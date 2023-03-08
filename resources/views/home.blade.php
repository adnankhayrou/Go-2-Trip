@extends('layouts.index')
@section('content')
<div class="container">

    <div class="text-center mt-5">
     <h1 class="fw_bold text-dark ">Find Best Products For Your Trip</h1>
    </div>

   <div class="container row mx-auto">
   {{-- @foreach ($meals as $meal) --}}
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

    
   {{-- @endforeach --}}
 </div> 
 <div class="text-end mb-5 mt-3 me-4">
    <button class="btn btn-dark"><a href="{{ url('landing') }}" class="text-decoration-none text-light">Find more <b> >></b></a></button>
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
