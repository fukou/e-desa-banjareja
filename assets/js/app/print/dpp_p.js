$(document).ready(function () {
    setBase();
    var url = window.location.pathname;
    var id = url.substring(url.lastIndexOf('/') + 1);
    fetch_data(id)
})
function fetch_data(id) {
	var db = firebase.firestore();
	db.collection("Data Perubahan Penduduk").doc(id)
		.get()
		.then(function (doc) {
			if (doc.exists) {
				var dt = [];
				console.log("document data:", doc.data());
				dt.push(doc.data());
				for (i = 0; i < dt.length; i++) {
					$("#date_create").html(dt[i]['CreateAt']);
					$("#ingin_dirubah").html(dt[i]['Data yang ingin dirubah']);
					$("#keperluan").html(dt[i]['Keperluan']);
					$("#nama").html(dt[i]['NamaLengkap ']);
					$("#nm").html(dt[i]['NamaLengkap ']);
					$("#data_dirubah").html(dt[i]['Perubahan Data']);
					$("#uid").html(dt[i]['Uid']);
					$("#alamat").html(dt[i]['alamat']);
					$("#nik").html(dt[i]['nik']);
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
