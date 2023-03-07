<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css\app.css')}}">
        
    </head>
    <body>
        
        <div class="home">
            {{-- navbar --}}
            <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" id="nav">

                <div class="container-fluid">
                    <a href="{{ url('/') }}" class="ms-3" >
                        <img src = "{{asset('/images/go to trip.svg')}}" alt="logo" style="with:3em;  height:3em;"/>
                    </a>
                    <div>
                    @if (Route::has('login'))
                {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                    @auth
                    <button class="ms-2 btn btn-dark me-2 "><a href="{{ url('/dashboard') }}" class="text-light text-decoration-none fs-bold">Dashboard</a></button>
                    @else
                    <button class="ms-2 btn btn-dark"><a href="{{ route('login') }}" class="text-light text-decoration-none fs-bold">Log in</a></button>
                       
                            @if (Route::has('register'))
                            <button class="ms-2 btn btn-dark"><a href="{{ route('register') }}" class="text-light text-decoration-none fs-bold">Register</a></button>
                            @endif
                        {{-- </div> --}}
                       
                    @endauth
                </div>
             @endif
                 
                </div>
              </nav>
              {{-- end of navbar --}}
        </div>
           

              {{-- <div class="">
                  <div class="">
                      <img src="{{asset('images/22.svg')}}" class=" w-100 h-50 border-bold shadow ">
                  </div>
            </div> --}}
            <div class="container-fluid">
                <div class="row flex-nowrap">
                    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light shadow">
                        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                            <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                <span class="fs-5 d-none d-sm-inline mb-5"></span>
                            </a>
                            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link align-middle px-0">
                                        <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                                    <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                        <li class="w-100">
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                                </li>
                                <li>
                                    <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                        <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                                    <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                        <li class="w-100">
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                                        <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                        <li class="w-100">
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle">
                                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                                </li>
                            </ul>
                            <hr>
                            
                        </div>
                    </div>
                    <div class="col py-3">
                        Content area...
                    </div>
                </div>
            </div>

                    <!-- Sidebar -->
  {{-- <nav
  id="sidebarMenu"
  class="collapse d-lg-block sidebar collapse bg-white"
  >
<div class="position-sticky">
 <div class="list-group list-group-flush mx-3 mt-4">
   <a
      href="#"
      class="list-group-item list-group-item-action py-2 ripple"
      aria-current="true"
      >
     <i class="fas fa-tachometer-alt fa-fw me-3"></i
       ><span>Main dashboard</span>
   </a>
   <a
      href="#"
      class="list-group-item list-group-item-action py-2 ripple active"
      >
     <i class="fas fa-chart-area fa-fw me-3"></i
       ><span>Webiste traffic</span>
   </a>
   <a
      href="#"
      class="list-group-item list-group-item-action py-2 ripple"
      ><i class="fas fa-lock fa-fw me-3"></i><span>Password</span></a
     >
   <a
      href="#"
      class="list-group-item list-group-item-action py-2 ripple"
      ><i class="fas fa-chart-line fa-fw me-3"></i
     ><span>Analytics</span></a
     >
   <a
      href="#"
      class="list-group-item list-group-item-action py-2 ripple"
      >
     <i class="fas fa-chart-pie fa-fw me-3"></i><span>SEO</span>
   </a>
   <a
      href="#"
      class="list-group-item list-group-item-action py-2 ripple"
      ><i class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a
     >
   <a
      href="#"
      class="list-group-item list-group-item-action py-2 ripple"
      ><i class="fas fa-globe fa-fw me-3"></i
     ><span>International</span></a
     >
   <a
      href="#"
      class="list-group-item list-group-item-action py-2 ripple"
      ><i class="fas fa-building fa-fw me-3"></i
     ><span>Partners</span></a
     >
   <a
      href="#"
      class="list-group-item list-group-item-action py-2 ripple"
      ><i class="fas fa-calendar fa-fw me-3"></i
     ><span>Calendar</span></a
     >
   <a
      href="#"
      class="list-group-item list-group-item-action py-2 ripple"
      ><i class="fas fa-users fa-fw me-3"></i><span>Users</span></a
     >
   <a
      href="#"
      class="list-group-item list-group-item-action py-2 ripple"
      ><i class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a
     >
 </div>
</div>
</nav> --}}
<!-- Sidebar -->

    <script>
        window.addEventListener("scroll", ()=>{
            // alert("hi")
    document.querySelector("#nav").style.background = "whitesmoke"

    if (window.scrollY === 0) {
        document.querySelector("#nav").style.backgroundColor = "transparent";

    }
})
    </script>
    </body>
</html>
