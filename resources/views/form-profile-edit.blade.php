@extends('layout/main-layout')
@section('title', 'Edit-Akun')

@section('konten')

    <div class="row mt-5">
        <div class="col-md-8 col-sm-12 mt-5" style="margin: 0 auto; ">
            <div class="x_panel me-2" style="background:url(assets/images/pattern_h.png); ">
                <div class="x_content">
                    <div class="x_title">
                        <h2 class="fw-normal fs-4">Edit Data Profile</h2>

                        <div class="clearfix"></div>
                    </div>
                    <form class="form mt-4" action="{{ route('web.profile.update') }}" method="post"
                        enctype="multipart/form-data" id="upd">
                        @csrf
                        @method('PATCH')
                        {{-- <span class="section">Edit Data Akun</span> --}}
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
                            <label class="control-label col-md-3 col-sm-3 label-align">Role</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" value="Penanggung jawab" name="{{ $user->role->name }}"
                                    readonly />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" class='alamat' value="{{ $user->address }}"
                                    name="address" data-validate-linked='alamat' />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Tgl_lahir</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" class='date' type="date" value="{{ $user->date_of_birth }}"
                                    name="date_of_birth">
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Email</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control"value="{{ $user->email }}" name="email" class='email'
                                    type="email" />
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Telp / Wa</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" class='telp' type="telp" value="{{ $user->telp }}"
                                    name="telp">
                            </div>
                        </div>
                        <div class="col-md-12 field  form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Foto</label>
                            <div class="col-md-6 col-sm-6">
                            @if($user->photo)
                                    <img src="{{ $user->photo_url }}" class="img-preview img-fluid" alt="{{$user->photo_name}}">
                                @else
                                <!-- <span></span>   -->
                                    <img class="img-preview img-fluid">
                                 @endif
                                <input class="form-control" class='photo' type="file" name="photo" id="dokmen"  onchange="previewImage()">
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 offset-md-3 mt-3">
                                <button type='submit' class="btn btn-info" onclick="confirmSubmitEdit(event)" >Update</button>
                                <a href="{{ route('web.profile.show') }}" class="btn btn-warning">Cancel</a>
                            </div>
                        </div>
                        <x-error-validate></x-error-validate>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
