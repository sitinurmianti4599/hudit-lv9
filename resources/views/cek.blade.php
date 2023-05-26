@extends('layout/layout-user')
@section('title', 'Check')

@section('konten')
  <div class="title-cek ">
    <div class="cover-cek">
      <a class="navbar-brand" href="#">
        <img src="assets/images/logohd.png" alt="Logo"  height="40" class="d-inline-block align-text-top">
      </a>
      <h2 class="">Cek Progress Berkas Layanan <b>Hukum</b> Anda</h2>
      <center>
      <div class="input-group w-50">
        <input type="text " class="form-control kd-cek " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Masukkan Kode">
      </div>
      <div>
        <a href="/result"><button type="button" class="btn btn-cek mt-3">Cek</button></a>
      </div>
      
    </center>
    </div>
  </div>
@endsection