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
			const el = `<div class="col-2">
                        <div class="card-product search-card" style="height: 400px">
                            <div class="thumbnail">
                                <img src="${
																	BASE_URL + item.images[0].image_path
																}" alt="product" class="img-thumbnail">
                            </div>
                            <div class="card-product-body">
                                <a href="${BASE_URL}/produk/${
				item.slug
			}" class="product-title">${item.nama_produk}</a>
                                <small class="d-block">L535 x W173mm</small>
                                <div>
                                    <br>
                                    <span class="fw-bold">Rp. ${
																			item.harga
																		} <small class="fw-light">/
                                            Unit</small></span>
                                </div>
    
                                <div class="product-location text-right">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 9C7.50555 9 7.0222 8.85338 6.61108 8.57868C6.19995 8.30397 5.87952 7.91352 5.6903 7.45671C5.50108 6.99989 5.45157 6.49723 5.54804 6.01228C5.6445 5.52732 5.8826 5.08187 6.23223 4.73223C6.58187 4.3826 7.02732 4.1445 7.51228 4.04804C7.99723 3.95157 8.4999 4.00108 8.95671 4.1903C9.41353 4.37952 9.80397 4.69995 10.0787 5.11108C10.3534 5.5222 10.5 6.00555 10.5 6.5C10.4992 7.1628 10.2356 7.79822 9.76689 8.26689C9.29822 8.73556 8.6628 8.99921 8 9ZM8 5C7.70333 5 7.41332 5.08797 7.16665 5.2528C6.91997 5.41762 6.72771 5.65189 6.61418 5.92598C6.50065 6.20007 6.47095 6.50167 6.52882 6.79264C6.5867 7.08361 6.72956 7.35088 6.93934 7.56066C7.14912 7.77044 7.41639 7.9133 7.70737 7.97118C7.99834 8.02906 8.29994 7.99935 8.57403 7.88582C8.84812 7.77229 9.08238 7.58003 9.24721 7.33336C9.41203 7.08668 9.5 6.79667 9.5 6.5C9.4996 6.1023 9.34144 5.721 9.06022 5.43978C8.779 5.15856 8.3977 5.0004 8 5Z"
                                            fill="#285F09" />
                                        <path
                                            d="M8.00001 15L3.78201 10.0255C3.7234 9.95081 3.66539 9.87564 3.60801 9.8C2.8875 8.85089 2.49826 7.69161 2.50001 6.5C2.50001 5.04131 3.07947 3.64236 4.11092 2.61091C5.14237 1.57946 6.54132 1 8.00001 1C9.4587 1 10.8576 1.57946 11.8891 2.61091C12.9205 3.64236 13.5 5.04131 13.5 6.5C13.5018 7.69107 13.1127 8.84982 12.3925 9.7985L12.392 9.8C12.392 9.8 12.242 9.997 12.2195 10.0235L8.00001 15ZM4.40601 9.1975C4.40701 9.1975 4.52301 9.3515 4.54951 9.3845L8.00001 13.454L11.455 9.379C11.477 9.3515 11.594 9.1965 11.5945 9.196C12.1831 8.42056 12.5012 7.47352 12.5 6.5C12.5 5.30653 12.0259 4.16193 11.182 3.31802C10.3381 2.47411 9.19348 2 8.00001 2C6.80653 2 5.66194 2.47411 4.81803 3.31802C3.97411 4.16193 3.50001 5.30653 3.50001 6.5C3.49896 7.47412 3.81739 8.42171 4.40651 9.1975H4.40601Z"
                                            fill="#285F09" />
                                    </svg>
    
                                    <span class="fw-bold">${item.lokasi}</span>
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