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


<div class="container mt-4">
  <table class="table table-stripped table-hover text-center align-center">
    <thead>
      <th>No</th>
      <th>Nama Usaha</th>
      <th>Tanggal Masuk</th>
      <th>Pemilik</th>
      <th>Download PDF</th>
    </thead>
    <tbody>
      @foreach($usaha as $index => $n)
      <tr>
        <td>{{$index+1}}</td>
        <td>{{$n->nama_usaha}}</td>
        <td>{{date('d M Y', strtotime($n->created_at))}}</td>
        <td>{{$n->wirausaha->nama_lengkap}}</td>
        <td><a href="/conver-pdf/{{$n->id}}" class="btn btn-dark btn-sm">Download</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
    <div class="offset-5">
      {{$usaha->links()}}  
    </div>
</div>


@stop