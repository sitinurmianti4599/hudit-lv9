@extends('layout/main-layout')
@section('title', 'Tambah-Berkas')

@section('konten')

    <div class="row mt-5">
        <div class="col-md-8 col-sm-12 mt-5" style="margin: 0 auto; ">
            <div class="x_panel me-2" style="background:url(assets/images/pattern_h.png); ">
                <div class="x_content">
                    <form class="form" action="{{ route('web.file.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="clear-fix"></div>
                        <span class="section">Tambah Data Berkas</span>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Berkas</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" name="name" value="{{ old('name') }}"
                                    required="required" />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Lokasi Pengurusan</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" name="location" value="{{ old('location') }}"
                                    required="required" type="text" />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Estimasi Waktu</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="number" name="day_estimate"
                                    value="{{ old('day_estimate') }}" required='required' />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama PJ</label>
                            <div class="col-md-6 col-sm-6">
                                <select class="form-select" name="user_id">
                                    <option value="" selected disabled>Pilih PJ</option>
                                    @foreach ($users as $user)
                                        <option @selected(old('user_id') == $user->id) value="{{ $user->id }}">
                                            {{ $user->fullname }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="ln_solid">
                            <div class="form-group">
                                <div class="col-md-6 offset-md-3 mt-3">
                                    <button type='submit' class="btn btn-primary" onclick="confirmSubmit(event)">Submit</button>
                                    <button type='reset' class="btn btn-success">Reset</button>
                                    <a href="/data-master" class="btn btn-danger">Cancel</a>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
