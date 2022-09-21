<!-- Button trigger modal -->
<button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#Tambahdata">
    Tambah data
</button>

<div class="table-responsive">
    <table class="table table-striped table-hover table-sm table-bordered" id="tabel-produk">
        <thead class="bg-primary text-white text-center">
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Spesifikasi</th>
                <th>Brand</th>
                <th>Harga</th>
                <th>Berat</th>
                <th>Lebar</th>
                <th>Tinggi</th>
                <th>Variasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($products as $product) : ?>
                <tr>
                    <td class="text-center">
                        <?php echo $no++; ?>
                    </td>
                    <td>
                        <?php echo $product['nama_produk'] ?>
                    </td>
                    <td>
                        <?php echo $product['id_produk_kategori'] ?>
                    </td>
                    <td>
                        <?php echo $product['deskripsi'] ?>
                    </td>
                    <td>
                        <?php echo $product['spesifikasi'] ?>
                    </td>
                    <td>
                        <?php echo $product['brand'] ?>
                    </td>
                    <td>
                        <?php echo $product['harga'] ?>
                    </td>
                    <td>
                        <?php echo $product['berat'] ?>
                    </td>
                    <td>
                        <?php echo $product['lebar'] ?>
                    </td>
                    <td>
                        <?php echo $product['tinggi'] ?>
                    </td>
                    <td><?php if ($product['is_variation'] != 1) { ?>
                            <a href="<?= site_url('API/Admin/D_produk/variasi/' . $product['id_produk']) ?>" class="btn btn-small text-success"><i class="fas fa-edit"></i>Add</a>
                        <?php } else {
                            echo $product['is_variation'];
                        } ?>
                    </td>
                    <td class="text-center">
                        <a href="<?= site_url('API/Admin/D_produk/edit/' . $product['id_produk']) ?>" class="btn btn-small text-warning" id="update"><i class="fas fa-edit"></i> Edit</a>
                        <a onclick="deleteConfirm('<?php echo site_url('API/Admin/D_produk/delete/' . $product['id_produk']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal add-->
<div class="modal fade" id="Tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('API/Admin/D_Produk/add') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_produk">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="InputEmail" class="col-sm-2 col-form-label">Nama Kategori</label>
                        <div class="col-sm-10">
                            <select name="input_kategori" id="input_kategori" class="custom-select select2 form-control" required>
                                <?= $kategori ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" name="deskripsi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Spesifikasi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" name="spesifikasi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Brand</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" name="brand">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" name="harga">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Berat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" name="berat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Lebar</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" name="lebar">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tinggi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" name="tinggi">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Logout Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
            </div>
        </div>
    </div>
</div>

<script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal('show');
    }
</script>