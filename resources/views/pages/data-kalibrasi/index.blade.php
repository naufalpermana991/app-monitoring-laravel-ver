@extends('layouts.admin')


@section('content')

    <body>
        <div class="d-flex" id="wrapper">
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Page content-->
                <div class="container-fluid">
                    <div class="row mt-5">
                        <div class="col">
                            <div class="d-grid gap-1">
                                <a href="datakalibrasi/create" class="btn btn-primary w-100">+ Tambah Data </a>
                            </div>
                        </div>

                        <div class="mt-3"></div>
                    </div>

                    <table class="table table-responsive mt-4" style="width: 100%" id='cabTable'>
                        <thead>
                            <tr>
                                <th class="px-4 align-middle table-center">No</th>
                                <th class="px-4 align-middle table-center">Nama Alat</th>
                                <th class="px-4 align-middle table-center">Tanggal Kalibrasi</th>
                                <th class="px-4 align-middle table-center action">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($data as $hasil_kalibrasi)
                                <tr>

                                    <td class="px-4 align-middle table-center">{{ $hasil_kalibrasi->no_kalibrasi }}</td>
                                    <td class="px-4 align-middle table-center">{{ $hasil_kalibrasi->nama_alat }}</td>
                                    <td class="px-4 align-middle table-center">{{ $hasil_kalibrasi->tanggal_kalibrasi }}
                                    </td>
                                    <td class="px-4 align-middle table-center action">
                                        <div class="row ">
                                            <div class="col auto mx-auto">
                                                <a href="{{ route('datakalibrasi.edit', $hasil_kalibrasi->id) }}"
                                                    class="btn btn-outline-success">Edit
                                                </a>

                                                <button class="btn btn-outline-success viewdetails"
                                                    data-id="{{ $hasil_kalibrasi->id }}">
                                                    Detail
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                @empty
                                    <div class="alert alert-danger text-center mt-4">
                                        <i data-feather="x" class="me-3"></i>Data Kosong
                                    </div>
                                </tr>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
@endsection

@include('pages.data-kalibrasi.modal')
