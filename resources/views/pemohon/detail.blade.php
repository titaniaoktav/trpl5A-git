@extends('include.indexx')

@section('link-bc1')
{{url('/lihat-pemohon')}}
@stop

@section('bc1')
Produk Usaha
@stop

@section('bc2')
{{$data->nama_usaha}}
@stop
@section('page')
{{$data->nama_usaha}}
@stop

@section('content')

<section class="blog_area single-post-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-12">
                                <div class="feature-img">
                                    <img class="img-fluid" src="/bukti/{{$data->gambar_usaha}}" style="object-fit: cover;height: 350px;width: 100%;">
                                </div>                                  
                            </div>
                            <div class="col-lg-3  col-md-3">
                                <div class="blog_info text-right">
                                    <ul class="blog_meta list">
                                        <li><a href="#">{{$data->wirausaha->nama_lengkap}}<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">{{date('d M Y', strtotime($data->created_at))}}<i class="lnr lnr-calendar-full"></i></a></li>
                                       
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
                                <h2>{{$data->nama_usaha}}</h2>
                                <p class="excert">
                                    <small>Deskripsi Usaha : </small>
                                    <br>    
                                    {{$data->deskripsiUsaha->deskripsi}}
                                </p>
<hr>
<h2>KTP</h2>
<p>Nomor : <strong>{{$data->wirausaha->noktp}}</strong></p>
                                
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#foto_ktp">
  Lihat Foto KTP
</button>

<hr>
<h2>NPWP</h2>
<p>Nomor : <strong>{{$data->wirausaha->nonpwp}}</strong></p>
                                
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#foto_npwp">
  Lihat Foto NPWP
</button>

<hr>
<h2>BPJS Ketenagakerjaan</h2>
<p>Nomor : <strong>{{$data->wirausaha->bpjs_ketenagakerjaan}}</strong></p>
                                
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#foto_bpjs_ketenagakerjaan">
  Lihat Foto BPJS Ketenagakerjaan
</button>

<hr>
<h2>BPJS Kesehatan</h2>
<p>Nomor : <strong>{{$data->wirausaha->bpjs_kesehatan}}</strong></p>
                                
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#foto_bpjs_kesehatan">
  Lihat Foto BPJS Kesehatan
</button>
 

 <!-- Foto KTP -->
<div class="modal fade" id="foto_ktp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" style="top: 50px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Foto KTP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="author_img" src="../bukti/{{$data->wirausaha->foto_ktp}}" style="object-fit: cover;height: 100%;width: 100%;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Kembali</button>
      </div>
    </div>
  </div>
</div>

<!-- Foto NPWP -->
<div class="modal fade" id="foto_npwp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" style="top: 50px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Foto NPWP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="author_img" src="../bukti/{{$data->wirausaha->foto_npwp}}" style="object-fit: cover;height: 100%;width: 100%;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Kembali</button>
      </div>
    </div>
  </div>
</div>
<!-- Foto BPJS KESEHATAN -->
<div class="modal fade" id="foto_bpjs_kesehatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" style="top: 50px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Foto NPWP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="author_img" src="../bukti/{{$data->wirausaha->foto_bpjs_kesehatan}}" style="object-fit: cover;height: 100%;width: 100%;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Kembali</button>
      </div>
    </div>
  </div>
</div>
<!-- Foto BPJS KEtenagakerjaan -->
<div class="modal fade" id="foto_bpjs_ketenagakerjaan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" style="top: 50px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Foto NPWP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="author_img" src="../bukti/{{$data->wirausaha->foto_bpjs_ketenagakerjaan}}" style="object-fit: cover;height: 100%;width: 100%;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Kembali</button>
      </div>
    </div>
  </div>
</div>

                            </div>
                        </div>
                       
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget author_widget">
                                <img class="author_img rounded-circle" src="../bukti/{{$data->wirausaha->foto_formal}}" style="object-fit: cover;height: 250px;width: 100%;">
                                <h4>Nama : {{$data->wirausaha->nama_lengkap}}</h4>
                                <p>Role : {{$data->wirausaha->user->role}}</p>
                                <p>Email :{{$data->wirausaha->user->email}}</p>
                                <p>Nohp : {{$data->wirausaha->nohp}}</p>
                                
                                
                            </aside>
                           
                        </div>
                    </div>
                </div>
            </div>
</section>

@stop