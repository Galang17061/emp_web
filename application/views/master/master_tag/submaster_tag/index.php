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
						<a href="<?= base_url('master/submaster_tag_add_view/' . $idmaster) ?>" class="btn btn-primary mb-2">Tambah
							Submaster Tag</a>
						<div class="table-responsive">
							<table id="scroll_ver_hor table" class="table table-striped table-bordered display nowrap"
								style="width:100%">
								<thead>
									<tr>
										<th>Id Submaster</th>
										<th>Nama Submaster</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $data = json_decode($submaster_tag_by_id) ?>
									<?php foreach($data->result as $index) {?>
									<tr>
										<td><?= $index->idsubmasterpos ?></td>
										<td><?= $index->namesubmasterpos ?></td>
										<td>
										<a href="<?= base_url('master/submaster_tag_edit_view/'.$idmaster.'/'.$index->idsubmasterpos) ?>" class="btn waves-effect waves-light btn-rounded btn-warning">Edit</a>
											<button type="button"
												class="btn waves-effect waves-light btn-rounded btn-danger"
												onclick="hapusData('<?= $index->idsubmasterpos ?>')">Hapus</button>
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
	function hapusData($id) {
		if (confirm('Anda ingin menghapus data ini?')) {
			$.ajax({
				url: '<?= base_url('master/submaster_tag_delete_data/'); ?>'+$id,
				type: 'delete',
				success: function () {
					alert('Berhasil Menghapus Data');
				}
			})
		}
	}

</script>
