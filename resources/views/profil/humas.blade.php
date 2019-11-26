@extends('include.indexx')



@section('bc1')
<section class="section_gap big_features text-dark">
<div class="container">
<div class="card mt-0 border">
<div class="card-body">
   
      <div class="modal-body">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
              <div class="main_title">
                <img class="author_img rounded-circle" src="{{$humas->getAvatar()}}" style="object-fit: cover;height: 200px;width: 200px;cursor: zoom-in;" data-toggle="modal" data-target="#modal_foto_formal">
                <h2 class="text-dark mt-4">{{$humas->nama_lengkap}}</h2>
                <h4 class="text-dark mt-3">{{$humas->nip}}</h4>
                <h4 class="text-dark mt-3">{{$humas->user->email}}</h4>            
                <button type="button" class="btn btn-dark mt-4" data-toggle="modal" data-target="#modal_edit_informasi_saya">
                  Ubah Informasi
                </button>

              </div>
	        </div>
		</div>
	</div>
</div>
</div>
</div>
</section>





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
      <h4 class="modal-title">Peringatan . . .</h4>
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

<div class="modal fade" id="modal_edit_informasi_saya" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" style="top: 60px">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Informasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="author_img rounded-circle offset-4" src="{{$humas->getAvatar()}}" style="object-fit: cover;height: 250px;width: 250px;">
        <hr>
        <form method="POST" action="/ubah-informasi-humas" enctype="multipart/form-data">
      {{ csrf_field() }}
        
        <div class="form-group row">
            <label class="col-form-label text-md-left offset-2 col-sm-3">Foto</label>
            <div class="col-md-5">
                <input type="file" class="form-control-file" name="foto">
            </div>
        </div>
        <input type="hidden" value="{{$humas->id}}" name="idHumas">
        <input type="hidden" value="{{$humas->user_id}}" name="idUser">
        <div class="form-group row">
            <label class="col-form-label text-md-left offset-2 col-sm-3">Nama lengkap</label>
            <div class="col-md-5">
                <input type="text" class="form-control" name="nama_lengkap" required  value="{{$humas->nama_lengkap}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label text-md-left offset-2 col-sm-3">N I P</label>
            <div class="col-md-5">
                <input type="text" class="form-control" name="nip" required maxlength="15" value="{{$humas->nip}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label text-md-left offset-2 col-sm-3">Email</label>
            <div class="col-md-5">
                <input type="text" class="form-control" name="email" required value="{{$humas->user->email}}">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary btn-sm">Simpan Perubahan</button>
      </div>
    </div>
  </form>
  </div>
</div>
@stop
