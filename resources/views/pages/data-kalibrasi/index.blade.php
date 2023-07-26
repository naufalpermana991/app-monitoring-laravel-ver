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
              <a href="#" class="btn btn-primary w-100">+ Tambah Data </a>
            </div>
          </div>

          <div class="mt-3"></div>
        </div>

        <table class="table table-responsive mt-4" style="width: 100%" id='cabTable'>
          <thead>
            <tr>
              <th class="px-4 align-middle table-center">No</th>
              <th class="px-4 align-middle table-center">Kode Kalibrasi</th>
              <th class="px-4 align-middle table-center action">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php
             $no = 0;   
            @endphp
            @foreach($kalibrasi as $hasil_kalibrasi)
            <tr>
              <td class="px-4 align-middle table-center">{{ ++$no }}</td>
              <td class="px-4 align-middle table-center">{{ $hasil_kalibrasi["no_kalibrasi"] }}</td>
              
              <td class="px-4 align-middle table-center action">
                <div class="row">
                  <div class="col-6 d-grid auto mx-auto">
                    <a href="#" class="btn btn-outline-success"><i data-feather="edit-2" class="me-3"></i>Edit
                    </a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 d-grid auto mx-auto mt-3">
                    <button class="btn btn-outline-success viewdetails" data-id="{{ $hasil_kalibrasi->id }}">
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
    </div>
  </div>
</body>
@endsection

@include('pages.data-kalibrasi.modal')