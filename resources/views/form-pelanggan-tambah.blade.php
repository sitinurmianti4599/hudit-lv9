@extends('layout/main-layout')
@section('title', 'Tambah-Pelanggan')

@section('konten')

    <div class="row mt-5">
        <div class="col-md-8 col-sm-12 mt-5" style="margin: 0 auto; ">
            <div class="x_panel me-2" style="background:url(assets/images/pattern_h.png); ">
                <div class="x_content">
                    <form class="form" action="{{ route('web.customer.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="clear-fix"></div>
                        <span class="section">Tambah Data Pelanggan</span>
                        <div class="col-md-12 field form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Nama</label>
                            <div class="col-md-6 col-sm-6">
                                <input @class([
                                    'form-control',
                                    'is-valid' => session()->has('name') && !$errors->has('name'),
                                    'is-invalid' => $errors->has('name'),
                                ]) type="text" id="name" name="name"
                                    value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="address">Alamat</label>
                            <div class="col-md-6 col-sm-6">
                                <input @class([
                                    'form-control',
                                    'is-valid' => session()->has('address') && !$errors->has('address'),
                                    'is-invalid' => $errors->has('address'),
                                ]) type="text" id="address" name="address"
                                    value="{{ old('address') }}" required>
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="job">Pekerjaan</label>
                            <div class="col-md-6 col-sm-6">
                                <input @class([
                                    'form-control',
                                    'is-valid' => session()->has('job') && !$errors->has('job'),
                                    'is-invalid' => $errors->has('job'),
                                ]) type="text" id="job" name="job"
                                    value="{{ old('job') }}" required>
                                @error('job')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="telp">No. Hp.</label>
                            <div class="col-md-6 col-sm-6">
                                <input @class([
                                    'form-control',
                                    'is-valid' => session()->has('telp') && !$errors->has('telp'),
                                    'is-invalid' => $errors->has('telp'),
                                ]) type="telp" id="telp" name="telp"
                                    value="{{ old('telp') }}" required>
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
                            {{-- yang tampil adalah list layanan dari jenis layanan yang dipilih contoh dibawah jenis
                            layanan yang di pilih itu pendirian badan usaha --}}
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="service_id">Layanan</label>
                            <div class="col-md-6 col-sm-6">
                                <select id="service_id" name="service_id" required @class([
                                    'form-select',
                                    'is-valid' => session()->has('service_id') && !$errors->has('service_id'),
                                    'is-invalid' => $errors->has('service_id'),
                                ])>
                                    <option value="" selected disabled>Pilih Layanan</option>
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
                            <div class="col-md-6 offset-md-3 mt-3">
                                <button type='submit' class="btn btn-primary">Submit</button>
                                <button type='reset' class="btn btn-success">Reset</button>
                                <a href="/pelanggan" class="btn btn-danger">Cancel</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection
