@extends('include.indexx')


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



<section class="blog_area single-post-area section_gap">
            <div class="container">
                
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-12">
                                <div class="feature-img">
                                    <img class="img-fluid" src="/bukti/{{$data->usaha->gambar_usaha}}" style="object-fit: cover;height: 350px;width: 100%;">
                                </div>                                  
                            </div>
                            <div class="col-lg-3  col-md-3">
                                <div class="blog_info text-right">
                                    <ul class="blog_meta list">
                                        <li><a href="#">{{$data->usaha->wirausaha->nama_lengkap}}<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">{{date('d M Y', strtotime($data->usaha->created_at))}}<i class="lnr lnr-calendar-full"></i></a></li>
                                       
                                    </ul>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 blog_details">
                                <h2>{{$data->usaha->nama_usaha}}</h2>
                                <p class="excert">
                                    <small>Deskripsi Usaha : </small>
                                    <br>    
                                    {{$data->usaha->deskripsiUsaha->deskripsi}}
                                </p>
                                
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget author_widget">
                                <img class="author_img rounded-circle" src="../bukti/{{$data->usaha->wirausaha->foto_formal}}" style="object-fit: cover;height: 250px;width: 100%;">
                                <h4>{{$data->usaha->wirausaha->nama_lengkap}}</h4>
                                <p>{{$data->usaha->wirausaha->user->role}}</p>
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-github"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                                <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.</p>
                                <div class="br"></div>
                            </aside>
                           
                        </div>
                    </div>
                </div>
            </div>
</section>
@stop