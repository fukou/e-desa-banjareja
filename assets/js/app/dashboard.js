$(document).ready(function () {
	setBase();
	setInterval(function(){
		tampil("dpu","Data Pengajuan Umum");
		tampil("dpk","Data Permohonan KTP");
		tampil("dpkk","Data Permohonan KK");
		tampil("dpp","Data Perubahan Penduduk");
		tampil("skl","Surat Keterangan Kelahiran");
		tampil("skk","Surat Keterangan Kematian");
		tampil("pengaduan","Pengaduan");
		console.log('get-new-data')
	}, 3000);
})

function tampil(nama,data_base) {
	var db = firebase.firestore();
	db.collection(data_base).get().then(function (querySnapshot) {
		var dt = [];
		querySnapshot.forEach(function (doc) {
			// console.log("document data:", doc.data());
			dt.push(doc.data());
		});
		console.log(dt.length);
		$("#"+nama).text(dt.length);
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
