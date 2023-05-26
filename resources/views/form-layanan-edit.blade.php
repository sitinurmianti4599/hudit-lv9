@extends('layout/main-layout')
@section('title', 'Tambah-Akun')

@section('konten')

<div class="row mt-5">
    <div class="col-md-8 col-sm-12 mt-5" style="margin: 0 auto; ">
        <div class="x_panel me-2" style="background:url(assets/images/pattern_h.png); ">
            <div class="x_content">
                <div class="x_title">
                    <h2 class="fw-normal fs-4">Edit Data Layanan</h2>
                    <ul class="nav navbar-right panel_toolbox d-flex justify-content-end">
                      <li><a href="" class="btn btn-danger p-2 fw-bold text-light">Hapus Data</a></li>  
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                <form class="form mt-4" action="" method="post"  >
                    {{-- <div class="clear-fix"></div>
                    <span class="section">Edit Data Layanan</span> --}}
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Layanan</label>
                        <div class="col-md-6 col-sm-6" >
                            <input class="form-control" type="text" name="nama-layanan" required="required" />
                        </div>
                    </div>
                    <div class="col-md-12 field  form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Harga</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" name="harga"  required="required" type="number" /></div>
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
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Daftar Berkas</label>
                        <div class="col-md- col-sm-6 mt-2">
                            {{-- dri tabel berkas, tampilkan semua daftar isi tabel berkas untuk di pilih --}}
                            <div class="checkbox col-auto ">
                                <label>
                                    <input type="checkbox" class="flat" checked> NPWP
                                </label>
                            </div>
                            <div class="checkbox col-auto">
                                <label>
                                    <input type="checkbox" class="flat" checked> BPJS Ketenagakerjaan
                                </label>
                            </div>
                            <div class="checkbox col-auto">
                                <label>
                                    <input type="checkbox" class="flat" checked> SK MENKUMHAM
                                </label>
                            </div>
                            <div class="checkbox col-auto">
                                <label>
                                    <input type="checkbox" class="flat" checked> Akta Pendiriian
                                </label>
                            </div>
                            <div class="checkbox col-auto">
                                <label>
                                    <input type="checkbox" class="flat"> NIB
                                </label>
                            </div>
                            <div class="checkbox col-auto">
                                <label>
                                    <input type="checkbox" class="flat"> SKDP (Surat Izin Domisili)
                                </label>
                            </div>
                            <div class="checkbox col-auto">
                                <label>
                                    <input type="checkbox" class="flat"> SIUP (Surat Izin Usaha)
                                </label>
                            </div>

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