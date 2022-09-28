// Set header before ajax request
$.ajaxSetup({
    headers: { 'Authorization': "Bearer " + $.cookie("sessionToken") }
});

// Load items by suplier
const loadItems = (method) => {
    let ajax = $.ajax({
        url     : `${ENDPOINT}keranjang/get_item`,
        method  : "GET",
    });
    
    ajax.done((res) => {
        if(method == 'update-quantity') {
            refreshQuantityHtml(res.data);
        } else if(method == 'update-checkbox') {
            checkboxItemStatus(res.data, 'item');
        } else {
            $('#suplier-list').html('');

            if(res.data.total_items < 1) {
                emptyCart(res.data);
                return;
            }
            
            $.each(res.data.suplier, (key, value) => {
                let checkedVal = (value['items_checked'] >= '1') ? '0' : '1';
                $('#suplier-list').append(`<table class="table table-bordered align-middle">
                    <thead id="suplier-${value['id_suplier']}">
                        <tr>
                            <th class="px-4 py-4 d-flex justify-content-between">
                                <div id="suplier-checkbox-${value['id_suplier']}">
                                    <input type="checkbox" class="me-3 form-check-input" value="${checkedVal}" onclick="checkAllItemsBySuplier(${value['id_suplier']})">
                                    ${value['nama_toko']}
                                </div>
                                <div>
                                    <small class="text-danger">Hapus</small>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="suplier-item-${value['id_suplier']}"></tbody>
                </table>`)
            });

            $.each(res.data.items, (key, value) => {
                let is_checked = (value['is_checked'] == '1') ? 'checked' : '';
                let checkedVal = (value['is_checked'] == '1') ? '0' : '1';
                $(`#suplier-item-${value['id_suplier']}`).append(`<tr id="${value['id_produk']}">0
                    <td class="px-4 py-3">
                        <div class="row align-items-center">
                            <div id="item-checkbox-${value['id_keranjang']}" class="col-1">
                                <input type="checkbox" class="form-check-input" name="id_keranjang[]" onclick="checkItem(${value['id_keranjang']}, ${checkedVal})" ${is_checked}>
                            </div>
                            <div class="col-2">
                                <img src="${BASE_URL + value['image_path']}" class="w-auto img-fluid" alt="">
                            </div>
                            <div class="col-6">
                                <h6>${value['nama_produk']}</h6>
                                    <small class="bg-warning p-1 text-white fw-bold" style="font-size: 10px">Diskon 25%</small>
                                    <small class="text-decoration-line-through">${rupiah(value['harga_total'])}</small>
                                <h6 id="harga-total" class="d-inline fw-bold text-primary">${rupiah(value['harga_total'])}</h6>
                            </div>
                            <div class="col-3 d-flex justify-content-end">
                                <button class="bg-white border-0 me-4" onclick="deleteItems(${value['id_keranjang']})">
                                    <i class="far fa-trash-alt text-secondary"></i>
                                </button>
                                <div class="quantity d-flex justify-content-between rounded-pill fw-bold bg-primary p-1">
                                    <button class="btn btn-light text-primary rounded-circle fas fa-xs fa-minus" onclick="updateQuantity(${value['id_produk']}, 'decrement')"></button>
                                    <span id="jumlah" class="mx-2 text-white">${value['jumlah']}</span>
                                    <button class="btn btn-light text-primary rounded-circle fas fa-xs fa-plus" onclick="updateQuantity(${value['id_produk']}, 'increment')"></button>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>`);
            });
            refreshQuantityHtml(res.data);
            checkboxItemStatus(res.data, 'all-item');
        }

    });

    ajax.fail((res, status, err) => {
        alert(err); 
    });

    ajax.always(() => {
        $('#cart-placeholder').hide();
        $('#cart-content').show();
    });
}

const emptyCart = (data) => {
    $('#suplier-list').append(`<table class="table table-borderless align-middle">
        <tbody>
            <tr>
                <td style="padding:80px 0px" class="fw-bold text-center">Keranjang belanja anda masih kosong</td>
            </tr>
        </tbody>
    </table>`);

    refreshPriceHtml(data);
}

// Refresh html related to price
const refreshPriceHtml = (data) => {
    $('#total-items').html(`Total Harga (${data.total_items_checked} Barang)`);
    $('#grand-total').text(rupiah(data.grand_total));

    if(data.total_items_checked >= 1) {
        $('button.checkout').removeClass('disabled');
    } else {
        $('button.checkout').addClass('disabled');
    }
}

// Refresh html related to quantity
const refreshQuantityHtml = (data) => {
    $.each(data.items, (key, value) => {
        let parent = $(`tr#${value['id_produk']}`);
        parent.find('#jumlah').text(value['jumlah']);
        parent.find('#harga-total').text(rupiah(value['harga_total']));
        (value['jumlah'] < 2) ? parent.find('.fa-minus').addClass('disabled') : parent.find('.fa-minus').removeClass('disabled');
    });

    refreshPriceHtml(data);
}

// update item quantity
const updateQuantity = (id_produk, metode) => {
    let parent = $(`tr#${id_produk}`);
    let jumlah = parent.find('#jumlah').text();

    switch (metode) {
        case 'increment':
            jumlah = parseInt(jumlah) + 1;
            break;
        case 'decrement':
            jumlah = parseInt(jumlah) - 1;
            break;
    }

    let ajax = $.ajax({
        url     : `${ENDPOINT}keranjang/update_quantity`,
        method  : "POST",
        data    : { id_produk: id_produk, jumlah: jumlah },
    });

    ajax.done((res) => {
        loadItems('update-quantity');
    });

    ajax.fail((res, status, err) => {
        console.log(res);
        alert(err);
    });
}

// Delete item
const deleteItems = (id_keranjang) => {
    id_keranjang = [id_keranjang];

    if(confirm('Apakah anda yakin menghapus item ini pada keranjang?') == true) {
        let ajax = $.ajax({
            url     : `${ENDPOINT}keranjang/delete_item`,
            method  : "POST",
            data    : { id_keranjang: id_keranjang },
        });

        ajax.done((res) => {
            loadItems();
        });
    
        ajax.fail((res, status, err) => {
            alert(err);
        });
    }
}

const checkItem = (id_keranjang, is_checked) => {
    let ajax = $.ajax({
        url     : `${ENDPOINT}keranjang/check_item`,
        method  : "POST",
        data    : { id_keranjang: id_keranjang, is_checked: is_checked },
    });

    ajax.done((res) => {
        loadItems('update-checkbox');
    });

    ajax.fail((res, status, err) => {
        alert(err);
    });
}

const checkAllItemsBySuplier = (id_suplier) => {
    let is_checked = $(`#suplier-checkbox-${id_suplier}`).find('input[type="checkbox"]').val();
    let ajax = $.ajax({
        url     : `${ENDPOINT}keranjang/check_all_item`,
        method  : "POST",
        data    : { id_suplier: id_suplier, is_checked: is_checked },
    });

    ajax.done((res) => {
        loadItems('update-checkbox');
    });

    ajax.fail((res, status, err) => {
        alert(err);
    });
}

const checkboxItemStatus = (data, method) => {
    $.each(data.items, (key, value) => {
        let is_checked = (value['is_checked'] == '1') ? 'checked' : '';
        let checkedVal = (value['is_checked'] == '1') ? '0' : '1';

        $(`#item-checkbox-${value['id_keranjang']}`).html(`
            <input type="checkbox" class="form-check-input" name="id_keranjang[]" onclick="checkItem(${value['id_keranjang']}, ${checkedVal})" ${is_checked}>
        `);
    });
    $.each(data.suplier, (key, value) => {
        let checkedVal = (value['items_checked'] >= '1') ? '0' : '1';
        $(`#suplier-checkbox-${value['id_suplier']}`).html(`
            <input type="checkbox" class="me-3 form-check-input" value="${checkedVal}" onclick="checkAllItemsBySuplier(${value['id_suplier']})">
            ${value['nama_toko']} 
        `);

        let checkbox = $(`#suplier-item-${value['id_suplier']}`).find('input[type="checkbox"]');
        let checkedBox = checkbox.filter(':checked').length;
        let suplierCheckbox = $(`#suplier-checkbox-${value['id_suplier']}`).find('input[type="checkbox"]');
    
        if(checkedBox < 1) {
            suplierCheckbox.prop('checked', false);
        } else {
            suplierCheckbox.prop('checked', true);
        }

    });
    refreshQuantityHtml(data);
}

// load cart items on page load
loadItems();
