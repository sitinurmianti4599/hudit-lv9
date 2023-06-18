@extends('layout/main-layout')
@section('title', 'Layanan')
@section('konten')
    <div class="midde_cont">
        <div class="container-fluid">
            <div class="row column_title mt-5 m-1 p-1">
                <div class="col-md-12">
                    <div class="page_title mt-4">
                        <h2>Pelayanan</h2>
                    </div>
                </div>
            </div>
            <div class="row column1 ">
                @foreach ($stats as $stat)
                    <div class="col-md-8 col-lg-4" >
                        <div class="full counter_section margin_bottom_30 ">
                            <div class="couter_icon ">
                                <div class="pbu w-100" >
                                @if ($stat->name === "Pendirian Badan Hukum")
                                 <img src="assets/images/BD.png" class="w-100" alt="">                  
                                @elseif ($stat->name === "Keperluan Hukum Perusahaan")
                                 <img src="assets/images/HP1.png" class="w-100" alt="">                  
                                @elseif ($stat->name === "Keperluan Hukum Perorangan")
                                 <img src="assets/images/HP.png" class="w-100" alt="">                                          
                                @endif
                                </div>
                            </div>
                            <div class="counter_no" style="margin-right:20px;">
                                <div>
                                    <p class="total_no">{{ $stat->count }}</p>
                                    <p class="head_couter2 fs-5 mt-2 me-5"><a href="{{ route('web.customer.index', ['service_type' => $stat->id]) }}">{{ $stat->name }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach  
            </div>
        </div>

        @can('data_master_show', auth()->user())
        {{-- tabel selesai --}}
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Selesai</h2>
                    <ul class="nav navbar-right panel_toolbox d-flex justify-content-end">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row ">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered fs-6 text-center"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Kode Reg</th>
                                            <th>Layanan</th>
                                            <th>Jenis Layanan</th>
                                            <th>Tgl Order</th>
                                            <th>Tgl Selesai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customers as $customer)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $customer->name }}</td>
                                                <td>{{ $customer->registration }}</td>
                                                <td>{{ $customer->service->name }}</td>
                                                <td>{{ $customer->service_type->name }}</td>
                                                <td>{{ date('d M Y', strtotime($customer->order_date)) }}</td>
                                                <td>{{ $customer->done_date ?? date('d M Y', strtotime($customer->order_date)) }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endcan


    </div>


@endsection
