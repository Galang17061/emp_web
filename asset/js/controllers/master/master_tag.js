var master_tag = {
	coba: function () {
		console.log('berhasil');
	},
	random: function () {
		$.ajax({
			url: base_url + 'master/getMasterPosBarcode',
			type: 'post',
			dataType: 'json',
			data: {
				random_number: Math.floor(Math.random() * 1000000 + 1)
			},
			success: function (res) {
				if (res.valid) {
					var coba = JSON.parse(res.result);
					// Check if number is already taken or not
					if (coba.result[0].total == 0) {
						$('#barcodepos').val('');
						$('#barcodepos').val(res.number);
					} else {
						master_tag.random();
					}
				}
			},
			error: function (res) {
				alert('gagal' + res.reponseText);
			}
		});
	}
}
