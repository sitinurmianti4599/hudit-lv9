@extends('layout/main-layout')
@section('title', 'Tambah-Akun')

@section('konten')

<div class="row mt-5">
    <div class="col-md-8 col-sm-12 mt-5" style="margin: 0 auto; ">
        <div class="x_panel me-2" style="background:url(assets/images/pattern_h.png); ">
            <div class="x_content">
                <form class="form" action="" method="post"  >
                    <div class="clear-fix"></div>
                    <span class="section">Tambah Data Berkas</span>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Berkas</label>
                        <div class="col-md-6 col-sm-6" >
                            <input class="form-control" type="text" name="nama-berkas" required="required" />
                        </div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Lokasi Pengurusan</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" name="lokasi"  required="required" type="text" /></div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Estimasi Waktu</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="text" name="waktu"  required='required' /></div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nama PJ</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="text" name="nama-pj" required='required'></div>
                    </div>
                    <div class="ln_solid">
                        <div class="form-group">
                            <div class="col-md-6 offset-md-3 mt-3">
                                <button type='submit' class="btn btn-primary">Submit</button>
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