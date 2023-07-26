@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-5">
    <!--alert-->
    <div class="alert alert-warning alert-dismissible fade show mb-5" role="alert">
        <i data-feather="alert-triangle" class="me-3"></i>Anda mempunyai
        <strong>{{ number_format($kalibrasi) }}</strong>
        alat yang belum dikalibrasi
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <!--end-alert-->

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body card-body-1 p-4">
                    <h6>Data Alat</h6>
                    <h2>{{ number_format($alat) }}</h2>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body card-body-2 p-4">
                    <h6>Data Kalibrasi</h6>
                    <h2>{{ number_format($kalibrasi) }}</h2>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body card-body-3 p-4">
                    <h6>Permintaan Alat</h6>
                    <h2>24</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <h5 class="mt-5 pt-5">Laporan Terbaru</h5>
    <table class="table table-responsive mt-4" style="width: 100%">
        <thead>
            <tr>
                <th class="px-4">Nama File</th>
                <th class="px-4 action">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="px-4">
                    <img src="{!!asset('frontend/img/file-icon.png')!!}" class="me-3" alt="" style="width: 56px" />
                    namafile.pdf
                </td>
                <td class="px-4 align-middle action">
                    <a href="#" class="btn btn-success"><i data-feather="printer" class="me-3"></i>Cetak
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection