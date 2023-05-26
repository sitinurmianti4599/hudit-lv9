@extends('layout/main-layout')
@section('title', 'profile')

@section('konten')
<div class="col-md-12 col-sm-12 mt-5 profile_details"  >
    <div class="profile-card mb-5 mt-5 ">
      <header>
            <img src="assets/images/user.png" alt="" class="img-circle img-fluid">
        <h1>Username</h1>
        <p>Role</p>
      </header>
      <div class="info">
        <h2>Informasi Pribadi</h2>
        <p>Tanggal Lahir : <span>1 Januari 1990</span></p>
        <p>Alamat : <span>Jalan Poros Bontolangkasa</span></p>
      </div>
    
      <div class="contact">
        <h2>Kontak</h2>
        <p>Email : <span>example@example.com</span></p>
        <p>Telp / Wa : <span>123-456-7890</span></p>
      </div>
      <div class="d-flex justify-content-center">
        <a href="" class="btn btn-info p-1 fw-bold w-50 position-relative">Ganti Sandi</a>
        <a href="/form-profile-edit" class="btn btn-warning p-1 fw-bold w-50 position-relative">Edit</a>
      </div>
      
    
      
    </div>

  </div>
@endsection