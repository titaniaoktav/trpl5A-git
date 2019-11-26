@extends('include.indexx')

@section('judul')
Registrasi Wirausaha
@stop
@section('content')

@section('bc1')
Beranda
@stop

@section('bc2')
Usaha Terverifikasi
@stop

@section('page')
Usaha Terverifikasi
@stop

<section class="section_gap big_features">
    <div class="container">
    

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

      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="main_title">
            
            <h2>Produk Usaha</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
          </div>
        </div>
      </div>

<div class="col-md-12">
<div class="row">
@foreach($usaha as $index => $u)

<div class="card mt-3 ml-3" style="width: 21rem; padding: 10px">
  <img class="card-img-top" src="bukti/{{$u->gambar_usaha}}" style="object-fit: cover;height: 250px;width: 100%;">
  <div class="card-body">
    <a href="" class="badge float-right {{$u->status=="belum" ? "badge-danger" : "badge-primary"}}">{{$u->status}} terverifikasi</a>
    <p>Nama : <strong>{{$u->nama_usaha}}</strong></p>
    <p>Alamat : <strong>{{$u->alamat_usaha}}</strong></p>
    <p>Investasi : <strong>{{$u->nilai_investasi}}</strong></p>
    <hr>
    <div class="row">
      <div class="col-md-6">
        
      </div>
      <div class="col-md-6">
      <form method="POST" action="/tambahkan-usaha-unggulan">
        {{ csrf_field() }}
        <input type="hidden" value="{{$u->id}}" name="idnya">
        <button class="btn btn-dark btn-sm float-right" type="submit">
            <i class="fa fa-star" aria-hidden="true"></i>
            Tambahkan Produk
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg" id="mdl{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>
@endforeach
  </div>
</div>
</div>

</div>

</div>


</section>
@stop