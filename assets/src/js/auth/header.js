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

let token = $.cookie("sessionToken");

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
