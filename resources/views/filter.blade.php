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
                  {{-- <li>
                    @if (Route::has('login'))
                    <a href="{{ url('/add') }}" class="nav-link px-0 align-middle text-dark">
                      <i class="fs-4 bi-plus"></i> <span class="ms-1 d-none d-sm-inline">Add an item</span> </a>
                      <button class="col-4 btn btn-dark w-auto" href="" data-bs-toggle="modal"><a href="{{ url('add') }}" class="text-decoration-none text-light
                        "><b>+ </b> Add an item</a></button>
                          @endif
                  </li> --}}
                  <hr>
                    <li class="nav-item">
                        <a href="/" class="nav-link align-middle px-0 text-dark">
                            <i class="bi bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <hr>
                    <li>
                      @if (Route::has('login'))
                          {{-- <button class="ms-2 btn btn-dark me-2 "><a href="{{ url('/dashboard') }}" class="text-light text-decoration-none fs-bold">Dashboard</a></button> --}}
                        <a href="{{ url('/dashboard') }}" class="nav-link px-0 align-middle text-dark">
                            <i class="bi bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                            @endif
                    </li>
                    <hr>
                    <li>
                        <a href="{{ url('landing') }}" class="nav-link px-0 align-middle text-dark">
                            <i class="bi bi-grid-3x3-gap"></i> <span class="ms-1 d-none d-sm-inline">Items</span></a>
                    </li>
                    <hr>
                    
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle p-0 text-dark" href="" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside"><i class="bi bi-bookmarks"></i> <span class="ms-1 d-none d-sm-inline">Categories</span></a>
                        <ul class="sub-menu dropdown-menu drop-style shadow">
                            @foreach ($categorys as $cat)
                            <li class="dropend">
                                <a href="" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside">{{$cat->nameCategory}}</a>
                                <ul class="dropdown-menu shadow drop-style">
                                    @foreach ($cat->subcategory as $subcat)
                                    <li><a class="dropdown-item"
                                            href="{{route('subcat.filter', $subcat->id)}}">
                                            {{$subcat->nameSubCategory}}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </li>

                    <hr>

                                                
                    <li class=" overflow-auto bg-wihte" style="max-width: 100%; max-height: 20em;">
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-dark">
                            <i class="bi bi-houses"></i> <span class="ms-1 d-none d-sm-inline">Cities</span> </a>
                            <ul class="collapse nav flex-column ms-1 " id="submenu3" data-bs-parent="#menu">
                                @foreach ($citys as $city)
                                 <li>
                                <a href="{{route('city.filterCity', $city->id)}}" class="nav-link px-0"> <span class="d-none bg-light d-sm-inline text-dark text-decoration-none">{{$city->nameCity}}</span></a>
                                </li>
                                @endforeach
                        </ul>
                    </li>

                    <hr>
                    <li>
                        <a href="#" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-dark">
                            <i class="bi bi-info-square"></i> <span class="ms-1 d-none d-sm-inline">About us</span></a>
                    </li>
                    <hr>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle text-dark">
                            <i class="fa-regular fa-address-card"></i> <span class="ms-1 d-none d-sm-inline">Contact us</span> </a>
                    </li>
                </ul>
                <hr>
                
            </div>
        </div>
        <div class="col py-3">
          content
          <div class="text-center mt-5">
            <h2><b>Results : {{count($product)}}</b></h2>
            
          </div>
          <div class="row mx-auto mt-3">
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

        </div>










<link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>