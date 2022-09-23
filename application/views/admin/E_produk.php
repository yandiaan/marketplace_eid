<form action="<?php echo base_url('API/Admin/D_Produk/update') ?>" method="post">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Produk</h6>
        </div>
        <div class="card-body">
            <input type="hidden" name="id_produk" value="<?= $data['id_produk'] ?>">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_produk" value="<?= $data['nama_produk']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="InputEmail" class="col-sm-2 col-form-label">Nama Kategori</label>
                <div class="col-sm-10">
                    <select name="input_kategori" id="input_kategori" class="custom-select select2 form-control" required>
                        <?php foreach ($cats as $category) { ?>
                            <option <?php if ($category->id_produk_kategori == $data['id_produk_kategori']) {
                                        echo 'selected="selected"';
                                    } ?> value="<?php echo $category->id_produk_kategori ?>"><?php echo $category->nama_kategori ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="deskripsi" value="<?= $data['deskripsi']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Spesifikasi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="spesifikasi" value="<?= $data['spesifikasi']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Brand</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="brand" value="<?= $data['brand']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="harga" value="<?= $data['harga']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Berat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="berat" value="<?= $data['berat']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Lebar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="lebar" value="<?= $data['lebar']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Tinggi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="tinggi" value="<?= $data['tinggi']; ?>">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-lg btn-primary  float-right">Simpan</button>
        </div>
    </div>
</form>