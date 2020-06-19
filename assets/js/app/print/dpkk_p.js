$(document).ready(function () {
    setBase();
    var url = window.location.pathname;
    var id = url.substring(url.lastIndexOf('/') + 1);
    fetch_data(id)
})

function fetch_data(id) {
	var db = firebase.firestore();
	db.collection("Data Permohonan KK").doc(id)
		.get()
		.then(function (doc) {
			if (doc.exists) {
				var dt = [];
				console.log("document data:", doc.data());
				dt.push(doc.data());
				for (i = 0; i < dt.length; i++) {
					$("#kabupaten").html(dt[i]['Pemerintah Kabupaten/Kota']);
					$("#provinsi").html(dt[i]['Pemerintah Provinsi']);
					$("#kecamatan").html(dt[i]['Kecamatan']);
					$("#kelurahan").html(dt[i]['Kelurahan / Desa']);
					$("#alamat_pemohon").html(dt[i]['Alamat Pemohon']);
					$("#alasan_pemohon").html(dt[i]['Alasan Permohonan']);
					$("#nik_pemohon").html(dt[i]['NIK Pemohon']);
					$("#nama_pemohon").html(dt[i]['Nama Lengkap Pemohon ']);
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
