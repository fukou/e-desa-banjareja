$(document).ready(function () {
	var act = '';

	setBase();
	tampil();
	setInterval(function(){
		tampil() 
		console.log('get-new-data')
	}, 3000);
	$("#save-add").css('display', 'none');
	$("#save-update").css('display', 'none');
	$("#btn-modal").click(function () {
		act = 'add';
		$("#act").html('Tambah');
		$("form")[0].reset();

		$("#save-add").css('display', 'block');
		$("#save-update").css('display', 'none');
		$("#modal-tambah").modal('show');
	})
	$("#cari").click(function () {
		$("#uid").val('');
		$("#nama").val('Data tidak ditemukan!');
		var id = $("#nik").val()
		data_ktp(id);
	})
	$("#save-add").click(function () {
		if ($("#nama").val() == 'Data tidak ditemukan!' || $("#nama").val() == ''){
			swal("Maaf!", "Pilih data Kependudukan terlebih dahulu", "error");
		}else{
			act = 'add';
			var id = '';
			add(id, act);
		}
	})
	$("#save-update").click(function () {
		act = 'update';
		var id = $("#id_data").val();
		add(id, act);
	})

	$("tbody#dpu").on("click", "#delete", function () {
		var id = $(this).data("id");
		delete_data(id);
	});

	$("tbody#dpu").on("click", "#update", function () {
		act = 'update';
		$("#act").text('Edit');
		var id = $(this).data("id");
		$("#save-add").css('display', 'none');
		$("#save-update").css('display', 'block');
		fetch_data(id);
		$("#id_data").val(id);
		$("#modal-tambah").modal('show');
	});
	$("tbody#dpu").on("click", "#print", function () {
		var id = $(this).data("id");
		window.open(base_url+'data_perubahan_penduduk/print/'+id, '_blank');
	});
	$("tbody#dpu").on("click", "#setuju", function () {
		var id = $(this).data("id");
		swal({
				title: "Setujui Data?",
				text: "Data akan disetujui!",
				type: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					setuju(id)
				} else {
					swal("Anda membatalkannya!");
				}
			});
	});
})
function setuju(id) {
	var db = firebase.firestore();
	db.collection("Data Perubahan Penduduk").doc(id).update({
			'status': 'Disetujui'
		})
		.then(function () {
			console.log("Document successfully updated!");
			tampil();
			swal("Success!", "Data telah Disetujui!", "success");
		})
		.catch(function (error) {
			console.error("Error writing document: ", error);
		});
}
function data_ktp(id) {
	var db = firebase.firestore();

	db.collection("Data Pengajuan Umum").where("Nomor KTP", "==", id)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            if (doc.exists) {
				dt.push(doc.data());
				console.log(dt)
				for (i = 0; i < dt.length; i++) {
					$("#uid").val(doc.id);
					$("#nama").val(dt[i]['Nama ']);
					$("#nik").val(dt[i]['Nomor KTP']);
				}
			} else {
				console.log(dt)
				console.log("No such document!");
				$("#uid").val('');
				$("#nama").val('');
				$("#nik").val('');
				alert('Data Tidak ditemukan!');
			}
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
}


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
					// $("#date_create").val(dt[i]['createdAt']);
					$("#ingin_dirubah").val(dt[i]['Data yang ingin dirubah']);
					$("#keperluan").val(dt[i]['Keperluan']);
					$("#nama").val(dt[i]['NamaLengkap ']);
					$("#data_dirubah").val(dt[i]['Perubahan Data']);
					// $("#uid").val(dt[i]['Uid']);
					$("#alamat").val(dt[i]['alamat']);
					$("#nik").val(dt[i]['nik']);
					$("#status").val(dt[i]['status']);
				}
			} else {
				console.log("No such document!");
			}
		}).catch(function (error) {
			console.log("Error getting document:", error);
		});
}

function delete_data(id) {
	swal({
			title: "Apakah kamu yakin?",
			text: "Data akan terhapus!",
			type: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				var db = firebase.firestore();
				db.collection("Data Perubahan Penduduk").doc(id).delete().then(function () {
					console.log("Document successfully deleted!");
					tampil();
					swal("Success!", "Data telah terhapus!", "success");
				}).catch(function (error) {
					console.error("Error removing document: ", error);
				});
			} else {
				swal("Anda membatalkannya!");
			}
		});
}

function add(id, act) {
	var db = firebase.firestore();

	var date_create = $("#date_create").val();
	var ingin_dirubah = $("#ingin_dirubah").val();
	var data_dirubah = $("#data_dirubah").val();
	var keperluan = $("#keperluan").val();
	var alamat = $("#alamat").val();
	var uid = $("#uid").val();
	var nama = $("#nama").val();
	var nik = $("#nik").val();
	var status = $("#status").val();
	var Uid = $("#Uid").val();
	var createdAt = $("#createdAt").val();
	if (act == 'add') {
		db.collection("Data Perubahan Penduduk").add({
				'createdAt': date_create,
				'Data yang ingin dirubah': ingin_dirubah,
				'Keperluan': keperluan,
				'NamaLengkap ': nama,
				'Perubahan Data': data_dirubah,
				'Uid': uid,
				'alamat': alamat,
				'Status': status,
				'Uid': Uid,
				'idPengajuan': 'tes',
				'createdAt': createdAt,
				'nik': nik
			})
			.then(function (doc) {
				var idPengajuan = doc.id;
				db.collection("Data Perubahan Penduduk").doc(idPengajuan).update({
					'idPengajuan': idPengajuan
				})
				console.log("Document successfully written!");
				tampil();
				swal("Success!", "Data telah tersimpan!", "success");
				$('#modal-tambah').modal('toggle');
			})
			.catch(function (error) {
				console.error("Error writing document: ", error);
			});
	} else if (act == 'update') {
		db.collection("Data Perubahan Penduduk").doc(id).update({
				'createdAt': date_create,
				'Data yang ingin dirubah': ingin_dirubah,
				'Keperluan': keperluan,
				'NamaLengkap ': nama,
				'Perubahan Data': data_dirubah,
				'Uid': Uid,
				'alamat': alamat,
				'status': status,
				'nik': nik
			})
			.then(function () {
				console.log("Document successfully updated!");
				tampil();
				swal("Success!", "Data telah terupdate!", "success");
				$('#modal-tambah').modal('toggle');
			})
			.catch(function (error) {
				console.error("Error writing document: ", error);
			});
	} else {
		console.log('error')
	}
}

function tampil() {
	dt = [];
	id = [];
	dataSet = new Array();
	x = 0;
	var db = firebase.firestore();
	db.collection("Data Perubahan Penduduk").get().then(function (querySnapshot) {
		querySnapshot.forEach(function (doc) {
			dataSet.push([doc.data()['nik'], doc.data()['NamaLengkap '], doc.data()['Keperluan'], doc.data()['Perubahan Data'], doc.id]);
			id.push(doc.id);
		});
		table_fetch();
	});
}

function table_fetch() {
	$('#menu-table').DataTable({
		destroy: true,
		data: dataSet,
		columns: [{
				title: "nik"
			},
			{
				title: "NamaLengkap "
			},
			{
				title: "Keperluan"
			},
			{
				title: "Perubahan Data"
			},
			{
				"render": function (data, type, full, meta) {
					return `<button data-id='` + data + `' class="btn-sm btn btn-danger text-white" style="cursor: pointer;" id="delete"><i
                    class="bx bxs-trash"></i></button>
                    <button data-id='` + data + `' class="btn-sm btn btn-warning text-white" style="cursor: pointer;" id="update"><i
                    class="bx bxs-pencil"></i></button>
					<button data-id='` + data + `' class="btn-sm btn btn-info text-white" style="cursor: pointer;" id="print"><i
                    class="bx bx-printer"></i></button>
					<button data-id='` + data + `' class="btn-sm btn btn-success text-white" style="cursor: pointer;" id="setuju"><i
                    class="bx bx-check"></i></button>`;
				}
			}
		]
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
