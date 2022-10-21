<section class="section">
    <div class="section-header">
        <h1>Wilayah Produk</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Wilayah Produk</a></div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <button class="btn btn-lg btn-success mb-4" data-toggle="modal" data-target="#add_wilayahproduk">Tambah Wilayah Produk</button>
                <div class="table-responsive">
                    <table class="table table-striped dataTable" id="tabel-produk-wilayah">
                        <thead>
                            <tr style="text-align: center;">
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">Nama Produk</th>
                                <!-- <th style="text-align: center;">Wilayah Produk</th> -->
                                <th style="text-align: center;">Provinsi</th>
                                <th style="text-align: center;">Kota</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($produks as $produk) : ?>
                                <tr>
                                    <td style="text-align:center;"><?php echo $no++ ?></td>
                                    <td style="text-align:center;"><?php echo $produk->nama_produk ?></td>
                                    <td style="text-align:center;"><?php echo $produk->provinsi ?></td>
                                    <td style="text-align:center;"><?php echo $produk->kota ?></td>
                                    <td style="text-align:center;">
                                        <div class="btn-group mb-3" role="group" aria-label="Basic example">
                                            <button class="btn btn-warning edit_wilayah" data-kota="<?= $produk->kota; ?>" data-provinsi="<?= $produk->provinsi ?>" data-id="<?= $produk->id_wilayah_produk ?>">Edit</button>
                                            <form action="<?php echo base_url('suplier/dashboard/delete-wilayah-produk/' . $produk->id_wilayah_produk) ?>" method="post" id="delWilayahProduk-<?= $produk->id_wilayah_produk ?>">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger" data-confirm="Hapus Data?|Apakah Anda yakin ingin menghapus Wilayah Toko ini?<br>semua data yang bersangkutan dengan wilayah ini akan terhapus." data-confirm-yes="submitDel_Wilayah(<?= $produk->id_wilayah_produk ?>)">Delete</button>
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

<!-- Modal Tambah  -->
<div class="modal fade" tabindex="-1" role="dialog" id="add_wilayahproduk">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Wilayah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('Suplier/Produk/add_wilayah_produk') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <select class="form-control" id="inputProvinsi" name="id_produk">
                            <?php foreach ($data_produk as $row) { ?>
                                <option value="<?= $row['id_produk']; ?>"><?php echo $row['nama_produk']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Provinsi</label>
                        <select class="form-control" id="inputProvinsi" name="provinsi">
                            <?php foreach ($distribusi as $row) { ?>
                                <option value="<?= $row['provinsi']; ?>"><?php echo $row['provinsi']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kota</label>
                        <select class="form-control" id="inputProvinsi" name="kota">
                            <?php foreach ($distribusi as $row) { ?>
                                <option value="<?= $row['kota']; ?>"><?php echo $row['kota']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var table = $('#tabel-produk-wilayah').DataTable({
            "pagging": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
            "lengthChange": true,
            "buttons": ['excel', 'pdf']
        });

        table.buttons().container().appendTo('#example_wrapper .col-md-6"eq(0)');
    })

    function submitDel_Wilayah(id) {
        $('#delWilayahProduk-' + id).submit()
    }
</script>