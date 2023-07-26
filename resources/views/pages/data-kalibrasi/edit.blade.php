<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Kelola Data Alat || Monitoring Kalibrasi V2.0</title>
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
            <a class="text-decoration-none" href="{{ route('datakalibrasi') }}"><i data-feather="chevron-left" class="chevron me-3"></i>Kembali</a>
          </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    <div class="container mt-5">
      <div class="box-shadow p-5">
        <h4 class="text-center">Formulir Kelola Data Kalibrasi</h4>
        <div class="row">
          <div class="col">
            <div class="mt-5">
              <label for="serialnumber" class="form-label">Serial Number</label>
              <input type="text" class="form-control" id="serialnumber" aria-describedby="emailHelp" />
            </div>
          </div>
          <div class="col">
            <div class="mt-5">
              <label for="nama_alat" class="form-label">Nama Alat</label>
              <input type="text" class="form-control" id="nama_alat" aria-describedby="emailHelp" />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="mt-5">
              <label for="spek_alat" class="form-label">Spesifikasi Alat</label>
              <input type="text" class="form-control" id="spek_alat" aria-describedby="emailHelp" />
            </div>
          </div>
          <div class="col">
            <div class="mt-5">
              <label for="ukuran" class="form-label">Ukuran</label>
              <input type="text" class="form-control" id="ukuran" aria-describedby="emailHelp" />
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col">
            <a href="#" class="btn btn-primary w-100">Simpan Perubahan</a>
          </div>
          <div class="col">
            <a href="{{ route('datakalibrasi') }}" class=" btn btn-abort w-100">Batalkan</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('includes.script')
</body>

</html>