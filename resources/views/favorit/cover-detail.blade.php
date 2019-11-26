@extends('include.index')

@section('SERIUS')

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
<img class="img-fluid" src="../bukti/{{$data->usaha->gambar_usaha}}" style="object-fit: cover;height: 300px;width: 100%;">
<div class="row">
    <div class="col-md-9 mt-3">
        <h3><strong>{{$data->usaha->nama_usaha}}</strong></h3>
        <p>Oleh : <strong>{{$data->usaha->wirausaha->nama_lengkap}}</strong></p>
        <!-- <small>{{date('d M Y', strtotime($data->usaha->created_at))}}</small> -->
        {{$data->usaha->deskripsiUsaha->deskripsi}}
    </div>  
</div>
</div>
</div>
@stop