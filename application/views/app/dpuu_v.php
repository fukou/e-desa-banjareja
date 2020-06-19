<button type="button" class="btn btn-success mb-4 float-right" id="btn-modal">Tambah</button>
<div class="card col-md-12 col-lg-12">
	<div class="card-body">
		<table id="menu-table" class="table text-center">
			<thead>
				<tr>
					<th width='150'>Nomor KK</th>
					<th width='150'>Nomor KTP</th>
					<th>Nama</th>
					<th>T.Tinggal</th>
					<th width='150'>Berlaku</th>
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
				<form id="form1">
					<input type="hidden" id="id_data">
					<input type="hidden" id="Uid" value="<?= $this->session->userdata('id_user');?>">
					<input type="hidden" id="createdAt" value="<?= date('F d, Y h:i:s') ?>">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nomor_kk">Nomor KK</label>
							<input type="text" class="form-control" id="nomor_kk" required>
						</div>
						<div class="form-group col-md-6">
							<label for="nomor_ktp">Nomor KTP</label>
							<input type="text" class="form-control" id="nomor_ktp">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nama_ktp">Nama</label>
							<input type="text" class="form-control" id="nama_ktp">
						</div>
						<div class="form-group col-md-6">
							<label for="ttl">TTL</label>
							<input type="text" class="form-control" id="ttl">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="tempat_tinggal">Tempat Tinggal</label>
							<input type="text" class="form-control" id="tempat_tinggal">
						</div>
						<div class="form-group col-md-6">
							<label for="alamat_tujuan_pindah">Alamat Tujuan Pindah</label>
							<input type="text" class="form-control" id="alamat_tujuan_pindah">
						</div>
					</div>
					<div class="form-group">
						<label for="keperluan">Keperluan</label>
						<input type="text" class="form-control" id="keperluan">
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="berlaku_mulai">Berlaku Mulai</label>
							<input type="date" class="form-control" id="berlaku_mulai">
						</div>
						<div class="form-group col-md-6">
							<label for="kew_agama">Kewarganegaraan & Agama</label>
							<input type="text" class="form-control" id="kew_agama">
						</div>
						<div class="form-group col-md-6">
							<label for="status">Status</label>
							<select id="status" class="form-control">
								<option value="Menunggu">Menunggu</option>
								<option value="Disetujui">Disetujui</option>
								<option value="Ditolak">Ditolak</option>
							</select>
						</div>
						<div class="form-group col-md-6">
							<label for="lain_lain">Lain-lain</label>
							<input type="text" class="form-control" id="lain_lain">
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
<script src="<?php echo base_url();?>assets/js/app/dpuu.js"></script>
