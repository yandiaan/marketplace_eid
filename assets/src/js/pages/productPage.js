function fetchDetailProduct(slug) {
	$(document).ready(function () {
		$.ajax({
			url: ENDPOINT + "produk?browse=" + slug,
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

				$(".xzoom-main img")
					.attr({
						src: BASE_URL + product.images[0].image_path,
						xoriginal: BASE_URL + product.images[0].image_path,
					})
					.removeClass("placeholder");

				$.each(product.images, (i, val) => {
					$(".xzoom-thumbs").append(
						"<a href=" +
							BASE_URL +
							val.image_path +
							"><img class='xzoom-gallery rounded' width='80' src=" +
							BASE_URL +
							val.image_path +
							" alt='' /> </a>"
					);
				});
				$(".xzoom, .xzoom-gallery").xzoom({
					zoomWidth: 200,
					zoomHeight: 200,
					hover: true,
					Xoffset: 25,
				});
			},
			error: function () {
				window.location.href = BASE_URL;
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
