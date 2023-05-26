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
                      <li><a href="" class="btn btn-danger p-2 fw-bold text-light">Hapus Data</a></li>  
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                <form class="form mt-4" action="" method="post"  >
                    {{-- <span class="section">Edit Data Akun</span> --}}
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Username</label>
                        <div class="col-md-6 col-sm-6" >
                            <input class="form-control" value="" name="Username" />
                        </div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Email</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control"value="" name="email" class='email' type="email" /></div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="control-label col-md-3 col-sm-3 label-align">Role</label>
                        <div class="col-md-6 col-sm-6 ">
                           
                                <select class="form-select" >
                                <option>Pilih posisi</option>
                                <option>Admin</option>
                                <option>Penaggung jawab</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="text" class='alamat' value="" name="alamat" data-validate-linked='alamat' /></div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Tgl_lahir</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='date' type="date" value="" name="date"></div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Telp / Wa</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='telp' type="number" value="" name="telp"></div>
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