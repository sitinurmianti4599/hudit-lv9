@extends('layout/layout-user')
@section('title', 'Check')

@section('konten')
    <div class="title-cek">
        <div class="cover-cek">
            <a class="navbar-brand site_title" href="/">
                <img src="assets/images/logohd.png" alt="Logo" height="40" class="d-inline-block align-text-top">
            </a>
            <h2 class="">Cek Progress Berkas Layanan <b>Hukum</b> Anda</h2>
            <center>
                <form action="{{ route('web.track.result') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group w-50">
                        <input type="text " class="form-control kd-cek {{ $errors->has('id') ? 'is-invalid' : '' }}"
                            name="id" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                            placeholder="Masukkan Kode">
                        @error('id')
                            <div id="" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <button class="btn btn-cek mt-3">Cek</button>
                    </div>
                </form>
            </center>
        </div>
    </div>
@endsection
