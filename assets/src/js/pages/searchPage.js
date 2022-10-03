$.get(`${BASE_URL}/assets/comps/skeleton.html`, (e) => {
	$(".main-content").append(e);
});

const fetchSearchData = (title) => {
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
			const el = `<div class="col-lg-3">
                        <div class="card-product search-card h-100">
                            <div class="thumbnail">
                                <img src="${BASE_URL + item.images[0].image_path}" alt="product" class="img-thumbnail">
                            </div>
                            <div class="card-product-body">
                                <a href="${BASE_URL}/produk/${item.slug}" class="product-title truncate-2">${item.nama_produk}</a>
								<div class="product-supplier mt-2">
                                	<small class="truncate-2"><i class="fas fa-store-alt"></i> ${item.nama_toko}</small>
								</div>
                                <div>
                                    <br>
                                    <span class="fw-bold product-price">${rupiah(item.harga)} <small class="fw-light">/Unit</small></span>
                                </div>
    
                                <div class="text-start">
									<span style="font-size: 10px" class="product-location text-muted fw-bold">${item.lokasi}</span>
                                </div>
                            </div>
                        </div>
                    </div>`;
			$(".main-content").append(el);
		});
	});
};

$(".searchInput").on("input", function (e) {
	let input = e.target.value;
	const url = new URL(window.location.href);
	url.searchParams.set("search", input);
	window.history.replaceState(null, null, url);
	$(".main-content").empty();
	$.get(`${BASE_URL}/assets/comps/skeleton.html`, (e) => {
		$(".main-content").append(e);
	});
	fetchSearchData(input);
});
