@extends('layout/main-layout')
@section('title', 'Laporan Tahunan')

@section('konten')
<div class="midde_cont" >
  <div class="container-fluid" >
    <div class="row column_title mt-5 m-1 p-1">
      <div class="col-md-12 col-sm-12">
         <div class="page_title mt-3 w-auto" style="height:85px;">
           <div style="float: left; width:10%; ">
            <h2>Laporan</h2>
          </div>
          
          </div>
        </div>
      </div>
    </div>

    <div class="row row-cols-sm-8 row-cols-md-12" >
      <div class="col">
        <div class="card mb-2">
          <div class="card-body">
            <div class="card-title">
                <span>Pendirian B. Usaha</span>
                <h1 class="text-warning fw-bolder">12</h1> 
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <div class="card-body">
            <div class="card-title">
              <span>Hukum Perusahaan</span>
              <h1 class="text-warning fw-bolder">10</h1>  
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <div class="card-body">
            <div class="card-title">
              <span>Hukum Perorangan</span>
                <h1 class="text-warning fw-bolder">23</h1> 
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <div class="card-body">
            <div class="card-title">
              <span>Total Keseluruhan</span>
              <h1 class="text-info fw-bolder">45</h1> 
            </div>
          </div>
        </div>
      </div>

    </div>
    <br>

    
      
      {{-- tabel selesai --}}
      <div class="clearfix"></div>

      <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel me-2">
          <div class="x_title">
            <h2>Data Laporan <small>Tahun 2022</small></h2>
            <ul class="nav navbar-right panel_toolbox d-flex justify-content-end">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <div class="row">
                  <div class="col-sm-12">
                    <div class="card-box table-responsive ">
                      
                      
            <table id="datatable-buttons" class="table table-striped table-bordered w-100">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>No reg</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Telp</th>
                  <th>Pekerjaan</th>
                  <th>Layanan</th>
                  <th>Jenis Layanan</th>
                  <th>Tgl Order</th>
                  <th>Tgl Selesai</th>
                </tr>
              </thead>


              <tbody>
                <tr>
                  <td>1</td>
                  <td>12242242</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>63</td>
                  <td>2011/07/25</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                  <td>$170,750</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>San Francisco</td>
                  <td>66</td>
                  <td>2009/01/12</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                  <td>$86,000</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Cedric Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>Edinburgh</td>
                  <td>22</td>
                  <td>2012/03/29</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                  <td>$433,060</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Airi Satou</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>33</td>
                  <td>2008/11/28</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                  <td>$162,700</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Brielle Williamson</td>
                  <td>Integration Specialist</td>
                  <td>New York</td>
                  <td>61</td>
                  <td>2012/12/02</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                  <td>$372,000</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Herrod Chandler</td>
                  <td>Sales Assistant</td>
                  <td>San Francisco</td>
                  <td>59</td>
                  <td>2012/08/06</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                  <td>$137,500</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Rhona Davidson</td>
                  <td>Integration Specialist</td>
                  <td>Tokyo</td>
                  <td>55</td>
                  <td>2010/10/14</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                  <td>$327,900</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Colleen Hurst</td>
                  <td>Javascript Developer</td>
                  <td>San Francisco</td>
                  <td>39</td>
                  <td>2009/09/15</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                  <td>$205,500</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Sonya Frost</td>
                  <td>Software Engineer</td>
                  <td>Edinburgh</td>
                  <td>23</td>
                  <td>2008/12/13</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                  <td>$320,800</td>
                  <td>$103,600</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>Jena Gaines</td>
                  <td>Office Manager</td>
                  <td>London</td>
                  <td>30</td>
                  <td>2008/12/19</td>
                  <td>$90,560</td>
                  <td>$90,560</td>
                  <td>$90,560</td>
                  <td>$90,560</td>
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

   
</div>

       

@endsection