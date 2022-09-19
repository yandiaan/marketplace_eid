const ENDPOINT = "http://localhost/marketplace_eid/api/";

$("#loginForm").submit((e) => {
	e.preventDefault();
	let data = {
		email: $("#emailInput").val(),
		password: $("#passwordInput").val(),
	};

	$.ajax({
		type: "POST",
		url: ENDPOINT + "login",
		data: data,
		success: (res) => {
			$.session.set("accessToken", res.data.access_token);
			alert("Berhasil Login Cuyy");
			window.location.reload();
		},
		dataType: "json",
		error: () => {
			alert("Gagal Login Cuyy");
		},
	});
});
