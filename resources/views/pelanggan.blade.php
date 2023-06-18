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
                    <strong class="fs-5" style="text-transform: capitalize;">{{ $service_type->name }}</strong>
                    @can('data_master_show', auth()->user())
                        <a href="{{ route('web.customer.create') }}"><button type="button"
                                class="btn btn-outline-secondary mb-2" style="float: right">Tambah Data + </button></a>
                    @endcan
                    <br><br>
                    <div class="card-box table-responsive">

                        <table class="table table-bordered jambo_table p-2 fs-6 text-center">
                            <thead>
                                <tr class="headings">
                                    <th>No</th>
                                    <th class="column-title">Nama </th>
                                    <th class="column-title">Kode Regis</th>
                                    <th class="column-title">Layanan </th>
                                    <th class="column-title">Tanggal Order</th>
                                    @can('data_master_show', auth()->user())
                                        <th class="column-title col-3">Progress</th>
                                        <th class="column-title">Status</th>
                                    @endcan
                                    <th class="column-title">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @can('data_master_show', auth()->user())
                                    @foreach ($customers as $customer)
                                        <tr class="even pointer">
                                            <td class="a-center ">{{ $loop->iteration }}</td>
                                            <td class=" ">{{ $customer->name }}</td>
                                            <td class=" ">{{ $customer->registration }}</td>
                                            <td class=" ">{{ $customer->service->name }}</td>
                                            <td class=" ">{{ $customer->order_date }}</td>
                                            <td class=" ">
                                                <div class="progress" role="progressbar" aria-label="Animated striped example"
                                                    aria-valuenow="{{ $customer->progress }}" aria-valuemin="0"
                                                    aria-valuemax="100" style="border-radius: 20px">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated {{ $customer->progress == 100 ? 'bg-success' : 'bg-warning' }}"
                                                        style="width: {{ $customer->progress }}%">{{ $customer->progress }}%
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span
                                                    class="fs-6 fw-bold {{ $customer->progress == 100 ? 'text-success' : 'text-warning' }}">{{ $customer->status }}</span>
                                            </td>
                                            <td class=" "><a
                                                    href="{{ route('web.customer.show', ['customer' => $customer]) }}"
                                                    class="btn btn-outline-info p-1 fw-bold">View</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endcan

                                @can('data_master_show_pj', auth()->user())
                                    @foreach ($customers as $customer)
                                        <tr class="even pointer">
                                            <td class="a-center ">{{ $loop->iteration }}</td>
                                            <td class=" ">{{ $customer->name }}</td>
                                            <td class=" ">{{ $customer->registration }}</td>
                                            <td class=" ">{{ $customer->service->name }}</td>
                                            <td class=" ">{{ $customer->order_date }}</td>
                                            <td class=" "><a
                                                    href="{{ route('web.customer.show', ['customer' => $customer]) }}"
                                                    class="btn btn-outline-info p-1 fw-bold">View</a>
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
