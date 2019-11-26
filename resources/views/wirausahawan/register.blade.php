@extends('include.index-reg')


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


<div class="container">
    
<form method="POST" action="/buat-akun-wirausaha" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card mt-4">
        <div class="card-body">
    <h3 class="text-center mt-3">Pendaftaran Wirausahawan</h3>
      <div class="modal-body mt-5">
        <div class="row">
            <div class="col-md-6">
                
         <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-left">Nama lengkap</label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="nama_lengkap" required maxlength="30">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-left">Email</label>
            <div class="col-md-7">
                <input id="email" type="email" class="form-control" name="email" required maxlength="30">
            </div>
        </div>
         <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-left">Username </label>
            <div class="col-md-7">
                <input id="email" type="text" class="form-control" name="username" required maxlength="8">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-left">No. HP </label>
            <div class="col-md-7">
                <input id="email" type="text" class="form-control" name="nohp" required maxlength="13">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-left">No. KTP </label>
            <div class="col-md-7">
                <input id="email" type="text" class="form-control" name="noktp" required maxlength="16">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-left">Foto KTP </label>
            <div class="col-md-7">
                <input type="file" class="form-control" name="foto_ktp" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-left">Foto NPWP </label>
            <div class="col-md-7">
                <input type="file" class="form-control" name="foto_npwp" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-left">Foto Formal </label>
            <div class="col-md-7">
                <input type="file" class="form-control" name="foto_formal" required>
            </div>
        </div>

            </div>
            <div class="col-md-6">
                
            
        <div class="form-group row">
            <label for="email" class="col-sm-5 col-form-label text-md-left">No. NPWP </label>
            <div class="col-md-7">
                <input id="email" type="text" class="form-control" name="nonpwp" required maxlength="15">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-5 col-form-label text-md-left">BPJS ketenagakerjaan </label>
            <div class="col-md-7">
                <input id="email" type="text" class="form-control" name="bpjs_ketenagakerjaan" required maxlength="11">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-5 col-form-label text-md-left">BPJS kesehatan </label>
            <div class="col-md-7">
                <input type="text" class="form-control" name="bpjs_kesehatan" required maxlength="11">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-md-5 col-form-label text-md-left">Password</label>

            <div class="col-md-7">
                <input id="password" type="password" class="form-control" name="password1" required maxlength="10">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-md-5 col-form-label text-md-left">Ulangi Password</label>

            <div class="col-md-7">
                <input id="password" type="password" class="form-control" name="password2" required maxlength="10">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-5 col-form-label text-md-left">Foto BPJS KetenagaKerjaan </label>
            <div class="col-md-7">
                <input id="email" type="file" class="form-control" name="foto_bpjs_ketenagakerjaan" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-5 col-form-label text-md-left">Foto BPJS Kesehatan</label>
            <div class="col-md-7">
                <input type="file" class="form-control" name="foto_bpjs_kesehatan" required>
            </div>
        </div>
      </div>
    </div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="genric-btn danger-border" data-dismiss="modal">Batal</button>
        <button type="submit" class="genric-btn info-border">Daftar</button>
      </div>
  </form>

</div>
    </div>
</div>
@stop