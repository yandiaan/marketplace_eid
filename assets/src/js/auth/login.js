$("#errorMessage").hide();

const date = new Date();
date.setTime(date.getTime() + 3600 * 1000);

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
			$.cookie("sessionToken", res.data.access_token, {
				path: "/",
				expires: date,
			});
			window.location.reload();
		},
		dataType: "json",
		error: (err) => {
			$("#errorMessage").show("fast");
			$("#errorMessage").text(err.responseJSON.message);
		},
	});
});
