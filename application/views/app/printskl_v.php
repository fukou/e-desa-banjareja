<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>A4</title>

	<!-- Normalize or reset CSS with your favorite library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

	<!-- Load paper.css for happy printing -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

	<!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-app.js"></script>

	<!-- Add Firebase products that you want to use -->
	<script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-firestore.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
	<!-- Set page size here: A5, A4 or A3 -->
	<!-- Set also "landscape" if you need -->
	<style>
		@page {
			size: A4
		}

	</style>
	<style>
		table,
		th,
		td {
			/* border: 1px solid black;
			border-collapse: collapse; */
		}
		tr.spaceUnder>td {
			/* padding-bottom: 1em; */
			font-size:12px;
		}
		.last table,
		th,
		td {
			/* border: 1px solid black;
			border-collapse: collapse; */
		}
	</style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->

<body>

	<!-- Each sheet element should have the class "sheet" -->
	<!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
	<section class="sheet" style="margin-top:10px;">
	<table style="margin:0 auto;">
		<table style="margin:0 30px 0 30px">
			<tr class="spaceUnder">
				<td>Pemerintah Desa/Kelurahan</td>
				<td>:</td>
				<td>__________________________</td>
			</tr>
			<tr class="spaceUnder">
				<td>Kecamatan</td>
				<td>:</td>
				<td>__________________________</td>
			</tr>
			<tr class="spaceUnder">
				<td>Kabupaten/Kota</td>
				<td>:</td>
				<td>__________________________</td>
			</tr>
			<tr class="spaceUnder">
				<td>Kode Wilayah</td>
				<td>:</td>
				<td>3305</td>
			</tr>
		</table>
	<div style="text-align:center; font-size:20px;"><b>Surat Keterangan Kelahiran</b></div>
		<table style="margin:0 30px 0 30px">
			<tr class="spaceUnder">
				<td>Nama Kepala Keluarga</td>
				<td>:</td>
				<td><span id="nama_kepala_keluarga"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Nomor Kartu Keluarga</td>
				<td>:</td>
				<td><span id="nik_ayah"></span></td>	
			</tr>
			<tr><td colspan="3"><b>Bayi/Anak</b></td></tr>
			<tr class="spaceUnder">
				<td>Nama</td>
				<td>:</td>
				<td><span id="nama_anak"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><span id="jekel_anak"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>Tempat dilahirkan</td>
				<td>:</td>
				<td><span id="tempat_dilahirkan"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>Tempat Kelahiran</td>
				<td>:</td>
				<td><span id="tempat_kelahiran"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>Hari dan Tanggal Lahir</td>
				<td>:</td>
				<td><span id="tempat_ttl"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>Pukul</td>
				<td>:</td>
				<td><span id="lahir_jam"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>Jenis Kelahiran</td>
				<td>:</td>
				<td><span id="jenis_kelahiran"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>Kelahiran Ke</td>
				<td>:</td>
				<td><span id="kelahiran_ke"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>Penolong Kelahiran</td>
				<td>:</td>
				<td><span id="penolong_kelahiran"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>Berat Bayi</td>
				<td>:</td>
				<td><span id="berati_bayi"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>Panjang Bayi</td>
				<td>:</td>
				<td><span id="panjang_bayi"></span></td>
			</tr>
			<!-- IBU -->
			<tr><td colspan="3"><b>IBU</b></td></tr>
			<tr class="spaceUnder">
				<td>NIK</td>
				<td>:</td>
				<td><span id="nik_ibu"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><span id="nama_ibu"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Tanggal Lahir/Umur</td>
				<td>:</td>
				<td><span id="ttl_ibu"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Pekerjaan</td>
				<td>:</td>
				<td><span id="pekerjaan_ibu"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Alamat</td>
				<td>:</td>
				<td><span id="alamat_ibu"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Kewarganegaraan</td>
				<td>:</td>
				<td><span id="kew_ibu"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Kebangsaan</td>
				<td>:</td>
				<td><span id="keb_ibu"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Tgl Pencatatan Perkawinan</td>
				<td>:</td>
				<td><span id="tgl_kawin"></span></td>	
			</tr>
			<!-- Ayah -->
			<tr><td colspan="3"><b>AYAH</b></td></tr>
			<tr class="spaceUnder">
				<td>NIK</td>
				<td>:</td>
				<td><span id="nik_ayah"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><span id="nama_ayah"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Tanggal Lahir/Umur</td>
				<td>:</td>
				<td><span id="ttl_ayah"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Pekerjaan</td>
				<td>:</td>
				<td><span id="pekerjaan_ayah"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Alamat</td>
				<td>:</td>
				<td><span id="alamat_ayah"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Kewarganegaraan</td>
				<td>:</td>
				<td><span id="kew_ayah"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Kebangsaan</td>
				<td>:</td>
				<td><span id="keb_ayah"></span></td>	
			</tr>
			<!-- Pelapor -->
			<tr><td colspan="3"><b>PELAPOR</b></td></tr>
			<tr class="spaceUnder">
				<td>NIK</td>
				<td>:</td>
				<td><span id="nik_pelapor"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><span id="nama_pelapor"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Umur/Tgl Lahir</td>
				<td>:</td>
				<td><span id="ttl_pelapor"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><span id="provinsi"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Pekerjaan</td>
				<td>:</td>
				<td><span id="pekerjaan_pelapor"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Alamat</td>
				<td>:</td>
				<td><span id="alamat_pelapor"></span></td>	
			</tr>
			<!-- SAKSI I -->
			<tr><td colspan="3"><b>SAKSI I</b></td></tr>
			<tr class="spaceUnder">
				<td>NIK</td>
				<td>:</td>
				<td><span id="nik_saksi1"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><span id="nama_saksi1"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Umur?Tgl Lahir</td>
				<td>:</td>
				<td><span id="ttl_saksi1"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><span id="jekel_saksi1"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Pekerjaan</td>
				<td>:</td>
				<td><span id="pekerjaan_saksi1"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Alamat</td>
				<td>:</td>
				<td><span id="alamat_saksi1"></span></td>	
			</tr>
			<!-- SAKSI II -->
			<tr><td colspan="3"><b>SAKSI II</b></td></tr>
			<tr class="spaceUnder">
				<td>NIK</td>
				<td>:</td>
				<td><span id="nik_saksi2"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><span id="nama_saksi2"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Umur/Tgl Lahir</td>
				<td>:</td>
				<td><span id="ttl_saksi2"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><span id="jekel_saksi2"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Pekerjaan</td>
				<td>:</td>
				<td><span id="pekerjaan_saksi2"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Alamat</td>
				<td>:</td>
				<td><span id="alamat_saksi2"></span></td>	
			</tr>
		</table>
		<table style="margin:0 30px 0 30px" width="92%">
			<tr class="spaceUnder">
				<td align="center">Mengetahui : <br> Kepala Desa/Lurah</td>
				<td align="center">Pelapor <br> <span id="pl"></span></td>
			</tr>		
			<tr class="spaceUnder">
				<td align="center" height="50">&nbsp;</td>
				<td align="center" height="50">&nbsp;</td>
			</tr>		
			<tr class="spaceUnder">
				<td align="center">(____ ____________)</td>
				<td align="center">(____ ____________)</td>
			</tr>		
		</table>
	</section>
	<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GC Exl3Og8ifwB6" crossorigin="anonymous">
	</script> -->
	<script src="<?php echo base_url();?>assets/js/app/print/skl_p.js"></script>
</body>

</html>
