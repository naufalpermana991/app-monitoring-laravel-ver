@extends('layouts.admin')


@section('content')
    <!-- Page content-->
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col">
                <div class="d-grid gap-1">
                    <a href="permintaan-alat/create" class="btn btn-primary w-100">+ Tambah Data Permintaan</a>
                </div>
            </div>
            <div class="mt-3"></div>
        </div>

        <table class="table table-responsive mt-4" style="width: 100%" id="tooTable">
            <thead>
                <tr>
                    <th class="px-4 align-middle">No Permintaan</th>
                    <th class="px-4 align-middle table-center">
                        Kode Alat </th>
                    <th class="px-4 align-middle table-center">User Peminta</th>
                    <th class="px-4 align-middle table-center">User Penyerah</th>
                    <th class="px-4 align-middle table-center action">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($data as $permintaan)
                        <td class="px-4 align-middle ">{{ $permintaan['no_permintaan'] }}</td>
                        <td class="px-4 align-middle table-center">{{ $permintaan['id_alat'] }}</td>
                        <td class="px-4 align-middle table-center">{{ $permintaan['user_peminta'] }}</td>
                        <td class="px-4 align-middle table-center">{{ $permintaan['user_penyerah'] }}</td>
                        <td class="px-4 align-middle table-center action">
                            <div class="row">
                                <div class="col d-grid gap-2 mx-auto">
                                    <a href="{{ route('permintaan-alat.edit', $permintaan->id) }}"
                                        class="btn btn-outline-success w-100"><i data-feather="edit-2"
                                            class="me-3"></i>Edit
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-grid auto mx-auto mt-3">
                                    <button class="btn btn-outline-success viewdetails" data-id="{{ $permintaan->id }}">
                                        Detail
                                    </button>
                                </div>
                            </div>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@include('pages.permintaan-alat.modal')
