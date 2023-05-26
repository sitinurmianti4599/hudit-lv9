@extends('layout/main-layout')
@section('title', 'Tambah-Akun')

@section('konten')

<div class="row mt-5">
    <div class="col-md-8 col-sm-12 mt-5" style="margin: 0 auto; ">
        <div class="x_panel me-2" style="background:url(assets/images/pattern_h.png); ">
            <div class="x_content">
                <form class="form" action="" method="post"  >
                    <div class="clear-fix"></div>
                    <span class="section">Tambah Data Akun</span>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Username</label>
                        <div class="col-md-6 col-sm-6" >
                            <input class="form-control"  name="Username" required="required" />
                        </div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Email</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" name="email" class='email' required="required" type="email" /></div>
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
                            <input class="form-control" type="text" class='alamat' name="alamat" data-validate-linked='alamat' required='required' /></div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Tgl_lahir</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='date' type="date" name="date" required='required'></div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Telp / Wa</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='telp' type="number" name="telp" required='required'></div>
                    </div>
                        <div class="form-group">
                            <div class="col-md-6 offset-md-3 mt-3">
                                <button type='submit' class="btn btn-primary">Submit</button>
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