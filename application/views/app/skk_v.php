<button type="button" class="btn btn-success mb-4 float-right" id="btn-modal">Tambah</button>
<button type="button" class="btn btn-warning mb-4 float-right" id="kembali" style="display:none;">kembali</button>
<form>
	<div class="card col-md-12 col-lg-12" style="display:none;" id="f1">
		<div class="card-body">
			<input type="hidden" id="id_data">
			<input type="hidden" id="Uid" value="<?= $this->session->userdata('id_user');?>">
			<input type="hidden" id="keperluan" value="Surat Keterangan Kelahiran">
			<input type="hidden" id="createdAt" value="<?= date('F d, Y h:i:s') ?>">
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
				<div class="form-group col-md-6">
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
					<label for="nik_jenazah">NIK Alm.</label>
					<input type="text" class="form-control" id="nik_jenazah">
				</div>
				<div class="form-group col-md-6">
					<label for="nama_jenazah">Nama Alm.</label>
					<input type="text" class="form-control" id="nama_jenazah">
				</div>
				<div class="form-group col-md-4">
					<label for="tl_mati">Tanggal Kematian Alm.</label>
					<input type="date" class="form-control" id="tl_mati">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="tl_jenazah">Tanggal Lahir Alm.</label>
					<input type="date" class="form-control" id="tl_jenazah">
				</div>
				<div class="form-group col-md-4">
					<label for="tempat_lahir_jenazah">Tempat Lahir Alm.</label>
					<input type="text" class="form-control" id="tempat_lahir_jenazah">
				</div>
				<div class="form-group col-md-4">
					<label for="jekel_jenazah">Jenis Kelamin Alm.</label>
					<select class="form-control" name="jekel_jenazah" id="jekel_jenazah">
						<option disabled selected>-Pilih-</option>
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="agama_jenazah">Agama Alm.</label>
					<input type="text" class="form-control" id="agama_jenazah">
				</div>
				<div class="form-group col-md-4">
					<label for="alamat_jenazah">Alamat Alm.</label>
					<input type="text" class="form-control" id="alamat_jenazah">
				</div>
				<div class="form-group col-md-4">
					<label for="anak_ke">Anak Ke</label>
					<input type="text" class="form-control" id="anak_ke">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="pekerjaan_jenazah">Pekerjaan Alm.</label>
					<input type="text" class="form-control" id="pekerjaan_jenazah">
				</div>
				<div class="form-group col-md-6">
					<label for="yang_menerangkan">Yang Menerangkan</label>
					<input type="text" class="form-control" id="yang_menerangkan">
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
					<th width='150'>NIK Alm.</th>
					<th width='150'>Nama Alm.</th>
					<th>TTL Alm.</th>
					<th>Jekel Alm.</th>
					<th width="130">Act</th>
				</tr>
			</thead>
			<tbody id="dpu"></tbody>
		</table>
	</div>
</div>

<script>
	var base_url = "<?= base_url() ?>";

</script>
<!-- firebase app -->
<script src="<?php echo base_url();?>assets/js/app/skk.js"></script>
