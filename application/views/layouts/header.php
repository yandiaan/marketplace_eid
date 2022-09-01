<style>
.form-control {
    border-radius: 10px;
}
.form-control:focus {
    color:#212529;
    background-color:#fff;
    border-color:#82C631;
    outline:0;
    box-shadow: none;
    border-radius: 10px;
}
.btn-grow:hover {
    transform: scale(1.05);
}
.btn-primary-eid {
    color: #fff;
    background-color: #82C631;
    border-radius: 10px;
    transition: all .1s ease-in-out;
}
.btn-primary-eid:hover,
.btn-primary-eid:active,
.btn-primary-eid:focus {
    color: #fff;
    background-color: #66AA23;
    border-color: #66AA23;
}
.btn-outline-primary-eid {
    color: #82C631;
    background-color: #fff;
    border-radius: 10px;
    border-color: #82C631;
    transition: all .1s ease-in-out;
}
.btn-outline-primary-eid:hover,
.btn-outline-primary-eid:active,
.btn-outline-primary-eid:focus {
    color: #82C631;
    background-color: #fff;
    border-radius: 10px;
    border-color: #82C631;
}
.btn-cart {
    color: #6c727c;
    background-color: #fff;
    border-radius: 10px;
    border-color: #fff;
    transition: all .1s ease-in-out;
}
.btn-cart:hover,
.btn-cart:active,
.btn-cart:focus {
    color: #6c727c;
    background-color: #f1f1f1;
    border-radius: 10px;
    border-color: #fff;
}
.btn-search {
    color: #82C631;
    background-color: #F1FCD6;
    border-radius: 10px;
    border-color: #ced4da;
    transition: all .1s ease-in-out;
}
.btn-search:hover,
.btn-search:active,
.btn-search:focus {
    color: #82C631;
    background-color: #F1FCD6;
    border-radius: 10px;
    border-color: #ced4da;
}
</style>

<nav class="navbar navbar-expand-lg sticky-top bg-white px-5 py-3 shadow-sm">
    <div class="container">
        <img src="https://estimator.id/assets/img/logo.png" alt="brand-logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <div class="d-flex me-auto mx-3 mb-2 mb-lg-0" role="search">
            <div class="input-group">
                <input class="form-control" type="search" placeholder="Cari barang.." aria-label="Search">
                <button class="btn btn-search" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </div>

        <button class="btn btn-cart py-2 mx-2"><i class="fas fa-fw fa-shopping-cart"></i></button>

        <div class="vr mr-3"></div>

        <a href="#" class="btn btn-primary-eid px-4 btn-grow mx-2 py-2">Masuk</a>
        <a href="#" class="btn btn-outline-primary-eid btn-grow px-4 py-2">Daftar</a>

        </div>
    </div>
</nav>