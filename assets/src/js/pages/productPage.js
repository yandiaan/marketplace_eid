const ENDPOINT = "http://localhost/marketplace_eid/api/";

function fetchDetailProduct(id) {
	$(document).ready(function () {
		$.ajax({
			url: ENDPOINT + "produk?id=" + id,
			type: "GET",
			dataType: "json",
			success: function (res) {
				var product = res.data[0];
				$("#nama_produk").html(product.nama_produk);
				$("#deskripsi").html(product.deskripsi);
				$("#harga").html("Rp. " + product.harga);
				$("#tinggi").html(product.tinggi + " cm");
				$("#lebar").html(product.lebar + " cm");
				$("#berat").html(product.berat + " kg");
				$("#spesifikasi").html(product.spesifikasi);
				$("#nama_toko").html(product.nama_toko);
				$("#lokasi").html(product.lokasi);
				$("#brand").html(product.brand);
				$("#nama_kategori").html(product.nama_kategori);
			},
			error: function (xhr, textStatus, errorThrown) {
				console.log(errorThrown);
			},
		});
	});
}

const quantity = document.getElementById("quantity");

const increment = document.getElementById("increment");
const decrement = document.getElementById("decrement");

increment.addEventListener("click", () => {
	decrement.removeAttribute("disabled");

	let val = parseInt(quantity.innerHTML);
	val += 1;
	quantity.innerHTML = val;
});

decrement.addEventListener("click", () => {
	if (quantity.innerHTML == 1) {
		decrement.setAttribute("disabled", true);
	}

	let val = parseInt(quantity.innerHTML);
	if (val > 1) {
		val -= 1;
	}
	quantity.innerHTML = val;
});
