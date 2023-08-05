@extends('layouts.admin')

@section('content')
    <!-- Page content-->
    <div class="container-fluid">
        <div class="d-flex justify-content-between mt-4">
            <div class="row">
                <div class="col">
                    <h3>Data Monitoring Kalibrasi</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="alat/create" class="btn btn-primary ">+ Tambah Data
                    </a>
                </div>
            </div>
        </div>
        <table class="table table-responsive mt-5" style="width: 100%">
            <thead>
                <tr>
                    <th class="px-4 align-middle">Nama Alat</th>
                    <th class="px-4 align-middle table-center">
                        Serial Alat
                    </th>
                    <th class="px-4 align-middle table-center">
                        Tanggal Kalibrasi
                    </th>
                    <th class="px-4 align-middle table-center">Lokasi</th>
                    <th class="px-4 align-middle table-center action">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $monitoring)
                    <tr>
                        <td class="px-4 align-middle">{{ $monitoring->nama_alat }}</td>
                        <td class="px-4 align-middle table-center">{{ $monitoring->spek_alat }}</td>
                        <td class="px-4 align-middle table-center">{{ $monitoring->created_at }}</td>
                        <td class="px-4 align-middle table-center">{{ $monitoring->lokasi }}</td>
                        <td class="px-4 align-middle table-center">{{ $monitoring->status }}</td>
                    @empty
                        <div class="alert alert-danger text-center mt-4">
                            <i data-feather="x" class="me-3"></i>Data Kosong
                        </div>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
