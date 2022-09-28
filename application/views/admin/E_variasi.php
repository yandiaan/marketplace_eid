<form action="<?php echo base_url('API/Admin/D_Produk/add_variasi') ?>" method="post">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Variasi</h6>
        </div>
        <div class="card-body">
            <input type="hidden" name="id_produk" value="<?= $data['id_produk'] ?>">
            <form>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Model" name="model">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Harga" name="harga">
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary  float-right">Simpan</button>
        </div>
    </div>
</form>