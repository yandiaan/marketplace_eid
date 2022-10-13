$(document).ready(() => {
    window.onbeforeunload = function() {
        let isSubmit = localStorage.getitem('isSubmit');

        if(!isSubmit) {
            return "Data will be lost if you leave the page, are you sure?";
        }
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
                localStorage.setItem('isSubmit', true);
                window.location.href =  `${BASE_URL}/suplier/dashboard/list-produk`;
            });

            ajax.fail((res, status, err) => {
                alert(err);
            });
        }
    });
});