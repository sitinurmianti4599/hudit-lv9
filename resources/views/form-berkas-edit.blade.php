@extends('layout/main-layout')
@section('title', 'Edit-Berkas')

@section('konten')

    <div class="row mt-5">
        <div class="col-md-8 col-sm-12 mt-5" style="margin: 0 auto; ">
            <div class="x_panel me-2" style="background:url(assets/images/pattern_h.png); ">
                <div class="x_content">
                    <div class="x_title">
                        <h2 class="fw-normal fs-4">Edit Data Berkas</h2>
                        <ul class="nav navbar-right panel_toolbox d-flex justify-content-end">
                            <li>
                                <form class="contents" action="{{ route('web.file.destroy', ['file' => $file]) }}"
                                    method="post" enctype="multipart/form-data" id="deleteForm">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger p-2 fw-bold text-light" onclick="confirmDelete(event)">Hapus Data</button>
                                </form>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <form class="form mt-4" action="{{ route('web.file.update', ['file' => $file]) }}"
                        method="post" enctype="multipart/form-data" id="upd">
                        @csrf
                        @method('PATCH')
                        {{-- <div class="clear-fix"></div>
                    <span class="section">Edit Data Berkas</span> --}}
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Berkas</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="name" value="{{ $file->name }}"
                                    required="required" />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Lokasi Pengurusan</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" name="location" value="{{ $file->location }}"
                                    required="required" type="text" />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Estimasi Waktu</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="number" name="day_estimate"
                                    value="{{ $file->day_estimate }}" required='required' />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama PJ</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-select" name="user_id">
                                    <option value="" selected disabled>Pilih PJ</option>
                                    @foreach ($users as $user)
                                        <option @selected($file->user_id == $user->id) value="{{ $user->id }}">
                                            {{ $user->fullname }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 offset-md-3 mt-3">
                                <button type='submit' class="btn btn-info" onclick="confirmSubmitEdit(event)">Update</button>
                                <a href="/data-master" class="btn btn-warning">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
