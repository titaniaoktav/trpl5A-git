@extends('include.indexx')

@section('judul')
Registrasi Wirausaha
@stop
@section('content')

@section('bc1')
beranda
@stop

@section('bc2')
usaha
@stop

@section('page')
Usaha
@stop


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
      <h4 class="modal-title">Alert</h4>
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
<li class="nav-item submenu dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
     aria-expanded="false">Notifikasi&nbsp<span class="badge badge-danger">{{$wira->notifikasi->count()}}</span></a>
    <ul class="dropdown-menu">
        @foreach($wira->notifikasi as $n)
        <li class="nav-item">
          <a class="dropdown-item" href="{{url('/notifikasi/')}}/{{$n->id}}">
            {{$n->isi}}
            <br>
            <small>{{date('d M Y', strtotime($n->created_at))}}</small>
          </a>
          <hr>
        </li>
        @endforeach
    </ul>
</li>
@stop



<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modalBIG" style="top: 4%;">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <form method="POST" action="/buat-usaha" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card">
        <div class="card-body">
    <h3 class="text-center mt-3">Pendaftaran Usaha</h3>
      <div class="modal-body mt-5">
        <div class="row">
            <div class="col-md-6">
            <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-right">Nama Usaha </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="nama_usaha" required maxlength="16">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-right">Alamat </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="alamat_usaha" required maxlength="30">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label text-md-right">Website </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="website_usaha"  maxlength="15">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-right">Investasi</label>
            <div class="col-md-9">
                <input type="number" class="form-control" name="nilai_investasi" required maxlength="16">
            </div>
        </div>
            </div>
            <div class="col-md-6">
                
            
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-right">Foto Produk</label>
            <div class="col-md-9">
                <input type="file" class="form-control-file" name="gambar" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-right">Status Usaha</label>
            <div class="col-md-9">
                <select class="form-control" name="jenis_usaha">
                  <option disabled>Pilih jenis usaha</option>
                  <option value="sewa">Sewa</option>
                  <option value="milik sendiri">Milik Sendiri</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-right">Nama Produk</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="barang" required maxlength="100">
            </div>
        </div>
        
      </div>
    </div>
    <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label text-md-left">Deskripsi Usaha</label>
            <div class="col-md-10">
                <!-- <input type="text" class="form-control" name="barang" required maxlength="11"> -->
                <textarea name="deskripsi" cols="15" rows="3" class="form-control"></textarea>
            </div>
        </div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-dark btn-sm">Simpan</button>
      </div>
  </form>

</div>
    </div>
    </div>
  </div>
</div>
<section class="section_gap big_features">
    <div class="container">
<!-- @if(session('sukses'))
<div class="alert alert-success" >
{{session('sukses')}}
</div>
@endif
@if(session('gagal'))
<div class="alert alert-danger" >
{{session('gagal')}}
</div>
@endif -->
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="main_title">
            
            <h2>Produk Usaha</h2>
            <p>Wirausahawan dapat mengajukan usaha yang dimiliki untuk mendapatkan surat izin usaha oleh Pemerintah Kabupaten Jember dengan disetujui oleh Pelayanan Terpadu Satu Pintu bekerjasama dengan Dinas Perdagangan Kabupaten Jember </p>
          </div>
        </div>
      </div>
<br><br><br><br>
<div class="container">
    <a href="{{url('usaha-terverifikasi')}}" class="btn btn-dark btn-sm float-left">Data Pengajuan</a>
    <button type="button" class="btn btn-dark btn-sm float-right" data-toggle="modal" data-target="#modalBIG">Pengajuan Usaha</button>

<br class="mt-1">
<hr class="mt-3">

<div class="col-md-12">
<!--     @if(session('sukses'))
<div class="alert alert-success" >
{{session('sukses')}}
</div>
@endif
@if(session('gagal'))
<div class="alert alert-danger" >
{{session('gagal')}}
</div>
@endif -->
<div class="row">
@foreach($usaha as $index => $u)

<div class="card mt-3 ml-3" style="width: 21rem; padding: 10px">
  <img class="card-img-top" src="bukti/{{$u->gambar_usaha}}" style="object-fit: cover;height: 250px;width: 100%;">
  <div class="card-body">
    <a href="" class="badge float-right {{$u->status=="belum" ? "badge-danger" : "badge-primary"}}">{{$u->status}} terverifikasi</a>
    <p>Nama : <strong>{{$u->nama_usaha}}</strong></p>
    <p>Alamat : <strong>{{$u->alamat_usaha}}</strong></p>
    <p>Investasi : <strong>{{$u->nilai_investasi}}</strong></p>
    <hr>
        <button class="btn btn-dark btn-sm" type="button" data-toggle="modal" data-target="{{$u->status=="belum" ? "#mdl" : "#not"}}{{$u->id}}">
            <i class="fa fa-pencil" aria-hidden="true"></i>
            Edit Usaha
        </button>
  </div>
</div>
<!-- MODAL -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="not{{$u->id}}" style="top: 10%">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="card">
        <input type="hidden" name="idnya" value="{{$u->id}}">
        <div class="card-body">
    <h3 class="text-center mt-3">Usaha {{$u->nama_usaha}}</h3>
      <div class="modal-body mt-5">
        <p>Anda tidka bisa melakukan edit karen Usaha Ini telah di verifikasi oleh pihak Humas PTSP</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro quos vero architecto, fugit repellendus eaque reprehenderit ipsa rerum officiis sit illo ipsam adipisci quaerat possimus nihil unde laborum saepe quod.</p>
        </div>
        </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Close</button>
      </div>
        </div>
    </div>
</div>


<!-- MODAL -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="mdl{{$u->id}}">
  <div class="modal-dialog modal-lg" style="top: 9%;">
    <div class="modal-content">
      <form method="POST" action="/edit-buat-usaha" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card">
        <input type="hidden" name="idnya" value="{{$u->id}}">
        <div class="card-body">
    <h3 class="text-center mt-3">Usaha {{$u->nama_usaha}}</h3>
      <div class="modal-body mt-5">
        <div class="row">
            <div class="col-md-6">
            <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-right">Usaha </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="nama_usaha" required maxlength="16" value="{{$u->nama_usaha}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-right">Alamat </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="alamat_usaha" required maxlength="30" value="{{$u->alamat_usaha}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label text-md-right">Website </label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="website_usaha"  maxlength="15" value="{{$u->website_usaha}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-right">Investasi</label>
            <div class="col-md-9">
                <input type="number" class="form-control" name="nilai_investasi" required maxlength="16" value="{{$u->nilai_investasi}}">
            </div>
        </div>
            </div>
            <div class="col-md-6">
                
            
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-right">Gambar Usaha </label>
            <div class="col-md-9">
                <input type="file" class="form-control-file" name="gambar">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-right">Status Usaha</label>
            <div class="col-md-9">
                <select class="form-control" name="jenis_usaha">
                  <option value="sewa" {{$u->status_usaha=="sewa" ? "selected" : ""}}>Sewa</option>
                  <option value="tidak sewa" {{$u->status_usaha=="tidak sewa" ? "selected" : ""}}>Tidak Sewa</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-md-right">Barang</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="barang" required maxlength="11" value="{{$u->barang_yang_dijual}}">
            </div>
        </div>
        
      </div>
    </div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-dark btn-sm">Simpan</button>
      </div>
  </form>

</div>
    </div>
    </div>
  </div>
@endforeach
</div>
</div>

                          <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-left"></span>
                                        </span>
                                    </a>
                                </li>
                                {{$usaha->links()}}
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
</div>

</div>
</section>


@stop