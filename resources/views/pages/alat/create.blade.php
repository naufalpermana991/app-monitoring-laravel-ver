<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kelola Data Alat || Monitoring Kalibrasi V2.0</title>
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
                        <a class="text-decoration-none" href="/alat"><i data-feather="chevron-left"
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
                <h4 class="text-center mb-4">Formulir Kelola Data Alat</h4>
                <form action="{{ route('alat.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="font-weight-bold">Nomer Alat</label>
                                <input type="text" class="form-control @error('nomer_alat') is-invalid @enderror"
                                    name="nomer_alat" value="{{ old('nomer_alat') }}" placeholder="Masukkan Nama Alat">

                                <!-- error message untuk nomer_alat -->
                                @error('nomer_alat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Alat</label>
                                <input type="text" class="form-control @error('nama_alat') is-invalid @enderror"
                                    name="nama_alat" value="{{ old('nama_alat') }}" placeholder="Masukkan Nama Alat">

                                <!-- error message untuk nama_alat -->
                                @error('nama_alat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="font-weight-bold">Spesifikasi</label>
                                <input type="text" class="form-control @error('spek_alat') is-invalid @enderror"
                                    name="spek_alat" value="{{ old('spek_alat') }}"
                                    placeholder="Masukkan Spesifikasi Alat">

                                <!-- error message untuk spek_alat -->
                                @error('spek_alat')
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
                                <label class="font-weight-bold">Lokasi</label>
                                <input type="text" class="form-control @error('lokasi') is-invalid @enderror"
                                    name="lokasi" value="{{ old('lokasi') }}" placeholder="Masukkan Lokasi">

                                <!-- error message untuk lokasi -->
                                @error('lokasi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="font-weight-bold">Kondisi Alat</label>
                                <input type="text" class="form-control @error('kondisi_alat') is-invalid @enderror"
                                    name="kondisi_alat" value="{{ old('kondisi_alat') }}"
                                    placeholder="Masukkan Kondisi Alat">

                                <!-- error message untuk kondisi_alat -->
                                @error('kondisi_alat')
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
                                <label class="font-weight-bold">Harga</label>
                                <input type="text" class="form-control @error('harga') is-invalid @enderror"
                                    name="harga" value="{{ old('harga') }}" placeholder="Masukkan Harga">

                                <!-- error message untuk harga -->
                                @error('harga')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="font-weight-bold">Keterangan Alat</label>
                                <input type="text" class="form-control @error('keterangan') is-invalid @enderror"
                                    name="keterangan" value="{{ old('keterangan') }}"
                                    placeholder="Masukkan Keterangan Alat">

                                <!-- error message untuk keterangan -->
                                @error('keterangan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mt-4">
                            <label class="form-label">Foto</label>
                            <input class="form-control  @error('image') is-invalid @enderror" type="file"
                                name="image">
                        </div>

                        <!-- error message untuk image -->
                        @error('image')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
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
