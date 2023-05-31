@extends('layout/main-layout')
@section('title', 'Tambah-Akun')

@section('konten')

    <div class="row mt-5">
        <div class="col-md-8 col-sm-12 mt-5" style="margin: 0 auto; ">
            <div class="x_panel me-2" style="background:url(assets/images/pattern_h.png); ">
                <div class="x_content">
                    <form class="form" action="{{ route('web.service.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="clear-fix"></div>
                        <span class="section">Tambah Data Layanan</span>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Layanan</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="name" required />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Harga</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" name="cost" required type="number" />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="control-label col-md-3 col-sm-3 label-align">Jenis Layanan</label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-select" name="service_type_id">
                                    <option value="" selected disabled>Pilih Layanan</option>
                                    @foreach ($service_types as $service_type)
                                        <option @selected(old('service_type_id') == $service_type->id) value="{{ $service_type->id }}">
                                            {{ $service_type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Daftar Berkas</label>
                            <div class="col-md- col-sm-6 mt-2">
                                {{-- dri tabel berkas, tampilkan semua daftar isi tabel berkas untuk di pilih --}}
                                @foreach ($files as $file)
                                    <div class="checkbox col-auto ">
                                        <label>
                                            <input class="flat" type="checkbox" name="files[{{ $loop->index }}]"
                                                value="{{ $file->id }}" @checked(old('files[{{ $loop->index }}]') == $file->id)>
                                            <span class="ml-2">{{ $file->name }}</span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 offset-md-3 mt-3">
                                    <button type='submit' class="btn btn-primary">Submit</button>
                                    {{-- <button type='reset' class="btn btn-success">Reset</button> --}}
                                    <a href="/data-master" class="btn btn-danger">Cancel</a>

                                </div>
                            </div>
                            <div>
                                @if (count($errors->all()))
                                    <div>error validation</div>
                                @endif
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
