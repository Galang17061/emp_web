$(document).ready(function () {
	$.ajax({
		url: base_url + 'absen/getUserByAbsensi',
		type: 'get',
		success: function (res) {
			var responseJson = JSON.parse(res);
			$('#zero_config tbody tr').html('');
			$.each(responseJson.result, function (index, value) {
				$('#zero_config tbody').append(`
				    <tr>
				        <td>` + value.nameuser + `</td>
				        <td>` + value.namaprivillege + `</td>
				        <td>` + value.date_checkin + `</td>
				        <td>` + value.date_checkout + `</td>
				    </tr>
				`);
			});
			$('body').append('<script src="' + base_url + 'asset/assets/extra-libs/DataTables/datatables.min.js"></script><script src="' + base_url + 'asset/dist/js/pages/datatable/datatable-basic.init.js"></script>');
		},
		error: function (res) {
			alert(res.responseText);
		}
	});
})

$('#cari').click(function () {
	var rangePickerSplit = $('#rangepicker').val().split('/');
	var datePickerSplit = date_created.split('-');
	// Check if date is the same as today
	if (rangePickerSplit[0] == datePickerSplit[0] && rangePickerSplit[1] == datePickerSplit[1] && rangePickerSplit[2] == datePickerSplit[2]) {
		$.ajax({
			url: base_url + 'absen/getUserByAbsensi',
			type: 'get',
			success: function (res) {
				var responseJson = JSON.parse(res);
				$('#zero_config tbody tr').html('');
				$.each(responseJson.result, function (index, value) {
					$('#zero_config tbody').append(`
				    <tr>
				        <td>` + value.nameuser + `</td>
				        <td>` + value.namaprivillege + `</td>
				        <td>` + value.date_checkin + `</td>
				        <td>` + value.date_checkout + `</td>
				    </tr>
				`);
				});
				$('body').append('<script src="' + base_url + 'asset/assets/extra-libs/DataTables/datatables.min.js"></script><script src="' + base_url + 'asset/dist/js/pages/datatable/datatable-basic.init.js"></script>');
			},
			error: function (res) {
				alert(res.responseText);
			}
		});
	} else {
		$.ajax({
			url: base_url + 'absen/getUserByAbsensiFinish',
			type: 'post',
			data: {
				date_create: $('#rangepicker').val()
			},
			success: function (res) {
				var responseJson = JSON.parse(res);
				$('#zero_config tbody tr').html('');
				$.each(responseJson.result, function (index, value) {
					$('#zero_config tbody').append(`
				    <tr>
				        <td>` + value.nameuser + `</td>
				        <td>` + value.namaprivillege + `</td>
				        <td>` + value.date_checkin + `</td>
				        <td>` + value.date_checkout + `</td>
				    </tr>
				`);
				});
				$('body').append('<script src="' + base_url + 'asset/assets/extra-libs/DataTables/datatables.min.js"></script><script src="' + base_url + 'asset/dist/js/pages/datatable/datatable-basic.init.js"></script>');
			},
			error: function (res) {
				alert(res.responseText);
			}
		});
	}
})
