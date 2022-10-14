$(document).ready(function() {
    // AJAX request
    $.ajaxSetup({
        headers: { 'Authorization': "Bearer " + $.cookie('sessionTokenSuplier') }
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
        
        submitHandler: function(form) {
            let ajax = $.ajax({
                url     : `${ENDPOINT}/admin/produk/store`,
                method  : "POST",
                data    : $(form).serialize(),
            });

            ajax.done((res) => {
                alert(res.meta.message);
                window.onbeforeunload = null;
                window.location.href =  `${BASE_URL}/suplier/dashboard/list-produk`;
            });

            ajax.fail((res, status, err) => {
                alert(err);
            });
        }
    });

    $(document).on('input', '.price', function() {
        var rp = rupiah($(this).val());
        var parent = $(this).parent();
        parent.find('small').html(rp);
    });

    // Manipulate DOM
    $('.add-more-img').click(() => {
        let image = $('.img-upload-box');
        let div = $('#galeri-produk').find('div:last-child').prev();
        let html = `<div class="col-2 text-center mb-4">
                        <input id="foto-${image.length}" type="file" hidden />
                        <label for="foto-${image.length}" class="text-center" style="display:block">
                            <div class="img-upload-box d-flex align-items-center justify-content-center">
                                <i class="far fa-image"></i>
                            </div>
                        </label>
                        <div id="box-foto-${image.length}" class="img-box mb-2" style="display:none;">
                            <img id="preview-foto-${image.length}">
                        </div>
                        <span>Foto ${image.length}</span>
                    </div>`;
        $(html).insertAfter(div);
    });

    $('#tambahVariasi').click(function() {
        if(localStorage.getItem('total_variasi') == undefined) {
            localStorage.setItem('total_variasi', '1');
        }

        var total_var = localStorage.getItem('total_variasi');
        var html = `<div class="form-group variasi-${total_var} row mb-3">
                        <div class="col">
                            <input type="text" class="form-control form-control-sm" id="variasi_${total_var}" name="nama_variasi[]" placeholder="Masukkan Nama Variasi" required>
                        </div>
                        <div class="col-4">
                            <input type="number" class="form-control form-control-sm price" name="harga_variasi[]" placeholder="Rp" required>
                            <small></small>
                        </div>
                        <div class="col-2 text-right">
                            <button class="btn btn-sm btn-light delete-variasi" data-id="${total_var}"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </div>`;

        if(total_var == '1') {
            $('.daftar-variasi').prepend(html);
        } else {
            $(html).insertBefore('#tambahVariasi');
        }

        addVariasiImgBox(total_var);
        localStorage.setItem('total_variasi', parseInt(total_var) + 1);
        updateHargaDasarHtml();
    });

    $(document).on("input", 'input[type="text"]', function(e) {
        let name = e.target.id;
        let span = $(`span[for="${name}"]`);
        span.text(e.target.value);
    });

    function updateHargaDasarHtml() {
        let variasi = $(document).find('input[name="nama_variasi[]"]');
        if(variasi.length > 0) {
            $('#harga').parent().parent().remove();
        } else {
            var elementParent = $('.daftar-variasi').parent();
            var html = `<div class="form-group row">
                            <div class="col-3 d-flex align-items-center">
                                <label>Harga Dasar</label>
                            </div>
                            <div class="col-9">
                                <input type="number" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga Dasar" min="1000" required>
                            </div>
                        </div>`;
            $(html).insertBefore(elementParent);
        }
    }

    function addVariasiImgBox(i) {
        $('#daftar-foto-variasi').show();
        $('#foto-variasi').append(
            `<div class="col-3 text-center mb-4">
                <input id="foto-variasi-${i}" type="file" name="foto_variasi[]" hidden />
                <label for="foto-variasi-${i}" class="text-center" style="display:block">
                    <div class="img-upload-box d-flex align-items-center justify-content-center">
                        <i class="far fa-image"></i>
                    </div>
                </label>
                <div id="box-foto-variasi-${i}" class="img-box mb-2" style="display:none;">
                    <img id="preview-foto-variasi-${i}">
                </div>
                <span for="variasi_${i}">Variasi ${i}</span>
            </div>`
        );
    }

    $(document).on('click', '.delete-variasi', function() {
        let variasi = $(document).find('input[name="nama_variasi[]"]');
        let id = $(this).data('id');

        // delete variasi name and price html
        $(`.variasi-${id}`).remove();

        // delete variasi image box html
        $(`#foto-variasi-${id}`).parent().remove();
        if (variasi.length <= 1) $('#daftar-foto-variasi').hide();

        // update harga dasar html
        updateHargaDasarHtml();
    });

    
    // Upload and Crop Image
    const convertBase64 = (file) => {
        return new Promise((resolve, reject) => {
            const fileReader = new FileReader();
            fileReader.readAsDataURL(file);
            fileReader.onload = () => {
                resolve(fileReader.result);
            };
            fileReader.onerror = (error) => {
                reject(error);
            };
        });
    };

    const uploadImage = async (e) => {
        let file      = e.target.files[0];
        let base64    = await convertBase64(file);

        $('#cropImageModal').modal('show');
        $('#crop-image').attr('for', e.target.id);

        const imageToCrop = document.getElementById('image-to-crop');
        imageToCrop.src = base64;

        var cropper;
        cropper = new Cropper(imageToCrop, {
            aspectRatio: 1 / 1,
            ready: function () {
                var cropBtn = $('#crop-image');
                cropBtn.bind('click');
                cropBtn.on('click', () => {
                    let target          = cropBtn.attr('for');
                    let croppedImage    = this.cropper.getCroppedCanvas({fillColor: '#fff'}).toDataURL("image/png");
                    let preview         = document.getElementById(`preview-${target}`);
                    let imgBox          = document.getElementById(`box-${target}`);
                    let label           = document.querySelector(`label[for="${target}"]`);
            
                    preview.src   = croppedImage;
                    label.style.display = "none";
                    imgBox.style.display = "block";
            
                    $('#cropImageModal').modal('hide');
                    this.cropper.reset();
                });

                $('#cropImageModal').on('hidden.bs.modal', () => {
                    this.cropper.destroy();
                });
            }
        });
    };
    
    $(document).on("change", 'input[type="file"]', function(e) {
        uploadImage(e);
    });
});