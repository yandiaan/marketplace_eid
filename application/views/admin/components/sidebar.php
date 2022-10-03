 <style>
     #sidebar ul.dropdown-menu li.active a,
     #sidebar ul.dropdown-menu li a:hover {
         color: #A2DB5E;
     }

     #sidebar li.active a.has-dropdown {
         color: #A2DB5E;
     }

     #sidebar .sidebar-menu li.active .one {
         color: #A2DB5E;
     }

     #sidebar .active-one {
         color: #A2DB5E;
     }
 </style>

 <div id="sidebar" class="main-sidebar">
     <aside id="sidebar-wrapper">
         <div class="sidebar-brand">
             <a href="index.html">
                 <img src="https://estimator.id/assets/img/logo.png" alt="Logo Estimator">
             </a>
         </div>
         <div class="sidebar-brand sidebar-brand-sm">
             <a href="index.html">
                 <img src="<?= base_url('/assets/img/icon-estimator.png') ?>" width="30" alt="Logo Estimator">
             </a>
         </div>
         <ul class="sidebar-menu mt-5">
             <li class="active-one"><a class="nav-link active-one" href="credits.html"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
             <!-- <li class="menu-header">Dashboard</li> -->
             <li class="nav-item dropdown ">
                 <a href="#" class="nav-link has-dropdown"><i class="fas fa-truck"></i><span>Pengiriman</span></a>
                 <ul class="dropdown-menu">
                     <li><a class="nav-link" href="#">Pengiriman Saya</a></li>
                     <li><a class="nav-link" href="#">Pengiriman Selesai</a></li>
                 </ul>
             </li>
             <li class="nav-item dropdown ">
                 <a href="#" class="nav-link has-dropdown"><i class="fas fa-clipboard-list"></i><span>Pesanan</span></a>
                 <ul class="dropdown-menu">
                     <li><a class="nav-link" href="#">Pesanan Saya</a></li>
                     <li><a class="nav-link" href="#">Pembatalan</a></li>
                 </ul>
             </li>
             <li class="nav-item dropdown ">
                 <a href="#" class="nav-link has-dropdown"><i class="fas fa-shopping-bag"></i><span>Produk</span></a>
                 <ul class="dropdown-menu">
                     <li><a class="nav-link" href="#">Produk Saya</a></li>
                     <li><a class="nav-link" href="#">Tambah Produk Baru</a></li>
                     <li><a class="nav-link" href="#">Wilayah Produk</a></li>
                     <li><a class="nav-link" href="#">Penilaian Produk</a></li>
                 </ul>
             </li>
             <li class="nav-item dropdown ">
                 <a href="#" class="nav-link has-dropdown"><i class="fas fa-percentage"></i><span>Diskon</span></a>
                 <ul class="dropdown-menu">
                     <li><a class="nav-link" href="#">Diskon Produk</a></li>
                 </ul>
             </li>
             <li class="nav-item dropdown ">
                 <a href="#" class="nav-link has-dropdown"><i class="fas fa-dollar-sign"></i><span>Keuangan</span></a>
                 <ul class="dropdown-menu">
                     <li><a class="nav-link" href="#">Penghasilan Saya</a></li>
                 </ul>
             </li>
             <li class="nav-item dropdown ">
                 <a href="#" class="nav-link has-dropdown"><i class="fas fa-store"></i><span>Toko</span></a>
                 <ul class="dropdown-menu">
                     <li><a class="nav-link" href="#">Penilaian Toko</a></li>
                     <li><a class="nav-link" href="#">Profil Toko</a></li>
                     <li><a class="nav-link" href="#">Wilayah Toko</a></li>
                     <li><a class="nav-link" href="#">Laporan Saya</a></li>
                 </ul>
             </li>
         </ul>

         <!-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
             <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                 <i class="fas fa-rocket"></i> Documentation
             </a>
         </div> -->
     </aside>
 </div>