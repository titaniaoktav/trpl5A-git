@extends('include.indexx')

@section('bc1')

@stop

@section('bc2')
@stop
@section('page')
Profil Saya
@stop

@section('content')
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

      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="main_title">
            <img class="author_img rounded-circle" src="bukti/{{$wira->foto_formal}}" style="object-fit: cover;height: 200px;width: 200px;cursor: zoom-in;" data-toggle="modal" data-target="#modal_foto_formal">
            <h2>{{$wira->nama_lengkap}}</h2>
            <p>Email : <strong>{{$wira->user->email}}</strong></p>
            <p>Nohp : <strong>{{$wira->nohp}}</strong></p>
            <p>Username : <strong>{{$wira->username}}</strong></p>
            <a class="primary_btn mt-3" data-toggle="modal" data-target="#modal_edit_foto_formal"><span>Ubah</span></a>
          </div>
        </div>
      </div>

      <hr>  
    
      <div class="row features_content">
        <div class="col-lg-4 offset-lg-1">
          <div class="big_f_left">
            <img class="img-fluid" src="bukti/{{$wira->foto_npwp}}"  style="object-fit: cover;height: 350px;width: 100%;cursor: zoom-in;" data-toggle="modal" data-target="#modal_foto_npwp">
          </div>
        </div>


        <div class="col-lg-4 offset-lg-2">
          <div class="common_style">
            <p class="line">NPWP</p>
            <h3>Nomor NPWP : <strong>{{$wira->nonpwp}}</strong> </h3>
            <p></p>
            <a class="primary_btn" data-toggle="modal" data-target="#modal_edit_foto_npwp"><span>Ubah</span></a>
          </div>
        </div>
        <div class="border-line"></div>
         <img class="shape1"src="{{asset('template/img/shape1.png')}}" alt="">   
        <img class="shape2"src="{{asset('template/img/shape2.png')}}" alt="">   
        <img class="shape3"src="{{asset('template/img/shape1.png')}}" alt="">   
      </div>

      <div class="row features_content bottom-features">
        <div class="col-lg-4 offset-1">
          <div class="common_style">
            <p class="line">KTP</p>
            <h3>Nomor KTP : <strong>{{$wira->noktp}}</strong></h3>
            <p></p>
            <a class="primary_btn" data-toggle="modal" data-target="#modal_edit_foto_ktp"><span>Ubah</span></a>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-2">
          <div class="big_f_left">
            <img class="img-fluid" src="bukti/{{$wira->foto_ktp}}"  style="object-fit: cover;height: 350px;width: 100%;cursor: zoom-in;" data-toggle="modal" data-target="#modal_foto_ktp">
          </div>
        </div>
        <div class="border-line"></div>
         <img class="shape1"src="{{asset('template/img/shape1.png')}}" alt="">   
        <img class="shape2"src="{{asset('template/img/shape2.png')}}" alt="">   
        <img class="shape3"src="{{asset('template/img/shape1.png')}}" alt="">     
      </div>

      <br>
      <br>
      <div class="row features_content">
        <div class="col-lg-4 offset-lg-1">
          <div class="big_f_left">
            <img class="img-fluid" src="bukti/{{$wira->foto_bpjs_ketenagakerjaan}}"   style="object-fit: cover;height: 350px;width: 100%;cursor: zoom-in;" data-toggle="modal" data-target="#modal_foto_bpjs_ketenagakerjaan">
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
          <div class="common_style">
            <p class="line">BPJS Ketenagakerjaan</p>
            <h3>Nomor BPJS Ketenagakerjaan : <strong>{{$wira->bpjs_ketenagakerjaan}}</strong></h3>
            <p></p>
            <a class="primary_btn" data-toggle="modal" data-target="#modal_edit_foto_bpjs_ketenagakerjaan"><span>Ubah</span></a>
          </div>
        </div>
        <div class="border-line"></div>
         <img class="shape1"src="{{asset('template/img/shape1.png')}}" alt="">   
        <img class="shape2"src="{{asset('template/img/shape2.png')}}" alt="">   
        <img class="shape3"src="{{asset('template/img/shape1.png')}}" alt="">   
      </div>

      <div class="row features_content bottom-features">
        <div class="col-lg-4 offset-1">
          <div class="common_style">
            <p class="line">BPJS Kesehatan</p>
            <h3>No. BPJS Kesehatan : <br><strong>{{$wira->bpjs_kesehatan}}</strong></h3>
            <p></p>
            <a class="primary_btn" data-toggle="modal" data-target="#modal_edit_foto_bpjs_kesehatan"><span>Ubah</span></a>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-2">
          <div class="big_f_left">
            <img class="img-fluid" src="bukti/{{$wira->foto_bpjs_kesehatan}}" style="object-fit: cover;height: 350px;width: 100%;cursor: zoom-in;" data-toggle="modal" data-target="#modal_foto_bpjs_kesehatan">
          </div>
        </div>
        <div class="border-line"></div>
         <img class="shape1"src="{{asset('template/img/shape1.png')}}" alt="">   
        <img class="shape2"src="{{asset('template/img/shape2.png')}}" alt="">   
        <img class="shape3"src="{{asset('template/img/shape1.png')}}" alt="">     
      </div>



<!-- Modal Foto Detail -->
<div class="modal fade" id="modal_foto_ktp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Foto KTP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="bukti/{{$wira->foto_ktp}}"  style="object-fit: cover;height: 100%;width: 100%;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<!--END Modal Foto Detail -->
<!-- Modal Edit Foto Detail -->
<div class="modal fade" style="top: 10%" id="modal_edit_foto_ktp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ubah Foto KTP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="bukti/{{$wira->foto_ktp}}"  style="object-fit: cover;height: 100%;width: 100%;">
        <hr>
    <form method="POST" action="/ubah-informasi-ktp" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="form-group">
          <strong><label class="mt-4">Ubah Foto</label></strong>
          <input type="file" class="form-control-file" name="foto_ktp">
        </div>

        <div class="form-group">
          <label>Nomor KTP</label>
          <input type="hidden" value="{{$wira->noktp}}" name="ktp_old">
          <input type="hidden" value="{{$wira->id}}" name="wira_id">
          <input type="text" class="form-control" value="{{$wira->noktp}}" name="noktp" maxlength="16">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm">Ubah Foto</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--END Modal Foto Detail -->



<!-- Modal Foto Detail -->
<div class="modal fade" id="modal_foto_npwp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Foto NPWP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="bukti/{{$wira->foto_npwp}}"  style="object-fit: cover;height: 100%;width: 100%;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<!--END Modal Foto Detail -->
<!-- Modal Edit Foto Detail -->
<div class="modal fade" style="top: 10%" id="modal_edit_foto_npwp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ubah Foto NPWP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="bukti/{{$wira->foto_npwp}}"  style="object-fit: cover;height: 100%;width: 100%;">
        <hr>
    <form method="POST" action="/ubah-informasi-npwp" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="form-group">
          <strong><label class="mt-4">Ubah Foto</label></strong>
          <input type="file" class="form-control-file" name="foto_npwp">
        </div>

        <div class="form-group">
          <label>Nomor NPWP</label>
          <input type="hidden" value="{{$wira->nonpwp}}" name="npwp_old">
          <input type="hidden" value="{{$wira->id}}" name="wira_id">
          <input type="text" class="form-control" value="{{$wira->nonpwp}}" name="nonpwp" maxlength="15">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm">Ubah Foto</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--END Modal Foto Detail -->




<!-- Modal Foto Detail -->
<div class="modal fade" id="modal_foto_bpjs_ketenagakerjaan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Foto BPJS Ketenagakerjaan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="bukti/{{$wira->foto_bpjs_ketenagakerjaan}}"  style="object-fit: cover;height: 100%;width: 100%;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<!--END Modal Foto Detail -->
<!-- Modal Edit Foto Detail -->
<div class="modal fade" style="top: 10%" id="modal_edit_foto_bpjs_ketenagakerjaan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ubah Foto BPJS Ketenagakerjaan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="bukti/{{$wira->foto_bpjs_ketenagakerjaan}}"  style="object-fit: cover;height: 100%;width: 100%;">
        <hr>
    <form method="POST" action="/ubah-informasi-BPJSKetenagakerjaan" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="form-group">
          <strong><label class="mt-4">Ubah Foto</label></strong>
          <input type="file" class="form-control-file" name="foto_bpjs_ketenagakerjaan">
        </div>

        <div class="form-group">
          <label>Nomor NPWP</label>
          <input type="hidden" value="{{$wira->bpjs_ketenagakerjaan}}" name="bpjs_ketenagakerjaan_old">
          <input type="hidden" value="{{$wira->id}}" name="wira_id">
          <input type="text" class="form-control" value="{{$wira->bpjs_ketenagakerjaan}}" name="bpjs_ketenagakerjaan" maxlength="11">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm">Ubah Foto</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--END Modal Foto Detail -->





<!-- Modal Foto Detail -->
<div class="modal fade" id="modal_foto_bpjs_kesehatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Foto BPJS Kesehatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="bukti/{{$wira->foto_bpjs_kesehatan}}"  style="object-fit: cover;height: 100%;width: 100%;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<!--END Modal Foto Detail -->
<!-- Modal Edit Foto Detail -->
<div class="modal fade" style="top: 10%" id="modal_edit_foto_bpjs_kesehatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ubah Foto BPJS Kesehatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="bukti/{{$wira->foto_bpjs_kesehatan}}"  style="object-fit: cover;height: 100%;width: 100%;">
        <hr>
    <form method="POST" action="/ubah-informasi-BPJSKesehatan" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="form-group">
          <strong><label class="mt-4">Ubah Foto</label></strong>
          <input type="file" class="form-control-file" name="foto_bpjs_kesehatan">
        </div>

        <div class="form-group">
          <label>Nomor BPJS Kesehatan</label>
          <input type="hidden" value="{{$wira->bpjs_kesehatan}}" name="bpjs_kesehatan_old">
          <input type="hidden" value="{{$wira->id}}" name="wira_id">
          <input type="text" class="form-control" value="{{$wira->bpjs_kesehatan}}" name="bpjs_kesehatan" maxlength="11">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm">Ubah Foto</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--END Modal Foto Detail -->





<!-- Modal Foto Detail -->
<div class="modal fade" id="modal_foto_formal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Foto Formal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="bukti/{{$wira->foto_formal}}" style="object-fit: cover;height: 100%;width: 100%;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<!--END Modal Foto Detail -->
<!-- Modal Edit Foto Detail -->
<div class="modal fade" style="top: 10%" id="modal_edit_foto_formal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ubah Foto Formal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="bukti/{{$wira->foto_formal}}" style="object-fit: cover;height: 100%;width: 100%;">
        <hr>
    <form method="POST" action="/ubah-informasi-formal" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="form-group">
          <strong><label class="mt-4">Ubah Foto</label></strong>
          <input type="file" class="form-control-file" name="foto_formal">
        </div>
        <div class="form-group">
          <label>Nama Lengkap</label>
          <input type="hidden" value="{{$wira->nama_lengkap}}" name="nama_lengkap_old">
          <input type="hidden" value="{{$wira->id}}" name="wira_id">
          <input type="text" class="form-control" value="{{$wira->nama_lengkap}}" name="nama_lengkap" required>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="hidden" value="{{$wira->user->email}}" name="email_old">
          <input type="hidden" value="{{$wira->id}}" name="wira_id">
          <input type="text" class="form-control" value="{{$wira->user->email}}" name="email" maxlength="30" required>
        </div>
        <div class="form-group">
          <label>Nohp</label>
          <input type="hidden" value="{{$wira->nohp}}" name="nohp_old">
          <input type="hidden" value="{{$wira->id}}" name="wira_id">
          <input type="text" class="form-control" value="{{$wira->nohp}}" name="nohp" maxlength="13" required>
        </div>
        <div class="form-group">
          <label>Username</label>
          <input type="hidden" value="{{$wira->username}}" name="username_old">
          <input type="hidden" value="{{$wira->id}}" name="wira_id">
          <input type="text" class="form-control" value="{{$wira->username}}" name="username" maxlength="15" required>
        </div>
        <!-- 

            <h2>{{$wira->nama_lengkap}}</h2>
            <p>Email : <strong>{{$wira->user->email}}</strong></p>
            <p>Nohp : <strong>{{$wira->nohp}}</strong></p>
            <p>Username : <strong>{{$wira->username}}</strong></p>
         -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm">Ubah Foto</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--END Modal Foto Detail -->


     


    </div>
  </section>

@stop