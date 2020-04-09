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
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
							data-whatever="@mdo"><i class="fas fa-plus"></i>Tambah Master Shift</button>
						<!-- <a href="<?= base_url('master/master_shift_add_view') ?>" class="btn btn-primary mb-2"><i
								class="fas fa-plus"></i>Tambah Master Shift</a> -->
						<a href="<?= base_url('master/master_shift_import_view') ?>" class="btn btn-primary mb-2"><i
								class="fas fa-plus"></i>Import Master Shift</a>
						<table id="scroll_ver_hor" class="table table-striped table-bordered display nowrap"
							style="width:100%">
							<thead>
								<tr>
									<th>Nama Shift</th>
									<th>Keterangan</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody id="dataFetch">
							</tbody>
						</table>
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
				<h4 class="modal-title" id="exampleModalLabel1">Tambah Master</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form class="mt-4" action="<?= base_url('master/master_shift_add_data') ?>" method="post">
					<div class="form-group">
						<label for="exampleInputEmail1">Nama Shift</label>
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
							placeholder="ex : 00.00 - 06.00" name="nama_shift">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Keterangan</label>
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
							placeholder="ex : Periode Minggu Ke 2" name="keterangan_shift">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
			</div>
		</div>
	</div>
</div>
<!-- End Modal -->

<script>
	$(document).ready(function(){
		$.ajax({
			url:'<?= base_url('master/fetchShiftData') ?>',
			type:'post',
			success:function(res){
				$('#dataFetch').html(res);
			},
			error:function(res){
				alert(res);
			}
		})
	});

	function hapusData($id) {
		if (confirm('Anda ingin menghapus data ini?')) {
			$.ajax({
				url: '<?= base_url('master/master_shift_delete_data/'); ?>' + $id,
				type: 'delete',
				success: function () {
					alert('Berhasil Menghapus Data');
				}
			})
		}
	}
</script>
