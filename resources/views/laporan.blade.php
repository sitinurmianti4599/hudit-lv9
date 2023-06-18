@extends('layout/main-layout')
@section('title', 'Laporan Tahunan')

@section('konten')
    <div class="midde_cont">
        <div class="container-fluid">
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

        <div class="row row-cols-sm-8 row-cols-md-12">
            @php
                $count = 0;
            @endphp
            @foreach ($service_types as $service_type)
                <div class="col">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="card-title">
                                <span>{{ $service_type->name }}</span>
                                <h1 class="text-warning fw-bolder">
                                    {{ $service_type->count }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $count += $service_type->count;
                @endphp
            @endforeach

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <span>Total Keseluruhan</span>
                            <h1 class="text-info fw-bolder">{{ $count }}</h1>
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
                        <h2>Data Laporan </h2>
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
                                                <th>Kode reg</th>
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
                                            @foreach ($reports as $report)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $report->registration }}</td>
                                                    <td>{{ $report->name }}</td>
                                                    <td>{{ $report->address }}</td>
                                                    <td>{{ $report->telp }}</td>
                                                    <td>{{ $report->job }}</td>
                                                    <td>{{ $report->service }}</td>
                                                    <td>{{ $report->service_type }}</td>
                                                    <td>{{ $report->order_date }}</td>
                                                    <td>{{ $report->done_date }}</td>
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

        </div>


    </div>



@endsection
