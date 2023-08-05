<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kelola Data Permintaan Alat || Monitoring Kalibrasi V2.0</title>
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
                        <a class="text-decoration-none" href="/permintaan-alat"><i data-feather="chevron-left"
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
                <h4 class="text-center mb-4">Formulir Kelola Data Permintaan Alat</h4>
                <form action="{{ route('permintaan-alat.store') }}" method="POST">

                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="font-weight-bold">Nomer Permintaan</label>
                                <input type="text" class="form-control @error('no_permintaan') is-invalid @enderror"
                                    name="no_permintaan" value="{{ old('no_permintaan') }}"
                                    placeholder="Masukkan Nomor Permintaan">

                                <!-- error message untuk no_permintaan -->
                                @error('no_permintaan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="font-weight-bold">Kode Alat</label>
                                <input type="text" class="form-control @error('id_alat') is-invalid @enderror"
                                    name="id_alat" value="{{ old('id_alat') }}" placeholder="Masukkan Nama Alat">

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
                                <label class="font-weight-bold">Nama Peminta</label>
                                <input type="text" class="form-control @error('user_peminta') is-invalid @enderror"
                                    name="user_peminta" value="{{ old('user_peminta') }}"
                                    placeholder="Masukkan Spesifikasi Alat">

                                <!-- error message untuk user_peminta -->
                                @error('user_peminta')
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
                                <label class="font-weight-bold">Nama Penyerah</label>
                                <input type="text" class="form-control @error('user_penyerah') is-invalid @enderror"
                                    name="user_penyerah" value="{{ old('user_penyerah') }}"
                                    placeholder="Masukkan Nama Penyerah">

                                <!-- error message untuk user_penyerah -->
                                @error('user_penyerah')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Penerima</label>
                                <input type="text" class="form-control @error('user_penerima') is-invalid @enderror"
                                    name="user_penerima" value="{{ old('user_penerima') }}"
                                    placeholder="Masukkan Nama Penerima">

                                <!-- error message untuk user_penerima -->
                                @error('user_penerima')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Penyetuju</label>
                                <input type="text"
                                    class="form-control @error('user_penyetuju') is-invalid @enderror"
                                    name="user_penyetuju" value="{{ old('user_penyetuju') }}"
                                    placeholder="Masukkan Nama Penyetuju">

                                <!-- error message untuk user_penyetuju -->
                                @error('user_penyetuju')
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
                                <label class="font-weight-bold">Tanggal Permintaan</label>
                                <input type="date"
                                    class="form-control @error('tgl_permintaan') is-invalid @enderror"
                                    name="tgl_permintaan" value="{{ old('tgl_permintaan') }}"
                                    placeholder="Masukkan Tanggal Permintaan">

                                <!-- error message untuk tgl_permintaan -->
                                @error('tgl_permintaan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="font-weight-bold">Status Penyetuju</label>
                                <input type="text"
                                    class="form-control @error('status_penyetuju') is-invalid @enderror"
                                    name="status_penyetuju" value="{{ old('status_penyetuju') }}"
                                    placeholder="Masukkan Status Penyetuju">

                                <!-- error message untuk status_penyetuju -->
                                @error('status_penyetuju')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="font-weight-bold">Status Penyerah</label>
                                <input type="text"
                                    class="form-control @error('status_penyerah') is-invalid @enderror"
                                    name="status_penyerah" value="{{ old('status_penyerah') }}"
                                    placeholder="Masukkan Status Penyerah">

                                <!-- error message untuk status_penyerah -->
                                @error('status_penyerah')
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
                                <label class="font-weight-bold">Status Penerima</label>
                                <input type="text"
                                    class="form-control @error('status_penerima') is-invalid @enderror"
                                    name="status_penerima" value="{{ old('status_penerima') }}"
                                    placeholder="Masukkan Status Penerima">

                                <!-- error message untuk status_penerima -->
                                @error('status_penerima')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal Kembali</label>
                                <input type="date" class="form-control @error('tgl_kembali') is-invalid @enderror"
                                    name="tgl_kembali" value="{{ old('tgl_kembali') }}"
                                    placeholder="Masukkan tgl_kembali Alat">

                                <!-- error message untuk tgl_kembali -->
                                @error('tgl_kembali')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="font-weight-bold">Kondisi Alat</label>
                                <input type="text" class="form-control @error('kondisi') is-invalid @enderror"
                                    name="kondisi" value="{{ old('kondisi') }}" placeholder="Masukkan kondisi Alat">

                                <!-- error message untuk kondisi -->
                                @error('kondisi')
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
