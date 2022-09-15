<h2>Galeri Produk</h2>

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
                <th>Path</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($galeries as $galeri) : ?>
                <tr>
                    <td class="text-center">
                        <?php echo $no++; ?>
                    </td>
                    <td>
                        <?php echo $galeri['id_produk'] ?>
                    </td>
                    <td>
                        <?php echo $galeri['image_path'] ?>
                    </td>
                    <td class="text-center">
                        <a onclick="edit(<?= $galeri['id_produk'] ?>)" href="#" class="btn btn-small text-warning" id="update"><i class="fas fa-edit"></i> Edit</a>
                        <a onclick="return confirm('Are you want to delete ')" href="<?php echo base_url('api/admin/upload_file/delete/' . $galeri['id_galeri_produk']) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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
            <form action="<?php echo base_url('api/admin/upload_file/save_galerimultiple') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="InputEmail" class="col-sm-2 col-form-label">Nama Produk<small class="text-danger">*</small></label>
                        <select name="input_produk" id="input_produk" class="custom-select select2 form-control" style="width:100%;" required>
                            <?= $produk ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="rounded btn btn-primary m-0" type="button" id="file-plus" onclick="file_plus()"><i class="fas fa-plus"> Tambah File</i></button>
                    </div>
                    <div class="form-group" id="file_container">
                        <a>
                            <div id='delete0' class='row mb-3 d-flex'>
                                <div class='col-10 align-self-center'>
                                    <label for='formFileMultiple' class='form-label'>Pilih file</label>
                                    <input class='form-control-file' type='file' name='files0' multiple>
                                </div>
                                <div class='col-2 align-self-center'>
                                    <button type='button' class='rounded btn btn-sm btn-danger'><i class='fas fa-trash'></i></button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <input type="hidden" name="total" value="1">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
            </form>
        </div>
    </div>
</div>


<!-- Logout Delete Confirmation-->
<div class="modal fade" id="deleteModalGaleri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a id="btn-deleteGaleri" class="btn btn-danger" href="#">Delete</a>
            </div>
        </div>
    </div>
</div>

<script>
    function deleteConfirm(urlGaleri) {
        $('#deleteModalGaleri').modal('show');
        $('#btn-deleteGaleri').attr('href', urlGaleri);
    }

    var total = 1;

    function file_plus() {
        $("#file_container").append("<a><div id='delete" + total + "' class='row mb-3 d-flex'><div class='col-10 align-self-center'><label for='formFileMultiple' class='form-label'>Pilih file</label><input class='form-control-file' type='file' name='files" + total + "' multiple></div><div class='col-2 align-self-center'><button type='button' onclick='return hapuselement(this)' class='rounded btn btn-sm btn-danger'><i class='fas fa-trash'></i></button></div></div></a>");
        total += 1;
        $('[name=total]').val(total);
    }

    function hapuselement(id) {
        $(id).closest('a').remove();
        total -= 1;
        $('[name=total]').val(total);
    }
</script>