@extends('layout/main-layout')
@section('title', 'Pelanggan')

@section('konten')
<div class="midde_cont" >
   <div class="container-fluid">
    <div class="row column_title mt-5 m-1 p-1">
      <div class="col-md-12">
         <div class="page_title mt-3">
               <h2>Data Pelanggan</h2>
            </div>
         </div>
      </div>
      </div>
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_content">
            <strong>PELANGGAN - PENDIRIAN BADAN USAHA</strong>
            <a href="/form-pelanggan-tambah"><button type="button" class="btn btn-outline-secondary mb-2" style="float: right">Tambah Data + </button></a>
            <br><br>
            <div class="card-box table-responsive">
              
              <table class="table table-bordered jambo_table p-2 fs-6 text-center">
                <thead>
                  <tr class="headings">
                    <th>No</th>
                    <th class="column-title">Nama </th>
                    <th class="column-title">No. Regis</th>
                    <th class="column-title">Layanan </th>
                    <th class="column-title">Tanggal Order</th>
                    <th class="column-title col-3">Progress</th>
                    <th class="column-title">Status</th>
                    <th class="column-title">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr class="even pointer">
                    <td class="a-center ">1</td>
                    <td class=" ">Tanti</td>
                    <td class=" ">11828638</td>
                    <td class=" ">Legal Drafting</td>
                    <td class=" ">04/05/2022</td>
                    <td class=" ">
                      <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="border-radius: 20px">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger " style="width: 15%">15%</div>
                      </div>
                    </td>
                    <td><span class="text-warning fs-6 fw-bold">On Progress</span></td>
                    
                    <td class=" "><a href="detail-pelanggan" class="btn btn-outline-info p-1 fw-bold">View</a> 
                    </td>
                  </tr>
                    <tr class="even pointer">
                        <td class="a-center ">1</td>
                        <td class=" ">Tanti</td>
                        <td class=" ">11828638</td>
                        <td class=" ">Legal Drafting</td>
                        <td class=" ">04/05/2022</td>
                        <td class=" ">
                          <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="border-radius: 20px">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning " style="width: 50%">50%</div>
                          </div>
                        </td>
                        <td><span class="text-warning fs-6 fw-bold">On Progress</span></td>
                        <td class=" "><a href="#" class="btn btn-outline-info p-1 fw-bold">View</a> </td>
                      </tr>
                      <tr class="odd pointer">
                        <td class="a-center ">2</td>
                        <td class=" ">Tanti</td>
                        <td class=" ">11828638</td>
                        <td class=" ">PENDIRIAN STARTUP</td>
                        <td class=" ">04/05/2022</td>
                        <td class=" ">
                          <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="border-radius: 20px">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary " style="width: 75%">75%</div>
                          </div>
                        </td>
                        <td><span class="text-warning fs-6 fw-bold">On Progress</span></td>
                        <td class=" "><a href="#" class="btn btn-outline-info p-1 fw-bold">View</a> 
                        </td>
                      </tr>
                      
                      <tr class="odd pointer">
                        <td class="a-center ">2</td>
                        <td class=" ">Tanti</td>
                        <td class=" ">11828638</td>
                        <td class=" ">PENDIRIAN STARTUP</td>
                        <td class=" ">04/05/2022</td>
                        <td class="">
                          <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="border-radius: 20px">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success " style="width: 100%">100%</div>
                          </div>
                        </td>
                        <td><span class="text-success fs-6 fw-bold">Done</span></td>
                        <td class=" "><a href="#" class=" btn btn-outline-info p-1 fw-bold">View</a> 
                        </td>
                      </tr>
                     
                
                </tbody>
              </table>
            </div>
                    
                
          </div>
        </div>
      </div>

   </div>
       

@endsection