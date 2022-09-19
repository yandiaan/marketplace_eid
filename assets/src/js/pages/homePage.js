let token = $.cookie("sessionToken");

$("#cart").click(() => {
	let cookie = $.cookie("sessionToken");
	if (!cookie) {
		$("#modalLogin").modal("show");
	}
});

if (!token) {
	$(document).ready(() => {
		$("#modalLogin").modal("show");
	});
}
