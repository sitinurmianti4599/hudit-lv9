@extends('layout/main-layout')
@section('title', 'Edit-Data Berkas')

@section('konten')

    <div class="row mt-5">
        <div class="col-md-8 col-sm-12 mt-5" style="margin: 0 auto; ">
            <div class="x_panel me-2" style="background:url(assets/images/pattern_h.png); ">
                <div class="x_content">
                    <div class="x_title">
                        <h2 class="fw-normal fs-4">Edit Data Berkas Monitoring</h2>
                        <div class="clearfix"></div>
                    </div>
                    <form class="form mt-4" action="{{ route('web.submission.update', ['submission' => $submission]) }}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        {{-- <div class="clear-fix"></div>
                    <span class="section">Edit Data Berkas</span> --}}
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Berkas</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" value="{{ $submission->file->name }}"
                                    name="nama-berkas" required="required" readonly />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Lokasi Pengurusan</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" value="{{ $submission->file->location }}" name="lokasi"
                                    required="required" type="text" readonly />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="status">Status</label>
                            <div class="col-md-6 col-sm-6">
                                <select id="status" name="status" required @class([
                                    'form-select',
                                    'is-valid' => session()->has('status') && !$errors->has('status'),
                                    'is-invalid' => $errors->has('status'),
                                ])>
                                    <option value="" selected disabled>Pilih Status</option>
                                    @foreach (['pending', 'progress', 'done'] as $status)
                                        <option @selected(old('status', $submission->status) == $status) value="{{ $status }}">
                                            {{ $status }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                            <div class="col-md-12 field  form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Nama PJ</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" value="{{ $submission->file->user->fullname }}"
                                        name="nama-pj" required='required' readonly>
                                </div>
                            </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="date">
                                Tgl. Pengajuan
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <input type="date" id="date" name="date"
                                    value="{{ old('date', date('Y-m-d', strtotime($submission->date))) }}" required @class([
                                        'form-control',
                                        'is-valid' => session()->has('date') && !$errors->has('date'),
                                        'is-invalid' => $errors->has('date'),
                                    ])>
                                @error('date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="done">
                                Tgl. Selesai
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <input type="date" id="done" name="done"
                                    value="{{ old('done', date('Y-m-d', strtotime($submission->done?$submission->done:now()))) }}" @class([
                                        'form-control',
                                        'is-valid' => session()->has('done') && !$errors->has('done'),
                                        'is-invalid' => $errors->has('done'),
                                    ])>
                                @error('done')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="information">
                                Keterangan
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <textarea id="information" name="information"
                                    @class([
                                        'form-control',
                                        'is-valid' => session()->has('information') && !$errors->has('information'),
                                        'is-invalid' => $errors->has('information'),
                                    ])>{{ old('information', $submission->information) }}</textarea>
                                @error('information')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Dokumentasi</label>
                            <div class="col-md-6 col-sm-6">
                                @if($submission->proof_name)
                                    <img src="{{$submission->proof_url }}" class="img-preview img-fluid mb-2" alt="{{$submission->proof_name}}">
                                @else
                                <!-- <span></span>   -->
                                    <img class="img-preview img-fluid mb-2">
                                 @endif
                                <input class="form-control" type="file" name="proof" id="dokmen" onchange="previewImage()" />
                            </div>

                        </div>

                        <div class="col-md-12 field  form-group">
                            <!-- <label class="col-form-label col-md-3 col-sm-3  label-align"></label>
                            <div class="col-md-6 col-sm-6">
                              @if($submission->proof_name == !null)
                                <span class="docm"><img src="{{$submission->proof_url}}" alt="{{$submission->proof_name}}"></span>
                                @elseif ($submission->proof_name == null)
                                <span></span>
                                @endif
                            </div> -->
                            <div class="form-group">
                                <div class="col-md-6 offset-md-3 mt-3">
                                    <button type='submit' class="btn btn-info" onclick="confirmSubmit(event)">Update</button>
                                    <a href="{{ url()->previous() }}" class="btn btn-warning">Cancel</a>
                                </div>
                            </div>
                        </div>
                        @if (filled($errors->all()))
                            <div>
                                <div>error validation</div>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
