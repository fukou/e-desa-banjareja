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
			padding-bottom: 1em;
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
	<section class="sheet" style="margin-top:30px;">
	<table style="margin:0 auto;">
			<tr >
				<td rowspan='4'><img src="<?= base_url()?>assets/img/kebumen.png" width="100" alt="" style="margin-right:30px;"></td>
			</tr>
			<tr>
				<td colspan="3">
					<h2 align="center">PEMERINTAH KABUPATEN KEBUMEN</h2>
				</td>
			</tr>
			<tr>
				<td width="450" align="center">SURAT PERNYATAAN PERUBAHAN DATA KEPENDUDUKAN WARGA NEGARA INDONESIA</td>
			</tr>
			<!-- <tr>
				<td>DESA/KEL</td>
				<td>:</td>
				<td>____________________________________</td>
			</tr> -->
			<tr>
				<td colspan="4">
					<hr>
				</td>
			</tr>
		</table>
		<table style="margin:0 auto;">
			<tr>
				<td><b>SURAT PERNYATAAN PERUBAHAN DATA KEPENDUDUKAN WARGA NEGARA INDONESIA</b></td>
			</tr>
		</table>
	
		<table style="margin:30px 30px 0 30px">
			<!-- <tr class="spaceUnder" colspan="3"><td><b>DATA DAERAH ASAL</td></b></tr> -->
			<tr class="spaceUnder">
				<td>Nama lengkap</td>
				<td>:</td>
				<td><span id="nama"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>NIK</td>
				<td>:</td>
				<td><span id="nik"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>Alamat Rumah</td>
				<td>:</td>
				<td><span id="alamat"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>Keperluan</td>
				<td>:</td>
				<td><span id="keperluan"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>Data yang ingin dirubah</td>
				<td>:</td>
				<td><span id="ingin_dirubah"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>Dirubah menjadi</td>
				<td>:</td>
				<td><span id="data_dirubah"></span></td>
			</tr>
		</table>
		<table style="margin:30px 30px 0 30px">
			<!-- <tr class="spaceUnder" colspan="3"><td><b>DATA DAERAH ASAL</td></b></tr> -->
			<tr class="spaceUnder">
				<td>Terlampir kami sampaikan copy dari berkas-berkas yang terkait dengan perubahan-perubahan tersebut.</td>	
			</tr>
			<tr class="spaceUnder" align="justify">
				<td><p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat pernyataan ini saya buat dengan sebenar-benarnya, apabila dalam keterangan yang saya berikan terdapat hal-hal yang tidak berdasarkan keadaan yang sebenarnya, saya bersedia dikenakan sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.</p></td>	
			</tr>
		</table>	
		<table style="margin:30px 30px 0 30px;" width="92%">
			<tr>
				<td align="center"><span id="nm"></span> <br> Yang membuat pernyataan</td>
			</tr>		
			<tr>
				<td align="center" height="100"><i>Materai 6000</i></td>
			</tr>		
			<tr>
				<td align="center">(____ ____________)</td>
			</tr>		
		</table>
		<table style="margin:30px 30px 0 30px">
			<!-- <tr class="spaceUnder" colspan="3"><td><b>DATA DAERAH ASAL</td></b></tr> -->
			<tr class="spaceUnder">
				<td><u>Keterangan :</u></td>	
			</tr>
			<tr class="spaceUnder" align="justify">
				<td>*) Perubahan Lainnya ini, juga dapat digunakan untuk merubah data kependudukan yang diakibatkan adanya kesalahan pada waktu pengisian formulir Biodata maupun kesalahan pada saat peng-entry-an biodata penduduk dimaksud.</td>	
			</tr>
		</table>
	</section>
	<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GC Exl3Og8ifwB6" crossorigin="anonymous">
	</script> -->
	<script src="<?php echo base_url();?>assets/js/app/print/dpp_p.js"></script>
</body>

</html>
