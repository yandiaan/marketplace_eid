<!-- Button trigger modal -->
<button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#Tambahdata">
    Tambah data
</button>

<div class="table-responsive">
    <table class="table table-striped table-hover table-sm table-bordered" id="tabel-produk">
        <thead class="bg-primary text-white text-center">
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($categories as $categori) : ?>
                <tr>
                    <td class="text-center">
                        <?php echo $no++; ?>
                    </td>
                    <td>
                        <?php echo $categori['nama_kategori'] ?>
                    </td>
                    <td class="text-center">
                        <a onclick="edit(<?= $categori['id_produk_kategori'] ?>)" href="#" class="btn btn-small text-warning" id="update"><i class="fas fa-edit"></i> Edit</a>
                        <a onclick="deleteConfirm('<?php echo site_url('api/admin/kategori/delete/' . $categori['id_produk_kategori']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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
            <form action="<?php echo site_url('api/admin/kategori/add') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama kategori</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_kategori">
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

<!-- Modal update-->
<div class="modal fade" id="modal-update-kategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo site_url('api/admin/kategori/update') ?>" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id_produk_kategoriU" id="id_produk_kategoriU" value="">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_produk_kategoriU" id="nama_produk_kategoriU" value="">
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

    function edit(id) {
        $.ajax({
            type: 'ajax',
            method: 'POST',
            url: base_url + 'API/Admin/Kategori/edit',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                console.log(response);
                $('#id_produk_kategoriU').val(response.id_produk_kategori);
                $('#nama_produk_kategoriU').val(response.nama_kategori);
                $('#modal-update-kategori').modal('show');
            },
            error: function(xmlresponse) {
                console.log(xmlresponse);
            }
        });
    }
</script>