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
                            <a class="btn btn-primary mb-2" href="<?= base_url('master/master_user_add_view') ?>"><i class="fas fa-plus"></i>Tambah Master User</a>
						<div class="table-responsive">
							<table id="scroll_ver_hor" class="table table-striped table-bordered display nowrap"
								style="width:100%">
								<thead>
									<tr>
										<th>ID User</th>
										<th>Nama User</th>
										<th>ID Privillege</th>
										<th>Privillege</th>
                                        <th>Shift</th>
                                        <th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $data = json_decode($master_user) ?>
									<?php foreach($data->result as $index) {?>
									<tr>
										<td><?= $index->iduser ?></td>
										<td><?= $index->nameuser ?></td>
										<td><?= $index->namaprivillege ?></td>
										<td><?= $index->idprivillege ?></td>
										<td><?= $index->namashift ?></td>
										<td>
											<a href="<?= base_url('master/master_user_edit_view/'.$index->iduser) ?>" class="btn waves-effect waves-light btn-rounded btn-warning">Edit</a>
											<button type="button"
												class="btn waves-effect waves-light btn-rounded btn-danger" onclick="hapusData('<?= $index->iduser ?>')">Hapus</button>
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
	function hapusData($id){
		if(confirm('Anda ingin menghapus data ini?')){
			$.ajax({
				url:'<?= base_url('master/master_user_delete_data/'); ?>'+$id,
				type:'delete',
				success:function(){
					alert('Berhasil Menghapus Data');
				}
			})
		}
	}
</script>