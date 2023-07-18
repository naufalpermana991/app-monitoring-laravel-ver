 <!-- Sidebar-->
 <div class="bg-white p-3 pe-5" id="sidebar-wrapper">
     <div class="sidebar-heading p-3 pt-0 mb-3">Logo</div>
     <p class="list-group-item text-muted title p-3 pb-3">Main Menu</p>
     <div class="list-group">
         <a class="sidebar-link-active list-group-item flex-fill p-3 px-3 mx-3 my-3" href="{{ route('home') }}"><img src="{!! asset('frontend/img/icon-dashboard.png') !!}" class="sidebar-icon me-3" alt="" />Dashboard</a>
         <a class="sidebar-link list-group-item p-3 mx-3 my-3" href="{{ route('datakalibrasi') }}"><i data-feather="database" class="me-3"></i>Data Kalibrasi</a>

         <a class="sidebar-link list-group-item p-3 mx-3 my-3" href="{{ route('lap_kalibrasi') }}"><i data-feather="database" class="me-3"></i>Laporan Kalibrasi</a>

         <a class="sidebar-link list-group-item p-3 mx-3 my-3" href="{{ route('monitoring') }}"><i data-feather="database" class="me-3"></i>Monitoring</a>
     </div>
     <p class="list-group-item text-muted title p-3 pt-5">Data Alat</p>
     <div class="list-group">
         <a class="sidebar-link list-group-item p-3 mx-3 my-3" href="{{ route('alat') }}"><i data-feather="database" class="me-3"></i>Daftar Alat</a>

         <a class="sidebar-link list-group-item p-3 mx-3 my-3" href="{{ route('lokasi') }}"><i data-feather="database" class="me-3"></i>Lokasi</a>

         <a class="sidebar-link list-group-item p-3 mx-3 my-3" href="{{ route('permintaan') }}"><i data-feather="database" class="me-3"></i>Permintaan Alat</a>
     </div>
 </div>