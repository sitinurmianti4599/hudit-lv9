@extends('layout/main-layout')
@section('title', 'Detail Pelanggan')

@section('konten')

<div class="row" style="margin-top: 60px;">
    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_title">
          <h2 class="fw-bold">Detail Pelanggan : </h2>
          <ul class="nav navbar-right panel_toolbox d-flex justify-content-end">
            <li><a href="/form-pelanggan-edit" class="btn btn-info p-2 fw-bold text-light">Edit</a></li>
            <li><a href="" class="btn btn-danger p-2 fw-bold text-light">Hapus</a></li>  
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <section class="content">
           
            <table class="table table-borderless ">
                <tr>
                  <th >Nama</th>
                  <th>:</th>
                  <td>Siti Nurmianti</td>

                  <th >Pekerjaan</th>
                  <th>:</th>
                  <td>Mahasiswi</td>
                </tr>
                <tr>
                  <th >No. Telp</th>
                  <th>:</th>
                  <td>0829832948</td>

                  <th >Jenis Layanan</th>
                  <th>:</th>
                  <td>Pendirian Badan Usaha</td>
                  
                </tr>
                <tr>
                  
                  <th >Alamat</th>
                  <th>:</th>
                  <td>Bontonompo</td>

                  <th >Layanan</th>
                  <th>:</th>
                  <td>Pendirian STARTUP</td>
                </tr>
                <tr>
                  <th >Tgl Order</th>
                  <th>:</th>
                  <td>04/05/2023</td>

                  <th >Perkiraan Selesai</th>
                  <th>:</th>
                  <td>04/09/2023</td>
                </tr>
                {{-- <tr>
                  <td colspan="6"><a href="" class="btn btn-info p-2 fw-bold">Edit</a><a href="" class="btn btn-danger p-2 fw-bold">Hapus</a></td>
                </tr> --}}
                
            </table>

           
            <div class="row">
              <div class="col-sm-12">
                <h3 class="fw-bold" ><center>Monitoring Berkas</center></h3>
                <div class="card-box table-responsive2">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap2 p-3 fs-6" cellspacing="0" width="100%">
                    
                        <thead class="hd">
                        <tr>
                          <th>No</th>
                          <th>Berkas</th>
                          <th>Lokasi</th>
                          <th>Status</th>
                          <th>Dokumentasi </th>
                          <th>PJ</th>
                          <th>Tgl Pengajuan </th>
                          <th>Tgl Selesai </th>
                          <th>Keterangan </th>
                          <th><span class="">Action</span>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Akta Pendirian</td>
                          <td>Kantor ...</td>
                          <td><span class="text-success fs-6 fw-bold">Done</span></td>
                          <td>-</td>
                          <td>Naya</td>
                          <td>04/05/2023</td>
                          <td>04/05/2023</td>
                          <td>-</td>
                          <td><a href="/form-monitor-berkas-edit" class="btn btn-outline-warning p-1  w-100 fw-bold">Edit</a></td>
                        </tr>
                         <tr>
                          <td>2</td>
                          <td>SK Menkumham</td>
                          <td>Kantor</td>
                          <td><span class="text-warning fs-6 fw-bold">Process</span></td> 
                          <td>-</td>
                          <td>Soba</td>
                          <td>04/05/2023</td>
                          <td>04/05/2023</td>
                          <td>-</td>
                          <td><a href="/form-monitor-berkas-edit" class="btn btn-outline-warning p-1 w-100 fw-bold">Edit</a></td>
                        </tr>
                          <tr>
                          <td>3</td>
                          <td>NPWP</td>
                          <td>Kantor Pajak</td>
                          <td><span class="text-danger fs-6 fw-bold">Pending</span></td>  
                          <td>-</td>
                          <td>Soba</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                          <td><a href="/form-monitor-berkas-edit" class="btn btn-outline-warning p-1 w-100 fw-bold">Edit</a></td>
                        </tr>
                         <tr>
                          <td>4</td>
                          <td>NIB</td>
                          <td>Kantor</td>
                          <td><span class="text-danger fs-6 fw-bold">Pending</span></td>  
                          <td>-</td>
                          <td>Naya</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                          <td><a href="/form-monitor-berkas-edit" class="btn btn-outline-warning p-1 w-100 fw-bold">Edit</a></td>
                        </tr>
                          <tr>
                          <td>5</td>
                          <td>SKDP (Surat Izin Domisili)</td>
                          <td>Kantor Lurah</td>
                          <td><span class="text-danger fs-6 fw-bold">Pending</span></td>  
                          <td>-</td>
                          <td>Tanti</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                          <td><a href="/form-monitor-berkas-edit" class="btn btn-outline-warning p-1 w-100 fw-bold">Edit</a></td>
                        </tr>
                         <tr>
                          <td>6</td>
                          <td>BPJS Ketenagakerjaan</td>
                          <td>Kantor BPJS</td>
                          <td><span class="text-danger fs-6 fw-bold">Pending</span></td>  
                          <td>-</td>
                          <td>Tanti</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                          <td><a href="/form-monitor-berkas-edit" class="btn btn-outline-warning p-1 w-100 fw-bold">Edit</a></td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td>SIUP (Surat Izin Usaha)</td>
                          <td>Kantor Perizinan</td>
                          <td><span class="text-danger fs-6 fw-bold">Pending</span></td>  
                          <td>-</td>
                          <td>Tanti</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                          <td><a href="/form-monitor-berkas-edit" class="btn btn-outline-warning p-1 w-100 fw-bold">Edit</a></td>
                        </tr>
                        
                      </tbody>
                    </table>	
            </div>
            
       </div> 

      </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  

@endsection