var validation = {
	run: function () {
		$('.data-error').remove();
		var required = $('.is_required');
		var empty = 0;
		var valid = 1;

		$.each(required, function () {
			var value = $(this).val();
			if (value == '') {
				empty += 1;
				$(this).after('<p class="data-error" style="color:red">* ' + $(this).attr('name') + ' Harus Diisi </p>');
			}
		});

		if (empty > 0) {
			valid = 0;
		}

		return valid;
	}
}
