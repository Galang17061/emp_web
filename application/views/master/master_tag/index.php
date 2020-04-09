<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Scroll - Vertical &amp; Horizontal</h4>
						<h6 class="card-subtitle">In this example you can see DataTables doing both horizontal and
							vertical scrolling at the same time. Note also that pagination is enabled in this example,
							and the scrolling accounts for this.</h6>
						<a href="<?= base_url('master/master_tag_add_view') ?>" class="btn btn-primary mb-2">Tambah
							Master Tag</a>
						<div class="table-responsive">
							<table id="scroll_ver_hor table" class="table table-striped table-bordered display nowrap"
								style="width:100%">
								<thead>
									<tr>
										<th>ID Pos</th>
										<th>Barcode</th>
										<th>ID Privillege</th>
										<th>Total Pos</th>
										<th>Shift</th>
										<th>Barcode</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $data = json_decode($master_tag) ?>
									<?php foreach($data->result as $index) {?>
									<tr>
										<td><?= $index->idmasterpos ?></td>
										<td><?= $index->barcodemasterpos ?></td>
										<td><?= $index->namamasterpos ?></td>
										<td><?= $index->totalpos ?></td>
										<td><?= $index->namashift ?></td>
										<td>
											<a href="<?= base_url('asset/QR_Code/images'.$index->barcodemasterpos.'.jpg'); ?>"
												download>
												<img
													src="<?= base_url('asset/QR_Code/images'.$index->barcodemasterpos.'.jpg'); ?>">
											</a>
										</td>
										<td>
											<a href="<?= base_url('master/submaster_tag_view/'.$index->idmasterpos) ?>"
												class="btn waves-effect waves-light btn-rounded btn-warning">Lihat Sub
												Master</a>
											<a href="<?= base_url('master/master_tag_edit_view/'.$index->idmasterpos) ?>"
												class="btn waves-effect waves-light btn-rounded btn-primary">Edit</a>
											<button type="button"
												class="btn waves-effect waves-light btn-rounded btn-danger"
												onclick="hapusData('<?= $index->idmasterpos ?>','<?= $index->barcodemasterpos ?>')">Hapus</button>
										</td>
									</tr>
									<?php }?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	function hapusData($id,$barcodemasterpos) {
		if (confirm('Anda ingin menghapus data ini?')) {
			$.ajax({
				url: '<?= base_url('master/master_tag_delete_data/') ?>'+$id+'/'+$barcodemasterpos,
				type: 'delete',
				success: function () {
					toastr.success('Berhasil Menghapus');
				}
			})
		}
	}

</script>
