@include('header')
@include('nav')
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light shadow">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 ">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline mb-5"></span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start mt-5" id="menu">
                    <li class="nav-item mt-4">
                        <a href="{{ url('/') }}" class="nav-link align-middle px-0 text-dark">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <hr>
                    <li>
                      @if (Route::has('login'))
                          {{-- <button class="ms-2 btn btn-dark me-2 "><a href="{{ url('/dashboard') }}" class="text-light text-decoration-none fs-bold">Dashboard</a></button> --}}
                        <a href="{{ url('/dashboard') }}" class="nav-link px-0 align-middle text-dark">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                            @endif
                    </li>
                    <hr>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle text-dark">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                    </li>
                    <hr>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-dark">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                    </li>
                    <hr>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-dark">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">categorys</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-dark">Product</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-dark">Product</span> 2</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-dark">Product</span> 3</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-dark">Product</span> 4</a>
                            </li>
                        </ul>
                    </li>
                    <hr>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle text-dark">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                    </li>
                </ul>
                <hr>
                
            </div>
        </div>
        <div class="col py-3">
            Content area...
           
            <div>
                <form class="container card mt-5">
                        <div class=" row">
                            <input class="col form-control form-control form-control-borderless" type="search" placeholder="Search here">
                            <button class="col-auto btn btn-dark m-1" type="submit">Search</button>
                        </div>
                </form>

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

                {{-- <div class="col mt-2">
                    <img src="{{asset('images/22.svg')}}" class="w-100 h-25 border-bold rounded">
                </div> --}}

                <div class="text-center mt-3">
                 <h1 class="fw_bold text-dark ">Find Best Products For Your Trip</h1>
                </div>
            
               <div class="row mx-auto">
               {{-- @foreach ($meals as $meal) --}}
                 <div class="col-md-4 col-lg-3 p-2 col-12" href="#modal-meal" data-bs-toggle="modal" onclick="showModel()">
                     <div class="card border-dark bg-dark  shadow-lg  rounded">
                       <img src="{{asset('/images/22.svg')}}" class="card-img-top" with="100"  height="100">
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
            
                 <div class="col-md-4 col-lg-3 p-2 col-12" href="#modal-meal" data-bs-toggle="modal" onclick="showModel()">
                    <div class="card border-dark bg-dark  shadow-lg  rounded">
                      <img src="{{asset('/images/22.svg')}}" class="card-img-top" with="100"  height="100">
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
            
                <div class="col-md-4 col-lg-3 p-2 col-12" href="#modal-meal" data-bs-toggle="modal" onclick="showModel()">
                    <div class="card border-dark bg-dark  shadow-lg  rounded">
                      <img src="{{asset('/images/22.svg')}}" class="card-img-top" with="100"  height="100">
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
            
                <div class="col-md-4 col-lg-3 p-2 col-12" href="#modal-meal" data-bs-toggle="modal" onclick="showModel()">
                    <div class="card border-dark bg-dark  shadow-lg  rounded">
                      <img src="{{asset('/images/22.svg')}}" class="card-img-top" with="100"  height="100">
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

                <div class="col-md-4 col-lg-3 p-2 col-12" href="#modal-meal" data-bs-toggle="modal" onclick="showModel()">
                    <div class="card border-dark bg-dark  shadow-lg  rounded">
                      <img src="{{asset('/images/22.svg')}}" class="card-img-top" with="100"  height="100">
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
           
                <div class="col-md-4 col-lg-3 p-2 col-12" href="#modal-meal" data-bs-toggle="modal" onclick="showModel()">
                   <div class="card border-dark bg-dark  shadow-lg  rounded">
                     <img src="{{asset('/images/22.svg')}}" class="card-img-top" with="100"  height="100">
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
           
               <div class="col-md-4 col-lg-3 p-2 col-12" href="#modal-meal" data-bs-toggle="modal" onclick="showModel()">
                   <div class="card border-dark bg-dark  shadow-lg  rounded">
                     <img src="{{asset('/images/22.svg')}}" class="card-img-top" with="100"  height="100">
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
           
               <div class="col-md-4 col-lg-3 p-2 col-12" href="#modal-meal" data-bs-toggle="modal" onclick="showModel()">
                   <div class="card border-dark bg-dark  shadow-lg  rounded">
                     <img src="{{asset('/images/22.svg')}}" class="card-img-top" with="100"  height="100">
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
             {{-- <div class="text-end mb-5 mt-3 me-4">
                <button class="btn btn-dark"><a href="{{ url('landing') }}" class="text-decoration-none text-light">Find more <b> >></b></a></button>
             </div> --}}
            </div>
        </div>
    </div>
</div>



@include('footer')
{{-- <script>
    window.addEventListener("scroll", ()=>{
    document.querySelector("#nav").style.background = "whitesmoke"

if (window.scrollY === 0) {
    document.querySelector("#nav").style.backgroundColor = "transparent";
  }
})
</script> --}}
