@extends('layouts.admin')

@section('title', 'Laporan Permintaan Alat | Aplikasi Kalibrasi')

@section('content')
<!-- Page content-->
<div class="container-fluid">
  <div class="row mt-5">
    <div class="col">
      <div class="d-grid gap-1">
        <a href="#" class="btn btn-primary w-100">+ Tambah Data Permintaan</a>
      </div>
    </div>
    <div class="mt-3"></div>
  </div>

  <table class="table table-responsive mt-4" style="width: 100%">
    <thead>
      <tr>
        <th class="px-4 align-middle">Serial Alat</th>
        <th class="px-4 align-middle table-center">
          Tanggal Update Lokasi
        </th>
        <th class="px-4 align-middle table-center">Lokasi</th>
        <th class="px-4 align-middle table-center action">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="px-4 align-middle">123/FC4/KR1</td>
        <td class="px-4 align-middle table-center">11/07/2023</td>
        <td class="px-4 align-middle table-center">Surabaya</td>
        <td class="px-4 align-middle table-center action">
          <div class="row">
            <div class="col-8 mx-auto">
              <a href="#" class="btn btn-outline-success w-100"><i data-feather="edit-2" class="me-3"></i>Edit
              </a>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td class="px-4 align-middle">123/FC4/KR1</td>
        <td class="px-4 align-middle table-center">11/07/2023</td>
        <td class="px-4 align-middle table-center">Bogor</td>
        <td class="px-4 align-middle table-center action">
          <div class="row">
            <div class="col-8 mx-auto">
              <a href="#" class="btn btn-outline-success w-100"><i data-feather="edit-2" class="me-3"></i>Edit
              </a>
            </div>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>
@endsection