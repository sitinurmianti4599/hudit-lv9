@extends('layout/main-layout')
@section('title', 'Pelanggan')

@section('konten')
    <div class="midde_cont">
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
                    @can('data_master_show', auth()->user())
                    <strong class="fs-5" style="text-transform: capitalize;">Verifikasi Data Pelanggan</strong>
                          <br><br>
                    <div class="card-box table-responsive">
                        <table class="table table-bordered jambo_table p-2 fs-6 text-center">
                    @endcan
                    @can('data_master_show_pj', auth()->user())
                    <div class="card-box table-responsive2">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap2 p-3 fs-6 mb-2"
                                        cellspacing="0" width="100%">
                    @endcan
                            <thead class="">
                                <tr class="headings">
                                    <th>No</th>
                                    <th class="column-title">Nama </th>
                                    <th class="column-title">Alamat</th>
                                    <th class="column-title">Pekerjaan</th>
                                    <th class="column-title">No. WA</th>
                                    <th class="column-title">Email</th>
                                    <th class="column-title">Layanan </th>
                                    
                                    <th class="column-title">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @can('data_master_show', auth()->user())
                                    @foreach ($customers as $customer)
                                        <tr class="even pointer">
                                            <td class="a-center">{{ $loop->iteration }}</td>
                                            <td class=" ">{{ $customer->name }}</td>
                                            <td class=" ">{{ $customer->address }}</td>
                                            <td class=" ">{{ $customer->job }}</td>
                                            <td class=" ">{{ $customer->telp }}</td>
                                            <td class=" ">Email@gmail.com</td>
                                            <td>{{ $customer->service->name }}</td>
                                            <td>
                                            <a href="#"> <i class="fa fa-check-square-o text-success fs-4" ></i></a>
                                            <a href="#"><i class="fa fa-times-circle-o text-danger fs-4" ></i></a>
                                            <!-- <button type="button" class="btn btn-success"> <i class="fa fa-check" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button> -->
                                            </td>
                                        </tr>
                                    @endforeach
                                @endcan

                                
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>

    </div>


@endsection
