@extends('layout/main-layout')
@section('title', 'Tambah-Akun')
<script>
    var success = @json(session()->has('success'));
    var failed = @json($errors->any());
    var redirect = @json(session('redirect'));
</script>
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
                                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                    value="{{ old('name', '') }}" name="name" required="required" />
                                @error('name')
                                    <div id="" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Full Name</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control {{ $errors->has('fullname') ? 'is-invalid' : '' }}"
                                    value="{{ old('fullname', '') }}" name="fullname" required="required" />
                                @error('fullname')
                                    <div id="" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Email</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                    value="{{ old('email', '') }}" name="email" class='email' required="required"
                                    type="email" />
                                @error('email')
                                    <div id="" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">password</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                    name="password" class='password' id="password1" required="required" type="password" />
                                <span style="position: absolute;right:15px;top:7px;" onclick="hideshow()">
                                    <i id="slash" class="fa fa-eye-slash"></i>
                                    <i id="eye" class="fa fa-eye"></i>
                                </span>
                                @error('password')
                                    <div id="" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="control-label col-md-3 col-sm-3 label-align">Role</label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-select {{ $errors->has('role_id') ? 'is-invalid' : '' }}"
                                    value="{{ old('role_id', '') }}" name="role_id">
                                    <option value="" selected disabled>Pilih posisi</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->position }}</option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                    <div id="" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                                    type="text" class='alamat' value="{{ old('address', '') }}" name="address"
                                    data-validate-linked='alamat' required='required' />
                                @error('address')
                                    <div id="" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Tgl_lahir</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control {{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}"
                                    class='date' type="date" value="{{ old('date_of_birth', '') }}"
                                    name="date_of_birth" required='required'>
                                @error('date_of_birth')
                                    <div id="" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Telp / Wa</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control {{ $errors->has('telp') ? 'is-invalid' : '' }}" class='telp'
                                    type="tel" value="{{ old('telp', '') }}" name="telp" required='required'>
                                @error('telp')
                                    <div id="" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        @env('local')
                            <!-- <div>
                                @if (filled($errors->all()))
                                    <div>error vaflidation</div>
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                @endif
                            </div> -->
                        @endenv
                        <div class="form-group">
                            <div class="col-md-6 offset-md-3 mt-3">
                                <button type='submit' class="btn btn-primary"
                                    onclick="confirmSubmit(event)">Submit</button>
                                <button type='reset' class="btn btn-success">Reset</button>
                                <a href="/data-master2" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection

@section('post_script')
    <script>
        tambahUserMain()
    </script>
@endsection
