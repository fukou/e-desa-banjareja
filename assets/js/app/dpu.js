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
		$("#form1")[0].reset();
		$("#save-add").css('display', 'block');
		$("#save-update").css('display', 'none');
		$("#modal-tambah").modal('show');
	})
	$("#save-add").click(function () {
		act = 'add';
		var id = '';
		add(id, act);
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
		window.open(base_url+'data_pindah_wni/print/'+id, '_blank');
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
	db.collection("Data Pindah WNI").doc(id).update({
			'Status': 'Disetujui'
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
					$("#nomor_kk").val(dt[i]['Nomor KK']);
					$("#nama_kepala").val(dt[i]['Nama Kepala Keluarga']);
					$("#nomor_ktp").val(dt[i]['NIK Pemohon']);
					$("#nama_lengkap").val(dt[i]['Nama Lengkap Pemohon']);
					$("#alamat_tujuan_pindah").val(dt[i]['Alamat Tujuan Pindah']);
					// $("#alamat_pindah").val(dt[i]['Alamat Pindah']);
					$("#alamat").val(dt[i]['Alamat']);
					$("#createdAt").val(dt[i]['createdAt']);
					// $("#st_kk1").val(dt[i]['Status KK Bagi Yang tidak Pindah']);
					$("#st_kk2").val(dt[i]['Status KK Bagi yang pindah']);
					// $("#tempat_tinggal").val(dt[i]['Tempat Tinggal']);
					// $("#uid").val('Uid');
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
				db.collection("Data Pindah WNI").doc(id).delete().then(function () {
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

	var nomor_kk = $("#nomor_kk").val();
	var nama_kepala = $("#nama_kepala").val();
	var nomor_ktp = $("#nomor_ktp").val();
	var nama_lengkap = $("#nama_lengkap").val();
	var alamat_tujuan_pindah = $("#alamat_tujuan_pindah").val();
	// // var alamat_pindah = $("#alamat_pindah").val();
	var alamat = $("#alamat").val();
	var createdAt = $("#createdAt").val();
	// // var st_kk1 = $("#st_kk1").val();
	var st_kk2 = $("#st_kk2").val();
	// // var tempat_tinggal = $("#tempat_tinggal").val();
	var status = $("#status").val();

	var Uid = $("#Uid").val();
	var createdAt = $("#createdAt").val();
	if (act == 'add') {
		db.collection("Data Pindah WNI").add({
				'Nomor KK': nomor_kk,
				'Nama Kepala Keluarga': nama_kepala,
				'NIK Pemohon': nomor_ktp,
				'Nama Lengkap Pemohon': nama_lengkap,
				'Alamat Tujuan Pindah': alamat_tujuan_pindah,
				// 'Alamat Pindah': alamat_pindah,
				'Alamat': alamat,
				'createdAt': createdAt,
				'Status': status,
				'Uid': Uid,
				'idPengajuan': 'tes',
				// 'Status KK Bagi Yang tidak Pindah': st_kk1,
				'Status KK Bagi yang pindah': st_kk2
				// 'Tempat Tinggal': tempat_tinggal
				// 'Uid': uid
			})
			.then(function (doc) {
				var idPengajuan = doc.id;
				db.collection("Data Pindah WNI").doc(idPengajuan).update({
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
		db.collection("Data Pindah WNI").doc(id).update({
				'Nomor KK': nomor_kk,
				'Nama Kepala Keluarga': nama_kepala,
				'NIK Pemohon': nomor_ktp,
				'Nama Lengkap Pemohon': nama_lengkap,
				'Alamat Tujuan Pindah': alamat_tujuan_pindah,
				// 'Alamat Pindah': alamat_pindah,
				'Alamat': alamat,
				'createdAt': createdAt,
				'Status': status,
				'Uid': Uid,
				// 'Status KK Bagi Yang tidak Pindah': st_kk1,
				'Status KK Bagi yang pindah': st_kk2
				// 'Tempat Tinggal': tempat_tinggal
				// 'Uid': uid
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
	db.collection("Data Pindah WNI").get().then(function (querySnapshot) {
		querySnapshot.forEach(function (doc) {
			dataSet.push([doc.data()['Nomor KK'], doc.data()['NIK Pemohon'], doc.data()['Nama Lengkap Pemohon'], doc.data()['Alamat Tujuan Pindah'], doc.id]);
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
				title: "Nomor KK"
			},
			{
				title: "NIK Pemohon"
			},
			{
				title: "Nama Pemohon"
			},
			{
				title: "Alamat Tujuan"
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
