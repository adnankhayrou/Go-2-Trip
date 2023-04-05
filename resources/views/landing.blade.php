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
          content
          @livewire('landing')
          



@include('footer')
{{-- <script>
    window.addEventListener("scroll", ()=>{
    document.querySelector("#nav").style.background = "whitesmoke"

if (window.scrollY === 0) {
    document.querySelector("#nav").style.backgroundColor = "transparent";
  }
})
</script> --}}
