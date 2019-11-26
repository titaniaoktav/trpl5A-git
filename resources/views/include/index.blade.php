<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    <title>@yield('SERIUS')</title>
  </head>
  <body>

<nav class="navbar navbar-expand-md navbar-light navbar-dark bg-dark">
<div class="container">
<a class="navbar-brand" href="{{ url('/') }}">
Sistem Perizinan Usaha 
</a>
<ul class="navbar-nav ml-auto">

  
  @guest
  <li class="nav-item">
    <a class="nav-link" href="/produk-unggulan">Beranda</a>
  </li> 

  <li class="nav-item">
    <a class="nav-link" href="{{url('/produk-unggulan')}}">Produk Usaha</a>
  </li> 
  <li class="nav-item">
    <a class="nav-link" href="{{url('/login')}}">Login</a>
  </li>  
 <li class="nav-item">
    <a class="nav-link" href="{{url('/registrasi-wirausahawan')}}">Registrasi</a>
  </li>  
  @endguest

  
  @auth
  <li class="nav-item">
    <a class="nav-link" href="{{url('/produk-unggul')}}">Beranda</a>
  </li> 

  <li class="nav-item">
    <a class="nav-link" href="{{url('/produk-unggul')}}">Produk Usaha</a>
  </li> 
  <li class="nav-item">
    <a class="nav-link" href="{{url('/akun-humas')}}" style="display: {{Auth::user()->role=="admin" ? "block" : "none"}}">Akun Humas</a>
  </li> 
  <li class="nav-item">
    <a class="nav-link" href="{{url('/usaha-telah-terverifikasi')}}" style="display: {{Auth::user()->role=="admin" ? "block" : "none"}}">Usaha</a>
  </li> 

  <li class="nav-item">
    <a class="nav-link" href="{{url('/lihat-pemohon')}}" style="display: {{Auth::user()->role=="humas" ? "block" : "none"}}">Pemohon Usaha</a>
  </li> 
  <li class="nav-item">
    <a class="nav-link" href="{{url('/usaha')}}" style="display: {{Auth::user()->role=="wirausahawan" ? "block" : "none"}}">Usaha</a>
  </li>  

  
  @yield('notifikasi')
  
  <li class="nav-item">
    <a class="nav-link" href="{{url('/logout')}}">Logout</a>
  </li>  
  @endauth
</ul>
</div>
</nav>


<div class="container mt-2">
  @yield('konten')
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>