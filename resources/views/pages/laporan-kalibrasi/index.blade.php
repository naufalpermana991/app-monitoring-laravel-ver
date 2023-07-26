@extends('layouts.admin')



@section('content')

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

    <table class="table table-responsive mt-4" style="width: 100%">
      <thead>
        <tr>
          <th class="px-4 align-middle">Kode Kalibrasi</th>
          <th class="px-4 align-middle table-center">
            Tanggal Kalibrasi
          </th>
          <th class="px-4 align-middle table-center">Expired</th>
          <th class="px-4 align-middle table-center action">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="px-4 align-middle">123/FC4/KR1</td>
          <td class="px-4 align-middle table-center">11/07/2023</td>
          <td class="px-4 align-middle table-center">11/11/2023</td>
          <td class="px-4 align-middle table-center action">
            <div class="row">
              <div class="col-8 mx-auto">
                <a href="#" class="btn btn-outline-success w-100"><i data-feather="edit-2" class="me-3"></i>Edit
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-8 mx-auto mt-3">
                <a href="#" class="btn btn-outline-success w-100 mb-4"><i data-feather="printer" class="me-3"></i>Cetak
                </a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td class="px-4 align-middle">123/FC4/KR1</td>
          <td class="px-4 align-middle table-center">11/07/2023</td>
          <td class="px-4 align-middle table-center">11/11/2023</td>
          <td class="px-4 align-middle table-center action">
            <div class="row">
              <div class="col-8 mx-auto">
                <a href="#" class="btn btn-outline-success w-100"><i data-feather="edit-2" class="me-3"></i>Edit
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-8 mx-auto mt-3">
                <a href="#" class="btn btn-outline-success w-100 mb-4"><i data-feather="printer" class="me-3"></i>Cetak
                </a>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection

</body>

</html>