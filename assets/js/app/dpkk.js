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
		window.open(base_url+'data_permohonan_kk/print/'+id, '_blank');
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
	db.collection("Data Permohonan KK").doc(id).update({
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
					$("#kabupaten").val(dt[i]['Pemerintah Kabupaten/Kota']);
					$("#provinsi").val(dt[i]['Pemerintah Provinsi']);
					$("#kecamatan").val(dt[i]['Kecamatan']);
					$("#kelurahan").val(dt[i]['Kelurahan / Desa']);
					$("#alamat_pemohon").val(dt[i]['Alamat Pemohon']);
					$("#alasan_pemohon").val(dt[i]['Alasan Permohonan']);
					$("#nik_pemohon").val(dt[i]['NIK Pemohon']);
					$("#nama_pemohon").val(dt[i]['Nama Lengkap Pemohon ']);
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
				db.collection("Data Permohonan KK").doc(id).delete().then(function () {
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

	// var nomor_ktp = $("#nomor_ktp").val();
	var alamat_pemohon = $("#alamat_pemohon").val();
	var alasan_pemohon = $("#alasan_pemohon").val();
	var nik_pemohon = $("#nik_pemohon").val();
	var nama_pemohon = $("#nama_pemohon").val();
	var kabupaten = $("#kabupaten").val();
	var provinsi = $("#provinsi").val();
	var kecamatan = $("#kecamatan").val();
	var kelurahan = $("#kelurahan").val();
	var status = $("#status").val();
	var Uid = $("#Uid").val();
	var createdAt = $("#createdAt").val();

	if (act == 'add') {
		db.collection("Data Permohonan KK").add({
				'Pemerintah Kabupaten/Kota': kabupaten,
				'Pemerintah Provinsi': provinsi,
				'Kecamatan': kecamatan,
				'Kelurahan / Desa': kelurahan,
				'Alamat Pemohon': alamat_pemohon,
				'Alasan Permohonan': alasan_pemohon,
				'NIK Pemohon': nik_pemohon,
				'status': status,
				'Uid': Uid,
				'idPengajuan': 'tes',
				'createdAt': createdAt,
				'Nama Lengkap Pemohon ': nama_pemohon
			})
			.then(function (doc) {
				
				var idPengajuan = doc.id;
				db.collection("Data Permohonan KK").doc(idPengajuan).update({
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
		db.collection("Data Permohonan KK").doc(id).update({
				'Pemerintah Kabupaten/Kota': kabupaten,
				'Pemerintah Provinsi': provinsi,
				'Kecamatan': kecamatan,
				'Kelurahan / Desa': kelurahan,
				'Alamat Pemohon': alamat_pemohon,
				'Alasan Permohonan': alasan_pemohon,
				'NIK Pemohon': nik_pemohon,
				'status': status,
				'Uid': Uid,
				'Nama Lengkap Pemohon ': nama_pemohon
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
	db.collection("Data Permohonan KK").get().then(function (querySnapshot) {
		querySnapshot.forEach(function (doc) {
			dataSet.push([doc.data()['NIK Pemohon'], doc.data()['Nama Lengkap Pemohon '], doc.data()['Alasan Permohonan'], doc.data()['Alamat Pemohon'], doc.id]);
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
				title: "NIK"
			},
			{
				title: "Nama Lengkap "
			},
			{
				title: "Alasan"
			},
			{
				title: "Alamat"
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
