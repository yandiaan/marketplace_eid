const ENDPOINT = "http://localhost/marketplace_eid/api/register";

$("#registerForm").submit((e) => {
	e.preventDefault();
	let data = {
		nama_lengkap: $("#fullNameInput").val(),
		username: $("#usernameInput").val(),
		password1: $("#passwordInput").val(),
		password2: $("#confirmPasswordInput").val(),
		email: $("#emailInput").val(),
	};

	console.table(data);

	$.ajax({
		type: "POST",
		url: ENDPOINT,
		data: data,
		success: (res) => {
			alert("Berhasil Mendaftar Akun!!!");
			window.location.href = "http://localhost/marketplace_eid/";
			$("#modalLogin").modal("show");
		},
		dataType: "json",
		error: (err) => {
			let error = err.responseJSON.errors;
			$.each(error, (e) => {
				$("#error_" + e).append(
					"<div class='alert alert-danger' style='font-size: 10px; margin-top: 15px; padding: 2px;'>" +
						error[e] +
						"</div>"
				);
			});
		},
	});
});
