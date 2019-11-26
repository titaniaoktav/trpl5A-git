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

@section('notifikasi')
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Notifikasi&nbsp<span class="badge badge-light">{{$wira->notifikasi->count()}}</span>
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

<div class="container mt-4">
	<table class="table table-stripped table-hover text-center align-center">
		<thead>
			<th>No</th>
			<th>Nama Usaha</th>
			<th>Tanggal Masuk</th>
			<th>Download PDF</th>
		</thead>
		<tbody>
			@foreach($usaha as $index => $n)
			<tr>
				<td>{{$index+1}}</td>
				<td>{{$n->nama_usaha}}</td>
				<td>{{date('d M Y', strtotime($n->created_at))}}</td>
				<td><a href="/conver-pdf/{{$n->id}}" class="btn btn-dark btn-sm">Download</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>


@stop