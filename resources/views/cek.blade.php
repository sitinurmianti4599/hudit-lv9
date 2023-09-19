@extends('layout/layout-user')
@section('title', 'Check')

@section('konten')
    <div class="title-cek ">
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
                            placeholder="Masukkan Kode" autocomplete=off>
                        @error('id')
                            <div id="" class="invalid-feedback">
                               <h4 class="text-danger"> {{ $message }} </h4>
                            </div>
                        @enderror
                    </div>
                    <div>
                        <button class="btn btn-cek mt-4 mb-4">Cek</button>
                    </div>
                </form>

            <a href="#newservice" class="fs-4 text-white fw-800 mt-5">Ingin Memesan Layanan <b>Hukum</b> Baru?</a>

           
            
        <br><br>
        <h2 id="newservice" class="">Silahkan Isi Form Layanan <b>Hukum</b> Anda</h2>
        <div class="col-md-6 col-sm-12 mt-2 p-2 bg-light rounded" >
            <div class="x_panel me-2 " style="background:url(assets/images/pattern_h.png)!important; ">
                <div class="x_content" >
                    <form class="form "  action="{{ route('web.customer.storecus') }}" method="POST"
                        enctype="multipart/form-data" id="updPC">
                        @csrf
                        <div class="clear-fix"></div>
                        <span class="section fs-4 mt-2">Data Pelanggan </span>
                        <div class="col-md-12 field form-group mt-2" >
                            <div class="col-md-8 col-sm-6" >
                                <div class="form-floating mb-3">
                                    <input id="floatingInput" placeholder="Masukkan nama" @class([
                                    'form-control',
                                    'is-valid' => session()->has('name') && !$errors->has('name'),
                                    'is-invalid' => $errors->has('name'),
                                     ]) type="text" id="name" name="name"
                                    value="{{ old('name') }}" required>
                                    <label for="floatingInput">Nama</label>
                                </div>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <div class="col-md-8 col-sm-6">
                              <div class="form-floating mb-3">
                                    <input id="floatingInput" placeholder="Email" @class([
                                    'form-control',
                                    'is-valid' => session()->has('email') && !$errors->has('email'),
                                    'is-invalid' => $errors->has('email'),
                                    ]) type="email" id="email" name="email"
                                    value="{{ old('email') }}" required>
                                    <label for="floatingInput">Email</label>
                                </div>
                            
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <div class="col-md-8 col-sm-6">
                              <div class="form-floating mb-3">
                                    <input id="floatingInput" placeholder="alamat" @class([
                                    'form-control',
                                    'is-valid' => session()->has('address') && !$errors->has('address'),
                                    'is-invalid' => $errors->has('address'),
                                    ]) type="text" id="address" name="address"
                                    value="{{ old('address') }}" required>
                                    <label for="floatingInput">Alamat</label>
                                </div>
                            
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <div class="col-md-8 col-sm-6">
                            <div class="form-floating mb-3">
                                    <input id="floatingInput" placeholder="pekerjaan" @class([
                                    'form-control',
                                    'is-valid' => session()->has('job') && !$errors->has('job'),
                                    'is-invalid' => $errors->has('job'),
                                ]) type="text" id="job" name="job"
                                    value="{{ old('job') }}" required>
                                    <label for="floatingInput">Pekerjaan</label>
                                </div>
                                 @error('job')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <div class="col-md-8 col-sm-6">
                            <div class="form-floating mb-3">
                                    <input id="floatingInput" placeholder="telp" @class([
                                    'form-control',
                                    'is-valid' => session()->has('telp') && !$errors->has('telp'),
                                    'is-invalid' => $errors->has('telp'),
                                ]) type="telp" id="telp" name="telp"
                                    value="{{ old('telp') }}" required>
                                    <label for="floatingInput">No. WA</label>
                                </div>
                            
                                @error('telp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="service_type_id">Jenis
                                Layanan</label>
                            <div class="col-md-6 col-sm-6">
                                <select id="service_type_id" name="service_type_id" required @class([
                                    'form-select',
                                    'is-valid' =>
                                        session()->has('service_type_id') && !$errors->has('service_type_id'),
                                    'is-invalid' => $errors->has('service_type_id'),
                                ])>
                                    <option value="" selected disabled>Pilih Layanan</option>
                                    @foreach ($service_types as $service_type)
                                        <option @selected(old('service_type_id') == $service_type->id) value="{{ $service_type->id }}">
                                            {{ $service_type->name }}</option>
                                    @endforeach
                                </select>
                                @error('service_type_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>  
                        </div> --}}
                        <div class="col-md-12 field  form-group">
                         <div class="col-md-8 col-sm-6 ">
                                <select id="service_id" name="service_id" required @class([
                                    'form-select',
                                    'is-valid' => session()->has('service_id') && !$errors->has('service_id'),
                                    'is-invalid' => $errors->has('service_id'),
                                ])>
                                    <option value="" selected disabled >Pilih Layanan</option>
                                    @foreach ($service_types as $service_type)
                                        <optgroup label="{{ $service_type->name }}">
                                            @foreach ($service_type->services as $service)
                                                <option @selected(old('service_id') == $service->id) value="{{ $service->id }}">
                                                    {{ $service->name }}</option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                                @error('service_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="order_date">
                                Tgl. Order
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <input type="date" id="order_date" name="order_date" value="{{ old('order_date') }}"
                                    required @class([
                                        'form-control',
                                        'is-valid' => session()->has('order_date') && !$errors->has('order_date'),
                                        'is-invalid' => $errors->has('order_date'),
                                    ])>
                                @error('order_date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div> --}}
                        {{-- <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Perkiraan selesai</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" class='date' type="date" name="date"
                                    required='required'>
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <div class="col-md-6 offset-md-3 mt-3" style="margin:0 auto;">
                                <button type='submit' class="btn btn-primary"onclick="confirmSubmitPC(event)">Submit</button>
                                <button type='reset' class="btn btn-warning">Reset</button>
                            </div>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        
    </div>

    </center>
        </div>


    </div>
@endsection
