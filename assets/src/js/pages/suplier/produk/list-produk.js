$(document).ready(() => {
	$.ajaxSetup({
		headers: { Authorization: "Bearer " + tokenSuplier },
	});

	var table = $("#datatable").DataTable({
		processing: true,
		serverSide: true,
		ajax: `${ENDPOINT}admin/produk/datatables`,
		columns: [
			{ data: "id_produk" },
			{ data: "nama_produk" },
			{ data: "brand" },
			{ data: "harga" },
			{ data: "berat" },
			{ data: "action" },
		],
		columnDefs: [
			{
				searchable: false,
				orderable: false,
				targets: 0,
			},
		],
		order: [[1, "asc"]],
	});

	table
		.on("order.dt search.dt", function () {
			let i = 1;

			table
				.cells(null, 0, { search: "applied", order: "applied" })
				.every(function (cell) {
					this.data(i++);
				});
		})
		.draw();
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
