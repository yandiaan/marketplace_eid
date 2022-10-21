<style>
    #supplier-banner {
        position: relative;
        width: auto;
        margin-top: -3%;
        margin-bottom: 8rem;
    }
    #supplier-banner .btn-back {
        position: absolute;
        top: 15%;
        left: 5%;
        width: 40px;
        height: 40px;
        background-color: #fff !important;
    }
    #supplier-banner .btn-back:hover {
        border-color: #fff;
    }
    #supplier-banner .store-profile {
        position: absolute;
        top: 80%;
        border: none;
        border-radius: 10px;
    }
    #supplier-banner .btn {
        font-size: 12px;
    }
</style>

<section id="supplier-banner">
    <div class="d-flex justify-content-center">
        <!-- <a class="btn btn-back rounded-circle shadow">
            <img src="<?php echo base_url('assets/icon/arrow-left.svg'); ?>" class="img-fluid" alt="left arrow">
        </a> -->

        <img src="<?php echo base_url('assets/img/supplier-banner.png') ?>" class="img-fluid" alt="Supplier Banner">

        <div class="card store-profile shadow container">
            <div class="card-body">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-2">
                        <img src="<?php echo base_url('assets/img/Ellipse 8.png') ?>" class="img-fluid border rounded-circle" alt="">
                    </div>
                    <div class="col-lg-5">
                        <h5 class="fs-5 fw-bold">PT American Standard Indonesia</h5>
                        <small class="text-muted">Sanitasi</small>

                        <div class="mt-3">
                            <a href="#" class="btn btn-primary-eid fw-bold px-3">
                                <i class="far fa-sm fa-fw fa-comments"></i> Chat</a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <p>Rating Toko</p>
                        <span>Toko ini memiliki 98% ulasan positif</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .tabs {
        display: block;
        display: -webkit-flex;
        display: -moz-flex;
        display: flex;
        -webkit-flex-wrap: wrap;
        -moz-flex-wrap: wrap;
        flex-wrap: wrap;
        margin: 0;
        overflow: hidden;
    }
    .tabs [class^="tab"] label,
    .tabs [class*=" tab"] label {
        color: #A5A8BE;
        cursor: pointer;
        display: block;
        font-size: 1em;
        font-weight: bold;
        line-height: 1em;
        padding: 1rem 1rem;
        text-align: center;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }
    .tabs [class^="tab"] label:hover,
    .tabs [class*=" tab"] label:hover {
        color: #303030;
    }
    .tabs [class^="tab"] label.active,
    .tabs [class*=" tab"] label.active {
        color: #303030;
    }
    .tabs [class^="tab"] [type="radio"],
    .tabs [class*=" tab"] [type="radio"] {
        border-bottom: 1px solid #E5E5E5;
        cursor: pointer;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        display: block;
        width: 100%;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }
    .tabs [class^="tab"] [type="radio"]:checked,
    .tabs [class*=" tab"] [type="radio"]:checked {
        border-bottom: 2px solid #66AA23;
    }
    .tabs .tab-1 {
        width: 15%;
    }
    .tabs .tab-2 {
        width: 85%;
    }
    #store-produk-content #voucher .card {
        cursor: pointer;
        background: #F1FCD6;
        color: #66AA23;
        font-weight: bold;
        transition: all .2s ease;
    }
    #store-produk-content #search .input-group-text {
        background: #fff;
        border-right: none;
    }
    #store-produk-content #search .form-control {
        border-left: none;
    }
    #store-produk-content #list-location {
        max-height: 14em !important;
        overflow-y: scroll !important;
        display: none;
    }
    #store-produk-content #product .product-title {
        font-size: 14px !important;
    }
    #store-produk-content #product .product-supplier,
    #store-produk-content #product .product-location {
        font-size: 12px !important;
    }
    #store-produk-content #filter .form-check-input:checked {
        background-color: #82C631;
        border-color: #82C631;
    }
    #store-produk-content #list-location .btn {
        font-size: 12px;
        margin: 3px 0px 3px 3px;
        background: #fff;
        border: 1px transparent solid;
    }
    #store-produk-content #list-location .btn:hover {
        background: #F1FCD6;
        border: 1px transparent solid;
    }
    #store-produk-content #list-location .btn.active {
        margin: 3px 0px 3px 3px;
        color: #fff;
        background: #66AA23;
        border: 1px transparent solid;
    }
    #store-produk-content #list-location .btn.active:hover {
        color: #fff;
        background: #66AA23;
        border: 1px transparent solid;
    }
    #store-produk-content #list-location::-webkit-scrollbar {
        width: 16px;
    }
    #store-produk-content #list-location::-webkit-scrollbar-track {
        background: #EDEDED;
        border-radius: 10px;
        border: 6px white solid;
    }
    #store-produk-content #list-location::-webkit-scrollbar-thumb {
        background: #82C631; 
        border-radius: 10px;
        border: 6px transparent solid;
        background-clip: padding-box;
    }
    #store-produk-content #list-location::-webkit-scrollbar-thumb:hover {
        background: #82C631; 
        border-radius: 10px;
        border: 5px transparent solid;
        background-clip: padding-box;
    }
</style>

<section class="section container" style="margin-bottom: 200px;">
    <div class="tabs">
        <div class="tab-1" id="store-info">
            <label for="tab1-1">Info Toko</label>
            <input id="tab1-1" name="tabs" type="radio" checked="checked">
        </div>
        <div class="tab-2" id="store-produk">
            <label for="tab2-2" class="text-start">Produk</label>
            <input id="tab2-2" name="tabs" type="radio">
        </div>
    </div>

    <div id="store-info-content" class="mt-4">
        <div class="row">
            <div class="col-lg-7">
                <div class="card rounded-4 border-0 shadow">
                    <div class="card-body m-3">
                        <h5 class="mb-4 fw-bold">Profil Toko</h5>
                        <img src="<?php echo base_url('assets/img/Rectangle 6.png') ?>" class="img-fluid" alt="profile-pic">
                        <p style="font-size: 14px; text-align: justify" class="mt-4">American Standard menawarkan solusi proyek keseluruhan bagi para konsumen residensial dan komersial, dengan efektif menawarkan produk yang hemat air yang digunakan untuk bangunan baru dan proyek penggantian/perubahan model. American Standard beroperasi di bawah unit bisnis LIXIL Water Technology yang merupakan pemimpin global terbesar di dunia dalam dunia saniter. Divisi ini beroperasi di lebih dari 150 negara, dengan lebih dari 50 produksi dan fasilitas R&D secara global. Merek usaha LIXIL Water Technology mencakup: LIXIL, INAX, GROHE, American Standard dan JAXSON.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card rounded-4 border-0 shadow">
                    <div class="card-body m-3">
                    <h5 class="mb-4 fw-bold">Detail Toko</h5>
                    
                    <div style="font-size: 14px; line-height: 34px" class="row">
                        <div class="col-lg-12 d-flex justify-content-between">
                            <span>Nama Toko</span>
                            <span class="fw-bold">PT American Standard Indonesia</span>
                        </div>

                        <hr class="my-3">

                        <div class="col-lg-12 d-flex justify-content-between">
                            <span>Jenis</span>
                            <span class="fw-bold">Sanitasi</span>
                        </div>

                        <div class="col-lg-12 d-flex justify-content-between">
                            <span>Lokasi</span>
                            <span style="color: #66AA23" class="fw-bold">
                                <i class="fas fa-sm fa-map-marker-alt"></i> Jakarta Pusat</span>
                        </div>

                        <hr class="my-3">

                        <div class="col-lg-12 d-flex justify-content-between">
                            <span>Nama Toko</span>
                            <span class="fw-bold">PT American Standard Indonesia</span>
                        </div>

                        <div class="col-lg-12 d-flex justify-content-between">
                            <span>Wilayah Distribusi</span>
                            <span class="fw-bold">1 Wilayah</span>
                        </div>

                        <div class="col-lg-12 d-flex justify-content-between">
                            <span>Jumlah Produk</span>
                            <a href="#" style="color: #66AA23" class="fw-bold text-decoration-none">695 Produk</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="store-produk-content" class="mt-4">
        <div style="font-size: 14px" id="voucher" class="row">
            <div class="col-lg-12">
                <p class="fw-bold">Voucher Toko</p>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-4 mb-3">
                        <div class="card">
                            <div class="card-body text-center">
                                Diskon Rp. 30.000
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 mb-3">
                        <div class="card">
                            <div class="card-body text-center">
                                Diskon Rp. 30.000
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 mb-3">
                        <div class="card">
                            <div class="card-body text-center">
                                Diskon Rp. 30.000
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 mb-3">
                        <div class="card">
                            <div class="card-body text-center">
                                Diskon Rp. 30.000
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 mb-3">
                        <div class="card">
                            <div class="card-body text-center">
                                Diskon Rp. 30.000
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 mb-3">
                        <div class="card">
                            <div class="card-body text-center">
                                Diskon Rp. 30.000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div style="font-size: 14px" id="filter" class="col-lg-3">
                <h6 class="fw-bold my-4"><i class="fas fa-filter text-success"></i> Filter</h6>
                <div class="card border-0 shadow">
                    <div class="card-body m-2">
                        <div class="mb-3">
                            <p class="fw-bold">Kategori</p>
    
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="all" checked>
                                <label class="form-check-label" for="all">
                                    Semua Kategori
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="toilet">
                                <label class="form-check-label" for="toilet">
                                    Toilet
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="lantai">
                                <label class="form-check-label" for="lantai">
                                    Lantai
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <p class="fw-bold">Lokasi</p>
                            
                            <input type="search" name="lokasi" id="location" class="form-control form-control-sm rounded-1" placeholder="Pilih lokasi">
                            <div id="list-location" class="card border-1 shadow-sm mt-2">
                                <div class="card-body p-1">
                                    <a class="btn btn-sm text-start w-100">Aceh</a>
                                    <a class="btn btn-sm text-start w-100">Jawa Barat</a>
                                    <a class="btn btn-sm text-start w-100">Jawa Tengah</a>
                                    <a class="btn btn-sm text-start w-100">Jawa Timur</a>
                                    <a class="btn btn-sm text-start w-100">Jakarta Pusat</a>
                                    <a class="btn btn-sm text-start w-100">Jakarta timur</a>
                                    <a class="btn btn-sm text-start w-100">Jakarta Selatan</a>
                                    <a class="btn btn-sm text-start w-100">Jakarta Barat</a>
                                    <a class="btn btn-sm text-start w-100">Tangerang</a>
                                    <a class="btn btn-sm text-start w-100">Bekasi</a>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <p class="fw-bold">Merek</p>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Semua Merek
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Duma
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Rucika
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <p class="fw-bold">Harga</p>

                            <div class="row">
                                <div class="col-lg-12 mb-2">
                                    <input type="number" class="form-control form-control-sm" placeholder="Min">
                                </div>
                                <div class="col-lg-12">
                                    <input type="number" class="form-control form-control-sm" placeholder="Max">
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center">
                            <button class="btn btn-sm btn-primary-eid px-3">Terapkan</button>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row my-4 align-items-center">
                    <div class="col-lg-9">
                        <form id="search" class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-search text-secondary"></i>
                            </span>
                            <input type="search" class="form-control form-conrol-lg" placeholder="Search">
                        </form>
                    </div>
                    <div class="col-lg-3">
                        <select name="order" id="order" class="form-select form-select-sm">
                            <option value="Paling Sesuai" selected>Paling Sesuai</option>
                            <option value="Terbaru">Terbaru</option>
                        </select>
                    </div>
                </div>

                <div id="product" class="row">
                    <div class="col-lg-12 mb-3aceh"><span style="font-size: 14px" class="text-muted">Menampilkan 16 produk</span></div>

                    <div class="col-lg-3">
                        <div class="card" style="height: 400px;">
                            <div class="label d-flex align-items-center justify-content-center">
                                <span>Diskon 25%</span>
                            </div>
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#868e96" />
                            </svg>
                            <div class="card-body">
                                <a href="#" class="product-title">This is one of product in this marketplace</a>

                                <div class="mt-2">
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.97 0.683374C3.06389 0.573609 3.18044 0.485485 3.31163 0.425065C3.44283 0.364646 3.58556 0.333365 3.73 0.333374H12.27C12.4144 0.333365 12.5572 0.364646 12.6884 0.425065C12.8196 0.485485 12.9361 0.573609 13.03 0.683374L15.639 3.72737C15.8719 3.99921 16 4.34539 16 4.70337V4.95837C16.0001 5.45335 15.8455 5.93598 15.5578 6.3388C15.2702 6.74162 14.8639 7.0445 14.3957 7.20512C13.9275 7.36574 13.4208 7.37606 12.9465 7.23464C12.4721 7.09323 12.0538 6.80715 11.75 6.41637C11.5281 6.70214 11.2438 6.93335 10.9188 7.09229C10.5938 7.25124 10.2368 7.3337 9.875 7.33337C9.51321 7.33378 9.15612 7.25135 8.83112 7.0924C8.50611 6.93345 8.22181 6.7022 8 6.41637C7.77819 6.7022 7.49389 6.93345 7.16888 7.0924C6.84388 7.25135 6.48679 7.33378 6.125 7.33337C5.76321 7.33378 5.40612 7.25135 5.08112 7.0924C4.75611 6.93345 4.47181 6.7022 4.25 6.41637C3.94619 6.80715 3.52788 7.09323 3.05354 7.23464C2.57919 7.37606 2.07252 7.36574 1.60432 7.20512C1.13613 7.0445 0.729823 6.74162 0.442182 6.3388C0.154542 5.93598 -5.45986e-05 5.45335 1.44645e-08 4.95837V4.70337C1.26075e-05 4.34539 0.128057 3.99921 0.361 3.72737L2.971 0.682374L2.97 0.683374ZM4.75 4.95837C4.75 5.32305 4.89487 5.67278 5.15273 5.93065C5.41059 6.18851 5.76033 6.33337 6.125 6.33337C6.48967 6.33337 6.83941 6.18851 7.09727 5.93065C7.35513 5.67278 7.5 5.32305 7.5 4.95837C7.5 4.82577 7.55268 4.69859 7.64645 4.60482C7.74022 4.51105 7.86739 4.45837 8 4.45837C8.13261 4.45837 8.25979 4.51105 8.35355 4.60482C8.44732 4.69859 8.5 4.82577 8.5 4.95837C8.5 5.32305 8.64487 5.67278 8.90273 5.93065C9.16059 6.18851 9.51033 6.33337 9.875 6.33337C10.2397 6.33337 10.5894 6.18851 10.8473 5.93065C11.1051 5.67278 11.25 5.32305 11.25 4.95837C11.25 4.82577 11.3027 4.69859 11.3964 4.60482C11.4902 4.51105 11.6174 4.45837 11.75 4.45837C11.8826 4.45837 12.0098 4.51105 12.1036 4.60482C12.1973 4.69859 12.25 4.82577 12.25 4.95837C12.25 5.32305 12.3949 5.67278 12.6527 5.93065C12.9106 6.18851 13.2603 6.33337 13.625 6.33337C13.9897 6.33337 14.3394 6.18851 14.5973 5.93065C14.8551 5.67278 15 5.32305 15 4.95837V4.70337C15 4.5842 14.9575 4.46895 14.88 4.37837L12.27 1.33337H3.73L1.12 4.37837C1.04255 4.46895 0.999991 4.5842 1 4.70337V4.95837C1 5.32305 1.14487 5.67278 1.40273 5.93065C1.66059 6.18851 2.01033 6.33337 2.375 6.33337C2.73967 6.33337 3.08941 6.18851 3.34727 5.93065C3.60513 5.67278 3.75 5.32305 3.75 4.95837C3.75 4.82577 3.80268 4.69859 3.89645 4.60482C3.99022 4.51105 4.11739 4.45837 4.25 4.45837C4.38261 4.45837 4.50979 4.51105 4.60355 4.60482C4.69732 4.69859 4.75 4.82577 4.75 4.95837ZM1.5 7.83337C1.63261 7.83337 1.75979 7.88605 1.85355 7.97982C1.94732 8.07359 2 8.20077 2 8.33337V14.3334H3V9.33337C3 9.06816 3.10536 8.8138 3.29289 8.62627C3.48043 8.43873 3.73478 8.33337 4 8.33337H7C7.26522 8.33337 7.51957 8.43873 7.70711 8.62627C7.89464 8.8138 8 9.06816 8 9.33337V14.3334H14V8.33337C14 8.20077 14.0527 8.07359 14.1464 7.97982C14.2402 7.88605 14.3674 7.83337 14.5 7.83337C14.6326 7.83337 14.7598 7.88605 14.8536 7.97982C14.9473 8.07359 15 8.20077 15 8.33337V14.3334H15.5C15.6326 14.3334 15.7598 14.3861 15.8536 14.4798C15.9473 14.5736 16 14.7008 16 14.8334C16 14.966 15.9473 15.0932 15.8536 15.1869C15.7598 15.2807 15.6326 15.3334 15.5 15.3334H0.5C0.367392 15.3334 0.240215 15.2807 0.146447 15.1869C0.0526784 15.0932 1.44645e-08 14.966 1.44645e-08 14.8334C1.44645e-08 14.7008 0.0526784 14.5736 0.146447 14.4798C0.240215 14.3861 0.367392 14.3334 0.5 14.3334H1V8.33337C1 8.20077 1.05268 8.07359 1.14645 7.97982C1.24021 7.88605 1.36739 7.83337 1.5 7.83337ZM4 14.3334H7V9.33337H4V14.3334ZM9 9.33337C9 9.06816 9.10536 8.8138 9.29289 8.62627C9.48043 8.43873 9.73478 8.33337 10 8.33337H12C12.2652 8.33337 12.5196 8.43873 12.7071 8.62627C12.8946 8.8138 13 9.06816 13 9.33337V12.3334C13 12.5986 12.8946 12.8529 12.7071 13.0405C12.5196 13.228 12.2652 13.3334 12 13.3334H10C9.73478 13.3334 9.48043 13.228 9.29289 13.0405C9.10536 12.8529 9 12.5986 9 12.3334V9.33337ZM12 9.33337H10V12.3334H12V9.33337Z"
                                            fill="#285F09" />
                                    </svg>

                                    <a href="#" class="product-supplier">
                                        Supplier Name
                                    </a>
                                </div>

                                <div class="mt-3">
                                    <strike class="text-muted"><small>Rp. 50.000</small></strike>
                                    <br>
                                    <span class="fw-bold">Rp. 40.000 <small class="fw-light">/ Unit</small></span>
                                </div>

                                <div class="product-location">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 9C7.50555 9 7.0222 8.85338 6.61108 8.57868C6.19995 8.30397 5.87952 7.91352 5.6903 7.45671C5.50108 6.99989 5.45157 6.49723 5.54804 6.01228C5.6445 5.52732 5.8826 5.08187 6.23223 4.73223C6.58187 4.3826 7.02732 4.1445 7.51228 4.04804C7.99723 3.95157 8.4999 4.00108 8.95671 4.1903C9.41353 4.37952 9.80397 4.69995 10.0787 5.11108C10.3534 5.5222 10.5 6.00555 10.5 6.5C10.4992 7.1628 10.2356 7.79822 9.76689 8.26689C9.29822 8.73556 8.6628 8.99921 8 9ZM8 5C7.70333 5 7.41332 5.08797 7.16665 5.2528C6.91997 5.41762 6.72771 5.65189 6.61418 5.92598C6.50065 6.20007 6.47095 6.50167 6.52882 6.79264C6.5867 7.08361 6.72956 7.35088 6.93934 7.56066C7.14912 7.77044 7.41639 7.9133 7.70737 7.97118C7.99834 8.02906 8.29994 7.99935 8.57403 7.88582C8.84812 7.77229 9.08238 7.58003 9.24721 7.33336C9.41203 7.08668 9.5 6.79667 9.5 6.5C9.4996 6.1023 9.34144 5.721 9.06022 5.43978C8.779 5.15856 8.3977 5.0004 8 5Z"
                                            fill="#285F09" />
                                        <path
                                            d="M8.00001 15L3.78201 10.0255C3.7234 9.95081 3.66539 9.87564 3.60801 9.8C2.8875 8.85089 2.49826 7.69161 2.50001 6.5C2.50001 5.04131 3.07947 3.64236 4.11092 2.61091C5.14237 1.57946 6.54132 1 8.00001 1C9.4587 1 10.8576 1.57946 11.8891 2.61091C12.9205 3.64236 13.5 5.04131 13.5 6.5C13.5018 7.69107 13.1127 8.84982 12.3925 9.7985L12.392 9.8C12.392 9.8 12.242 9.997 12.2195 10.0235L8.00001 15ZM4.40601 9.1975C4.40701 9.1975 4.52301 9.3515 4.54951 9.3845L8.00001 13.454L11.455 9.379C11.477 9.3515 11.594 9.1965 11.5945 9.196C12.1831 8.42056 12.5012 7.47352 12.5 6.5C12.5 5.30653 12.0259 4.16193 11.182 3.31802C10.3381 2.47411 9.19348 2 8.00001 2C6.80653 2 5.66194 2.47411 4.81803 3.31802C3.97411 4.16193 3.50001 5.30653 3.50001 6.5C3.49896 7.47412 3.81739 8.42171 4.40651 9.1975H4.40601Z"
                                            fill="#285F09" />
                                    </svg>

                                    <span>Location</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card" style="height: 400px">
                            <div class="label d-flex align-items-center justify-content-center">
                                <span>Diskon 25%</span>
                            </div>
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#868e96" />
                            </svg>
                            <div class="card-body">
                                <a href="#" class="product-title">This is one of product in this marketplace</a>

                                <div class="mt-2">
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.97 0.683374C3.06389 0.573609 3.18044 0.485485 3.31163 0.425065C3.44283 0.364646 3.58556 0.333365 3.73 0.333374H12.27C12.4144 0.333365 12.5572 0.364646 12.6884 0.425065C12.8196 0.485485 12.9361 0.573609 13.03 0.683374L15.639 3.72737C15.8719 3.99921 16 4.34539 16 4.70337V4.95837C16.0001 5.45335 15.8455 5.93598 15.5578 6.3388C15.2702 6.74162 14.8639 7.0445 14.3957 7.20512C13.9275 7.36574 13.4208 7.37606 12.9465 7.23464C12.4721 7.09323 12.0538 6.80715 11.75 6.41637C11.5281 6.70214 11.2438 6.93335 10.9188 7.09229C10.5938 7.25124 10.2368 7.3337 9.875 7.33337C9.51321 7.33378 9.15612 7.25135 8.83112 7.0924C8.50611 6.93345 8.22181 6.7022 8 6.41637C7.77819 6.7022 7.49389 6.93345 7.16888 7.0924C6.84388 7.25135 6.48679 7.33378 6.125 7.33337C5.76321 7.33378 5.40612 7.25135 5.08112 7.0924C4.75611 6.93345 4.47181 6.7022 4.25 6.41637C3.94619 6.80715 3.52788 7.09323 3.05354 7.23464C2.57919 7.37606 2.07252 7.36574 1.60432 7.20512C1.13613 7.0445 0.729823 6.74162 0.442182 6.3388C0.154542 5.93598 -5.45986e-05 5.45335 1.44645e-08 4.95837V4.70337C1.26075e-05 4.34539 0.128057 3.99921 0.361 3.72737L2.971 0.682374L2.97 0.683374ZM4.75 4.95837C4.75 5.32305 4.89487 5.67278 5.15273 5.93065C5.41059 6.18851 5.76033 6.33337 6.125 6.33337C6.48967 6.33337 6.83941 6.18851 7.09727 5.93065C7.35513 5.67278 7.5 5.32305 7.5 4.95837C7.5 4.82577 7.55268 4.69859 7.64645 4.60482C7.74022 4.51105 7.86739 4.45837 8 4.45837C8.13261 4.45837 8.25979 4.51105 8.35355 4.60482C8.44732 4.69859 8.5 4.82577 8.5 4.95837C8.5 5.32305 8.64487 5.67278 8.90273 5.93065C9.16059 6.18851 9.51033 6.33337 9.875 6.33337C10.2397 6.33337 10.5894 6.18851 10.8473 5.93065C11.1051 5.67278 11.25 5.32305 11.25 4.95837C11.25 4.82577 11.3027 4.69859 11.3964 4.60482C11.4902 4.51105 11.6174 4.45837 11.75 4.45837C11.8826 4.45837 12.0098 4.51105 12.1036 4.60482C12.1973 4.69859 12.25 4.82577 12.25 4.95837C12.25 5.32305 12.3949 5.67278 12.6527 5.93065C12.9106 6.18851 13.2603 6.33337 13.625 6.33337C13.9897 6.33337 14.3394 6.18851 14.5973 5.93065C14.8551 5.67278 15 5.32305 15 4.95837V4.70337C15 4.5842 14.9575 4.46895 14.88 4.37837L12.27 1.33337H3.73L1.12 4.37837C1.04255 4.46895 0.999991 4.5842 1 4.70337V4.95837C1 5.32305 1.14487 5.67278 1.40273 5.93065C1.66059 6.18851 2.01033 6.33337 2.375 6.33337C2.73967 6.33337 3.08941 6.18851 3.34727 5.93065C3.60513 5.67278 3.75 5.32305 3.75 4.95837C3.75 4.82577 3.80268 4.69859 3.89645 4.60482C3.99022 4.51105 4.11739 4.45837 4.25 4.45837C4.38261 4.45837 4.50979 4.51105 4.60355 4.60482C4.69732 4.69859 4.75 4.82577 4.75 4.95837ZM1.5 7.83337C1.63261 7.83337 1.75979 7.88605 1.85355 7.97982C1.94732 8.07359 2 8.20077 2 8.33337V14.3334H3V9.33337C3 9.06816 3.10536 8.8138 3.29289 8.62627C3.48043 8.43873 3.73478 8.33337 4 8.33337H7C7.26522 8.33337 7.51957 8.43873 7.70711 8.62627C7.89464 8.8138 8 9.06816 8 9.33337V14.3334H14V8.33337C14 8.20077 14.0527 8.07359 14.1464 7.97982C14.2402 7.88605 14.3674 7.83337 14.5 7.83337C14.6326 7.83337 14.7598 7.88605 14.8536 7.97982C14.9473 8.07359 15 8.20077 15 8.33337V14.3334H15.5C15.6326 14.3334 15.7598 14.3861 15.8536 14.4798C15.9473 14.5736 16 14.7008 16 14.8334C16 14.966 15.9473 15.0932 15.8536 15.1869C15.7598 15.2807 15.6326 15.3334 15.5 15.3334H0.5C0.367392 15.3334 0.240215 15.2807 0.146447 15.1869C0.0526784 15.0932 1.44645e-08 14.966 1.44645e-08 14.8334C1.44645e-08 14.7008 0.0526784 14.5736 0.146447 14.4798C0.240215 14.3861 0.367392 14.3334 0.5 14.3334H1V8.33337C1 8.20077 1.05268 8.07359 1.14645 7.97982C1.24021 7.88605 1.36739 7.83337 1.5 7.83337ZM4 14.3334H7V9.33337H4V14.3334ZM9 9.33337C9 9.06816 9.10536 8.8138 9.29289 8.62627C9.48043 8.43873 9.73478 8.33337 10 8.33337H12C12.2652 8.33337 12.5196 8.43873 12.7071 8.62627C12.8946 8.8138 13 9.06816 13 9.33337V12.3334C13 12.5986 12.8946 12.8529 12.7071 13.0405C12.5196 13.228 12.2652 13.3334 12 13.3334H10C9.73478 13.3334 9.48043 13.228 9.29289 13.0405C9.10536 12.8529 9 12.5986 9 12.3334V9.33337ZM12 9.33337H10V12.3334H12V9.33337Z"
                                            fill="#285F09" />
                                    </svg>

                                    <a href="#" class="product-supplier">
                                        Supplier Name
                                    </a>
                                </div>

                                <div class="mt-3">
                                    <strike class="text-muted"><small>Rp. 50.000</small></strike>
                                    <br>
                                    <span class="fw-bold">Rp. 40.000 <small class="fw-light">/ Unit</small></span>
                                </div>

                                <div class="product-location">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 9C7.50555 9 7.0222 8.85338 6.61108 8.57868C6.19995 8.30397 5.87952 7.91352 5.6903 7.45671C5.50108 6.99989 5.45157 6.49723 5.54804 6.01228C5.6445 5.52732 5.8826 5.08187 6.23223 4.73223C6.58187 4.3826 7.02732 4.1445 7.51228 4.04804C7.99723 3.95157 8.4999 4.00108 8.95671 4.1903C9.41353 4.37952 9.80397 4.69995 10.0787 5.11108C10.3534 5.5222 10.5 6.00555 10.5 6.5C10.4992 7.1628 10.2356 7.79822 9.76689 8.26689C9.29822 8.73556 8.6628 8.99921 8 9ZM8 5C7.70333 5 7.41332 5.08797 7.16665 5.2528C6.91997 5.41762 6.72771 5.65189 6.61418 5.92598C6.50065 6.20007 6.47095 6.50167 6.52882 6.79264C6.5867 7.08361 6.72956 7.35088 6.93934 7.56066C7.14912 7.77044 7.41639 7.9133 7.70737 7.97118C7.99834 8.02906 8.29994 7.99935 8.57403 7.88582C8.84812 7.77229 9.08238 7.58003 9.24721 7.33336C9.41203 7.08668 9.5 6.79667 9.5 6.5C9.4996 6.1023 9.34144 5.721 9.06022 5.43978C8.779 5.15856 8.3977 5.0004 8 5Z"
                                            fill="#285F09" />
                                        <path
                                            d="M8.00001 15L3.78201 10.0255C3.7234 9.95081 3.66539 9.87564 3.60801 9.8C2.8875 8.85089 2.49826 7.69161 2.50001 6.5C2.50001 5.04131 3.07947 3.64236 4.11092 2.61091C5.14237 1.57946 6.54132 1 8.00001 1C9.4587 1 10.8576 1.57946 11.8891 2.61091C12.9205 3.64236 13.5 5.04131 13.5 6.5C13.5018 7.69107 13.1127 8.84982 12.3925 9.7985L12.392 9.8C12.392 9.8 12.242 9.997 12.2195 10.0235L8.00001 15ZM4.40601 9.1975C4.40701 9.1975 4.52301 9.3515 4.54951 9.3845L8.00001 13.454L11.455 9.379C11.477 9.3515 11.594 9.1965 11.5945 9.196C12.1831 8.42056 12.5012 7.47352 12.5 6.5C12.5 5.30653 12.0259 4.16193 11.182 3.31802C10.3381 2.47411 9.19348 2 8.00001 2C6.80653 2 5.66194 2.47411 4.81803 3.31802C3.97411 4.16193 3.50001 5.30653 3.50001 6.5C3.49896 7.47412 3.81739 8.42171 4.40651 9.1975H4.40601Z"
                                            fill="#285F09" />
                                    </svg>

                                    <span>Location</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card" style="height: 400px">
                            <div class="label d-flex align-items-center justify-content-center">
                                <span>Diskon 25%</span>
                            </div>
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#868e96" />
                            </svg>
                            <div class="card-body">
                                <a href="#" class="product-title">This is one of product in this marketplace</a>

                                <div class="mt-2">
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.97 0.683374C3.06389 0.573609 3.18044 0.485485 3.31163 0.425065C3.44283 0.364646 3.58556 0.333365 3.73 0.333374H12.27C12.4144 0.333365 12.5572 0.364646 12.6884 0.425065C12.8196 0.485485 12.9361 0.573609 13.03 0.683374L15.639 3.72737C15.8719 3.99921 16 4.34539 16 4.70337V4.95837C16.0001 5.45335 15.8455 5.93598 15.5578 6.3388C15.2702 6.74162 14.8639 7.0445 14.3957 7.20512C13.9275 7.36574 13.4208 7.37606 12.9465 7.23464C12.4721 7.09323 12.0538 6.80715 11.75 6.41637C11.5281 6.70214 11.2438 6.93335 10.9188 7.09229C10.5938 7.25124 10.2368 7.3337 9.875 7.33337C9.51321 7.33378 9.15612 7.25135 8.83112 7.0924C8.50611 6.93345 8.22181 6.7022 8 6.41637C7.77819 6.7022 7.49389 6.93345 7.16888 7.0924C6.84388 7.25135 6.48679 7.33378 6.125 7.33337C5.76321 7.33378 5.40612 7.25135 5.08112 7.0924C4.75611 6.93345 4.47181 6.7022 4.25 6.41637C3.94619 6.80715 3.52788 7.09323 3.05354 7.23464C2.57919 7.37606 2.07252 7.36574 1.60432 7.20512C1.13613 7.0445 0.729823 6.74162 0.442182 6.3388C0.154542 5.93598 -5.45986e-05 5.45335 1.44645e-08 4.95837V4.70337C1.26075e-05 4.34539 0.128057 3.99921 0.361 3.72737L2.971 0.682374L2.97 0.683374ZM4.75 4.95837C4.75 5.32305 4.89487 5.67278 5.15273 5.93065C5.41059 6.18851 5.76033 6.33337 6.125 6.33337C6.48967 6.33337 6.83941 6.18851 7.09727 5.93065C7.35513 5.67278 7.5 5.32305 7.5 4.95837C7.5 4.82577 7.55268 4.69859 7.64645 4.60482C7.74022 4.51105 7.86739 4.45837 8 4.45837C8.13261 4.45837 8.25979 4.51105 8.35355 4.60482C8.44732 4.69859 8.5 4.82577 8.5 4.95837C8.5 5.32305 8.64487 5.67278 8.90273 5.93065C9.16059 6.18851 9.51033 6.33337 9.875 6.33337C10.2397 6.33337 10.5894 6.18851 10.8473 5.93065C11.1051 5.67278 11.25 5.32305 11.25 4.95837C11.25 4.82577 11.3027 4.69859 11.3964 4.60482C11.4902 4.51105 11.6174 4.45837 11.75 4.45837C11.8826 4.45837 12.0098 4.51105 12.1036 4.60482C12.1973 4.69859 12.25 4.82577 12.25 4.95837C12.25 5.32305 12.3949 5.67278 12.6527 5.93065C12.9106 6.18851 13.2603 6.33337 13.625 6.33337C13.9897 6.33337 14.3394 6.18851 14.5973 5.93065C14.8551 5.67278 15 5.32305 15 4.95837V4.70337C15 4.5842 14.9575 4.46895 14.88 4.37837L12.27 1.33337H3.73L1.12 4.37837C1.04255 4.46895 0.999991 4.5842 1 4.70337V4.95837C1 5.32305 1.14487 5.67278 1.40273 5.93065C1.66059 6.18851 2.01033 6.33337 2.375 6.33337C2.73967 6.33337 3.08941 6.18851 3.34727 5.93065C3.60513 5.67278 3.75 5.32305 3.75 4.95837C3.75 4.82577 3.80268 4.69859 3.89645 4.60482C3.99022 4.51105 4.11739 4.45837 4.25 4.45837C4.38261 4.45837 4.50979 4.51105 4.60355 4.60482C4.69732 4.69859 4.75 4.82577 4.75 4.95837ZM1.5 7.83337C1.63261 7.83337 1.75979 7.88605 1.85355 7.97982C1.94732 8.07359 2 8.20077 2 8.33337V14.3334H3V9.33337C3 9.06816 3.10536 8.8138 3.29289 8.62627C3.48043 8.43873 3.73478 8.33337 4 8.33337H7C7.26522 8.33337 7.51957 8.43873 7.70711 8.62627C7.89464 8.8138 8 9.06816 8 9.33337V14.3334H14V8.33337C14 8.20077 14.0527 8.07359 14.1464 7.97982C14.2402 7.88605 14.3674 7.83337 14.5 7.83337C14.6326 7.83337 14.7598 7.88605 14.8536 7.97982C14.9473 8.07359 15 8.20077 15 8.33337V14.3334H15.5C15.6326 14.3334 15.7598 14.3861 15.8536 14.4798C15.9473 14.5736 16 14.7008 16 14.8334C16 14.966 15.9473 15.0932 15.8536 15.1869C15.7598 15.2807 15.6326 15.3334 15.5 15.3334H0.5C0.367392 15.3334 0.240215 15.2807 0.146447 15.1869C0.0526784 15.0932 1.44645e-08 14.966 1.44645e-08 14.8334C1.44645e-08 14.7008 0.0526784 14.5736 0.146447 14.4798C0.240215 14.3861 0.367392 14.3334 0.5 14.3334H1V8.33337C1 8.20077 1.05268 8.07359 1.14645 7.97982C1.24021 7.88605 1.36739 7.83337 1.5 7.83337ZM4 14.3334H7V9.33337H4V14.3334ZM9 9.33337C9 9.06816 9.10536 8.8138 9.29289 8.62627C9.48043 8.43873 9.73478 8.33337 10 8.33337H12C12.2652 8.33337 12.5196 8.43873 12.7071 8.62627C12.8946 8.8138 13 9.06816 13 9.33337V12.3334C13 12.5986 12.8946 12.8529 12.7071 13.0405C12.5196 13.228 12.2652 13.3334 12 13.3334H10C9.73478 13.3334 9.48043 13.228 9.29289 13.0405C9.10536 12.8529 9 12.5986 9 12.3334V9.33337ZM12 9.33337H10V12.3334H12V9.33337Z"
                                            fill="#285F09" />
                                    </svg>

                                    <a href="#" class="product-supplier">
                                        Supplier Name
                                    </a>
                                </div>

                                <div class="mt-3">
                                    <strike class="text-muted"><small>Rp. 50.000</small></strike>
                                    <br>
                                    <span class="fw-bold">Rp. 40.000 <small class="fw-light">/ Unit</small></span>
                                </div>

                                <div class="product-location">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 9C7.50555 9 7.0222 8.85338 6.61108 8.57868C6.19995 8.30397 5.87952 7.91352 5.6903 7.45671C5.50108 6.99989 5.45157 6.49723 5.54804 6.01228C5.6445 5.52732 5.8826 5.08187 6.23223 4.73223C6.58187 4.3826 7.02732 4.1445 7.51228 4.04804C7.99723 3.95157 8.4999 4.00108 8.95671 4.1903C9.41353 4.37952 9.80397 4.69995 10.0787 5.11108C10.3534 5.5222 10.5 6.00555 10.5 6.5C10.4992 7.1628 10.2356 7.79822 9.76689 8.26689C9.29822 8.73556 8.6628 8.99921 8 9ZM8 5C7.70333 5 7.41332 5.08797 7.16665 5.2528C6.91997 5.41762 6.72771 5.65189 6.61418 5.92598C6.50065 6.20007 6.47095 6.50167 6.52882 6.79264C6.5867 7.08361 6.72956 7.35088 6.93934 7.56066C7.14912 7.77044 7.41639 7.9133 7.70737 7.97118C7.99834 8.02906 8.29994 7.99935 8.57403 7.88582C8.84812 7.77229 9.08238 7.58003 9.24721 7.33336C9.41203 7.08668 9.5 6.79667 9.5 6.5C9.4996 6.1023 9.34144 5.721 9.06022 5.43978C8.779 5.15856 8.3977 5.0004 8 5Z"
                                            fill="#285F09" />
                                        <path
                                            d="M8.00001 15L3.78201 10.0255C3.7234 9.95081 3.66539 9.87564 3.60801 9.8C2.8875 8.85089 2.49826 7.69161 2.50001 6.5C2.50001 5.04131 3.07947 3.64236 4.11092 2.61091C5.14237 1.57946 6.54132 1 8.00001 1C9.4587 1 10.8576 1.57946 11.8891 2.61091C12.9205 3.64236 13.5 5.04131 13.5 6.5C13.5018 7.69107 13.1127 8.84982 12.3925 9.7985L12.392 9.8C12.392 9.8 12.242 9.997 12.2195 10.0235L8.00001 15ZM4.40601 9.1975C4.40701 9.1975 4.52301 9.3515 4.54951 9.3845L8.00001 13.454L11.455 9.379C11.477 9.3515 11.594 9.1965 11.5945 9.196C12.1831 8.42056 12.5012 7.47352 12.5 6.5C12.5 5.30653 12.0259 4.16193 11.182 3.31802C10.3381 2.47411 9.19348 2 8.00001 2C6.80653 2 5.66194 2.47411 4.81803 3.31802C3.97411 4.16193 3.50001 5.30653 3.50001 6.5C3.49896 7.47412 3.81739 8.42171 4.40651 9.1975H4.40601Z"
                                            fill="#285F09" />
                                    </svg>

                                    <span>Location</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card" style="height: 400px">
                            <div class="label d-flex align-items-center justify-content-center">
                                <span>Diskon 25%</span>
                            </div>
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#868e96" />
                            </svg>
                            <div class="card-body">
                                <a href="#" class="product-title">This is one of product in this marketplace</a>

                                <div class="mt-2">
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.97 0.683374C3.06389 0.573609 3.18044 0.485485 3.31163 0.425065C3.44283 0.364646 3.58556 0.333365 3.73 0.333374H12.27C12.4144 0.333365 12.5572 0.364646 12.6884 0.425065C12.8196 0.485485 12.9361 0.573609 13.03 0.683374L15.639 3.72737C15.8719 3.99921 16 4.34539 16 4.70337V4.95837C16.0001 5.45335 15.8455 5.93598 15.5578 6.3388C15.2702 6.74162 14.8639 7.0445 14.3957 7.20512C13.9275 7.36574 13.4208 7.37606 12.9465 7.23464C12.4721 7.09323 12.0538 6.80715 11.75 6.41637C11.5281 6.70214 11.2438 6.93335 10.9188 7.09229C10.5938 7.25124 10.2368 7.3337 9.875 7.33337C9.51321 7.33378 9.15612 7.25135 8.83112 7.0924C8.50611 6.93345 8.22181 6.7022 8 6.41637C7.77819 6.7022 7.49389 6.93345 7.16888 7.0924C6.84388 7.25135 6.48679 7.33378 6.125 7.33337C5.76321 7.33378 5.40612 7.25135 5.08112 7.0924C4.75611 6.93345 4.47181 6.7022 4.25 6.41637C3.94619 6.80715 3.52788 7.09323 3.05354 7.23464C2.57919 7.37606 2.07252 7.36574 1.60432 7.20512C1.13613 7.0445 0.729823 6.74162 0.442182 6.3388C0.154542 5.93598 -5.45986e-05 5.45335 1.44645e-08 4.95837V4.70337C1.26075e-05 4.34539 0.128057 3.99921 0.361 3.72737L2.971 0.682374L2.97 0.683374ZM4.75 4.95837C4.75 5.32305 4.89487 5.67278 5.15273 5.93065C5.41059 6.18851 5.76033 6.33337 6.125 6.33337C6.48967 6.33337 6.83941 6.18851 7.09727 5.93065C7.35513 5.67278 7.5 5.32305 7.5 4.95837C7.5 4.82577 7.55268 4.69859 7.64645 4.60482C7.74022 4.51105 7.86739 4.45837 8 4.45837C8.13261 4.45837 8.25979 4.51105 8.35355 4.60482C8.44732 4.69859 8.5 4.82577 8.5 4.95837C8.5 5.32305 8.64487 5.67278 8.90273 5.93065C9.16059 6.18851 9.51033 6.33337 9.875 6.33337C10.2397 6.33337 10.5894 6.18851 10.8473 5.93065C11.1051 5.67278 11.25 5.32305 11.25 4.95837C11.25 4.82577 11.3027 4.69859 11.3964 4.60482C11.4902 4.51105 11.6174 4.45837 11.75 4.45837C11.8826 4.45837 12.0098 4.51105 12.1036 4.60482C12.1973 4.69859 12.25 4.82577 12.25 4.95837C12.25 5.32305 12.3949 5.67278 12.6527 5.93065C12.9106 6.18851 13.2603 6.33337 13.625 6.33337C13.9897 6.33337 14.3394 6.18851 14.5973 5.93065C14.8551 5.67278 15 5.32305 15 4.95837V4.70337C15 4.5842 14.9575 4.46895 14.88 4.37837L12.27 1.33337H3.73L1.12 4.37837C1.04255 4.46895 0.999991 4.5842 1 4.70337V4.95837C1 5.32305 1.14487 5.67278 1.40273 5.93065C1.66059 6.18851 2.01033 6.33337 2.375 6.33337C2.73967 6.33337 3.08941 6.18851 3.34727 5.93065C3.60513 5.67278 3.75 5.32305 3.75 4.95837C3.75 4.82577 3.80268 4.69859 3.89645 4.60482C3.99022 4.51105 4.11739 4.45837 4.25 4.45837C4.38261 4.45837 4.50979 4.51105 4.60355 4.60482C4.69732 4.69859 4.75 4.82577 4.75 4.95837ZM1.5 7.83337C1.63261 7.83337 1.75979 7.88605 1.85355 7.97982C1.94732 8.07359 2 8.20077 2 8.33337V14.3334H3V9.33337C3 9.06816 3.10536 8.8138 3.29289 8.62627C3.48043 8.43873 3.73478 8.33337 4 8.33337H7C7.26522 8.33337 7.51957 8.43873 7.70711 8.62627C7.89464 8.8138 8 9.06816 8 9.33337V14.3334H14V8.33337C14 8.20077 14.0527 8.07359 14.1464 7.97982C14.2402 7.88605 14.3674 7.83337 14.5 7.83337C14.6326 7.83337 14.7598 7.88605 14.8536 7.97982C14.9473 8.07359 15 8.20077 15 8.33337V14.3334H15.5C15.6326 14.3334 15.7598 14.3861 15.8536 14.4798C15.9473 14.5736 16 14.7008 16 14.8334C16 14.966 15.9473 15.0932 15.8536 15.1869C15.7598 15.2807 15.6326 15.3334 15.5 15.3334H0.5C0.367392 15.3334 0.240215 15.2807 0.146447 15.1869C0.0526784 15.0932 1.44645e-08 14.966 1.44645e-08 14.8334C1.44645e-08 14.7008 0.0526784 14.5736 0.146447 14.4798C0.240215 14.3861 0.367392 14.3334 0.5 14.3334H1V8.33337C1 8.20077 1.05268 8.07359 1.14645 7.97982C1.24021 7.88605 1.36739 7.83337 1.5 7.83337ZM4 14.3334H7V9.33337H4V14.3334ZM9 9.33337C9 9.06816 9.10536 8.8138 9.29289 8.62627C9.48043 8.43873 9.73478 8.33337 10 8.33337H12C12.2652 8.33337 12.5196 8.43873 12.7071 8.62627C12.8946 8.8138 13 9.06816 13 9.33337V12.3334C13 12.5986 12.8946 12.8529 12.7071 13.0405C12.5196 13.228 12.2652 13.3334 12 13.3334H10C9.73478 13.3334 9.48043 13.228 9.29289 13.0405C9.10536 12.8529 9 12.5986 9 12.3334V9.33337ZM12 9.33337H10V12.3334H12V9.33337Z"
                                            fill="#285F09" />
                                    </svg>

                                    <a href="#" class="product-supplier">
                                        Supplier Name
                                    </a>
                                </div>

                                <div class="mt-3">
                                    <strike class="text-muted"><small>Rp. 50.000</small></strike>
                                    <br>
                                    <span class="fw-bold">Rp. 40.000 <small class="fw-light">/ Unit</small></span>
                                </div>

                                <div class="product-location">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 9C7.50555 9 7.0222 8.85338 6.61108 8.57868C6.19995 8.30397 5.87952 7.91352 5.6903 7.45671C5.50108 6.99989 5.45157 6.49723 5.54804 6.01228C5.6445 5.52732 5.8826 5.08187 6.23223 4.73223C6.58187 4.3826 7.02732 4.1445 7.51228 4.04804C7.99723 3.95157 8.4999 4.00108 8.95671 4.1903C9.41353 4.37952 9.80397 4.69995 10.0787 5.11108C10.3534 5.5222 10.5 6.00555 10.5 6.5C10.4992 7.1628 10.2356 7.79822 9.76689 8.26689C9.29822 8.73556 8.6628 8.99921 8 9ZM8 5C7.70333 5 7.41332 5.08797 7.16665 5.2528C6.91997 5.41762 6.72771 5.65189 6.61418 5.92598C6.50065 6.20007 6.47095 6.50167 6.52882 6.79264C6.5867 7.08361 6.72956 7.35088 6.93934 7.56066C7.14912 7.77044 7.41639 7.9133 7.70737 7.97118C7.99834 8.02906 8.29994 7.99935 8.57403 7.88582C8.84812 7.77229 9.08238 7.58003 9.24721 7.33336C9.41203 7.08668 9.5 6.79667 9.5 6.5C9.4996 6.1023 9.34144 5.721 9.06022 5.43978C8.779 5.15856 8.3977 5.0004 8 5Z"
                                            fill="#285F09" />
                                        <path
                                            d="M8.00001 15L3.78201 10.0255C3.7234 9.95081 3.66539 9.87564 3.60801 9.8C2.8875 8.85089 2.49826 7.69161 2.50001 6.5C2.50001 5.04131 3.07947 3.64236 4.11092 2.61091C5.14237 1.57946 6.54132 1 8.00001 1C9.4587 1 10.8576 1.57946 11.8891 2.61091C12.9205 3.64236 13.5 5.04131 13.5 6.5C13.5018 7.69107 13.1127 8.84982 12.3925 9.7985L12.392 9.8C12.392 9.8 12.242 9.997 12.2195 10.0235L8.00001 15ZM4.40601 9.1975C4.40701 9.1975 4.52301 9.3515 4.54951 9.3845L8.00001 13.454L11.455 9.379C11.477 9.3515 11.594 9.1965 11.5945 9.196C12.1831 8.42056 12.5012 7.47352 12.5 6.5C12.5 5.30653 12.0259 4.16193 11.182 3.31802C10.3381 2.47411 9.19348 2 8.00001 2C6.80653 2 5.66194 2.47411 4.81803 3.31802C3.97411 4.16193 3.50001 5.30653 3.50001 6.5C3.49896 7.47412 3.81739 8.42171 4.40651 9.1975H4.40601Z"
                                            fill="#285F09" />
                                    </svg>

                                    <span>Location</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    var tab_info = document.getElementById('store-info');
    var tab_produk = document.getElementById('store-produk');
    var content_info = document.getElementById('store-info-content');
    var content_produk = document.getElementById('store-produk-content');

    var location = document.getElementById('location');
    var list_loc = document.getElementById('list-location');

    location.addEventListener('focusin', function(e){
        list_loc.style.display = "block";
    });

    location.addEventListener('focusout', function(e){
        list_loc.style.display = "none";
    });

    location.addEventListener('keyup', function(e){
        filterFunction();
    });

    function filterFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("location");
        filter = input.value.toUpperCase();
        div = document.getElementById("list-location");
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }

    function to_produk() {
        window.location.hash = 'produk';

        content_info.style.display = "none";
        content_produk.style.display = "block";

        tab_produk.firstElementChild.classList.add("active");
        tab_info.firstElementChild.classList.remove("active");

        tab_produk.lastElementChild.checked = true;
        tab_info.lastElementChild.checked = false;
    }

    function to_info() {
        window.location.hash = 'info';

        content_produk.style.display = "none";
        content_info.style.display = "block";

        tab_info.firstElementChild.classList.add("active");
        tab_produk.firstElementChild.classList.remove("active");

        tab_info.lastElementChild.checked = true;
        tab_produk.lastElementChild.checked = false;
    }

    if(window.location.hash == '#produk') {
        to_produk();
    } else {
        to_info();
    }

    tab_info.addEventListener('click', function(e){
        to_info();
    });

    tab_produk.addEventListener('click', function(e){
        to_produk();
    });

}, false);
</script>