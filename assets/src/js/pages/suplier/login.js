$("#errorMessage").hide();

const date = new Date();
date.setTime(date.getTime() + 3600 * 1000);

$("#loginFormSuplier").submit((e) => {
	e.preventDefault();
	let data = {
		email: $("#emailInput").val(),
		password: $("#passwordInput").val(),
	};

	$.ajax({
		type: "POST",
		url: ENDPOINT + "admin/suplier/login",
		data: data,
		success: (res) => {
			$.cookie("sessionTokenSuplier", res.data.access_token, {
				path: "/",
				expires: date,
			});
			// window.location.reload();
			window.location.replace(BASE_URL+"/suplier/dashboard");
		},
		dataType: "json",
		error: (err) => {
			$("#errorMessage").show("fast");
			$("#errorMessage").text(err.responseJSON.message);
		},
	});
});
