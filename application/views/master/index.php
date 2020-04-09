<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<!-- column -->
			<div class="col-lg-3">
				<div class="card bg-info text-white  card-hover">
					<div class="card-body">
						<div class="d-flex align-items-center m-t-30">
							<div class="m-r-10">
								<span class="text-orange display-5">
									<i class="mdi mdi-wallet"></i>
								</span>
							</div>
							<div>
								<span>
									Tags
								</span>
								<h3 class="font-medium m-b-0">
									Jumlah Tags
								</h3>
							</div>
							<div class="ml-auto">
								<a href="<?= base_url('master/master_tag_view') ?>"
									class="btn waves-effect waves-light btn-secondary">
									Check
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- column -->
			<div class="col-lg-3">
				<div class="card bg-success text-white  card-hover">
					<div class="card-body">
						<div class="d-flex align-items-center m-t-30">
							<div class="m-r-10">
								<span class="text-orange display-5">
									<i class="mdi mdi-wallet"></i>
								</span>
							</div>
							<div>
								<span>
									User
								</span>
								<h3 class="font-medium m-b-0">
									Jumlah User
								</h3>
							</div>
							<div class="ml-auto">
								<a href="<?= base_url('master/master_user_view') ?>"
									class="btn waves-effect waves-light btn-secondary">
									Check
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- column -->
			<div class="col-lg-3">
				<div class="card bg-info text-white  card-hover">
					<div class="card-body">
						<div class="d-flex align-items-center m-t-30">
							<div class="m-r-10">
								<span class="text-orange display-5">
									<i class="mdi mdi-wallet"></i>
								</span>
							</div>
							<div>
								<span>
									Shift
								</span>
								<h3 class="font-medium m-b-0">
									Jumlah Shift
								</h3>
							</div>
							<div class="ml-auto">
								<a href="<?= base_url('master/master_shift_view') ?>"
									class="btn waves-effect waves-light btn-secondary">
									Check
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card bg-danger text-white  card-hover">
					<div class="card-body">
						<div class="d-flex align-items-center m-t-30">
							<div class="m-r-10">
								<span class="text-orange display-5">
									<i class="mdi mdi-wallet"></i>
								</span>
							</div>
							<div>
								<h3 class="font-medium m-b-0">
									Import Data
								</h3>
							</div>
							<div class="ml-auto">
								<div class="button-box">
									<button type="button" class="btn waves-effect waves-light btn-secondary"
										data-toggle="modal" data-target="#exampleModal"
										data-whatever="@mdo">Check</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel1">Import Data Master</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form class="mt-3" id="import_form">
					<fieldset class="form-group">
						<input type="file" class="form-control-file" name="file" id="file" class="file" required accept=".xls, .xlsx">
					</fieldset>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary data">Send message</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- End Modal -->

<script>
	var base_url = '<?=base_url()?>';
</script>