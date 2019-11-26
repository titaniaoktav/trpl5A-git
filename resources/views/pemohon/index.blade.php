@extends('include.indexx')

@section('judul')
Registrasi Wirausaha
@stop
@section('content')

@section('bc1')
Pemohon Usaha
@stop

@section('bc2')
@stop
@section('page')
Produk Usaha
@stop



<br class="mt-1">
<hr class="mt-3">
<!-- <a href="/conver-pdf" class="btn btn-dark">Convert PDF</a> -->

<div class="container">
@if(session('sukses'))
<div class="alert alert-success" >
{{session('sukses')}}
</div>
@endif
@if(session('gagal'))
<div class="alert alert-danger" >
{{session('gagal')}}
</div>
@endif




<div class="col-md-12">

<div class="row">
@foreach($usaha as $index => $u)

<div class="card mt-3 ml-3" style="width: 22rem; padding: 10px">
  <img class="card-img-top" src="bukti/{{$u->gambar_usaha}}" style="object-fit: cover;height: 250px;width: 100%;">
  <div class="card-body">
    <a class="badge float-right text-light {{$u->status=="belum" ? "badge-danger" : "badge-primary"}}">{{$u->status}} terverifikasi</a>

    <p>Nama : <strong>{{$u->nama_usaha}}</strong></p>

    <p>Pemohon : <strong>{{$u->wirausaha->nama_lengkap}}</strong></p>

    <p>Alamat : <strong>{{$u->alamat_usaha}}</strong></p>

    <p>Investasi : <strong>{{$u->nilai_investasi}}</strong></p>


    <hr> 
    <div class="col-md-12">
      <!-- <button class="btn btn-primary btn-sm col-md-12 offset-0" type="button" data-toggle="modal" data-target="#mdal{{$u->id}}">
          
      </button> -->
      <a href="{{url('/lihat-pemohon')}}/{{$u->id}}" class="btn btn-primary btn-sm col-md-12 offset-0">
        <i class="fa fa-eye" aria-hidden="true"></i>
        Detail
      </a>
     </div>  
    <hr>
    <div class="row">
      <div class="col-md-6">
        <form method="POST" action="/verifikasi-pemohon" >
        {{ csrf_field() }}
        <input type="hidden" value="{{$u->id}}" name="idnya">
        <input type="hidden" value="{{$u->wirausaha->id}}" name="usernya">
        <input type="hidden" value="{{$u->nama_usaha}}" name="usahanya">
        <input type="hidden" value="{{$u->id}}" name="idusaha">
        <button type="submit" class="btn btn-success btn-sm float-right col-md-12">
        Verifikasi
          <i class="fa fa-check" aria-hidden="true"></i>
      </button>
      </form>
     <!--  <button class="btn btn-success btn-sm float-right col-md-12" type="button">
          <i class="fa fa-check" aria-hidden="true"></i>
            Verifikasi
      </button> -->
      </div>

<div class="modal fade bd-example-modal-lg" id="mdal{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bukti Upload Foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container">
        
        <p class="mt-3 text-center">Foto Bukti NPWP</p>
        <img src="bukti/{{$u->wirausaha->foto_npwp}}" style="object-fit: cover;height:100%;">

        <p class="mt-3 text-center">Foto Bukti KTP</p>
        <img src="bukti/{{$u->wirausaha->foto_ktp}}" style="object-fit: cover;height:100%;">
        
        <p class="mt-3 text-center">Foto Bukti bpjs_ketenagakerjaan</p>
        <img src="bukti/{{$u->wirausaha->foto_bpjs_ketenagakerjaan}}" style="object-fit: cover;height:100%;">
         <p class="mt-3 text-center">Foto Bukti bpjs Kesehatan</p>
        <img src="bukti/{{$u->wirausaha->foto_bpjs_kesehatan}}" style="object-fit: cover;height:100%;">
         <p class="mt-3 text-center">Foto Formal</p>
        <img src="bukti/{{$u->wirausaha->foto_formal}}" style="object-fit: cover;height:100%;width: 100%;">

      </div>
      <div class="modal-footer">
      <form method="POST" action="/verifikasi-pemohon" >
        {{ csrf_field() }}
        <input type="hidden" value="{{$u->id}}" name="idnya">
        <input type="hidden" value="{{$u->wirausaha->id}}" name="usernya">
        <input type="hidden" value="{{$u->nama_usaha}}" name="usahanya">
        <input type="hidden" value="{{$u->id}}" name="idusaha">
        <button type="button" class="btn btn-link" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Verifikasi</button>
      </form>
      </div>
        
    </div>
  </div>
</div>
      



      <button class="btn btn-danger btn-sm col-md-5" type="button" data-toggle="modal" data-target="#mdl{{$u->id}}">
          <i class="fa fa-close" aria-hidden="true"></i>
            Tolak
      </button>
      <!-- MODAL -->
    <div class="modal fade bd-example-modal-lg" id="mdl{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{$u->nama_usaha}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="/tolak-buat-usaha" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card-body">
        <div class="form-group row">
          <!-- <input type="hidden" value="{{$u->id}}" name="idnya"> -->
        <input type="hidden" value="{{$u->wirausaha->id}}" name="usernya">
        <input type="hidden" value="{{$u->nama_usaha}}" name="usahanya">
        <input type="hidden" value="{{$u->id}}" name="idusaha">
            <label for="email" class="col-sm-3 col-form-label text-md-right">Catatan </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="catatan" required>
            </div>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-dark">Kirim</button>
      </div>
    </div>
  </form>
  </div>
</div>



    </div>
  </div>
</div>
@endforeach
</div>
</div>
<hr>
<hr>
@stop