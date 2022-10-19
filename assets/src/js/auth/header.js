// document.addEventListener(
// 	"DOMContentLoaded",
// 	function () {
// 		var search = document.getElementById("dropdown-search");
// 		var overlay = document.getElementById("overlay");

// 		search.addEventListener("focusin", function (e) {
// 			overlay.style.display = "block";
// 		});

// 		search.addEventListener("focusout", function (e) {
// 			overlay.style.display = "none";
// 		});
// 	},
// 	false
// );
if (token !== undefined) {
	$(".btn-cart").mouseenter(() => {
		$(".data-cart").removeClass("visually-hidden");
		$.ajax({
			url: `${ENDPOINT}keranjang/get_item`,
			method: "GET",
			headers: {
				Authorization: `Bearer ${token}`,
			},
			mimeType: "application/json",
		}).done((res) => {
			$(".data-cart").empty();
			
			let data = res.data.items;
			$(".data-cart").append(`
				<div>
					<h6 class="fw-bold text-primary">Total (${data.length})</h6>
				</div>
				<hr />
			`);
			data.map((item) => {
				$(".data-cart").append(`
					<div class="d-flex justify-content-between mt-4">
						<div class="d-flex">
							<img src="${
								BASE_URL + item.image_path
							}" style="width: 50px; height: 50px; border-radius: 10px; object-fit: cover;" alt="cart-img" />
							<div class="d-flex ms-3 flex-column">
								<span class="fw-bolder title-cart">${item.nama_produk}</span>
								<small>${item.jumlah} Barang</small>
							</div>
						</div>
						<div>
							<span>${rupiah(item.harga_total)}</span>
						</div>
					</div>
				`);
			});
		});
	});
}
$(".btn-cart").mouseleave(() => {
	$(".data-cart").addClass("visually-hidden");
});

if (token !== undefined) {
	$("#authButtonGroup").html(
		`<a href='${
			BASE_URL + "/profile"
		}' class='btn-cart'><i class='fa fa-user'></i></a>` +
			`<a href='${BASE_URL}' class='btn-cart logout'><i class='fa fa-right-from-bracket'></i></a>`
	);
}

$("#cart").click((e) => {
	if (token !== undefined) {
		window.location = BASE_URL + "/cart";
	}
});

$(".logout").click((e) => {
	e.preventDefault();
	$.removeCookie("sessionToken", { path: "/" });
	window.location.reload();
});

if (token !== undefined) {
	$.ajax({
		url: `${ENDPOINT}keranjang/get_item`,
		method: "GET",
		headers: {
			Authorization: `Bearer ${token}`,
		},
		mimeType: "application/json",
	}).done((res) => {
		$(".contain-cart .count").text(res.data.total_items);
	});
}
