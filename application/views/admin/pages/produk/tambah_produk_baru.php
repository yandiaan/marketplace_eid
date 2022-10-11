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

.img-box {
    border: 1px solid #A2DB5E;
    border-radius: 0.2em;
    width: 100px;
    height: 100px;
    background: #fff;
    overflow: hidden;
}
.img-box img {
    width: 100px;
    height: 100px;
    object-fit: cover;
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.css" integrity="sha512-+VDbDxc9zesADd49pfvz7CgsOl2xREI/7gnzcdyA9XjuTxLXrdpuz21VVIqc5HPfZji2CypSbxx1lgD7BgBK5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                            min-length="8" max-length="255" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-2 d-flex align-items-center">
                        <label>Merek</label>
                    </div>
                    <div class="col-10">
                        <input type="text" name="brand" id="brand" class="form-control col-8" placeholder="Masukkan Merek Produk"
                            max-length="100" required>
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
                        <textarea name="deskripsi" id="deskripsi" class="form-control" required></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-2 d-flex align-items-center">
                        <label>Detail Spesifikasi</label>
                    </div>
                    <div class="col-10">
                        <textarea name="spesifikasi" id="spesifikasi" class="form-control" required></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-2 d-flex align-items-center">
                        <label>Foto Produk</label>
                    </div>
                    <div class="col-10">
                        <!-- <div id="galeri-produk" class="row d-none">
                            <div class="col-2">
                                <input id="foto-utama" type="file" name="galeriProduk[]" hidden />
                                <label for="foto-utama" class="text-center" style="display:block">
                                    <div class="img-upload-box d-flex align-items-center justify-content-center">
                                        <i class="far fa-image"></i>
                                    </div>
                                </label>
                                <div id="box-foto-utama" class="img-box mb-2" style="display:none;">
                                    <img id="preview-foto-utama">
                                </div>
                                <span>*Foto Utama</span>
                            </div>
        
                            <div class="col-2">
                                <input id="foto-1" type="file" hidden />
                                <label for="foto-1" class="text-center" style="display:block">
                                    <div class="img-upload-box d-flex align-items-center justify-content-center">
                                        <i class="far fa-image"></i>
                                    </div>
                                </label>
                                <div id="box-foto-1" class="img-box mb-2" style="display:none;">
                                    <img id="preview-foto-1">
                                </div>
                                <span>Foto 1</span>
                            </div>
        
                            <div class="col-2">
                                <input id="foto-2" type="file" hidden />
                                <label for="foto-2" class="text-center" style="display:block">
                                    <div class="img-upload-box d-flex align-items-center justify-content-center">
                                        <i class="far fa-image"></i>
                                    </div>
                                </label>
                                <div id="box-foto-2" class="img-box mb-2" style="display:none;">
                                    <img id="preview-foto-2">
                                </div>
                                <span>Foto 2</span>
                            </div>
        
                            <div id="add-more-img" class="col-2">
                                <label class="text-center">
                                    <div class="add-more-img d-flex align-items-center justify-content-center mb-2">
                                        <i style="font-size: 28px" class="fas fa-plus-circle"></i>
                                    </div>
                                    <span>Tambah lebih</span>
                                </label>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-12">
                                <input id="foto-produk" type="file" name="galeriProduk[]" multiple/>
                                <!-- <label for="foto-produk" class="text-center">
                                    <span class="btn btn-primary">Unggah Foto Produk</span> <span id="img-total" class="ml-3 fw-bold text-muted"></span>
                                </label> -->
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
                        <input type="number" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga Dasar" min="1000" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-3 d-flex align-items-center">
                        <label>Variasi Produk</label>
                    </div>
                    <div class="col-9 daftar-variasi">
                        <button id="tambahVariasi" class="btn btn-block btn-outline-primary"><i class="fas fa-plus-circle"></i> Tambah Variasi</button>
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
                        <button class="btn btn-block btn-outline-primary"><i class="fas fa-plus-circle"></i> Tambah Tag</button>
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
                        <textarea name="garansi" id="garansi" class="form-control" required></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-2 text-right">
            <a href="#" class="btn bg-white shadow-sm mr-2">Kembali</a>
            <!-- <button type="submit" class="btn bg-white shadow-sm mr-2" name="archive">Simpan & Arsipkan</button> -->
            <button type="submit" class="btn btn-primary">Simpan & Tampilkan</button>
        </div>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js" integrity="sha512-ooSWpxJsiXe6t4+PPjCgYmVfr1NS5QXJACcR/FPpsdm6kqG1FmQ2SVyg2RXeVuCRBLr0lWHnWJP6Zs1Efvxzww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
$(document).ready(() => {
    window.onbeforeunload = function() {
        return "Data will be lost if you leave the page, are you sure?";
    };

    window.onload = function() {
        localStorage.clear();
    };
    
    var cropper, $fileInput;

    $fileInput = document.querySelector('input[type="file"]');
    $fileInput.addEventListener("change" , (e) => { uploadImage(e) });

    const uploadImage = (e) => {
        const preview = $('#img-preview');
        preview.empty();
        $.each(e.target.files, (key, value) => {
            let file    = e.target.files[key];
            var src     = URL.createObjectURL(file);

            if(key == 0){
                key = 'utama';
            }

            preview.append(`
                <div class="col-3 mb-3 text-center">
                    <img id="foto-${key}" src="${src}" class="img-fluid">
                    <span>Foto ${key}</span>
                </div>`);
        });
    };

    $('#tambahVariasi').click(() => {
        if(localStorage.getItem('total_variasi') == undefined) {
            localStorage.setItem('total_variasi', '1');
        }
        
        var total_var = localStorage.getItem('total_variasi');
        $('.daftar-variasi').prepend(
            `<div class="form-group row mb-3">
                <div class="col-7">
                    <input type="text" class="form-control form-control-sm" id="variasi_${total_var}" name="variasi[]" placeholder="Masukkan Nama Variasi" />
                </div>
                <div class="col-5">
                    <input type="number" class="form-control form-control-sm" placeholder="Rp" />
                </div>
            </div>`
        );

        addVariasiImgBox(total_var);
        localStorage.setItem('total_variasi', parseInt(total_var) + 1);
    });

    $(document).on("input", 'input[type="text"]', function(e) {
        let name = e.target.id;
        let span = $(`span[for="${name}"]`);
        span.text(e.target.value);
    });

    function addVariasiImgBox(i) {
        $('#daftar-foto-variasi').show();

        $('#foto-variasi').append(
            `<div class="col-3 text-center mb-3">
                <input id="foto-variasi-${i}" type="file" name="foto_variasi[]" hidden />
                <label for="foto-variasi-${i}" class="text-center" style="display:block">
                    <div class="img-upload-box d-flex align-items-center justify-content-center">
                        <i class="far fa-image"></i>
                    </div>
                </label>
                <div id="box-foto-variasi-${i}" class="img-box mb-2" style="display:none;">
                    <img id="preview-foto-variasi-${i}">
                </div>
                <span for="variasi_${i}">Variasi</span>
            </div>`
        );
    }

    $.ajaxSetup({
        headers: { 'Authorization': "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2NjU0NzMzNzIsImlkX3N1cGxpZXIiOiIxIiwidXNlcm5hbWUiOiJ0b2tvIHJpemtpIiwiZW1haWwiOiJ0b2tvcml6a2lAZ21haWwuY29tIn0.ZrhrL3204d7ejeapSKYNp3wUx34m3jLdLckU62lfndw" }
    });

    $("#tambahProdukForm").validate({
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.parent().append(error);

        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
        
        submitHandler: function() {
            let ajax = $.ajax({
                url     : "/api/admin/produk/store",
                method  : "POST",
                data    : $('#tambahProdukForm').serialize(),
            });

            ajax.done((res) => {
                console.log(res);
                alert(res.meta.message);
                window.location.href = '/suplier/dashboard/list-produk';
            });

            ajax.fail((res, status, err) => {
                alert(err);
            });
        }
    });

    // $('.add-more-img').click(() => {
    //     let image = $('.img-upload-box');
    //     let div = $('#galeri-produk').find('div:last-child').prev();

    //     let html = `<div class="col-2">
    //                     <input id="foto-${image.length}" type="file" hidden />
    //                     <label for="foto-${image.length}" class="text-center" style="display:block">
    //                         <div class="img-upload-box d-flex align-items-center justify-content-center">
    //                             <i class="far fa-image"></i>
    //                         </div>
    //                     </label>
    //                     <div id="box-foto-${image.length}" class="img-box mb-2" style="display:none;">
    //                         <img id="preview-foto-${image.length}">
    //                     </div>
    //                     <span>Foto ${image.length}</span>
    //                 </div>`;
        
    //     $(html).insertAfter(div);
    // });

    // const convertBase64 = (file) => {
    //     return new Promise((resolve, reject) => {
    //         const fileReader = new FileReader();
    //         fileReader.readAsDataURL(file);

    //         fileReader.onload = () => {
    //             resolve(fileReader.result);
    //         };

    //         fileReader.onerror = (error) => {
    //             reject(error);
    //         };
    //     });
    // };

    // const uploadImage = async (e) => {
    //     let file      = e.target.files[0];
    //     let base64    = await convertBase64(file);
    //     let preview   = document.getElementById('preview-' + e.target.id);
    //     let imgBox    = document.getElementById('box-' + e.target.id);
    //     let label     = document.querySelector('label[for="'+ e.target.id +'"]');
        
    //     preview.src   = base64;
    //     label.style.display = "none";
    //     imgBox.style.display = "block";
    // };

    // for (var i = 0 ; i < $fileInput.length; i++) {
    //     $fileInput[i].addEventListener("change" , (e) => { uploadImage(e) });
    // }
});
</script>
