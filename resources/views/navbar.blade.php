 <div class="home">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" id="nav">

            <div class="container-fluid ">
                <a href="{{ url('/') }}" class="ms-3" >
                    <img src = "{{asset('/images/go to trip.svg')}}" alt="logo" style="with:3em;  height:3em;"/>
                </a>
                <div>
                @if (Route::has('login'))
                @auth
                @if (Auth()->user()->can('edit All product'))
                <button class="ms-2 btn btn-dark me-2 "><a href="{{ url('/dashboard') }}" class="text-light text-decoration-none fs-bold">Dashboard</a></button>
                @else
                <button class="ms-2 btn btn-dark me-2 "><a href="{{ url('/dashboard') }}" class="text-light text-decoration-none fs-bold">Your items</a></button>
                @endif
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
          {{-- button start --}}
            <div id="buttonStart" class="position-absolute bottom-50 end-50 shadow">
                <div id="buttonHide">
                    <button class="btn btn-dark py-2 shadow"><a href="#main" class="text-decoration-none text-light"> <i class="fa-solid fa-angles-down fa-beat"></i> Start Now <i class="fa-solid fa-angles-down fa-beat"></i> </a></button>
                </div>
            </div>
    </div>