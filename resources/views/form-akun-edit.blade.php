@extends('layout/main-layout')
@section('title', 'Edit-Akun')

@section('konten')

    <div class="row mt-5">
        <div class="col-md-8 col-sm-12 mt-5" style="margin: 0 auto; ">
            <div class="x_panel me-2" style="background:url(assets/images/pattern_h.png); ">
                <div class="x_content">
                    <div class="x_title">
                        <h2 class="fw-normal fs-4">Edit Data Akun</h2>
                        <ul class="nav navbar-right panel_toolbox d-flex justify-content-end">
                            <li>
                                <form class="contents" action="{{ route('web.user.destroy', ['user' => $user]) }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger p-2 fw-bold text-light">Hapus Data</button>
                                </form>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <form class="form mt-4" action="{{ route('web.user.update', ['user' => $user]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="clear-fix"></div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Username</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" value="{{ $user->name }}" name="name" />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Full Name</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" value="{{ $user->fullname }}" name="fullname" />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Email</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" value="{{ $user->email }}" name="email" class='email'
                                    type="email" />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">password</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" value="{{ $user->password }}" name="password" class='password'
                                    type="password" />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="control-label col-md-3 col-sm-3 label-align">Role</label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-select" name="role_id">
                                    <option value="" selected disabled>Pilih posisi</option>
                                    @foreach ($roles as $role)
                                        <option @selected($user->role_id == $role->id) value="{{ $role->id }}">
                                            {{ $role->position }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" class='alamat' value="{{ $user->address }}"
                                    name="address" data-validate-linked='alamat' required='required' />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Tgl_lahir</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" class='date' type="date" value="{{ $user->date_of_birth }}"
                                    name="date_of_birth" required='required'>
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Telp / Wa</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" class='telp' type="tel" value="{{ $user->telp }}"
                                    name="telp" required='required'>
                            </div>
                        </div>
                        <div>
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
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
