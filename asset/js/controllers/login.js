var login = {
	module: function () {
		return 'login';
	},

	login: function (data) {
		var email = $('#email').val();
		var password = $('#password').val();

		$.ajax({
			type: 'POST',
			url: base_url + login.module() + '/login_proses',
			data: {
				email: email,
				password: password
			},
			dataType: 'json',
			async: false,
			error: function (e) {
				console.log(e.responseText)
			},
			success: function (resp) {
				console.log(resp);
				if (resp.is_valid == true) {
					toastr.success('Login Berhasil!');
					setTimeout(function () {
						window.location = base_url + 'dashboard';
					}, 1000);
				} else {
					toastr.error('Terjadi Kesalahan!')
				}
			},
		});
	},

	coba: function () {
		console.log(base_url)
	}
}
