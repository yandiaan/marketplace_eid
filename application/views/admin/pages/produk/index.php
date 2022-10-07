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
        <div class="card-header">
            <h5>Data Produk</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped dataTable" id="tabel-produk">
                    <thead>
                        <tr style="text-align:center;">
                            <th style="text-align:center;">
                                No
                            </th>
                            <th style="text-align:center;">Gambar</th>
                            <th style="text-align:center;">Nama Produk</th>
                            <th style="text-align:center;">Brand</th>
                            <th style="text-align:center;">Harga</th>
                            <th style="text-align:center;">Berat</th>
                            <th style="text-align:center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($produks as $produk) : ?>
                            <tr>
                                <td style="text-align:center;"><?php echo $no++ ?></td>
                                <td style="text-align:center;">gambar</td>
                                <td style="text-align:center;"><?php echo $produk->nama_produk ?></td>
                                <td style="text-align:center;"><?php echo $produk->brand ?></td>
                                <td style="text-align:center;"><?php echo $produk->harga ?></td>
                                <td style="text-align:center;"><?php echo $produk->berat ?></td>
                                <td style="text-align:center;">
                                    <div class="btn-group mb-3" role="group" aria-label="Basic example">
                                        <a href="#" class="btn btn-warning">Edit</a>
                                        <a href="#" class="btn btn-success">Detail</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/page/modules-datatables.js"></script>