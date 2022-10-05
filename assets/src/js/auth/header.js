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
	$("#authButtonGroup").html(
		`<a href='${
			BASE_URL + "/profile"
		}' class='btn-cart'><i class='fa fa-user'></i></a>` +
			`<a href='${BASE_URL}' class='btn-cart logout'><i class='fa fa-right-from-bracket'></i></a>`
	);
}

$("#cart").click((e) => {
	if(token !== undefined) {
		window.location = BASE_URL + '/cart';
	}
});

$(".logout").click((e) => {
	e.preventDefault();
	$.removeCookie("sessionToken", { path: "/" });
	window.location.reload();
});
