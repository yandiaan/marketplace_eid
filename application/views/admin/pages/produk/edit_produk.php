<style>
    .img-upload-box {
        cursor: pointer;
        border: 1px solid #A2DB5E;
        border-radius: 0.2em;
        border-style: dashed;
        padding: 0.2em 0.4em;
        width: 100px;
        height: 100px;
        background: #fff;
    }

    .img-upload-box i {
        font-size: 28px;
        color: #A2DB5E;
    }

    .img-upload-box:hover,
    .add-more-img:hover {
        background: #F8FAFB;
    }

    .add-more-img {
        cursor: pointer;
        border: 1px solid #A3A3A3;
        border-style: dashed;
        border-radius: 0.2em;
        padding: 0.2em 0.4em;
        width: 100px;
        height: 100px;
        background: #fff;
    }

    .add-more-img i {
        font-size: 28px;
        color: #A3A3A3;
    }
</style>

<div class="section-header">
    <h1>Edit Produk</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Produk</a></div>
        <div class="breadcrumb-item">Edit Produk</div>
    </div>
</div>

<div class="section-body">
    <div class="card">
        <div class="card-header pt-4">
            <h6>Informasi Produk</h6>
        </div>
        <div class="card-body p-5">
            <div class="form-group row">
                <div class="col-2 d-flex align-items-center">
                    <label>Nama Produk</label>
                </div>
                <div class="col-10">
                    <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Masukkan Nama Produk">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-2 d-flex align-items-center">
                    <label>Merek</label>
                </div>
                <div class="col-10">
                    <input type="text" name="merek_produk" id="merek_produk" class="form-control col-8" placeholder="Masukkan Merek Produk">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-2 d-flex align-items-center">
                    <label>Kategori</label>
                </div>
                <div class="col-10">
                    <select name="kategori_produk" id="kategori_produk" class="form-control">
                        <option value="">Pilih Kategori</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-2 d-flex align-items-center">
                    <label>Deskripsi Produk</label>
                </div>
                <div class="col-10">
                    <textarea name="deskripsi_produk" id="deskripsi_produk" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-2 d-flex align-items-center">
                    <label>Detail Spesifikasi</label>
                </div>
                <div class="col-10">
                    <textarea name="detail_spesifikasi" id="detail_spesifikasi" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-2 d-flex align-items-center">
                    <label>Foto Produk</label>
                </div>
                <div class="col-10">
                    <div class="row">
                        <div class="col-2">
                            <input id="foto-utama" type="file" name="galeriProduk[]" hidden />
                            <label for="foto-utama" class="text-center">
                                <div class="img-upload-box d-flex align-items-center justify-content-center mb-2">
                                    <i class="far fa-image"></i>
                                </div>
                                <span>*Foto Utama</span>
                            </label>
                        </div>

                        <div class="col-2">
                            <input id="foto-1" type="file" hidden />
                            <label for="foto-1" class="text-center" name="galeriProduk[]">
                                <div class="img-upload-box d-flex align-items-center justify-content-center mb-2">
                                    <i class="far fa-image"></i>
                                </div>
                                <span>Gambar 1</span>
                            </label>
                        </div>

                        <div class="col-2">
                            <input id="foto-2" type="file" hidden />
                            <label for="foto-2" class="text-center" name="galeriProduk[]">
                                <div class="img-upload-box d-flex align-items-center justify-content-center mb-2">
                                    <i class="far fa-image"></i>
                                </div>
                                <span>Gambar 2</span>
                            </label>
                        </div>

                        <div class="col-2">
                            <label class="text-center">
                                <div class="add-more-img d-flex align-items-center justify-content-center mb-2">
                                    <i style="font-size: 28px" class="fas fa-plus-circle"></i>
                                </div>
                                <span>Tambah lebih</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header pt-4">
            <h6>Informasi Penjualan</h6>
        </div>
        <div class="card-body p-5">
            <div class="form-group row">
                <div class="col-2 d-flex align-items-center">
                    <label>Satuan Produk</label>
                </div>
                <div class="col-10">
                    <select name="satuan_produk" id="satuan_produk" class="form-control col-8">
                        <option value="">Pilih Satuan Produk</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-2 d-flex align-items-center">
                    <label>Harga Dasar</label>
                </div>
                <div class="col-10">
                    <input type="text" name="harga_dasar" id="harga_dasar" class="form-control col-8" placeholder="Masukkan Harga Dasar">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-2 d-flex align-items-center">
                    <label>Variasi Produk</label>
                </div>
                <div class="col-10">
                    <button class="btn btn-block btn-outline-primary col-8"><i class="fas fa-plus-circle"></i> Aktifkan Variasi</button>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-2 d-flex align-items-center">
                    <label>Tags</label>
                </div>
                <div class="col-10">
                    <button class="btn btn-block btn-outline-primary col-8"><i class="fas fa-plus-circle"></i> Tambah Tag</button>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header pt-4">
            <h6>Ketentuan Pembelian</h6>
        </div>
        <div class="card-body p-5">
            <div class="form-group row">
                <div class="col-2 d-flex align-items-center">
                    <label>Gratis Ongkir</label>
                </div>
                <div class="col-10 d-flex">
                    <div class="form-check mr-4">
                        <input class="form-check-input" type="radio" name="gratis_ongkir" id="gratis_ongkir0" value="0" checked>
                        <label class="form-check-label" for="gratis_ongkir0">
                            Tidak
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gratis_ongkir" id="gratis_ongkir1" value="1">
                        <label class="form-check-label" for="gratis_ongkir1">
                            Ya
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-2 d-flex align-items-center">
                    <label>Minimal Order</label>
                </div>
                <div class="col-10">
                    <input type="number" name="min_order" id="min_order" class="form-control col-4" value="1">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-2 d-flex align-items-center">
                    <label>Detail Garansi</label>
                </div>
                <div class="col-10">
                    <textarea name="detail_garansi" id="detail_garansi" class="form-control"></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-2 text-right">
        <a href="#" class="btn bg-white shadow-sm mr-2">Kembali</a>
        <button type="submit" class="btn bg-white shadow-sm mr-2">Simpan & Arsipkan</button>
        <button type="submit" class="btn btn-primary">Simpan & Tampilkan</button>
    </div>
</div>