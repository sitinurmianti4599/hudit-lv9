@extends('layout/main-layout')
@section('title', 'Detail Pelanggan')

@section('konten')

    <div class="row" style="margin-top: 60px;">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2 class="fw-bold">Detail Pelanggan : </h2>
                    <ul class="nav navbar-right panel_toolbox d-flex justify-content-end">
                        <li><a href="{{ route('web.customer.edit', ['customer' => $customer]) }}"
                                class="btn btn-info p-2 fw-bold text-light">Edit</a></li>
                        <li>
                            <form class="contents" action="{{ route('web.customer.destroy', ['customer' => $customer]) }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger p-2 fw-bold text-light">Hapus</button>
                            </form>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <section class="content">

                        <table class="table table-borderless ">
                            <tr>
                                <th>Nama</th>
                                <th>:</th>
                                <td>{{ $customer->name }}</td>

                                <th>Pekerjaan</th>
                                <th>:</th>
                                <td>{{ $customer->job }}</td>
                            </tr>
                            <tr>
                                <th>No. Telp</th>
                                <th>:</th>
                                <td>{{ $customer->telp }}</td>

                                <th>Jenis Layanan</th>
                                <th>:</th>
                                <td>{{ $customer->service->type->name }}</td>
                            </tr>
                            <tr>

                                <th>Alamat</th>
                                <th>:</th>
                                <td>{{ $customer->address }}</td>

                                <th>Layanan</th>
                                <th>:</th>
                                <td>{{ $customer->service->name }}</td>
                            </tr>
                            <tr>
                                <th>Tgl Order</th>
                                <th>:</th>
                                <td>{{ date('d M Y', strtotime($customer->order_date)) }}</td>

                                <th>Perkiraan Selesai</th>
                                <th>:</th>
                                @php
                                    $day = 0;
                                    foreach ($customer->service->files as $file) {
                                        $day += $file->day_estimate;
                                    }
                                @endphp
                                <td>{{ $day }} hari</td>
                            </tr>
                            {{-- <tr>
                  <td colspan="6"><a href="" class="btn btn-info p-2 fw-bold">Edit</a><a href="" class="btn btn-danger p-2 fw-bold">Hapus</a></td>
                </tr> --}}

                        </table>


                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="fw-bold">
                                    <center>Monitoring Berkas</center>
                                </h3>
                                <div class="card-box table-responsive2">
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap2 p-3 fs-6"
                                        cellspacing="0" width="100%">

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
                                            @foreach ($customer->submissions as $submission)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $submission->file->name }}</td>
                                                    <td>{{ $submission->file->location }}</td>
                                                    <td>
                                                        @if ($submission->status == 'pending')
                                                            <span class="text-warning fs-6 fw-bold">
                                                                {{ $submission->status }}
                                                            </span>
                                                        @elseif ($submission->status == 'progress')
                                                            <span class="text-info fs-6 fw-bold">
                                                                {{ $submission->status }}
                                                            </span>
                                                        @elseif ($submission->status == 'done')
                                                            <span class="text-success fs-6 fw-bold">
                                                                {{ $submission->status }}
                                                            </span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $submission->proof }}</td>
                                                    <td>{{ $submission->file->user->fullname }}</td>
                                                    <td>{{ date('d M Y', strtotime($submission->date)) }}</td>
                                                    <td>{{ $submission->done ? date('d M Y', strtotime($submission->done)) : '' }}
                                                    </td>
                                                    <td>{{ $submission->information }}</td>
                                                    <td><a href="{{ route('web.submission.edit', ['submission' => $submission]) }}"
                                                            class="btn btn-outline-warning p-1  w-100 fw-bold">Edit</a></td>
                                                </tr>
                                            @endforeach
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
