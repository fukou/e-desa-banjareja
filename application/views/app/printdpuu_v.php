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
				<td colspan="3" width="500">
					<h2 align="center">PEMERINTAH KABUPATEN KEBUMEN <br> KECAMATAN KUWARASAN DESA BANJAREJA</h2>
				</td>
			</tr>
			<tr>
				<td align="center">Alamat : Jalan meles Desa Banjareja, Kecamatan Kuwarasan Telp (0287) 472053</td>
			</tr>
			<tr>
				<td colspan="4">
				</td>
			</tr>
		</table>
		<hr>
		<table style="margin:0 auto;">
			<tr width="200" align="center">
				<td><b> Keterangan</b></td>
			</tr>
			<tr width="200">
				<td><b>SURAT ____________</b> </td>
			</tr>
			<tr width="200">
				<td align="center"><b><u>PENGANTAR</u></b> </td>
			</tr>
			<tr width="200">
				<td>Nomor : ........................</td>
			</tr>
		</table>
	
		<table style="margin:30px 30px 0 30px">
			<tr>
				<td height="50" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini menerangkan bahwa</td>
			</tr>
			<tr class="spaceUnder">
				<td>Nama</td>
				<td>:</td>
				<td><span id="nama_ktp"></span></td>	
			</tr>
			<tr class="spaceUnder">
				<td>Tempat & tanggal lahir</td>
				<td>:</td>
				<td><span id="ttl"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>Kewarganegaraan dan agama</td>
				<td>:</td>
				<td><span id="kew_agama"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>Pekerjaan</td>
				<td>:</td>
				<td><span id="Pekerjaan"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>Tempat tinggal</td>
				<td>:</td>
				<td><span id="tempat_tinggal"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>Surat Bukti Diri</td>
				<td>:</td>
				<td><span id="surat_bukti"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>Keperluan</td>
				<td>:</td>
				<td><span id="keperluan"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>Berlaku mulai</td>
				<td>:</td>
				<td><span id="berlaku_mulai"></span></td>
			</tr>
			<tr class="spaceUnder">
				<td>Keterangan lain-lain</td>
				<td>:</td>
				<td><span id="lain_lain"></span></td>
			</tr>
		</table>
		<table style="margin:30px 30px 0 30px" width="92%">
			<tr>
				<td align="center">Pemegang Surat</td>
				<td align="center">Mengetahui <br> Camat Kewarasan</td>
				<td align="center">Kepala Desa Banjareja</td>
			</tr>		
			<tr>
				<td align="center" height="100">&nbsp;</td>
				<td align="center">&nbsp;</td>
				<td align="center">&nbsp;</td>
			</tr>		
			<tr>
				<td align="center"><span id="nm_sy">(____ ____________)</span></td>
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
	<script src="<?php echo base_url();?>assets/js/app/print/dpuu_p.js"></script>
</body>

</html>
