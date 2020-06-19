$(document).ready(function () {
    setBase();
    var url = window.location.pathname;
    var id = url.substring(url.lastIndexOf('/') + 1);
    fetch_data(id)
})

function fetch_data(id) {
	var db = firebase.firestore();
	db.collection("Surat Keterangan Kematian").doc(id)
		.get()
		.then(function (doc) {
			if (doc.exists) {
				var dt = [];
				console.log("document data:", doc.data());
				dt.push(doc.data());
				for (i = 0; i < dt.length; i++) {
					// $('#no_kk').val(dt[i]['Nomor Kepala Keluarga']);
					$('#nik_jenazah').html(dt[i]['NIK Jenazah']);
					$('#nama_jenazah').html(dt[i]['Nama Lengkap Jenazah']);
					$('#tl_jenazah').html(dt[i]['Tanggal Lahir Jenazah']);
					$('#tl_mati').html(dt[i]['Tanggal Kematian']);
					$('#tempat_lahir_jenazah').html(dt[i]['Tempat Lahir Jenazah']);
					$('#jekel_jenazah').html(dt[i]['Jenis Kelamin Jenazah']);
					$('#agama_jenazah').html(dt[i]['Agama Jenazah ']);
					$('#alamat_jenazah').html(dt[i]['Alamat Jenazah']);
					$('#anak_ke').html(dt[i]['Anak Ke ']);
					$('#pekerjaan_jenazah').html(dt[i]['Pekerjaan Jenazah']);
					$('#yang_menerangkan').html(dt[i]['Yang Menerangkan']);

					$('#alamat_ayah').html(dt[i]['Alamat Ayah']);
					$('#nik_ayah').html(dt[i]['NIK Ayah']);
					$('#nama_ayah').html(dt[i]['Nama Ayah']);
					$('#pekerjaan_ayah').html(dt[i]['Pekerjaan Ayah']);
					$('#ttl_ayah').html(dt[i]['TTL Ayah']);

					$('#alamat_ibu').html(dt[i]['Alamat Ibu']);
					$('#nik_ibu').html(dt[i]['NIK Ibu']);
					$('#nama_ibu').html(dt[i]['Nama Ibu']);
					$('#pekerjaan_ibu').html(dt[i]['Pekerjaan Ibu']);
					$('#ttl_ibu').html(dt[i]['TTL Ibu']);

					$('#alamat_pelapor').html(dt[i]['Alamat Pelapor']);
					$('#nik_pelapor').html(dt[i]['NIK Pelapor']);
					$('#pekerjaan_pelapor').html(dt[i]['Pekerjaan Pelapor']);
					$('#ttl_pelapor').html(dt[i]['TTL Pelapor']);
					$('#alamat_saksi1').html(dt[i]['Alamat Saksi1']);
					$('#nik_saksi1').html(dt[i]['NIK Saksi1']);
					$('#pekerjaan_saksi1').html(dt[i]['Pekerjaan Saksi1']);
					$('#ttl_saksi1').html(dt[i]['TTL Saksi1']);
					$('#alamat_saksi2').html(dt[i]['Alamat Saksi2']);
					$('#nik_saksi2').html(dt[i]['NIK Saksi2']);
					$('#pekerjaan_saksi2').html(dt[i]['Pekerjaan Saksi2']);
					$('#ttl_saksi2').html(dt[i]['TTL Saksi2']);
					$('#keperluan').html(dt[i]['Keperluan']);
					$('#date_create').html(dt[i]['CreatedAt']);
					$('#uid').html(dt[i]['Uid']);
					window.print();
				}
			} else {
				console.log("No such document!");
			}
		}).catch(function (error) {
			console.log("Error getting document:", error);
		});
}


function setBase() {
	var config = {
		apiKey: "AIzaSyA6axGtU1o-quqYT_vdb1UJhGo9Rt42GfQ",
		authDomain: "e-desa-a2af0.firebaseapp.com",
		databaseURL: "https://e-desa-a2af0.firebaseio.com",
		projectId: "e-desa-a2af0",
		storageBucket: "e-desa-a2af0.appspot.com",
		messagingSenderId: "289316377063",
		appId: "1:289316377063:web:8b03246bff16888b876d42"
	};
	firebase.initializeApp(config);
}
