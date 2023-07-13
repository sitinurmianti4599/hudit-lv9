@extends('layout/main-layout')
@section('title', 'Tambah-Akun')

@section('konten')

    <div class="row mt-5">
        <div class="col-md-8 col-sm-12 mt-5" style="margin: 0 auto; ">
            <div class="x_panel me-2" style="background:url(assets/images/pattern_h.png); ">
                <div class="x_content">
                    <form class="form" action="{{ route('web.user.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="clear-fix"></div>
                        <span class="section">Tambah Data Akun</span>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Username</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" value="{{ old('name', '') }}" name="name"
                                    required="required" />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Full Name</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" value="{{ old('fullname', '') }}" name="fullname"
                                    required="required" />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Email</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" value="{{ old('email', '') }}" name="email" class='email'
                                    required="required" type="email" />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">password</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" name="password" class='password' id="password1" required="required"
                                    type="password" />
                                    <span style="position: absolute;right:15px;top:7px;" onclick="hideshow()">
                                        <i id="slash" class="fa fa-eye-slash"></i>
                                        <i id="eye" class="fa fa-eye"></i>
                                    </span>
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="control-label col-md-3 col-sm-3 label-align">Role</label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-select" value="{{ old('role_id', '') }}" name="role_id">
                                    <option value="" selected disabled>Pilih posisi</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->position }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" class='alamat' value="{{ old('address', '') }}"
                                    name="address" data-validate-linked='alamat' required='required' />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Tgl_lahir</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" class='date' type="date"
                                    value="{{ old('date_of_birth', '') }}" name="date_of_birth" required='required'>
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Telp / Wa</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" class='telp' type="tel" value="{{ old('telp', '') }}"
                                    name="telp" required='required'>
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
                        <div class="form-group">
                            <div class="col-md-6 offset-md-3 mt-3">
                                <button type='submit' class="btn btn-primary" onclick="confirmSubmit(event)">Submit</button>
                                <button type='reset' class="btn btn-success">Reset</button>
                                <a href="/data-master" class="btn btn-danger">Cancel</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection
