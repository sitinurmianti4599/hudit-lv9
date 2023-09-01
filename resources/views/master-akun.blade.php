@extends('layout/main-layout')
@section('title', 'Layanan')

@section('konten')
    <div class="midde_cont">
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
        <div class=" col-md-12 col-sm-12">
            <div class="x_panel">
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
                            <a href="/form-akun-tambah"><button type="button" class="btn btn-outline-secondary mb-2"
                                    style="float: right">Tambah Data + </button></a>
                            <br><br>
                            <div class="card-box table-responsive">
                                <table class="table table-bordered dt-responsive nowrap2 p-3 fs-6 mb-3" cellspacing="0"
                                    width="100%">
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
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $user->fullname }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->role->position }}</td>
                                                <td>{{ $user->address }}</td>
                                                <td>{{ $user->telp }}</td>
                                                <td><a href="{{ route('web.user.edit', ['user' => $user]) }}"
                                                        class="btn btn-outline-warning p-1  w-100 fw-bold">Edit</a></td>
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


@endsection
