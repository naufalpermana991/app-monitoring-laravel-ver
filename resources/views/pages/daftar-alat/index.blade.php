@extends('layouts.admin')

@section('content')
<!-- Page content-->
<div class="container-fluid">
  <div class="row mt-5">
    <div class="col">
      <div class="d-grid gap-1">
        <a href="#" class="btn btn-primary w-100">+ Tambah Data
        </a>
      </div>
    </div>
    <div class="col">
      <a href="#" class="btn btn-outline-primary w-100">Lihat Lokasi Alat
      </a>
    </div>
    <div class="col">
      <a href="#" class="btn btn-outline-primary w-100">Lihat Permintaan Alat
      </a>
    </div>
    <div class="mt-3"></div>
  </div>

  <table class="table table-responsive mt-4" style="width: 100%" id='tooTable'>
    <thead>
      <tr>
        <th class="px-4 align-middle">ID</th>
        <th class="px-4 align-middle">Serial Number</th>
        <th class="px-4 align-middle table-center">Nama Alat</th>
        <th class="px-4 align-middle table-center">Spek Alat</th>
        <th class="px-4 align-middle table-center action">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @php
      $no = 0;
      @endphp
      @foreach ($alat as $hasil_alat)
      <tr>
        <td class="px-4 align-middle">{{ ++$no }}</td>
        <td class="px-4 align-middle">{{ $hasil_alat["nomer_alat"] }}</td>
        <td class="px-4 align-middle table-center">{{ $hasil_alat["nama_alat"] }}</td>
        <td class="px-4 align-middle table-center">{{ $hasil_alat["spek_alat"] }}</td>
        <td class="px-4 align-middle table-center action">
          <div class="row">
            <div class="d-grid auto mx-auto">
              <a href="#" class="btn btn-outline-success"><i data-feather="edit-2" class="me-3"></i>Edit
              </a>
            </div>
          </div>
          <div class="row">
            <div class="d-grid auto mx-auto mt-3">
              <button class="btn btn-outline-success viewdetails" data-id="{{ $hasil_alat->id }}">
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

@include('pages.daftar-alat.modal')