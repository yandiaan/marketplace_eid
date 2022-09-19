document.addEventListener(
	"DOMContentLoaded",
	function () {
		var search = document.getElementById("dropdown-search");
		var overlay = document.getElementById("overlay");

		search.addEventListener("focusin", function (e) {
			overlay.style.display = "block";
		});

		search.addEventListener("focusout", function (e) {
			overlay.style.display = "none";
		});
	},
	false
);

let token = $.session.get("accessToken");

if (token !== undefined) {
	$("#authButtonGroup").html(profileButton());
}
