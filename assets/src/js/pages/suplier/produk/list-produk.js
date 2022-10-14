$(document).ready(() => {
    $.ajaxSetup({
        headers: { 'Authorization': "Bearer " + $.cookie('sessionTokenSuplier') }
    });

    var table = $('#datatable').DataTable({
        processing  : true,
        serverSide  : true,
        ajax        : `${ENDPOINT}admin/produk/datatables`,
        columns     : [
            { "data"  : "id_produk" },
            { "data"  : "nama_produk" },
            { "data"  : "brand" },
            { "data"  : "harga" },
            { "data"  : "berat" },
            { "data"  : "action" },
        ],
        columnDefs: [
            {
                searchable: false,
                orderable: false,
                targets: 0,
            },
            {
                searchable: false,
                orderable: false,
                targets: -1,
            },
        ],
        order: [[1, 'asc']],
    });

    $(document).on('click', '.delete-data', (e) => {
        $('#deleteModal').modal('show');
        var id_produk = $('.delete-data').parent().data('id_produk');
        $('#deleteModal').find('#delete_id_produk').val(id_produk);
    });
    
    $('#delete_id_produk').on('click', (e) => {
        let id_produk = $('#delete_id_produk').val();
    
        let ajax = $.ajax({
            url     : `${ENDPOINT}admin/produk/delete`,
            method  : "POST",
            data    : { id_produk: id_produk }
        });
    
        ajax.done((res) => {
            $('#deleteModal').modal("hide");
            alert(res.meta.message);
            table.ajax.reload();
        });
    
        ajax.fail((res, status, err) => {
            alert(err);
        });
    });

    $(document).on('click', '.arsip-data', (e) => {
        let id_produk = $('.arsip-data').parent().data('id_produk');
    
        let ajax = $.ajax({
            url     : `${ENDPOINT}admin/produk/arsip`,
            method  : "POST",
            data    : { id_produk: id_produk }
        });
    
        ajax.done((res) => {
            table.ajax.reload();
        });
    
        ajax.fail((res, status, err) => {
            alert(err);
        });
    });
});
