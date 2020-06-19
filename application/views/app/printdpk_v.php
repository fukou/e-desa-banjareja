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
				<td width="450" align="center">FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP) WARGA NEGARA INDONESIA</td>
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
				<td><b>FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP) WARGA NEGARA INDONESIA</b></td>
			</tr>
		</table>
	
		<table style="margin:30px 30px 0 30px">
			<!-- <tr class="spaceUnder" colspan="3"><td><b>DATA DAERAH ASAL</td></b></tr> -->
			<tr class="spaceUnder">
				<td>PEMERINTAH PROPINSI</td>
				<td>:</td>
				<td><span id="provinsi"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>PEMERINTAH KABUPATEN/KOTA</td>
				<td>:</td>
				<td><span id="kabupaten"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>KECAMATAN</td>
				<td>:</td>
				<td><span id="kecamatan"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>KELURAHAN/DESA</td>
				<td>:</td>
				<td><span id="kelurahan"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>PERMOHONAN/KTP</td>
				<td>:</td>
				<td><span id="permohonan"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>NAMA LENGKAP</td>
				<td>:</td>
				<td><span id="nama_lengkap"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>NO KK</td>
				<td>:</td>
				<td><span id="nomor_kk"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>NIK</td>
				<td>:</td>
				<td><span id="nik"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>ALAMAT</td>
				<td>:</td>
				<td><span id="alamat"></span></td>
			</tr>
		</table>
		<table style="margin:0 auto; margin-top:30px;" border='1'>
			<tr>
				<td  align='center' width="150">Pas foto (2x3)</td>
				<td  align='center' width="150">Cap Jempol/TTD</td>
				<td  align='center' width="160">Specimen Tanda tangan</td>
			</tr>			
			<tr>
				<td  align='center' width="150" height="100"></td>
				<td  align='center' width="150" height="100"></td>
				<td  align='center' width="150" height="100"></td>
			</tr>			
		</table>
		<table style="margin:30px 30px 0 30px" width="92%">
			<tr>
				<td align="center">Pemohon</td>
				<td align="center">Camat Kewarasan</td>
				<td align="center">An. Kepala Desa Banjareja <br> Sekdes</td>
			</tr>		
			<tr>
				<td align="center" height="100">&nbsp;</td>
				<td align="center">&nbsp;</td>
				<td align="center">&nbsp;</td>
			</tr>		
			<tr>
				<td align="center"><span id="nm_sy"></span></td>
				<td align="center">(____ ____________)</td>
				<td align="center">NOPITA PRANITA</td>
			</tr>		
		</table>
	</section>
	<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GC Exl3Og8ifwB6" crossorigin="anonymous">
	</script> -->
	<script src="<?php echo base_url();?>assets/js/app/print/dpk_p.js"></script>
</body>

</html>
