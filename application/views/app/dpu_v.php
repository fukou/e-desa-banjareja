<button type="button" class="btn btn-success mb-4 float-right" id="btn-modal">Tambah</button>
<div class="card col-md-12 col-lg-12">
	<div class="card-body">
		<table id="menu-table" class="table text-center">
			<thead>
				<tr>
					<th width='150'>Nomor KK</th>
					<th width='150'>NIK Pemohon</th>
					<th>Nama Pemohon</th>
					<th>Alamat Tujuan</th>
					<th width='130'>Act</th>
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
				<form id="form1">
					<!-- <input type="hidden" id="uid"> -->
					<input type="hidden" id="Uid" value="<?= $this->session->userdata('id_user');?>">
					<input type="hidden" id="createdAt" value="<?= date('F d, Y h:i:s') ?>">
					<!-- <input type="hidden" id="date_create" value="<?= date('F d, Y h:i:s') ?>"> -->
					<input type="hidden" id="id_data">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nomor_kk">Nomor KK</label>
							<input type="text" class="form-control" id="nomor_kk" required>
						</div>
						<div class="form-group col-md-6">
							<label for="nama_kepala">Nama Kepala Keluarga</label>
							<input type="text" class="form-control" id="nama_kepala">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nomor_ktp">NIK Pemohon</label>
							<input type="text" class="form-control" id="nomor_ktp">
						</div>
						<div class="form-group col-md-6">
							<label for="nama_lengkap">Nama Lengkap Pemohon</label>
							<input type="text" class="form-control" id="nama_lengkap">
						</div>
					</div>
					<div class="form-row">

						<div class="form-group col-md-4">
							<label for="alamat_tujuan_pindah">Alamat Tujuan Pindah</label>
							<input type="text" class="form-control" id="alamat_tujuan_pindah">
						</div>
						<div class="form-group col-md-4" style="display:none;">
							<label for="alamat_pindah">Alamat Pindah</label>
							<input type="text" class="form-control" id="alamat_pindah">
						</div>
						<div class="form-group col-md-4">
							<label for="alamat">Alamat</label>
							<input type="text" class="form-control" id="alamat">
						</div>
						<div class="form-group col-md-4"style="display:none;">
							<label for="st_kk1">Status KK Bagi Yang tidak Pindah</label>
							<input type="text" class="form-control" id="st_kk1">
						</div>
						<div class="form-group col-md-4">
							<label for="st_kk2">Status KK Bagi yang pindah</label>
							<input type="text" class="form-control" id="st_kk2">
						</div>
						<div class="form-group col-md-6">
							<label for="status">Status</label>
							<select id="status" class="form-control">
								<option value="Menunggu">Menunggu</option>
								<option value="Disetujui">Disetujui</option>
								<option value="Ditolak">Ditolak</option>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4"style="display:none;">
							<label for="tempat_tinggal">Tempat Tinggal</label>
							<input type="text" class="form-control" id="tempat_tinggal">
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
<script src="<?php echo base_url();?>assets/js/app/dpu.js"></script>
