$("#cart").click(() => {
	let cookie = $.cookie("sessionToken");
	if (!cookie) {
		$("#modalLogin").modal("show");
	}
});
