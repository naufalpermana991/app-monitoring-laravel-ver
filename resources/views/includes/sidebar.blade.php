 <!-- Sidebar-->
 <div class="bg-white p-3 pe-5" id="sidebar-wrapper">
     <div class="sidebar-heading p-3 pt-0 mb-3">Logo</div>
     <p class="list-group-item text-muted title p-3 pb-3">Main Menu</p>
     <div class="list-group">
         <a class="{{ request()->is('/') ? 'sidebar-link-active list-group-item p-3 mx-3 my-3' : 'sidebar-link list-group-item p-3 mx-3 my-3' }}"
             href="/"><i data-feather="menu" class="me-3"></i>Dashboard</a>

         <a class="{{ request()->is('datakalibrasi') ? 'sidebar-link-active list-group-item p-3 mx-3 my-3' : 'sidebar-link list-group-item p-3 mx-3 my-3' }}"
             href="/datakalibrasi"><i data-feather="database" class="me-3"></i>Data Kalibrasi</a>

         <a class="{{ request()->is('lap_kalibrasi') ? 'sidebar-link-active list-group-item p-3 mx-3 my-3' : 'sidebar-link list-group-item p-3 mx-3 my-3' }}"
             href="/laporankalibrasi"><i data-feather="database" class="me-3"></i>Laporan Kalibrasi</a>

         <a class="{{ request()->is('monitoring') ? 'sidebar-link-active list-group-item p-3 mx-3 my-3' : 'sidebar-link list-group-item p-3 mx-3 my-3' }}"
             href="/monitoring"><i data-feather="database" class="me-3"></i>Monitoring</a>
     </div>
     <p class="list-group-item text-muted title p-3 pt-5">Data Alat</p>
     <div class="list-group">
         <a class="{{ request()->is('alat') ? 'sidebar-link-active list-group-item p-3 mx-3 my-3' : 'sidebar-link list-group-item p-3 mx-3 my-3' }}"
             href="/alat"><i data-feather="database" class="me-3"></i>Daftar Alat</a>

         <a class="{{ request()->is('lokasi') ? 'sidebar-link-active list-group-item p-3 mx-3 my-3' : 'sidebar-link list-group-item p-3 mx-3 my-3' }}"
             href="/lokasi"><i data-feather="database" class="me-3"></i>Lokasi</a>

         <a class="{{ request()->is('permintaan-alat') ? 'sidebar-link-active list-group-item p-3 mx-3 my-3' : 'sidebar-link list-group-item p-3 mx-3 my-3' }}"
             href="/permintaan-alat"><i data-feather="database" class="me-3"></i>Permintaan Alat</a>
     </div>
 </div>
