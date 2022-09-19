$("#cart").click(() => {
	let session = $.session.get("accessToken");
	if (!session) {
		$("#modalLogin").modal("show");
	}
});
