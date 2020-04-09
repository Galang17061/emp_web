var tags = {
	view: function (index) {
		alert('id master tag : ' + index);
		// $.ajax({
		// 	url: base_url + 'master/getUser/' + index,
		// 	type: 'post',
		// 	success: function (res) {
		// 		console.log(res);
		// 	}
		// })
	}
}

$(document).ready(function () {
	$.ajax({
		url: base_url + 'master/getShift',
		type: 'get',
		success: function (res) {
			var responseJson = JSON.parse(res);
			$.each(responseJson.result, function (index, value) {
				$('.row').append(`
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <button onclick = "tags.view(` + value.idshift + `)"
                            class="btn btn-secondary btn-lg">
                                <div class="card-body">
                                    <div class="d-flex flex-row">
                                        <div class="round align-self-center round-success"><i class="ti-alarm-clock"></i></div>
                                        <div class="ml-2 align-self-center">
                                            <h3>` + value.keteranganshift + `</h3>
                                            <span class="text-muted">` + value.namashift + `</span>
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                `);
			});
		},
		error: function (res) {
			alert(res.responseText);
		}
	});
})
