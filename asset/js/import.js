$('#import_form').on('submit', function (event) {
	event.preventDefault();
	$.ajax({
		url: base_url + "master/importMaster",
		method: "POST",
		data: new FormData(this),
		contentType: false,
		cache: false,
		processData: false,
		success: function (data) {
			alert('Berhasil import');
		},
		error: function (res) {
			alert(res);
		}
	})
});
