<button type="button" class="btn btn-success mb-4 float-right" id="btn-modal">Tambah</button>
<div class="card col-md-12 col-lg-12">
	<div class="card-body">
		<table id="menu-table" class="table text-center">
			<thead>
				<tr>
					<th width='150'>NIK</th>
					<th width='150'>Nama Lengkap</th>
					<th>Keperluan</th>
					<th>Perubahan Data</th>
					<th width="130">Act</th>
				</tr>
			</thead>
			<tbody id="dpu"></tbody>
		</table>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><span id="act"></span> Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<input type="hidden" id="id_data">
					<input type="hidden" id="Uid" value="<?= $this->session->userdata('id_user');?>">
					<input type="hidden" id="createdAt" value="<?= date('F d, Y h:i:s') ?>">
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="nik">NIK</label>
							<input type="text" class="form-control" id="nik" required>
						</div>
						<div class="form-group col-md-6">
							<label for="nama">Nama Lengkap</label>
							<input type="text" class="form-control" id="nama">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="alamat">Alamat</label>
							<input type="text" class="form-control" id="alamat">
						</div>
						<div class="form-group col-md-6">
							<label for="keperluan">Keperluan</label>
							<input type="text" class="form-control" id="keperluan">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="ingin_dirubah">Data yang ingin di rubah</label>
							<input type="text" class="form-control" id="ingin_dirubah">
						</div>
						<div class="form-group col-md-4">
							<label for="data_dirubah">Data Dirubah</label>
							<input type="text" class="form-control" id="data_dirubah">
						</div>
						<div class="form-group col-md-4">
							<label for="status">Status</label>
							<select id="status" class="form-control">
								<option value="Menunggu">Menunggu</option>
								<option value="Disetujui">Disetujui</option>
								<option value="Ditolak">Ditolak</option>
							</select>
						</div>
					</div>
				</form>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" id="save-add">Save</button>
				<button type="button" class="btn btn-primary" id="save-update">Save</button>
			</div>
		</div>
	</div>
</div>
<script>
	var base_url = "<?= base_url() ?>" ;
</script>
<!-- firebase app -->
<script src="<?php echo base_url();?>assets/js/app/dpp.js"></script>
