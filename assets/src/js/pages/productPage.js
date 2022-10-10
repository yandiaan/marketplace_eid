function fetchDetailProduct(slug) {
	$(document).ready(function () {
		$.ajax({
			url: ENDPOINT + "produk?browse=" + slug,
			type: "GET",
			dataType: "json",
			success: function (res) {
				let product = res.data[0];

				$("#breadcrumb-kategori").html(product.nama_kategori);
				$("#breadcrumb-produk").html(product.nama_produk);

				$(".id-produk").val(product.id_produk);
				$("#nama_produk").html(product.nama_produk);
				$("#deskripsi").html(product.deskripsi);
				$("#harga").html(rupiah(product.harga));
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
							"><img class='xzoom-gallery img-fluid rounded' width='80' src=" +
							BASE_URL +
							val.image_path +
							" alt='' /> </a>"
					);
				});

				$.each(product.variasi, (i, val) => {
					$("#versi").append(
						`<button class="btn btn-sm btn-outline-success versi w-auto">${val.model_variasi}</button>`
					);
				})

				if(product.reviews.length < 1) {
					$(".user-review").append(
						`<div class="d-flex justify-content-center py-5">
							<h6 class="fw-bold text-muted">Belum ada penilaian</h6>
						</div>`
					)
				} else {
					$.each(product.reviews, (i, val) => {
						$(".user-review").append(
						`<div class="row">
							<div class="col-1 avatar">
								<img src="${BASE_URL}/assets/img/Avatar.png";" alt="avatar" class="mx-auto w-100">
							</div>
							<div class="col-9 align-self-center">
								<span>${val.nama_pengguna}</span>
								<div class="star-form text-warning">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<span class="text-secondary">
									22 Februari 2022 09:45
								</span>
								<p class="text-right text-justify mt-3">
									${val.pesan}
								</p>
							</div>
						</div>`);
					});
				}
											
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

function updateReviewData(slug) {
	$.ajax({
		url: ENDPOINT + "produk?browse=" + slug,
		type: "GET",
		dataType: "json",
		success: function (res) {
			$(".user-review").empty();
			let { reviews } = res.data[0];

			$.each(reviews, (i, val) => {
				$(".user-review").append(`<div class="row">
											<div class="col-1 avatar">
												<img src="${BASE_URL}/assets/img/Avatar.png";" alt="avatar" class="mx-auto w-100">
											</div>
											<div class="col-9 align-self-center">
												<span>${val.nama_pengguna}</span>
												<div class="star-form text-warning">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa-regular fa-star"></i>
												</div>
												<span class="text-secondary">
													22 Februari 2022 09:45
												</span>
												<p class="text-right text-justify mt-3">
													${val.pesan}
												</p>
											</div>
										</div>`);
			});
		},
		error: function () {
			window.location.href = BASE_URL;
		},
	});
}

function addReview(id) {
	let form = new FormData();
	form.append("id_produk", id);
	form.append("pesan", $(".input-review").val());
	form.append("rating", "5");

	let settings = {
		url: "http://localhost/marketplace_eid/api/review",
		method: "POST",
		timeout: 0,
		headers: {
			Authorization: "Bearer " + token,
		},
		processData: false,
		mimeType: "multipart/form-data",
		contentType: false,
		data: form,
	};

	$.ajax(settings)
		.done(function () {
			alert("Berhasil Kirim Review");
			$(".submit-review").prop("disabled", false);
			$(".text-submit").html(`Kirim Ulasan`);
		})
		.fail(() => {
			alert("Gagal menambahkan review");
			window.location.reload();
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

$(".submit-cart").click(()=>{
	if (quantity.innerHTML > 0) {
	var cart = new FormData();
	cart.append("jumlah", $("#quantity").text());
	cart.append("id_produk", $(".id-produk").val());


	var settings = {
	url: ENDPOINT + "keranjang/add_item",
	method: "POST",
	headers: {
		Authorization: "Bearer " + token,
	},
	processData: false,
	contentType: false,
	mimeType: "multipart/form-data",
	data: cart,
	};

	$.ajax(settings).done( (res) => {
		alert("Sukses menambah data");
	console.log(res);
	}).fail(()=>{
		alert("gagal menambah data");
	});
	}else{
		alert("data tidak bisa kosong");
	}})
