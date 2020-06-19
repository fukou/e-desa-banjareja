$(document).ready(function () {
    setBase();
    var url = window.location.pathname;
    var id = url.substring(url.lastIndexOf('/') + 1);
    fetch_data(id)
})

function fetch_data(id) {
	var db = firebase.firestore();
	db.collection("Data Pengajuan Umum").doc(id)
		.get()
		.then(function (doc) {
			if (doc.exists) {
				var dt = [];
				console.log("document data:", doc.data());
				dt.push(doc.data());
				for (i = 0; i < dt.length; i++) {
					$("#alamat_tujuan_pindah").html(dt[i]['Alamat Tujuan Pindah']);
					$("#nomor_kk").html(dt[i]['Nomor KK']);
					$("#nomor_ktp").html(dt[i]['Nomor KTP']);
					$("#nama_ktp").html(dt[i]['Nama ']);
					$("#ttl").html(dt[i]['Tempat Tanggal Lahir']);
					$("#tempat_tinggal").html(dt[i]['Tempat Tinggal']);
					$("#berlaku_mulai").html(dt[i]['Berlaku mulai']);
					$("#keperluan").html(dt[i]['Keperluan']);
					$("#kew_agama").html(dt[i]['Kewarganegaraan dan Agama']);
					$("#lain_lain").html(dt[i]['Lain - Lain']);
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
