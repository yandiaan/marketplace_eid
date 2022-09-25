// Indonesian Rupiah Currency
const idr = new Intl.NumberFormat('id', {
    style     : 'currency',
    currency  : 'IDR',
});

// Set header before ajax request
$.ajaxSetup({
    beforeSend: (xhr) => {
        xhr.setRequestHeader('Authorization', $.cookie("sessionToken"));
    }
});

// Load item group by suplier
const loadSuplier = () => {
    let ajax = $.ajax({
        url     : `${ENDPOINT}/keranjang/get_item`,
        method  : "GET",
    });

    ajax.done((res) => {
        $('#suplier-list').html('');
        $.each(res.data.suplier, (key, value) => {
            $('#suplier-list').append(`<table class="table border align-middle">\
                <thead>\
                    <tr>\
                        <th class="px-4 py-4">\
                            <input type="checkbox" class="me-3 form-check-input" name="all">\
                            ${value['nama_toko']}\
                        </th>\
                    </tr>\
                </thead>\
                <tbody id="suplier-item-${value['id_suplier']}"></tbody>\
            </table>`)
        });
        loadSuplierItems();
    });

    ajax.fail((res, status, err) => {
        alert(err);
    });
}

// Load items by suplier
const loadSuplierItems = (method) => {
    let ajax = $.ajax({
        url     : `${ENDPOINT}/keranjang/get_item`,
        method  : "GET",
    });
    
    ajax.done((res) => {
        if(method == 'update-quantity') {
            refreshQuantityHtml(res.data);
        } else {
            $.each(res.data.items, (key, value) => {
                $(`#suplier-item-${value['id_suplier']}`).append(`<tr id="${value['id_produk']}">\
                    <td class="px-4 py-3">\
                        <div class="row align-items-center">\
                            <div class="col-1">\
                                <input type="checkbox" class="form-check-input" name="all">\
                            </div>\
                            <div class="col-2">\
                                <img src="${BASE_URL}/assets/img/Product.png" class="w-auto img-fluid" alt="">\
                            </div>\
                            <div class="col-6">\
                                <h6>${value['nama_produk']}</h6>\
                                    <small class="bg-warning p-1 text-white fw-bold" style="font-size: 10px">Diskon 25%</small>\
                                    <small class="text-decoration-line-through">${idr.format(value['harga_total'])}</small>\
                                <h6 id="harga-total" class="d-inline fw-bold text-primary">${idr.format(value['harga_total'])}</h6>\
                            </div>\
                            <div class="col-3 d-flex justify-content-end">\
                                <button class="bg-white border-0 me-4" onclick="deleteItems(${value['id_keranjang']})">\
                                    <i class="far fa-trash-alt text-secondary"></i>\
                                </button>\
                                <div class="quantity d-flex justify-content-between rounded-pill fw-bold bg-primary p-1">\
                                    <button class="btn btn-light text-primary rounded-circle fas fa-xs fa-minus" onclick="updateQuantity(${value['id_produk']}, \'decrement\')"></button>\
                                    <span id="jumlah" class="mx-2 text-white">${value['jumlah']}</span>\
                                    <button class="btn btn-light text-primary rounded-circle fas fa-xs fa-plus" onclick="updateQuantity(${value['id_produk']}, \'increment\')"></button>\
                                </div>\
                            </div>\
                        </div>\
                    </td>\
                </tr>`);
            });

            refreshQuantityHtml(res.data);
        }

    });

    ajax.fail((res, status, err) => {
        alert(err); 
    });
}

// Refresh html related to price
const refreshPriceHtml = (data) => {
    $('#total-items').html(`Harga (${data.total_items} Produk) :`);
    $('#grand-total').text(idr.format(data.grand_total));
}

// Refresh html related to quantity
const refreshQuantityHtml = (data) => {
    $.each(data.items, (key, value) => {
        let parent = $(`tr#${value['id_produk']}`);
        parent.find('#jumlah').text(value['jumlah']);
        parent.find('#harga-total').text(idr.format(value['harga_total']));
        (value['jumlah'] < 2) ? parent.find('.fa-minus').addClass('disabled') : parent.find('.fa-minus').removeClass('disabled');
    });

    refreshPriceHtml(data);
}

// update item quantity
const updateQuantity = (id, method) => {
    // let quantity = ($('#quantity').text()) ? $('#quantity').text() : '0';
    let quantity = $('#quantity').text() || '0';
    let ajax = $.ajax({
        url     : `${ENDPOINT}/keranjang/update_quantity`,
        method  : "POST",
        data    : { id_produk: id, metode: method, jumlah: quantity },
    });

    ajax.done((res) => {
        loadSuplierItems('update-quantity');
    });

    ajax.fail((res, status, err) => {
        alert(err);
    });
}

// Delete item
const deleteItems = (id) => {
    let id_keranjang = [id];

    let ajax = $.ajax({
        url     : `${ENDPOINT}/keranjang/delete_item`,
        method  : "POST",
        data    : { id_keranjang: id_keranjang },
    });

    ajax.done((res) => {
        loadSuplier();
    });

    ajax.fail((res, status, err) => {
        alert(err);
    });
}

// load cart items on page load
loadSuplier();