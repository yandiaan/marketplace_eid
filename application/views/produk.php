<link rel="stylesheet" href="https://unpkg.com/xzoom/dist/xzoom.css">
<script src="https://unpkg.com/xzoom/dist/xzoom.min.js"></script>
<div class="container">
    <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="nav-link">Home
                </a></li>
            <li class="breadcrumb-item active fw-bold" aria-current="page">Product</li>
        </ol>
    </nav>
    <div class="row justify-content-between">
        <div class="col-6 row d-flex flex-row-reverse justify-content-center align-items-center">
            <div class="col-9 xzoom-main">
                <img src="" class="xzoom shadow-none rounded" xoriginal="" width="100%" class="img-fluid w-100"
                    alt="image">
            </div>
            <div class="xzoom-thumbs d-flex flex-column col-2 me-3">

            </div>

        </div>
        <div class="col-6">
            <h3 class="fw-bolder" id="nama_produk"></h3>
            <div class="info-group">
                <small class="sales-counter fw-bold me-3 text-secondary">Terjual 32</small>
                <div class="rating d-inline fs-6 fw-bold border-start border-1 border-dark ps-3" data-value="3.5">
                    <small class="text-decoration-underline">3.5</small>
                    <div class="star-group d-inline mx-1 text-warning">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <small class="text-secondary">(20 Ulasan)</small>
                </div>
            </div>
            <div class="price">
                <div>
                    <h1 class="text-success fw-bold d-inline" id="harga"></h1>
                    <small>/ Unit</small>
                </div>
            </div>
            <div class="variant row">
                <div class="col-4">
                    <h6 class="fw-bold">Warna</h6>
                </div>
                <div class="col-8">
                    <h6 class="fw-light">Pilih Warna</h6>
                    <input type="radio" name="color" id="red" value="red" />
                    <label for="red"><span class="red"></span></label>

                    <input type="radio" name="color" id="green" />
                    <label for="green"><span class="green"></span></label>

                    <input type="radio" name="color" id="yellow" />
                    <label for="yellow"><span class="yellow"></span></label>
                </div>
            </div>
            <div class="variant row">
                <div class="col-4">
                    <h6 class="fw-bold">Versi</h6>
                </div>
                <div class="col-8">
                    <h6 class="fw-light">Pilih versi</h6>
                    <button class="btn btn-outline-secondary versi">CEAS5312-1000422CO</button>
                    <button class="btn btn-outline-secondary mt-2 versi">CHA01120-1CACTP07B</button>
                </div>
            </div>
            <div class="variant row">
                <div class="col-4">

                    <h6 class="fw-bold">Kuantitas</h6>
                </div>
                <div class="col-8 quantity">
                    <button disabled class="btn btn-secondary rounded-circle" id="decrement">-</button>
                    <span class="mx-2" id="quantity">1</span>
                    <button class="btn btn-secondary rounded-circle" id="increment">+</button>
                </div>
            </div>
            <div class="confirm row justify-content-start mt-4">
                <div class="col-4"><button class="w-100 btn btn-primary">Beli Sekarang</button></div>
                <div class="col-6"><button class="w-100 btn btn-outline-primary">Masukkan Keranjang</button></div>
            </div>
            <div class="row justify-content-space-between mt-2">
                <div class="col">
                    <img src="<?= base_url("assets/icon/ship.png"); ?>" alt="shipping">
                    <span>Pengiriman gratis pada wilayah tertentu</span>
                    <i class="p-0 ms-2 fa-solid fa-circle-info text-secondary text-end"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="card card-supplier col-8 mt-4">
            <div class="row align-items-center">
                <div class="col-2">
                    <img src="<?= base_url("assets/icon/Dummy-Supplier.png"); ?>" alt="Supplier">
                </div>
                <div class="col-6">
                    <h6 id="nama_toko" class="fw-bold fs-5"></h6>
                    <h6><i class="fa fa-location-dot"></i> <span id="lokasi"> Jakarta Pusat | 98% Rating toko</span>
                    </h6>
                </div>
                <div class="col-4">
                    <button class="btn btn-outline-primary fs-6">
                        Chat
                    </button>
                    <button class="btn btn-outline-secondary">
                        Kunjungi Toko
                    </button>
                </div>
            </div>
        </div>
        <div class="col-2 align-self-end">
            <button class="btn btn-outline-primary">
                <i class="fa fa-share"></i>
                Share
            </button>
        </div>
    </div>
    <div class="mt-5 accordion accordion-flush mb-5" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Detail Produk
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body px-5">
                    <p id="deskripsi"></p>
                    <div class="row">
                        <div class="col-4">
                            Kategori:
                        </div>
                        <div class="col-8" id="nama_kategori"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Spesifikasi Product
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body px-5">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="fw-bold">Dimensi</h6>
                            <div class="row">
                                <div class="col-4">Tinggi :</div>
                                <div class="col-4" id="tinggi"></div>
                            </div>
                            <div class="row">
                                <div class="col-4">Lebar :</div>
                                <div class="col-4" id="lebar"></div>
                            </div>
                            <div class="row">
                                <div class="col-4">Berat:</div>
                                <div class="col-4" id="berat"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <h6 class="fw-bold">Info Lebih Lanjut</h6>
                            <div class="row">
                                <div class="col-4">Merk :</div>
                                <div class="col-4" id="brand"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <h6 class="fw-bold">Spesifikasi</h6>
                        <p id="spesifikasi"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Pengiriman & Garansi
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                    <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
                    happening here in terms of content, but just filling up the space to make it look, at least at first
                    glance, a bit more representative of how this would look in a real-world application.
                </div>
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-5">
            <h3 class="fw-semibold">Ulasan (20)</h3>
            <div class="w-100 row align-items-center">
                <div class="col-4 text-center py-5">
                    <h1 class="d-inline fw-bolder">3.5</h1>
                    <span>/ 5</span>
                    <div class="star-group mx-1 text-warning">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                </div>
                <div class="rate col-8">
                    <div class="rate-item d-flex align-items-center">
                        <span><i class="fa fa-star text-warning me-1"></i>5</span>
                        <div class="progress w-75 mx-2">
                            <div class="progress-bar bg-success w-50" role="progressbar" aria-label="Basic example"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="text-secondary">10</span>
                    </div>
                    <div class="rate-item d-flex align-items-center">
                        <span><i class="fa fa-star text-warning me-1"></i>4</span>
                        <div class="progress w-75 mx-2">
                            <div class="progress-bar bg-success w-0" role="progressbar" aria-label="Basic example"
                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="text-secondary">0</span>
                    </div>
                    <div class="rate-item d-flex align-items-center">
                        <span><i class="fa fa-star text-warning me-1"></i>3</span>
                        <div class="progress w-75 mx-2">
                            <div class="progress-bar bg-success w-0" role="progressbar" aria-label="Basic example"
                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="text-secondary">0</span>
                    </div>
                    <div class="rate-item d-flex align-items-center">
                        <span><i class="fa fa-star text-warning me-1"></i>2</span>
                        <div class="progress w-75 mx-2">
                            <div class="progress-bar bg-success w-75" role="progressbar" aria-label="Basic example"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="text-secondary">10</span>
                    </div>
                    <div class="rate-item d-flex align-items-center">
                        <span><i class="fa fa-star text-warning me-1"></i>1</span>
                        <div class="progress w-75 mx-2">
                            <div class="progress-bar bg-success w-75" role="progressbar" aria-label="Basic example"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="text-secondary">10</span>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-7">
            <div class="position-relative review-form w-100 h-100 text-white bg-success px-5 py-3">
                <div class="validateLoginReview bg-success w-100 h-100 position-absolute">
                    <div class="d-flex flex-column h-100 opacity-100 align-items-center justify-content-center">
                        <h2 class="opacity-100">Login Dulu</h2>
                        <button class="btn btn-primary">Login</button>
                    </div>
                </div>
                <div class="input-form">
                    <input type="hidden" name="id_produk" class="id-produk" value="">
                    <h5 class="fw-bold">Review produk ini </h5>
                    <div class="star-form text-warning my-3">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <textarea class="form-control bg-transparent text-white input-review" name="review" id="" cols="30"
                        rows="5" placeholder="Bagikan pengalaman Anda di sini"></textarea>
                    <div class="w-100 d-flex mt-4">
                        <button class="btn btn-primary ms-auto submit-review">
                            <span class="text-submit">
                                Kirim Ulasan</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <h6>Filter</h6>
        <div class="row justify-content-between">
            <div class="col-8">
                <a class="btn btn-outline-primary rounded-pill mx-1">Semua</a>
                <a class="btn btn-outline-secondary rounded-pill mx-1">5 <i class="fa fa-star text-warning"></i> </a>
                <a class="btn btn-outline-secondary rounded-pill mx-1">4 <i class="fa fa-star text-warning"></i> </a>
                <a class="btn btn-outline-secondary rounded-pill mx-1">3 <i class="fa fa-star text-warning"></i> </a>
                <a class="btn btn-outline-secondary rounded-pill mx-1">2 <i class="fa fa-star text-warning"></i> </a>
                <a class="btn btn-outline-secondary rounded-pill mx-1">1 <i class="fa fa-star text-warning"></i> </a>
                <p class="mt-3">
                    <a class="btn btn-outline-secondary rounded-pill mx-1">Dengan Media</a>
                    <a class="btn btn-outline-secondary rounded-pill mx-1">Dengan Komentar</a>
                </p>
            </div>
            <div class="col-2">
                <span>Urutkan Berdasarkan</span>
                <select class="form-select border-success" aria-label="Default select example">
                    <option selected>Terbaru</option>
                    <option value="1">Huruf</option>
                    <option value="2">Waktu</option>
                    <option value="3">Harga</option>
                </select>
            </div>
        </div>
    </div>
    <div class="user-review w-75">
    </div>
    <div class="product mt-5">
        <h5 class="fw-semibold">
            Produk lain dari toko ini
        </h5>
        <div class="row mt-4">
            <div class="col-sm-3">
                <div class="card" style="height: 400px">
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
            <div class="col-sm-3">
                <div class="card" style="height: 400px">
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
            <div class="col-sm-3">
                <div class="card" style="height: 400px">
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
            <div class="col-sm-3">
                <div class="card" style="height: 400px">
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
        <div class="row mt-4">
            <div class="col-sm-3">
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
            <div class="col-sm-3">
                <div class="card" style="height: 400px">
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
            <div class="col-sm-3">
                <div class="card" style="height: 400px">
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
            <div class="col-sm-3">
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

<script src="<?= base_url("assets/src/js/pages/ProductPage.js"); ?>"></script>

<script>
fetchDetailProduct("<?= $slug; ?>");
// var cookie = $.cookie("sessionToken");

// if (cookie !== undefined) {
//     $('.validateLoginReview').remove();
// }

$(".submit-review").click(() => {
    if (cookie === undefined) {
        $("#modalLogin").modal("show");
    } else {
        $('.validateLoginReview').remove();
        $(".submit-review").prop("disabled", true);
        $(".text-submit").html(
            `<span class="spinner-border spinner-border-sm" role="status"></span>  Loading...`
        );
        addReview($(".id-produk").val());
        updateReviewData("<?= $slug; ?>");
    }
});
</script>