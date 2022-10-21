<<<<<<< HEAD
$(document).ready(() => {
	$.ajaxSetup({
		headers: { Authorization: "Bearer " + tokenSuplier },
	});
=======
$(document).ready(function() {
    window.onload = function() {
        if(localStorage.getItem('toastMsg').length) doneToast(localStorage.getItem('toastMsg'));
        localStorage.clear();
    };

    $.ajaxSetup({
        headers: { 'Authorization': "Bearer " + $.cookie('sessionTokenSuplier') }
    });
>>>>>>> origin/zlnew

    var table = $('#datatable').DataTable({
        processing  : true,
        serverSide  : true,
        ajax        : `${ENDPOINT}admin/produk/datatables`,
        columns     : [
            { "data"  : "image_path" },
            { "data"  : "nama_produk" },
            { "data"  : "brand" },
            { "data"  : "harga" },
            { "data"  : "berat" },
            { "data"  : "action" },
        ],
        columnDefs: [
            { searchable: false, orderable: false, targets: 0 },
            { searchable: false, orderable: false, targets: -1 },
        ],
        order: [[1, 'asc']],
    });

<<<<<<< HEAD
    table.on('order.dt search.dt', function () {
        let i = 1;
 
        table.cells(null, 0, { search: 'applied', order: 'applied' }).every(function (cell) {
            this.data(i++);
        });
    }).draw();
});

function submitDel(id) {
	let ajax = $.ajax({
		url: `${ENDPOINT}admin/produk/delete`,
		method: "POST",
		data: { id_produk: id },
	});

	ajax.done((res) => {
		alert(res.meta.message);
		window.location.reload();
	});

	ajax.fail((res, status, err) => {
		alert(err);
	});
}
=======
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
            doneToast(res.meta.message);
            table.ajax.reload();
        });
    
        ajax.fail((res, status, err) => {
            failToast(err);
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
            failToast(err);
        });
    });
});
>>>>>>> origin/zlnew
