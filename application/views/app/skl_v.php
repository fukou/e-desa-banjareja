<button type="button" class="btn btn-success mb-4 float-right" id="btn-modal">Tambah</button>
<button type="button" class="btn btn-warning mb-4 float-right" id="kembali" style="display:none;">kembali</button>
<form>
	<div class="card col-md-12 col-lg-12" style="display:none;" id="f1">
		<div class="card-body">
			<input type="hidden" id="id_data">
			<input type="hidden" id="Uid" value="<?= $this->session->userdata('id_user');?>">
			<input type="hidden" id="keperluan" value="Surat Keterangan Kelahiran">
			<input type="hidden" id="createdAt" value="<?= date('F d, Y h:i:s') ?>">
			<!-- <input type="hidden" id="nama_kepala_keluarga"> -->
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="nama_kepala_keluarga">Nama Kepala Keluarga</label>
					<input type="text" class="form-control" id="nama_kepala_keluarga">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="status">Status</label>
					<select id="status" class="form-control">
						<option value="Menunggu">Menunggu</option>
						<option value="Disetujui">Disetujui</option>
						<option value="Ditolak">Ditolak</option>
					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="nik_ayah">NIK Ayah</label>
					<input type="text" class="form-control" id="nik_ayah">
				</div>
				<div class="form-group col-md-4">
					<label for="nama_ayah">Nama Ayah</label>
					<input type="text" class="form-control" id="nama_ayah">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="alamat_ayah">Alamat Ayah</label>
					<input type="text" class="form-control" id="alamat_ayah">
				</div>
				<div class="form-group col-md-4">
					<label for="pekerjaan_ayah">Pekerjaan Ayah</label>
					<input type="text" class="form-control" id="pekerjaan_ayah">
				</div>
				<div class="form-group col-md-4">
					<label for="ttl_ayah">TTL Ayah</label>
					<input type="text" class="form-control" id="ttl_ayah">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="nik_ibu">NIK Ibu</label>
					<input type="text" class="form-control" id="nik_ibu">
				</div>
				<div class="form-group col-md-6">
					<label for="nama_ibu">Nama Ibu</label>
					<input type="text" class="form-control" id="nama_ibu">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="alamat_ibu">Alamat Ibu</label>
					<input type="text" class="form-control" id="alamat_ibu">
				</div>
				<div class="form-group col-md-4">
					<label for="pekerjaan_ibu">Pekerjaan Ibu</label>
					<input type="text" class="form-control" id="pekerjaan_ibu">
				</div>
				<div class="form-group col-md-4">
					<label for="ttl_ibu">TTL Ibu</label>
					<input type="text" class="form-control" id="ttl_ibu">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="nik_pelapor">NIK Pelapor</label>
					<input type="text" class="form-control" id="nik_pelapor">
				</div>
				<div class="form-group col-md-6">
					<label for="nama_pelapor">Nama Pelapor</label>
					<input type="text" class="form-control" id="nama_pelapor">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="pekerjaan_pelapor">Pekerjaan Pelapor</label>
					<input type="text" class="form-control" id="pekerjaan_pelapor">
				</div>
				<div class="form-group col-md-4">
					<label for="alamat_pelapor">Alamat Pelapor</label>
					<input type="text" class="form-control" id="alamat_pelapor">
				</div>
				<div class="form-group col-md-4">
					<label for="ttl_pelapor">TTL Pelapor</label>
					<input type="text" class="form-control" id="ttl_pelapor">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="nik_saksi1">NIK Saksi 1</label>
					<input type="text" class="form-control" id="nik_saksi1">
				</div>
				<div class="form-group col-md-6">
					<label for="nama_saksi1">Nama Saksi 1</label>
					<input type="text" class="form-control" id="nama_saksi1">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="alamat_saksi1">Alamat Saksi 1</label>
					<input type="text" class="form-control" id="alamat_saksi1">
				</div>
				<div class="form-group col-md-4">
					<label for="pekerjaan_saksi1">Pekerjaan Saksi 1</label>
					<input type="text" class="form-control" id="pekerjaan_saksi1">
				</div>
				<div class="form-group col-md-4">
					<label for="ttl_saksi1">TTL Saksi 1</label>
					<input type="text" class="form-control" id="ttl_saksi1">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="nik_saksi2">NIK Saksi 2</label>
					<input type="text" class="form-control" id="nik_saksi2">
				</div>
				<div class="form-group col-md-6">
					<label for="nama_saksi2">Nama Saksi 2</label>
					<input type="text" class="form-control" id="nama_saksi2">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="alamat_saksi2">Alamat Saksi 2</label>
					<input type="text" class="form-control" id="alamat_saksi2">
				</div>
				<div class="form-group col-md-4">
					<label for="pekerjaan_saksi2">Pekerjaan Saksi 2</label>
					<input type="text" class="form-control" id="pekerjaan_saksi2">
				</div>
				<div class="form-group col-md-4">
					<label for="ttl_saksi2">TTL Saksi 2</label>
					<input type="text" class="form-control" id="ttl_saksi2">
				</div>
			</div>
			<div class="col-md-12 text-center">
				<button type="button" class="btn btn-success mt-4" id="next">Selanjutnya</button>
			</div>
		</div>
	</div>
	<div class="card col-md-12 col-lg-12" style="display:none;" id="f2">
		<div class="card-body">
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="nama_anak">Nama Anak</label>
					<input type="text" class="form-control" id="nama_anak">
				</div>
				<div class="form-group col-md-4">
					<label for="tempat_ttl">Tempat dan Tanggal Lahir</label>
					<input type="text" class="form-control" id="tempat_ttl">
				</div>
				<div class="form-group col-md-4">
					<label for="berati_bayi">Berat Bayi</label>
					<input type="text" class="form-control" id="berati_bayi">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="jekel_anak">Jenis Kelamin Anak</label>
					<select class="form-control" name="jekel_anak" id="jekel_anak">
						<option disabled selected>-Pilih-</option>
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="jenis_kelahiran">Jenis Kelahiran</label>
					<select class="form-control" name="jenis_kelahiran" id="jenis_kelahiran">
						<option disabled selected>-Pilih-</option>
						<option value="Normal">Normal</option>
						<option value="Operasi">Operasi</option>
					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="kelahiran_ke">Kelahiran Ke</label>
					<input type="number" class="form-control" id="kelahiran_ke">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="lahir_jam">Jam Lahir</label>
					<input type="time" class="form-control" id="lahir_jam">
				</div>
				<div class="form-group col-md-4">
					<label for="panjang_bayi">Panjang Bayi</label>
					<input type="number" class="form-control" id="panjang_bayi">
				</div>
				<div class="form-group col-md-4">
					<label for="penolong_kelahiran">Penolong Kelahiran</label>
					<input type="text" class="form-control" id="penolong_kelahiran">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="tempat_dilahirkan">Tempat dilahirkan</label>
					<input type="text" class="form-control" id="tempat_dilahirkan">
				</div>
				<div class="form-group col-md-6">
					<label for="tempat_kelahiran">Tempat Kelahiran</label>
					<input type="text" class="form-control" id="tempat_kelahiran">
				</div>
				<div class="row mx-auto ">
					<div class="col-md-12">
						<button type="button" class="btn btn-warning mt-4" id="save-add">Selesai</button>
						<button type="button" class="btn btn-warning mt-4" id="save-update">Selesai</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>


<div class="card col-md-12 col-lg-12" id="f3">
	<div class="card-body">
		<table id="menu-table" class="table text-center">
			<thead>
				<tr>
					<th width='150'>NIK Ayah</th>
					<th width='150'>Nama Ayah</th>
					<th>Nama Ibu</th>
					<th>TTL Anak</th>
					<th>Nama Anak</th>
					<th width="130">Act</th>
				</tr>
			</thead>
			<tbody id="dpu"></tbody>
		</table>
	</div>
</div>

<script>
	var base_url = "<?= base_url() ?>" ;
</script>
<!-- firebase app -->
<script src="<?php echo base_url();?>assets/js/app/skl.js"></script>
