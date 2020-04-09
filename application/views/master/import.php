<div class="page-wrapper">
	<div class="container-fluid">
		<form method="post" id="import_form" enctype="multipart/form-data">
			<p><label>Select Excel File</label>
				<input type="file" name="file" id="file" class="file" required accept=".xls, .xlsx" /></p>
			
			<input type="submit" name="import" value="Import" class="btn btn-info" />
		</form>
		<br />
		<div class="table-responsive" id="customer_data">

		</div>
	</div>
</div>


<script src="http://localhost/CodeIgniter/emp_web/asset/assets/libs/jquery/dist/jquery.min.js"></script>
<script>
	$(document).ready(function () {

		$('#import_form').on('submit', function (event) {
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url(); ?>master/importMaster",
				method: "POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function (data) {
					alert(data);
				},
				error:function(res){
					alert(res)
				}
			})
		});

	});

</script>
