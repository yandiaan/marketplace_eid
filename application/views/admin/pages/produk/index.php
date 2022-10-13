<section class="section">
<div class="section-header">
    <h1>List Produk</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Produk</a></div>
        <div class="breadcrumb-item">List Produk</div>
    </div>
</div>

<div class="section-body">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Aw, yeah!</button> -->
                <table class="table dataTable" id="datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <!-- <th>Gambar</th> -->
                            <th>Nama Produk</th>
                            <th>Brand</th>
                            <th>Harga</th>
                            <th>Berat</th>
                            <!-- <th>Arsip</th> -->
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
</section>

<div class="modal" tabindex="-1" role="dialog" id="deleteModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span>Apakah kamu yakin ingin menghapus produk ini ?</span>
            </div>
            <div class="modal-footer br">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" id="id_produk">Delete</button>
            </div>
        </div>
    </div>
</div>

