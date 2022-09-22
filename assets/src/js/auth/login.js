$("#errorMessage").hide();

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
			$.cookie("sessionToken", res.data.access_token);
			window.location.reload();
		},
		dataType: "json",
		error: (err) => {
			$("#errorMessage").show("fast");
			$("#errorMessage").text(err.responseJSON.message);
		},
	});
});
