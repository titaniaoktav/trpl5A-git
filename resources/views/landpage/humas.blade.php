@extends('include.index-reg')

@section('judul')
Dashboard
@stop
@section('content')

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
                <div class="card-body" >
                    <h4>Selamat datang <strong>Humas PTSP</strong></h4>
                    <h4>Atas Nama : <strong>{{Auth::user()->name}}</strong></h4> 
                </div>
            </div>
        </div>
    </div>
</div>
@stop