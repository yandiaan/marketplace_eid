$(document).ready(function() {
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

    $(document).on('click', '.delete-data', function() {
        $('#deleteModal').modal('show');
        var id_produk = $(this).parent().data('id_produk');
        $('#deleteModal').find('#delete_id_produk').val(id_produk);
    });
    
    $('#delete_id_produk').on('click', function() {
        let id_produk = $(this).val();
    
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

    $(document).on('click', '.arsip-data', function() {
        let id_produk = $(this).parent().data('id_produk');
    
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
