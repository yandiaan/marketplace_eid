 <style>
     #sidebar ul.dropdown-menu li.active a,
     #sidebar ul.dropdown-menu li a:hover {
         color: #A2DB5E;
     }

     #sidebar li.active a.has-dropdown,
     #sidebar li.single.active a {
         color: #A2DB5E;
     }

     body.sidebar-mini .main-sidebar .sidebar-menu>li.active>a {
         background-color: #A2DB5E;
         color: #fff !important;
     }
 </style>

 <div id="sidebar" class="main-sidebar">
     <aside id="sidebar-wrapper">
         <div class="sidebar-brand my-3">
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
             <li class="nav-item single"><a class="nav-link" href="<?= base_url('suplier/dashboard') ?>"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
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
             <li class="nav-item dropdown">
                 <a href="#" class="nav-link has-dropdown"><i class="fas fa-shopping-bag"></i><span>Produk</span></a>
                 <ul class="dropdown-menu">
                     <li><a class="nav-link" href="<?= base_url('suplier/dashboard/list-produk') ?>">Produk Saya</a></li>
                     <li><a class="nav-link" href="<?= base_url('suplier/dashboard/tambah-produk-baru') ?>">Tambah Produk Baru</a></li>
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
     </aside>
 </div>

 <script>
     $(function() {
         var current = window.location.href;
         $('.sidebar-menu li a').each(function() {
             if ($(this).attr('href') == current) {
                 $(this).parents('.nav-item').addClass('active');
             }
         });

         $('.dropdown-menu li a').each(function() {
             if ($(this).attr('href') == current) {
                 $(this).parents('li').addClass('active');
             }
         });
     })
 </script>