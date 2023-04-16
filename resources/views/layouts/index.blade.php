<!doctype html>
<html>
<head>
   @include('header')
</head>
<body class="">
<div >
   <header class="">
       @include('navbar')
   </header>
   <div  class="">
           @yield('content')
   </div>
   <footer class="">
       @include('footer')
   </footer>
  
</div>

@yield('scripts')
</body>
</html>