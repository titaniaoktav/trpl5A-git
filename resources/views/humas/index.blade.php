@extends('include.indexx')

@section('judul')
Registrasi Wirausaha
@stop
@section('content')

@section('bc1')
Beranda
@stop

@section('bc2')
Akun Humas
@stop

@section('page')
Akun Humas
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
            
            <h2>Akun Humas PTSP</h2>
            <p>Akun Humas PTSP yang masih aktif bekerja pada Pusat Pelayanan Terpadu Satu Pintu Kabupaten Jember</p>
          </div>
        </div>
      </div>  
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            	<div class="card-body">
<!-- Button trigger modal -->
<button type="button" class="btn btn-dark btn-sm float-right mb-2" data-toggle="modal" data-target="#modals">
  <i class="fa fa-plus"></i>
  Tambah Data
</button>

<!-- Modal -->
<div class="modal fade" id="modals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="top: 100px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buat Akun Humas PTSP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <form method="POST" action="/buat-akun-humas" >
    {{ csrf_field() }}
      <div class="modal-body">
         <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-right">Nama</label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="nama_lengkap" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-right">NIP</label>
            <div class="col-md-7">
                <input id="email" type="text" class="form-control" name="nip" required maxlength="15">
            </div>
        </div>
         <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-right">Email</label>
            <div class="col-md-7">
                <input id="email" type="email" class="form-control" name="email" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-md-3 col-form-label text-md-right">Password</label>

            <div class="col-md-7">
                <input id="password" type="password" class="form-control" name="password" required>
            </div>
        </div>
      </div>
      <div class="modal-footer">
       <!--  <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">
          <i class="fa fa-close"></i>
          Close
        </button> -->
        <button type="submit" class="btn btn-dark btn-sm">
          <i class="fa fa-save"></i>
          Simpan
        </button>
      </div>
  </form>
    </div>
  </div>
</div>
	<table class="table table-stripped table-hover align-center text-center">
	<thead>
	<th>No</th>
	<th>ID</th>
	<th>Nama</th>
	<th>NIP</th>
	<th>Email</th>
	<th>Pilih Aksi</th>
	</thead>
	<tbody>
	@foreach($humas as $index => $h) 
	<tr>
		<td>{{$index+1}}</td>
		<td>{{$h->user->id}}</td>
		<td>{{$h->nama_lengkap}}</td>
		<td>{{$h->nip}}</td>
		<td>{{$h->user->email}}</td>
		<td>
      <div class="row">
        <div class="col-md-3 offset-2">
			<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#mm{{$h->id}}">
        <i class="fa fa-pencil"></i>
			  Ubah
			</button>
      </div>
      <div class="col-md-3 ml-2">
      <form method="POST" action="/delete-akun-humas" >
      {{ csrf_field() }}
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#dd{{$h->id}}">
          <i class="fa fa-trash"></i>
          Hapus
        </button>
          <input type="hidden" value="{{$h->id}}" name="idhumasTo">
          <input type="hidden" value="{{$h->user_id}}" name="iduserTo">
          
      </form>
    </div>
      </div>
		</td>


<!-- MODAL -->
<div class="modal fade" id="dd{{$h->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="top: 100px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Akun Humas PTSP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form method="POST" action="/delete-akun-humas" >
      {{ csrf_field() }}
        <input type="hidden" value="{{$h->id}}" name="idhumasTo">
        <input type="hidden" value="{{$h->user_id}}" name="iduserTo">
         <p class="mt-3" style="font-size: 15px">Apakah anda yakin akan menghapus akun Humas PTSP?</p>
        
      </div>
      <div class="modal-footer">
       <!--  <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">
          <i class="fa fa-close"></i>
          Tutup
        </button> -->
        <button type="submit" class="btn btn-dark btn-sm">
          <i class="fa fa-check"></i>
            Hapus 
        </button>
      </div>
    </div>
  </form>
</div></div>
    <!--  -->


<!-- MODAL -->
<div class="modal fade" id="mm{{$h->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="top: 100px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Akun Humas PTSP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  	<form method="POST" action="/update-akun-humas" >
	    {{ csrf_field() }}
      	
         <div class="form-group row mt-2">
            <label class="col-sm-3 col-form-label text-md-right">Nama</label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="nama_lengkap" value="{{$h->nama_lengkap}}" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-right">NIP</label>
            <div class="col-md-7">
                <input id="email" type="text" class="form-control" name="nip" required value="{{$h->nip}}" maxlength="15">
            </div>
        </div>
         <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-right">Email</label>
            <div class="col-md-7">
                <input id="email" type="email" class="form-control" name="email" required value="{{$h->user->email}}">
            </div>
            <input type="hidden" name="idhumas" value="{{$h->id}}">
            <input type="hidden" name="iduser" value="{{$h->user_id}}">
        </div>
        
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">
          <i class="fa fa-close"></i>
          Tutup
        </button> -->
        <button type="submit" class="btn btn-dark btn-sm">
          <i class="fa fa-save"></i>
          Ubah Data
        </button>
      </div>
    </div>
</form>
  </div>
</div>
	</tr>
	@endforeach
</tbody>
</table>


            	</div>
            </div>
        </div>
    </div>
</div>

@stop