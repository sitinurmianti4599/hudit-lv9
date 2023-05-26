@extends('layout/main-layout')
@section('title', 'Layanan')

@section('konten')
<div class="midde_cont" >
   <div class="container-fluid">
    <div class="row column_title mt-5 m-0 p-1">
      <div class="col-md-12">
         <div class="page_title mt-3">
               <h2>Data Master</h2>
            </div>
         </div>
      </div>
     
    </div>

      {{-- tabel akun --}}
    <div class=" col-md-12 col-sm-12" >
                <div class="x_panel" >
                  <div class="x_title ">
                    <h2>Data Akun</h2>
                    <ul class="nav navbar-right panel_toolbox d-flex justify-content-end">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
              <div class="x_content">
                <div class="row">
                  <div class="col-sm-12">
                    <a href="/form-akun-tambah"><button type="button" class="btn btn-outline-secondary mb-2" style="float: right">Tambah Data + </button></a>
                    <br><br>
                   <div class="card-box table-responsive"> 
                    <table  class="table table-bordered dt-responsive nowrap2 p-3 fs-6 mb-3" cellspacing="0" width="100%">
                      <thead class="hd text-light" style="background-color: #15283c;">
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Posisi</th>
                          <th>Alamat</th>
                          <th>No. Telp</th>
                          <th><span class="">Action</span>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Siti Nurmianti</td>
                          <td>Tanti</td>
                          <td>Sitinurmianti4599@gmail.com</td>
                          <td>Admin</td>
                          <td>Bontonompo</td>
                          <td>08033894838994</td>
                          <td><a href="/form-akun-edit" class="btn btn-outline-warning p-1  w-100 fw-bold">Edit</a></td>
                        </tr>
                         <tr>
                          <td>2</td>
                          <td>Nurmilayanti</td>
                          <td>Mila</td>
                          <td>nurmilayyanti@gmail.com</td>
                          <td>Pj</td>
                          <td>Samata</td>
                          <td>08033894838994</td>
                          <td><a href="/form-akun-edit" class="btn btn-outline-warning p-1 w-100 fw-bold">Edit</a></td>
                        </tr>
                          <tr>
                          <td>3</td>
                          <td>Siti Nurmianti</td>
                          <td>Tanti</td>
                          <td>Sitinurmianti4599@gmail.com</td>
                          <td>Admin</td>
                          <td>Bontonompo</td>
                          <td>08033894838994</td>
                          <td><a href="/form-akun-edit" class="btn btn-outline-warning p-1 w-100 fw-bold">Edit</a></td>
                      </tbody>
                    </table>
					  </div>
          </div>
          </div>	
        </div>
       </div> 
      </div>


       {{-- tabel layanan --}}
    <div class=" col-md-12 col-sm-12" >
                <div class="x_panel" >
                  <div class="x_title ">
                    <h2>Data Layanan</h2>
                    <ul class="nav navbar-right panel_toolbox d-flex justify-content-end">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
              <div class="x_content">
                <div class="row">
                  <div class="col-sm-12">
                    <a href="/form-layanan-tambah"><button type="button" class="btn btn-outline-secondary mb-2" style="float: right">Tambah Data + </button></a>
                    <br><br>
                   <div class="card-box table-responsive"> 
                    <table  class="table table-bordered dt-responsive nowrap2 p-3 fs-6 mb-3" cellspacing="0" width="100%" >
                      <thead class="hd text-light" style="background-color: #15283c;">
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Harga</th>
                          <th>Jenis Layanan</th>
                          <th>Daftar Berkas</th>
                          <th>Akumulasi Waktu</th>
                          <th><span class="">Action</span>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Pendirian StartUp</td>
                          <td>RP. 5.500.000</td>
                          <td>Pendirian Badan Hukum</td>
                          <td>
                            <ol>
                              <li>NPWP</li>
                              <li>SIUP</li>
                              <li>BPJS Ketenagakerjaan</li>
                              <li>SK MENKUMHAM</li>
                              <li>DLL</li>
                            </ol>
                          </td>
                          <td>30 Hari</td>
                          <td><a href="/form-layanan-edit" class="btn btn-outline-warning p-1  w-100 fw-bold">Edit</a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Haki</td>
                          <td>RP. 2.800.000</td>
                          <td>Keperluan Hukum Perusahaan</td>
                          <td>
                            <ol>
                              <li>NPWP</li>
                              <li>SIUP</li>
                              <li>BPJS Ketenagakerjaan</li>
                              <li>SK MENKUMHAM</li>
                              <li>DLL</li>
                            </ol>
                          </td>
                          <td>35 Hari</td>
                          <td><a href="/form-layanan-edit" class="btn btn-outline-warning p-1  w-100 fw-bold">Edit</a></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Surat Perjanjian</td>
                          <td>RP. 200.000</td>                          
                          <td>Keperluan Hukum Perorangan</td>

                          <td>
                            <ol>
                              <li>NPWP</li>
                              <li>SIUP</li>
                              <li>BPJS Ketenagakerjaan</li>
                              <li>SK MENKUMHAM</li>
                              <li>DLL</li>
                            </ol>
                          </td>
                          <td>25 Hari</td>
                          <td><a href="/form-layanan-edit" class="btn btn-outline-warning p-1  w-100 fw-bold">Edit</a></td>
                        </tr>
                      </tbody>
                    </table>
					  </div>
          </div>
          </div>	
        </div>
       </div> 
      </div>
         
       {{-- tabel berkas --}}
    <div class=" col-md-12 col-sm-12 mb-4" >
                <div class="x_panel" >
                  <div class="x_title ">
                    <h2>Data Berkas</h2>
                    <ul class="nav navbar-right panel_toolbox d-flex justify-content-end">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
              <div class="x_content">
                <div class="row">
                  <div class="col-sm-12">
                    <a href="/form-berkas-tambah"><button type="button" class="btn btn-outline-secondary mb-2" style="float: right">Tambah Data + </button></a>
                    <br><br>
                   <div class="card-box table-responsive"> 
                    <table  class="table table-bordered dt-responsive nowrap2 p-3 fs-6 mb-3" cellspacing="0" width="100%" >
                      <thead class="hd text-light" style="background-color: #15283c;">
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Lokasi Pengurusan</th>
                          <th>Estimasi Waktu</th>
                          <th>PJ</th>
                          <th><span class="">Action</span>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>NPWP</td>
                          <td>Kantor Pajak</td>
                          <td>7 hari</td>
                          <td>Nurmilayanti</td>
                          <td><a href="/form-berkas-edit" class="btn btn-outline-warning p-1  w-100 fw-bold">Edit</a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>BPJS Ketenagakerjaan</td>
                          <td>Kantor BPJSk</td>
                          <td>12 hari</td>
                          <td>Inayah</td>
                          <td><a href="/form-berkas-edit" class="btn btn-outline-warning p-1  w-100 fw-bold">Edit</a></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>SK MENKUMHAM</td>
                          <td>Kantor </td>
                          <td>7 hari</td>
                          <td>Sobariah</td>
                          <td><a href="/form-berkas-edit" class="btn btn-outline-warning p-1  w-100 fw-bold">Edit</a></td>
                        </tr>
                      </tbody>
                    </table>
					  </div>
          </div>
          </div>	
        </div>
       </div> 
      </div>
</div>
       

@endsection