<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kelola Data Lokasi || Monitoring Kalibrasi V2.0</title>
    <!-- Favicon-->

    @stack('prepend-style')
    @include('includes.styles')
    @stack('addon-style')
</head>

<body>
    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
        <!-- Top navigation-->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div class="navbar-brand">
                    <div class="btn btn-back">
                        <a class="text-decoration-none" href="/lokasi"><i data-feather="chevron-left"
                                class="chevron me-3"></i>Kembali</a>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="box-header">
                                    <img class="avatar" src="{!! asset('frontend/img/avatar1.png') !!}" alt="" />
                                    <img class="dropdown ms-3 pe-2" src="{!! asset('frontend/img/chevron-down 1.png') !!}" alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#!">Keluar</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <!-- error message untuk title -->
        @error('title')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror

        <div class="container mt-5">
            <div class="box-shadow p-5">
                <h4 class="text-center">Formulir Kelola Data Lokasi</h4>
                <form action="{{ route('lokasi.store') }}" method="POST">

                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="font-weight-bold">Kode Alat</label>
                                <input type="number" class="form-control @error('id_alat') is-invalid @enderror"
                                    name="id_alat" value="{{ old('id_alat') }}" placeholder="Masukkan Kode Alat">

                                <!-- error message untuk id_alat -->
                                @error('id_alat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="font-weight-bold">Lokasi</label>
                                <input type="text" class="form-control @error('nama_lokasi') is-invalid @enderror"
                                    name="nama_lokasi" value="{{ old('nama_lokasi') }}"
                                    placeholder="Masukkan Nama Lokasi">

                                <!-- error message untuk nama_lokasi -->
                                @error('nama_lokasi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-4"></div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal Update Lokasi</label>
                                <input type="date"
                                    class="form-control @error('tgl_update_lokasi') is-invalid @enderror"
                                    name="tgl_update_lokasi" value="{{ old('tgl_update_lokasi') }}"
                                    placeholder="Masukkan Tanggal Pembaruan Lokasi">

                                <!-- error message untuk tgl_update_lokasi -->
                                @error('tgl_update_lokasi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="font-weight-bold">Keterangan</label>
                                <input type="text" class="form-control @error('ket_lokasi') is-invalid @enderror"
                                    name="ket_lokasi" value="{{ old('ket_lokasi') }}" placeholder="Masukkan Keterangan">

                                <!-- error message untuk ket_lokasi -->
                                @error('ket_lokasi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-md btn-primary w-100 mt-5">Simpan Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('includes.script')
</body>

</html>
