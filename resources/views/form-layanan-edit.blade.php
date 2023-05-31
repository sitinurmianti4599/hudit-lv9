@extends('layout/main-layout')
@section('title', 'Tambah-Akun')

@section('konten')

    <div class="row mt-5">
        <div class="col-md-8 col-sm-12 mt-5" style="margin: 0 auto; ">
            <div class="x_panel me-2" style="background:url(assets/images/pattern_h.png); ">
                <div class="x_content">
                    <div class="x_title">
                        <h2 class="fw-normal fs-4">Edit Data Layanan</h2>
                        <ul class="nav navbar-right panel_toolbox d-flex justify-content-end">
                            <li>
                                <form class="contents"
                                    action="{{ route('web.service.destroy', ['service' => $service]) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger p-2 fw-bold text-light">Hapus Data</button>
                                </form>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <form class="form mt-4" action="{{ route('web.service.update', ['service' => $service]) }}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        {{-- <div class="clear-fix"></div>
                    <span class="section">Edit Data Layanan</span> --}}
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Layanan</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="name" value="{{ $service->name }}"
                                    required />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Harga</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" name="cost" value="{{ $service->cost }}" required
                                    type="number" />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="control-label col-md-3 col-sm-3 label-align">Jenis Layanan</label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-select" name="service_type_id">
                                    <option value="" selected disabled>Pilih Layanan</option>
                                    @foreach ($service_types as $service_type)
                                        <option @selected($service->service_type_id == $service_type->id) value="{{ $service_type->id }}">
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
                                                value="{{ $file->id }}" @checked($service->files->contains($file->id))>
                                            <span class="ml-2">{{ $file->name }}</span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 offset-md-3 mt-3">
                                    <button type='submit' class="btn btn-info">Update</button>
                                    <a href="/data-master" class="btn btn-warning">Cancel</a>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
