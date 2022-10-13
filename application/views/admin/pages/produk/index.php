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
                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Aw, yeah!</button>
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
                                        <?php if ($produk->delete_at == NULL) { ?>
                                            <a href="<?php echo base_url('suplier/dashboard/arsip-produk/' . $produk->id_produk) ?>" class="btn btn-primary">Arsip</a>
                                    </td>
                                <?php } else { ?>
                                    <a href="<?php echo base_url('suplier/dashboard/bukaarsip-produk/' . $produk->id_produk) ?>" class="btn btn-success">Buka Arsip</a></td>
                                <?php } ?>
                                <td style="text-align:center;">
                                    <div class="btn-group mb-3" role="group" aria-label="Basic example">
                                        <a href="<?php echo base_url('suplier/dashboard/edit-produk/' . $produk->id_produk) ?>" class="btn btn-warning">Edit</a>
                                        <a href="#" class="btn btn-success">Detail</a>
                                        <form action="<?php echo base_url('suplier/dashboard/delete-produk/' . $produk->id_produk) ?>" method="post" id="delProduk-<?= $produk->id_produk ?>">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger" data-confirm="Hapus Data?|Apakah Anda yakin ingin menghapus produk ini?<br>semua data yang bersangkutan dengan produk ini akan terhapus." data-confirm-yes="submitDel(<?= $produk->id_produk ?>)">Delete</button>
                                        </form>
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
</section>

<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>