@extends('layout/main-layout')
@section('title', 'profile')

@section('konten')
<div class="col-md-12 col-sm-12 mt-5 profile_details"  >
    <div class="profile-card mb-5 mt-5 ">
      <header>
        @if($user->photo === !null )
        <img src="{{ $user->photo }}" alt="" class="img-circle img-fluid">
        @elseif ($user->photo === null)
         <img src="assets/images/user.png" alt="" class="img-circle img-fluid">
        @endif
        <h1>{{ $user->fullname }}</h1>
        <p>{{ $user->role->position }}</p>
      </header>
      <div class="info">
        <h2>Informasi Pribadi</h2>
        <p>Username : <span>{{ $user->name }}</span></p>
        <p>Tanggal Lahir : <span>{{ date('d M Y', strtotime($user->date_of_birth)) }}</span></p>
        <p>Alamat : <span>{{ $user->address }}</span></p>
      </div>
    
      <div class="contact">
        <h2>Kontak</h2>
        <p>Email : <span>{{ $user->email }}</span></p>
        <p>Telp / Wa : <span>{{ $user->telp }}</span></p>
      </div>
      <div class="d-flex justify-content-center">
        <!-- <a href="" class="btn btn-info p-1 fw-bold w-50 position-relative">Ganti Sandi</a> -->
        <a href="{{ route('web.profile.edit') }}" class="btn btn-warning p-1 fw-bold w-100 position-relative">Edit</a>
      </div>
      
    
      
    </div>

  </div>
@endsection