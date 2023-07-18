@extends('layouts.admin')

@section('title', 'Data Alat | Aplikasi Kalibrasi')

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

  <table class="table table-responsive mt-4" style="width: 100%">
    <thead>
      <tr>
        <th class="px-4 align-middle">Serial Number</th>
        <th class="px-4 align-middle table-center">Nama Alat</th>
        <th class="px-4 align-middle table-center">Spek Alat</th>
        <th class="px-4 align-middle table-center action">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="px-4 align-middle">123/FC4/KR1</td>
        <td class="px-4 align-middle table-center">HYOSUNG PWR</td>
        <td class="px-4 align-middle table-center">12VLT 3SR</td>
        <td class="px-4 align-middle table-center action">
          <div class="row">
            <div class="col-8 mx-auto">
              <a href="#" class="btn btn-outline-success w-100"><i data-feather="edit-2" class="me-3"></i>Edit
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-8 mx-auto mt-3">
              <button type="button" class="btn btn-outline-success w-100" data-bs-toggle="modal" data-bs-target="#popupDetailAlat">
                Detail
              </button>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td class="px-4 align-middle">123/FC4/KR1</td>
        <td class="px-4 align-middle table-center">HYOSUNG PWR</td>
        <td class="px-4 align-middle table-center">12VLT 3SR</td>
        <td class="px-4 align-middle table-center action">
          <div class="row">
            <div class="col-8 mx-auto">
              <a href="#" class="btn btn-outline-success w-100"><i data-feather="edit-2" class="me-3"></i>Edit
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-8 mx-auto mt-3">
              <button type="button" class="btn btn-outline-success w-100" data-bs-toggle="modal" data-bs-target="#popupDetailAlat">
                Detail
              </button>
            </div>
          </div>
        </td>
      </tr>
    </tbody>
  </table>

  <!-- Modal -->
  <div class="modal fade" id="popupDetailAlat" tabindex="-1" aria-labelledby="popupDetailAlatLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="popupDetailAlatLabel">
            Detail Barang
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="d-flex justify-content-between">
              <div class="row">
                <p><strong>Harga</strong></p>
                <p><strong>Warna</strong></p>
                <p><strong>Ukuran</strong></p>
              </div>
              <div class="row">
                <p>12.000</p>
                <p>12.000</p>
                <p>12.000</p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-abort" data-bs-dismiss="modal">
            Tutup
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection