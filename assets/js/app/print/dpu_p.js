$(document).ready(function () {
    setBase();
    var url = window.location.pathname;
    var id = url.substring(url.lastIndexOf('/') + 1);
    fetch_data(id)
})

function fetch_data(id) {
	var db = firebase.firestore();
	db.collection("Data Pindah WNI").doc(id)
		.get()
		.then(function (doc) {
			if (doc.exists) {
				var dt = [];
				console.log("document data:", doc.data());
				dt.push(doc.data());
				for (i = 0; i < dt.length; i++) {
                    console.log(dt)
					$("#nomor_kk").html(dt[i]['Nomor KK']);
					$("#nama_kepala").html(dt[i]['Nama Kepala Keluarga']);
					$("#nomor_ktp").html(dt[i]['NIK Pemohon']);
					$("#nama_lengkap").html(dt[i]['Nama Lengkap Pemohon']);
					$("#alamat_tujuan_pindah").html(dt[i]['Alamat Tujuan Pindah']);
					$("#alamat_pindah").html(dt[i]['Alamat Pindah']);
					$("#alamat").html(dt[i]['Alamat']);
					$("#date_create").html(dt[i]['CreatAt']);
					$("#st_kk1").html(dt[i]['Status KK Bagi Yang tidak Pindah']);
					$("#st_kk2").html(dt[i]['Status KK Bagi yang pindah']);
                    $("#tempat_tinggal").html(dt[i]['Tempat Tinggal']);
                    window.print();
					// $("#uid").val('Uid');
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
