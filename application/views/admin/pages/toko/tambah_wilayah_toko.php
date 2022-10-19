<section class="section">
    <div class="section-header">
        <h1>Tambah Produk baru</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Wilayah Toko</a></div>
            <div class="breadcrumb-item">Tambah Wilayah Baru</div>
        </div>
    </div>

    <div class="section-body">
        <form action="<?= base_url('Suplier/Profil/add_wilayah') ?>" method="POST">
            <div class="card">
                <div class="card-header">
                    <h6>Informasi Wilayah</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Provinsi</label>
                        <select class="form-control" id="inputProvinsi" name="provinsi">
                            <?php foreach ($provinsi->result() as $row) { ?>
                                <option value="<?= $row->prov_name; ?>"><?php echo $row->prov_name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kota</label>
                        <select class="form-control" id="inputProvinsi" name="kota">
                            <?php foreach ($kota->result() as $row) { ?>
                                <option value="<?= $row->city_name; ?>"><?php echo $row->city_name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mt-2 text-right">
                <a href="<?= base_url('suplier/dashboard/wilayah-toko') ?>" class="btn bg-white shadow-sm mr-2">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan & Tampilkan</button>
            </div>
        </form>
    </div>

</section>