@extends('layout/main-layout')
@section('title', 'Edit-Akun')

@section('konten')

<div class="row mt-5">
    <div class="col-md-8 col-sm-12 mt-5" style="margin: 0 auto; ">
        <div class="x_panel me-2" style="background:url(assets/images/pattern_h.png); ">
            <div class="x_content">
                <div class="x_title">
                    <h2 class="fw-normal fs-4">Edit Data Berkas Monitoring</h2>
                    <div class="clearfix"></div>
                  </div>
                <form class="form mt-4" action="" method="post"  >
                    {{-- <div class="clear-fix"></div>
                    <span class="section">Edit Data Berkas</span> --}}
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Berkas</label>
                        <div class="col-md-6 col-sm-6" >
                            <input class="form-control" type="text" value="dari tabel berkas" name="nama-berkas" required="required" disabled />
                        </div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Lokasi Pengurusan</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" value="dari tabel berkas" name="lokasi"  required="required" type="text" disabled /></div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="control-label col-md-3 col-sm-3 label-align">Status</label>
                        <div class="col-md-6 col-sm-6 ">
                           
                                <select class="form-select" >
                                <option >Pilih Status Berkas</option>
                                <option class="text-danger fs-6 fw-bold">Pending</option>
                                <option class="text-warning fs-6 fw-bold">Process</option>
                                <option class="text-success fs-6 fw-bold">Done</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Dokumentasi</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="file" value="" name="dokmen"  required='required' /></div>
                    </div>
                    
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nama PJ</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="text" value="dari tabel berkas" name="nama-pj" required='required' disabled></div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Tgl Pengajuan</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='date' type="date" name="date" required='required'></div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Tgl Selesai</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='date' type="date" name="date" required='required'></div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Keterangan</label>
                        <div class="col-md-6 col-sm-6">
                            {{-- <input class="form-control" type="textarea" name="nama-pj" required='required' ></div> --}}
                            <textarea id="message" required="required" class="form-control " name="message" ></textarea>
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