@extends('layouts.admin')

@section('content')
    <!-- Page content-->
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col">
                <div class="d-grid gap-1">
                    <a href="lokasi/create" class="btn btn-primary w-100">+ Tambah Data Lokasi</a>
                </div>
            </div>
            <div class="mt-3"></div>
        </div>

        <table class="table table-responsive mt-4" style="width: 100%">
            <thead>
                @php
                    $no = 0;
                @endphp
                <tr>
                    <th class="px-4 align-middle table-center">Kode Lokasi</th>
                    <th class="px-4 align-middle table-center">Nama Alat</th>
                    <th class="px-4 align-middle table-center">Lokasi</th>
                    <th class="px-4 align-middle table-center">
                        Tanggal Update Lokasi
                    </th>
                    <th class="px-4 align-middle table-center">
                        Keterangan
                    </th>
                    <th class="px-4 align-middle table-center action">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($locations as $location)
                    <tr>
                        <td class="px-4 align-middle table-center">{{ ++$no }}</td>
                        <td class="px-4 align-middle table-center">{{ $location->nama_alat }}</td>
                        <td class="px-4 align-middle table-center">{{ $location->nama_lokasi }}</td>
                        <td class="px-4 align-middle table-center">{{ $location->tgl_update_lokasi }}</td>
                        <td class="px-4 align-middle table-center">{{ $location->ket_lokasi }}</td>
                        <td class="px-4 align-middle table-center action">
                            <div class="row">
                                <div class="d-grid gap-1 mx-auto">
                                    <a href="{{ route('lokasi.edit', $location->id) }}"
                                        class="btn btn-outline-success ">Edit</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <div class="alert alert-danger text-center">
                        <i data-feather="x" class="me-3"></i>Data Kosong
                    </div>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
