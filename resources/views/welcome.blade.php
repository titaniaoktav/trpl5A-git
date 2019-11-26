@extends('include.index')

@section('SERIUS (SISTEM INFORMASI PERIZINAN USAHA)')

@stop
@section('konten')

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


<div class="container">
    

<br class="mt-1">
<hr class="mt-3">

<div class="col-md-12">
<div class="row">
@foreach($fav as $index => $u)

<div class="card mt-3 ml-3" style="width: 22rem; padding: 10px">
  <img class="card-img-top" src="bukti/{{$u->usaha->gambar_usaha}}" style="object-fit: cover;height: 250px;width: 100%;">
  <div class="card-body">
    <a href="" class="badge float-right {{$u->status=="belum" ? "badge-danger" : "badge-primary"}}">{{$u->usaha->status}} terverifikasi</a>
    <p>Nama : <strong>{{$u->usaha->nama_usaha}}</strong></p>
    <p>Alamat : <strong>{{$u->usaha->alamat_usaha}}</strong></p>
    <p>Investasi : <strong>{{$u->usaha->nilai_investasi}}</strong></p>
    <hr>
    <div class="row">
      <div class="col-md-6">
<a href="" class="btn btn-sm btn-dark">
  <i class="fa fa-eye" aria-hidden="true"></i>
  Detail Usaha
</a>            
        
      </div>
      <div class="col-md-6">
      @auth
      <form method="POST" action="/tambahkan-usaha-unggulan">
        {{ csrf_field() }}
        <input type="hidden" value="{{$u->id}}" name="idnya">
        <button style="display: {{Auth::user()->role=="admin" ? "block" : "none"}}" class="btn btn-dark btn-sm float-right" type="submit">
            <i class="fa fa-star" aria-hidden="true"></i>
            Tambahkan Produk
        </button>
      </form>
      @endauth
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



@stop