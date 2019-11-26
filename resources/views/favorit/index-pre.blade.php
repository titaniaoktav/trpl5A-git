
@extends('include.indexx')

@section('bc1')
Produk Usaha
@stop

@section('bc2')
@stop
@section('page')
Produk Usaha
@stop

@section('notifikasi')
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Notifikasi&nbsp<span class="badge badge-danger">{{$wira->notifikasi->count()}}</span>
  <span class="sr-only">unread messages</span>
    </a> 
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
      @foreach($wira->notifikasi as $n)  
      <a class="dropdown-item" href="{{url('/notifikasi/')}}/{{$n->id}}">
        {{$n->isi}}
        <br>
        <small>{{date('d M Y', strtotime($n->created_at))}}</small>
      </a>
      <hr>
      @endforeach
    </div>
  </li>
@stop

@section('content')


<!-- Notifikasi -->
<!-- Notifikasi -->
<!-- Notifikasi -->
<!-- Notifikasi -->
@if(session('sukses'))
<div class="modal fade" id="notif-modal" role="dialog">
<div class="modal-dialog modal-customs-notifikasi">
  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Alert</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="swal2-icon swal2-success swal2-animate-success-icon" style="display: flex;">
       <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
         <span class="swal2-success-line-tip"></span>
         <span class="swal2-success-line-long"></span>
         <div class="swal2-success-ring"></div> 
         <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
         <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
      </div>
      <p class="text-center">
        {{session('sukses')}}
      </p>
    </div>
    <div class="modal-footer">
      <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button> -->
    </div>
  </div>
  
</div>
</div>
@endif
@if(session('gagal'))
<div class="modal fade" id="notif-modal" role="dialog">
<div class="modal-dialog modal-customs-notifikasi">
  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Alert</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
  <div class="swal2-icon swal2-error swal2-animate-error-icon" style="display: flex;"><span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span></div>
      <p class="text-center">
        {{session('gagal')}}
      </p>
    </div>
    <div class="modal-footer">
      <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button> -->
    </div>
  </div>
  
</div>
</div>
@endif
<!-- End Notifikasi -->
<!-- End Notifikasi -->
<!-- End Notifikasi -->
<!-- End Notifikasi -->
<!-- End Notifikasi -->
<!-- End Notifikasi -->


<section class="section_gap big_features">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="main_title">
            
            <h2>Produk Usaha</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
          </div>
        </div>
      </div>

      @foreach($fav as $index => $u)
      <hr>  
      <div class="row features_content">
        <div class="col-lg-4 offset-lg-1">
          <div class="big_f_left">
            <img class="img-fluid" src="bukti/{{$u->usaha->gambar_usaha}}"  style="object-fit: cover;height: 250px;width: 100%;">
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
          <div class="common_style">
            <!-- <p class="line"></p> -->
            <h3>{{$u->usaha->nama_usaha}} <br>  <small>Alamat : Jalan {{$u->usaha->alamat_usaha}} </small></h3>
            <p> Deskripsi : </p>
            <p>{{ str_limit($u->usaha->deskripsiUsaha->deskripsi, $limit = 150, $end = '...') }}</p>
            <a class="primary_btn" href="{{url('/detail-usaha')}}/{{$u->id}}"><span>Detail Usaha</span></a>
          </div>
        </div>
        <div class="border-line"></div>
        <img class="shape1"src="{{asset('template/img/shape1.png')}}" alt="">   
        <img class="shape2"src="{{asset('template/img/shape2.png')}}" alt="">   
        <img class="shape3"src="{{asset('template/img/shape1.png')}}" alt="">   
      </div>
      @endforeach

     
    </div>
  </section>

@stop