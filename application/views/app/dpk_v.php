<button type="button" class="btn btn-success mb-4 float-right" id="btn-modal">Tambah</button>
<div class="card col-md-12 col-lg-12">
	<div class="card-body">
		<table id="menu-table" class="table text-center">
			<thead>
				<tr>
					<th width='150'>NIK</th>
					<th width='150'>Nama</th>
					<th>Nomor KK</th>
					<th>Alamat</th>
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
						<div class="form-group col-md-6">
							<label for="nik">NIK</label>
							<input type="text" class="form-control" id="nik" required>
						</div>
						<div class="form-group col-md-6">
							<label for="nama_lengkap">Nama Lengkap</label>
							<input type="text" class="form-control" id="nama_lengkap">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nomor_kk">Nomor KK</label>
							<input type="text" class="form-control" id="nomor_kk">
						</div>
						<div class="form-group col-md-6">
							<label for="alamat">Alamat</label>
							<input type="text" class="form-control" id="alamat">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="kecamatan">Kecamatan</label>
							<input type="text" class="form-control" id="kecamatan">
						</div>
						<div class="form-group col-md-6">
							<label for="kelurahan">Kelurahan/Desa</label>
							<input type="text" class="form-control" id="kelurahan">
						</div>
					</div>
					<div class="form-group">
						<label for="kabupaten">Pemerintahan Kabupaten/Kota</label>
						<input type="text" class="form-control" id="kabupaten">
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="provinsi">Pemerintahan Provinsi</label>
							<input type="text" class="form-control" id="provinsi">
						</div>
						<div class="form-group col-md-4">
							<label for="permohonan">Permohonan</label>
							<input type="text" class="form-control" id="permohonan">
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

<!-- firebase app -->
<script>
	var base_url = "<?= base_url() ?>" ;
</script>
<script src="<?php echo base_url();?>assets/js/app/dpk.js"></script>
