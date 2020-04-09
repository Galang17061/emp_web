<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">General Form</h4>
						<h6 class="card-subtitle"> All with bootstrap element classies </h6>
                        <form class="mt-4" action="<?= base_url('master/master_tag_edit_data') ?>" method="post">
						<input type="hidden" name="idmasterpos" value="<?= $idmasterpos ?>">
                        <?php  $masterpos = json_decode($master_pos_by_id)?>
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Laporan Tags</label>
								<input type="text" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" value="<?= $masterpos->result[0]->namamasterpos ?>" name="namamasterpos">
							</div>
							<div class="form-group">
								<select class="select2 js-programmatic form-control" id="programmatic-single"
									style="width: 20%;height: 36px;" name="master_shift">
									<optgroup label="Pilih Shift">
										<?php $master_shift = json_decode($master_shift)?>
										<?php foreach($master_shift->result as $index): ?>
										<option value="<?= $index->idshift ?>">
											<?= $index->namashift ?>
										</option>
										<?php endforeach?>
									</optgroup>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Laporan Tags</label>
								<input type="text" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp" value="<?= $masterpos->result[0]->barcodemasterpos ?>" name="barcodemasterpos">
							</div>
							<button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>