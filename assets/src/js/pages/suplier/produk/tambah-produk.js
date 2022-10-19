$(document).ready(function() {
    var formData = new FormData($("#tambahProdukForm")[0]);
    var container = new DataTransfer();

    /* Ajax Requeest */

        // Set default header on every request
        $.ajaxSetup({
            headers: { 'Authorization': "Bearer " + $.cookie('sessionTokenSuplier') }
        });

        // validate form tambah produk
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
                console.log(container.files.length);
                return;
                let ajax = $.ajax({
                    url     : `${ENDPOINT}/admin/produk/store`,
                    method  : "POST",
                    data    : $(form).serialize(),
                });

                ajax.done((res) => {
                    storeGaleri(res.data.user);
                    alert(res.meta.message);
                    // window.onbeforeunload = null;
                    // window.location.href =  `${BASE_URL}/suplier/dashboard/list-produk`;
                });

                ajax.fail((res, status, err) => {
                    alert(err);
                });
            }
        });

        function storeGaleri(data) {
            var id = data.id_produk;
            formData.append('id_produk', id);

            // append file
            for (let index = 0; index < container.files.length; index++) {
                formData.append(`galeriProduk[${index}]`, container.files[index]);
            }

            $.ajax({
                url     : `${ENDPOINT}/admin/produk/galeri/store`,
                method  : "POST",
                data    : formData,
                enctype : 'multipart/form-data',
                processData: false,
                contentType: false,
            }).done((res) => {
                console.log(res);
                alert(res.meta.message);
            }).fail((res, status, err) => {
                alert(err);
            });
        }


    /* Manipulate DOM */

        // show action on image hover
        $(document).on('mouseenter', '.img-box', function() {
            if($(this).attr('id') == 'box-foto-utama' || $(this).hasClass('variasi')) $(this).find('.img-label').fadeOut('fast');
            $(this).find('.img-action').fadeIn('fast');  
        });

        // hide action on image unhover
        $(document).on('mouseleave', '.img-box', function() {
            if($(this).attr('id') == 'box-foto-utama' || $(this).hasClass('variasi')) $(this).find('.img-label').fadeIn('fast');
            $(this).find('.img-action').fadeOut('fast');
        });

        // Preview price on input with price class
        $(document).on('input', '.price', function() {
            let rp = rupiah($(this).val());
            let parent = $(this).parent();
            parent.find('small').html(rp);
        });

        // Add Image Box
        $('.add-more-img').click(function() {
            let image = $('.img-upload-box');
            let div = $('#add-more-img');
            let html = `<div class="col-2">
                            <input id="foto-${image.length}" type="file" name="galeriProduk[]" hidden />
                            <label for="foto-${image.length}" style="display:block">
                                <div class="img-upload-box d-flex align-items-center justify-content-center">
                                    <span>Foto ${image.length}</span>
                                </div>
                            </label>
                            <div id="box-foto-${image.length}" class="img-box mb-2" style="display:none;">
                                <a><img id="preview-foto-${image.length}"></a>
                                <div class="img-action">
                                    <div class="d-flex justify-content-center py-1">
                                        <button type="button" class="delete-image" data-key="foto-${image.length}"><i class="fas fa-fw fa-trash-alt"></i> Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>`;
            $(html).insertBefore(div);
        });

        // Delete image box
        $(document).on('click', '.delete-image', function() {
            var key     = $(this).data('key');
            var box     = document.getElementById('box-' + key);
            var label   = document.querySelector(`label[for="${key}"]`);
            var input   = $('input#' + key);
            var image   = $('#preview-' +key);

            // remove image attribute
            image.removeAttr('src');
            image.removeAttr('data-fslightbox');
            image.removeAttr('data-alt');
            image.removeAttr('href');

            // refresh fslightbox data
            refreshFsLightbox();

            // show label and hide box
            label.style.display = 'block';
            box.style.display = 'none';

            // remove value on file input
            formData.set(input.attr('name'), '');
        });

        // Add Variasi form
        $('#tambahVariasi').click(function() {
            if(localStorage.getItem('total_variasi') == undefined) {
                localStorage.setItem('total_variasi', '1');
            }

            let total_var = localStorage.getItem('total_variasi');
            let html = `<div class="form-group variasi-${total_var} row mb-3">
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

        // Watch text of variasi name
        $(document).on("input", 'input[type="text"]', function(e) {
            let name = e.target.id;
            let div = $(`div[for="${name}"]`);
            let span = $(`span[for="${name}"]`);
            div.text(e.target.value);
            span.text(e.target.value);
        });

        // Update Harga Dasar Html
        function updateHargaDasarHtml() {
            let variasi = $(document).find('input[name="nama_variasi[]"]');
            if(variasi.length > 0) {
                $('#harga').parent().parent().remove();
            } else {
                let elementParent = $('.daftar-variasi').parent();
                let html = `<div class="form-group row">
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

        // Add Variasi Image Box
        function addVariasiImgBox(i) {
            $('#daftar-foto-variasi').show();
            $('#foto-variasi').append(
                `<div class="col-3">
                    <input id="foto-variasi-${i}" type="file" name="foto_variasi[]" hidden />
                    <label for="foto-variasi-${i}" style="display:block">
                        <div class="img-upload-box d-flex align-items-center justify-content-center">
                            <span for="variasi_${i}">Variasi ${i}</span>
                        </div>
                    </label>
                    <div id="box-foto-variasi-${i}" class="img-box variasi mb-2" style="display:none;">
                        <a><img id="preview-foto-variasi-${i}"></a>
                        <div class="img-label">
                            <div class="d-flex justify-content-center py-1" for="variasi_${i}">Variasi ${i}</div>
                        </div>
                        <div class="img-action">
                            <div class="d-flex justify-content-center py-1">
                                <button type="button" class="delete-image" data-key="foto-variasi-${i}"><i class="fas fa-fw fa-trash-alt"></i> Hapus</button>
                            </div>
                        </div>
                    </div>
                </div>`
            );
        }

        // Delete variasi
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

            // update fslightbox
            refreshFsLightbox();
        });


    /* Upload Image */
    
        // Upload and Crop Image
        const fileToBase64 = (file) => {
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

        // Convert dataURL to Blob
        function dataURLtoBlob(dataurl) {
            var arr = dataurl.split(','), mime = arr[0].match(/:(.*?);/)[1],
                bstr = atob(arr[1]), n = bstr.length, u8arr = new Uint8Array(n);
            while(n--){
                u8arr[n] = bstr.charCodeAt(n);
            }
            return new Blob([u8arr], {type:mime});
        }

        // Update Input file value
        function updateInputValue(fileInputElement, blob, name) {
            let file = new File([blob], `${name}.png`,{type:"image/png", lastModified:new Date().getTime()});
            container.items.add(file);
            fileInputElement.files = container.files;
        }

        // Upload and Crop an image
        const uploadImage = async (e) => {
            let file      = e.target.files[0];
            let base64    = await fileToBase64(file);

            $('#cropImageModal').modal('show');
            $('#crop-image').attr('for', e.target.id);

            const imageToCrop = document.getElementById('image-to-crop');
            imageToCrop.src = base64;

            var cropper;
            cropper = new Cropper(imageToCrop, {
                aspectRatio: 1 / 1,
                ready: function () {
                    let cropBtn = $('#crop-image');
                    cropBtn.bind('click');
                    cropBtn.on('click', () => {
                        let target              = cropBtn.attr('for');
                        let croppedImageDataUrl = this.cropper.getCroppedCanvas({fillColor: '#fff'}).toDataURL("image/png");
                        let preview             = document.getElementById(`preview-${target}`);
                        let imgBox              = document.getElementById(`box-${target}`);
                        let label               = document.querySelector(`label[for="${target}"]`);
                
                        preview.setAttribute('src', croppedImageDataUrl);
                        preview.parentElement.setAttribute('data-fslightbox', 'gallery');
                        preview.parentElement.setAttribute('data-alt', target);
                        preview.parentElement.setAttribute('href', croppedImageDataUrl);
                        refreshFsLightbox();

                        let el = $(`input#${target}`);
                        let blob = dataURLtoBlob(croppedImageDataUrl);
                        updateInputValue(el, blob, target);
                        label.style.display = "none";
                        imgBox.style.display = "block";

                        $('.img-label').show();
                
                        $('#cropImageModal').modal('hide');
                        this.cropper.reset();
                    });

                    $('#cropImageModal').on('hidden.bs.modal', () => {
                        this.cropper.destroy();
                    });
                }
            });
        };
        
        // Upload Image on input change
        $(document).on("change", 'input[type="file"]', function(e) {
            uploadImage(e);
        });
});