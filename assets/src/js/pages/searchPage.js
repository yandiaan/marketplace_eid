const url = new URL(window.location.href);

const productParams = url.searchParams.get("search");
const suplierParams = url.searchParams.get("suplier");

$(document).ready(() => {
	searchProduct(productParams);
});

const searchProduct = (title) => {
	$.get(`${BASE_URL}/assets/comps/skeleton.html`, (e) => {
		$(".main-content").append(e);
	});
	const settings = {
		url: ENDPOINT + "produk/filter",
		method: "POST",
		data: {
			nama: title,
			kategori: "",
			lokasi: "",
			merek: "",
			harga_min: "",
			harga_max: "",
			sort: "",
		},
	};

	$.ajax(settings).done((res) => {
		const count = res.meta.total;
		const data = res.data;
		$(".resultText").html(
			res.data.length > 0
				? `Menampilkan <span class="count">${count}</span> produk <span class="searchQuery"></span>`
				: res.meta.message
		);
		$(".searchInput").val() !== ""
			? $(".searchQuery").html(`untuk <b>"${title}"</b>`)
			: "";
		$(".main-content").empty();
		$.each(data, (index, item) => {
			const el = `<div class="col-3">
                        <div class="card-product search-card">
                            <div class="card-product-body">
							<div class="thumbnail" style="">
                                <img src="${
																	BASE_URL + item.images[0].image_path
																}" alt="product" class="img-thumbnail" style="object-fit: cover;height: 150px;" />
                            </div>
                                <a href="${BASE_URL}/produk/${
				item.slug
			}" class="product-title truncate-2">${item.nama_produk}</a>
								<div class="product-supplier mt-2">
                                	<small class="truncate-2"><i class="fas fa-store-alt"></i> ${
																		item.nama_toko
																	}</small>
								</div>
                                <div>
                                    <br>
                                    <span class="fw-bold product-price">${rupiah(
																			item.harga
																		)} <small class="fw-light">/Unit</small></span>
                                </div>
    
                                <div class="text-start">
									<span style="font-size: 10px" class="product-location text-muted fw-bold">${
										item.lokasi
									}</span>
                                </div>
                            </div>
                        </div>
                    </div>`;
			$(".main-content").append(el);
		});
	});
};

const getSupplier = () => {
	var settings = {
		url: ENDPOINT + "suplier/all",
		method: "GET",
	};

	$.ajax(settings).done(function (response) {
		let items = response.data;
		console.log(items);
		let el = (nama_toko, logo, lokasi, produks) => {
			return `<div class="col-6">
						<div class="card p-3">
							<div class="row align-items-center justify-content-between">
								<div class="col-1">
									<img src="${
										logo !== null ? logo : BASE_URL + "/assets/img/Avatar.png"
									}" alt="avatar" class="avatar"
										style="width: 35px; height: 35px;" />
								</div>
								<div class="col-6">
									<div class="d-flex fs-6 flex-column">
										<small class="text-primary fw-bold" style="font-size: 11px;">${nama_toko}</small>
										<small style="font-size: 9.5px;">${lokasi}</small>
									</div>
								</div>
								<div class="col-4">
									<button class="btn btn-outline-primary" style="font-size: 12px;">Lihat Suplier</button>
								</div>
							</div>
							<div class="row mt-4">
								${produks.map(({ images, nama_produk, harga }) => {
									return `<div class="col-4">
									<div class="card-product search-card">
										<div class="card-product-body">
											<div class="thumbnail">
												<img src="${BASE_URL + "/assets/img/Rectangle 6.png"}" alt="product"
													class="img-thumbnail" style="object-fit: cover;height: 100px;" />
											</div>
											<a href="" class="product-title truncate-2" style="font-size: 12px;">${nama_produk}</a>
											<div class="product-supplier mt-2">
												<small class="truncate-2" style="font-size: 9px;"><i
														class="fas fa-store-alt"></i>Toko Hura
													Hura</small>
											</div>
											<div>
												<br>
												<span class="fw-bold product-price" style="font-size: 10px;">${rupiah(harga)}
													<small class="fw-light">/Unit</small></span>
											</div>
											<div class="text-start">
												<span style="font-size: 10px"
													class="product-location text-muted fw-bold">Jakarta</span>
											</div>
										</div>
									</div>
								</div>`;
								})}
							</div>
						</div>
					</div>`;
		};
		items.map(({ nama_toko, logo, lokasi, produks }) => {
			$(".main-content").append(el(nama_toko, logo, lokasi, produks));
		});
	});
};

const setParams = (key, value) => {
	if (key === "search") {
		url.searchParams.delete("suplier");
	} else if (key === "suplier") {
		url.searchParams.delete("search");
	}
	url.searchParams.set(key, value);
	window.history.replaceState(null, null, url);
};

let submitProduct = $(".submit-product");
let submitSuplier = $(".submit-suplier");

submitProduct.click(() => {
	submitProduct.data("active", true);
	submitSuplier.data("active", false);
	submitProduct.removeClass("btn-outline-primary").addClass("btn-primary");
	submitSuplier.removeClass("btn-primary").addClass("btn-outline-primary");
	let input = $(".searchInput").val();
	setParams("search", input);
	searchProduct(input);
});

submitSuplier.click(() => {
	submitProduct.data("active", false);
	submitSuplier.data("active", true);
	submitSuplier.removeClass("btn-outline-primary").addClass("btn-primary");
	submitProduct.removeClass("btn-primary").addClass("btn-outline-primary");
	let input = $(".searchInput").val();
	setParams("suplier", input);
	$(".main-content").empty();
	getSupplier();
});

$(".searchInput").on("input", function (e) {
	if ($(".submit-product").data("active") === true) {
		let input = e.target.value;
		url.searchParams.set("search", input);
		window.history.replaceState(null, null, url);
		$(".main-content").empty();

		searchProduct(input);
	} else if ($(".submit-suplier").data("active") === true) {
		let input = e.target.value;

		url.searchParams.delete("search");
		url.searchParams.set("suplier", input);
		window.history.replaceState(null, null, url);
		$(".main-content").empty();
	}
});
