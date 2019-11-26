@extends('include.index-reg')

@section('judul')
Dashboard
@stop
@section('content')

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
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <h4>Selamat datang <strong>Wirausahawan</strong></h4> 
                </div>
            </div>
        </div>
    </div>
</div>
@stop