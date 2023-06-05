@extends('layout/layout-user')
@section('title', 'Result')

@inject('Carbon', 'Illuminate\Support\Carbon')
@section('konten')
    <div class="title-cek ">
        <div class="cover-cek">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logohd.png" alt="Logo" height="40" class="d-inline-block align-text-top">
            </a>

            <div class="clear-fix"></div>
            <div class="col-md-12 col-sm-12 mt-5 p-3 ">
                <div class="x_panel mt-5 p-1  ">

                    <div class="x_content mt-5">
                        <div class="row mt-5 ">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive2 w-100 p-3">
                                    <table id="datatable-responsive"
                                        class="table table-striped table-bordered dt-responsive nowrap2  ck" cellspacing="0"
                                        width="100%" style="border:transparent !important;">
                                        <thead class="hd">
                                            <tr>
                                                <th class="text-start">Nama</th>
                                                <th class="text-start">Status &nbsp;&nbsp;</th>
                                                <th class="text-start">No Regis &nbsp;&nbsp;</th>
                                                <th class="text-start">Layanan &nbsp;&nbsp;</th>
                                                <th class="text-start">Tgl Order &nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-white">{{ $customer->name }}</td>
                                                <td class="text-white">
                                                    <span class="text-warning fw-bold">
                                                        {{ $customer->status }}
                                                    </span>
                                                </td>
                                                <td class="text-white"> {{ $customer->telp }}</td>
                                                <td class="text-white"> {{ $customer->service->name }}</td>
                                                <td class="text-white">
                                                    {{ date('d M Y', strtotime($customer->order_date)) }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="x_title" style="margin-top:-200px;">
                                        <h2>Progress</h2>
                                        <center>

                                            <div class="progress-stacked w-75">
                                                <div class="progress" role="progressbar"
                                                    aria-label="Animated striped example Segment one" aria-valuenow="15"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                                                    <div
                                                        class="progress-bar progress-bar-striped progress-bar-animated bg-danger  fw-bold">
                                                        25%</div>
                                                </div>
                                                <div class="progress" role="progressbar"
                                                    aria-label="Animated striped example Segment two" aria-valuenow="30"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                                                    <div
                                                        class="progress-bar progress-bar-striped progress-bar-animated bg-warning  fw-bold">
                                                        25%</div>

                                                </div>
                                                <div class="progress" role="progressbar"
                                                    aria-label="Animated striped example Segment three" aria-valuenow="20"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                                                    <div
                                                        class="progress-bar progress-bar-striped progress-bar-animated bg-info   fw-bold">
                                                        25%</div>

                                                </div>
                                            </div>


                                            <div class="progress w-75 mt-4 mb-3" role="progressbar"
                                                aria-label="Animated striped example" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100" style="border-radius: 20px;">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success fw-bold"
                                                    style="width: {{ $customer->progress }}%;">{{ $customer->progress }}%</div>
                                            </div>

                                        </center>

                                        <div>
                                            <div class="clear-fix"></div>
                                            <b class="text-white mb-5">Keterangan : </b>
                                            <div class="ms-5 mb-2">
                                                <ul class="ms-5 fw-bold text-light" style="list-style: disc;">
                                                    @foreach ($customer->submissions as $submission)
                                                        <li>{{ $submission->file->name }} : <span
                                                                class="text-primary fs-6 fw-bolder ">
                                                                {{ $submission->status }}</span></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <br><br>
                                        <center>
                                            @php
                                                $day = 0;
                                                foreach ($customer->service->files as $file) {
                                                    $day += $file->day_estimate;
                                                }
                                            @endphp
                                            <span class="text-center text-white mt-5">*Perkiraan Selesai Pada Tanggal
                                                {{ $Carbon::parse($customer->order_date)->addDays($day)->format('d M Y') }}</span>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
