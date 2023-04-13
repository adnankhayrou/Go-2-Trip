<div class="">
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-light shadow fixed-top">

        <div class="container-fluid">
            <a href="{{ url('/') }}" class="ms-3" >
                <img src = "{{asset('/images/go to trip.svg')}}" alt="logo" style="with:3em;  height:3em;"/>
            </a>
            <div>
            @if (Route::has('login'))
        {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
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
        {{-- <div class="position-absolute bottom-50 end-50">
            <button class="btn btn-dark">start now</button>
        </div> --}}

</div>