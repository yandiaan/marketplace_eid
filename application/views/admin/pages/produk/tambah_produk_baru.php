<style>
    .img-upload-box {
        cursor: pointer;
        border: 1px solid #A2DB5E;
        border-radius: 0.2em;
        border-style: dashed;
        padding: 0.2em 0.4em;
        width: 120px;
        height: 120px;
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
        width: 120px;
        height: 120px;
        background: #fff;
    }
    .add-more-img i {
        font-size: 28px;
        color: #A3A3A3;
    }

    .img-box {
        position: relative;
        border: 1px solid #A2DB5E;
        border-radius: 0.2em;
        width: 120px;
        height: 120px;
        background: #fff;
        overflow: hidden;
    }
    .img-box img {
        width: 120px;
        height: 120px;
        object-fit: cover;
    }
    .img-label {
        display: none;
        position: absolute;
        background: rgb(30, 30, 30);
        background: rgba(30, 30, 30, .5);
        color: #fff;
        bottom: 0;
        width: 100%;
    }
    .img-action {
        display: none;
        position: absolute;
        background: rgb(30, 30, 30);
        background: rgba(30, 30, 30, .5);
        bottom: 0;
        width: 100%;
    }
    .img-action button{
        color: #fff;
        background: none;
        border: none;
        font: inherit;
        cursor: pointer;
        outline: inherit;
    }

    .img-action button:hover{
        color: #fff !important;
    }
</style>

<section class="section">
    <div class="section-header">
        <h1>Tambah Produk baru</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Produk</a></div>
            <div class="breadcrumb-item">Tambah Produk Baru</div>
        </div>
    </div>

    <div class="section-body">
        <form id="tambahProdukForm">
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
                            <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Masukkan Nama Produk"
                                minlength="5" maxlength="255" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-2 d-flex align-items-center">
                            <label>Merek</label>
                        </div>
                        <div class="col-10">
                            <input type="text" name="brand" id="brand" class="form-control col-8" placeholder="Masukkan Merek Produk"
                                maxlength="100" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-2 d-flex align-items-center">
                            <label>Kategori</label>
                        </div>
                        <div class="col-10">
                            <select name="id_produk_kategori" id="id_produk_kategori" class="form-control" required>
                                <option value="">Pilih Kategori</option>
                                <?php foreach($k_produk as $k): ?>
                                <option value="<?php echo $k->id_produk_kategori ?>"><?php echo $k->nama_kategori ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-2 d-flex align-items-center">
                            <label>Deskripsi Produk</label>
                        </div>
                        <div class="col-10">
                            <textarea name="deskripsi" id="deskripsi" class="summernote-simple" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-2 d-flex align-items-center">
                            <label>Detail Spesifikasi</label>
                        </div>
                        <div class="col-10">
                            <textarea name="spesifikasi" id="spesifikasi" class="summernote-simple" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-2 d-flex align-items-center">
                            <label>Foto Produk</label>
                        </div>
                        <div class="col-10">
                            <div id="galeri-produk" class="row">
                                <div class="col-2">
                                    <input id="foto-utama" type="file" name="galeriProduk[]" hidden />
                                    <label for="foto-utama" style="display:block">
                                        <div class="img-upload-box d-flex align-items-center justify-content-center">
                                            <span>*Foto Utama</span>
                                        </div>
                                    </label>
                                    <div id="box-foto-utama" class="img-box mb-2" style="display:none;">
                                        <a><img id="preview-foto-utama"></a>
                                        <div class="img-label">
                                            <div class="d-flex justify-content-center py-1">Utama</div>
                                        </div>
                                        <div class="img-action">
                                            <div class="d-flex justify-content-center py-1">
                                                <button class="delete-image"><i class="fas fa-fw fa-trash-alt"></i> Hapus</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-2">
                                    <input id="foto-1" type="file" name="galeriProduk[]" hidden />
                                    <label for="foto-1" style="display:block">
                                        <div class="img-upload-box d-flex align-items-center justify-content-center">
                                            <span>Foto 1</span>
                                        </div>
                                    </label>
                                    <div id="box-foto-1" class="img-box mb-2" style="display:none;">
                                        <a><img id="preview-foto-1"></a>
                                        <div class="img-action">
                                            <div class="d-flex justify-content-center py-1">
                                                <button class="delete-image"><i class="fas fa-fw fa-trash-alt"></i> Hapus</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-2">
                                    <input id="foto-2" type="file" name="galeriProduk[]" hidden />
                                    <label for="foto-2" style="display:block">
                                        <div class="img-upload-box d-flex align-items-center justify-content-center">
                                            <span>Foto 2</span>
                                        </div>
                                    </label>
                                    <div id="box-foto-2" class="img-box mb-2" style="display:none;">
                                        <a><img id="preview-foto-2"></a>
                                        <div class="img-action">
                                            <div class="d-flex justify-content-center py-1">
                                                <button class="delete-image"><i class="fas fa-fw fa-trash-alt"></i> Hapus</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div id="add-more-img" class="col-2">
                                    <label class="text-center">
                                        <div class="add-more-img d-flex align-items-center justify-content-center mb-2">
                                            <i style="font-size: 28px" class="fas fa-plus-circle"></i>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <div id="img-preview" class="row"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header pt-4">
                    <h6>Informasi Penjualan</h6>
                </div>
                <div class="card-body p-5 col-9">
                    <div class="form-group row">
                        <div class="col-3 d-flex align-items-center">
                            <label>Satuan Produk</label>
                        </div>
                        <div class="col-9">
                            <select name="satuan" id="satuan" class="form-control">
                                <option value="">Pilih Satuan Produk</option>
                                <option value="Kg">Kg</option>
                                <option value="m">m</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-3 d-flex align-items-center">
                            <label>Ukuran Produk</label>
                        </div>
                        <div class="col-9">
                            <div class="row">
                                <div class="input-group col-4">
                                    <input type="number" name="berat" id="berat" class="form-control" placeholder="Berat" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">kg</div>
                                    </div>
                                </div>
                                <div class="input-group col-4">
                                    <input type="number" name="lebar" id="lebar" class="form-control" placeholder="Lebar" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">cm</div>
                                    </div>
                                </div>
                                <div class="input-group col-4">
                                    <input type="number" name="tinggi" id="tinggi" class="form-control" placeholder="Tinggi" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">cm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-3 d-flex align-items-center">
                            <label>Harga Dasar</label>
                        </div>
                        <div class="col-9">
                            <input type="number" name="harga" id="harga" class="form-control price" placeholder="Masukkan Harga Dasar" min="1000" required>
                            <small></small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-3 d-flex align-items-center">
                            <label>Variasi Produk</label>
                        </div>
                        <div class="col-9 daftar-variasi">
                            <button type="button" id="tambahVariasi" class="btn btn-block btn-outline-primary"><i class="fas fa-plus-circle"></i> Tambah Variasi</button>
                        </div>
                    </div>

                    <div id="daftar-foto-variasi" class="form-group row" style="display:none">
                        <div class="col-3 d-flex align-items-center">
                            <label>Foto Variasi</label>
                        </div>
                        <div class="col-9">
                            <div id="foto-variasi" class="row"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-3 d-flex align-items-center">
                            <label>Tags</label>
                        </div>
                        <div class="col-9">
                            <button type="button" class="btn btn-block btn-outline-primary"><i class="fas fa-plus-circle"></i> Tambah Tag</button>
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
                            <input type="number" name="min_order" id="min_order" class="form-control col-4" value="1"
                                min="1" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-2 d-flex align-items-center">
                            <label>Detail Garansi</label>
                        </div>
                        <div class="col-10">
                            <textarea name="garansi" id="garansi" class="summernote-simple" required></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-2 text-right">
                <button type="reset" class="btn bg-light shadow-sm mr-2">Reset</a>
                <button type="submit" class="btn bg-white shadow-sm mr-2" name="archive">Simpan & Arsipkan</button>
                <button type="submit" class="btn btn-primary" name="publish">Simpan & Tampilkan</button>
            </div>
        </form>
    </div>
</section>

<div class="modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" id="cropImageModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crop Gambar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <img id="image-to-crop" src="" alt="" class="img-fluid">
            </div>
            <div class="modal-footer br">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="crop-image">Crop Image</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    window.onbeforeunload = function() {
        return "Data will be lost if you leave the page, are you sure?";
    };
    
    window.onload = function() {
        localStorage.clear();
    };
</script>
