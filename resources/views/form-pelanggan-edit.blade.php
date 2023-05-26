@extends('layout/main-layout')
@section('title', 'Tambah-Akun')

@section('konten')

<div class="row mt-5">
    <div class="col-md-8 col-sm-12 mt-5" style="margin: 0 auto; ">
        <div class="x_panel me-2" style="background:url(assets/images/pattern_h.png); ">
            <div class="x_content">
                <form class="form" action="" method="post"  >
                    <div class="clear-fix"></div>
                    <span class="section">Edit Data Pelanggan</span>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nama</label>
                        <div class="col-md-6 col-sm-6" >
                            <input class="form-control"  name="nama" required="required" />
                        </div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="text" class='alamat' name="alamat" required='required' /></div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Pekerjaan</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="text" class='pekerjaan' name="pekerjaan"  required='required' /></div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Telp / Wa</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='telp' type="number" name="telp" required='required'></div>
                    </div>
                    
                    <div class="col-md-12 field  form-group">
                        <label class="control-label col-md-3 col-sm-3 label-align">Jenis Layanan</label>
                        <div class="col-md-6 col-sm-6 ">
                           
                                <select class="form-select" >
                                <option>Pilih Jenis Layanan</option>
                                <option>Pendirian Badan Usaha</option>
                                <option>Keperluan Hukum Perusahaan</option>
                                <option>Keperluan Hukum Perorangan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        {{-- yang tampil adalah list layanan dari jenis layanan yang dipilih contoh dibawah jenis
                            layanan yang di pilih itu pendirian badan usaha--}}
                        <label class="control-label col-md-3 col-sm-3 label-align">Layanan</label>
                        <div class="col-md-6 col-sm-6 ">
                           
                                <select class="form-select" >
                                <option>Pilih Layanan</option>
                                <option>Pendirian PT</option>
                                <option>Pendirian CV</option>
                                <option>Pendirian Startup</option>
                                <option>Pendirian Yayasan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Tgl order</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='date' type="date" name="date" required='required'></div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Perkiraan selesai</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='date' type="date" name="date" required='required'></div>
                    </div>
                   
                    <div class="form-group">
                        <div class="col-md-6 offset-md-3 mt-3">
                            <button type='submit' class="btn btn-info">Update</button>
                            <a href="/detail-pelanggan" class="btn btn-warning">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




@endsection