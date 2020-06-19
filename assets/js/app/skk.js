$(document).ready(function () {
	var act = '';

	setBase();
	tampil();
	setInterval(function(){
		tampil() 
		console.log('get-new-data')
	}, 3000);
	// $("#f2").css("display", "block");

	$("#save-add").css('display', 'none');
	$("#save-update").css('display', 'none');
	$("#btn-modal").click(function () {
		act = 'add';
		$("#act").html('Tambah');
		$("form")[0].reset();
		$("#f1").fadeIn();
		$("#f2").css("display", "none");
		$("#f3").css("display", "none");
		$("#btn-modal").css("display", "none");
		$("#kembali").css("display", "block");
		$("#save-add").css('display', 'block');
		$("#save-update").css('display', 'none');
	})
	$("#next").click(function () {
		if ($("#nama_ayah").val() == 'Data tidak ditemukan!' || $("#nama_ayah").val() == '') {
			swal("Maaf!", "Pastikan NIK sudah dipilih!", "error");
		} else {
			$("#f2").fadeIn();
			$("#f1").css("display", "none");
		}
	})

	$("#kembali").click(function () {
		$("#f1").css("display", "none");
		$("#f2").css("display", "none");
		$("#f3").fadeIn();
		$("#btn-modal").css("display", "block");
		$("#kembali").css("display", "none");
	})

	$("#cari_ayah").click(function () {
		var field = 'ayah'
		$("#Uid").val('');
		$("#nama_" + field).val('Data tidak ditemukan!');
		var id = $("#nik_" + field).val()
		data_ktp(id, field);

	})
	$("#cari_ibu").click(function () {
		var field = 'ibu'
		$("#Uid").val('');
		$("#nama_" + field).val('Data tidak ditemukan!');
		var id = $("#nik_" + field).val()
		data_ktp(id, field);
	})

	$("#cari_pelapor").click(function () {
		var field = 'pelapor'
		$("#Uid").val('');
		$("#nama_" + field).val('Data tidak ditemukan!');
		var id = $("#nik_" + field).val()
		data_ktp(id, field);
	})

	$("#cari_saksi1").click(function () {
		var field = 'saksi1'
		$("#Uid").val('');
		$("#nama_" + field).val('Data tidak ditemukan!');
		var id = $("#nik_" + field).val()
		data_ktp(id, field);
	})

	$("#cari_saksi2").click(function () {
		var field = 'saksi2'
		$("#Uid").val('');
		$("#nama_" + field).val('Data tidak ditemukan!');
		var id = $("#nik_" + field).val()
		data_ktp(id, field);
	})

	$("#cari_jenazah").click(function () {
		var field = 'jenazah'
		$("#Uid").val('');
		$("#nama_" + field).val('Data tidak ditemukan!');
		var id = $("#nik_" + field).val()
		data_ktp(id, field);
	})

	$("#save-add").click(function () {
		if ($("#nama_anak").val() == 'Data tidak ditemukan!' || $("#nama_anak").val() == '') {
			swal("Maaf!", "Pastikan data tidak kosong!", "error");
		} else {
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

		$("#f1").fadeIn();
		$("#f2").css("display", "none");
		$("#f3").css("display", "none");

		$("#btn-modal").css("display", "none");
		$("#kembali").css("display", "block");
	});

	$("tbody#dpu").on("click", "#print", function () {
		var id = $(this).data("id");
		window.open(base_url+'surat_keterangan_kematian/print/'+id, '_blank');
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
	db.collection("Surat Keterangan Kematian").doc(id).update({
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
function data_ktp(id, field) {
	var db = firebase.firestore();

	db.collection("Data Pengajuan Umum").where("Nomor KTP", "==", id)
		.get()
		.then(function (querySnapshot) {
			querySnapshot.forEach(function (doc) {
				console.log(doc.data());
				if (doc.exists) {
					dt.push(doc.data());
					console.log(dt)
					for (i = 0; i < dt.length; i++) {
						$("#Uid").val(doc.id);
						$("#nama_" + field).val(dt[i]['Nama ']);
						$("#nik_" + field).val(dt[i]['Nomor KTP']);
					}
				} else {
					console.log(dt)
					console.log("No such document!");
					$("#Uid").val('');
					$("#nama_" + field).val('');
					$("#nik_" + field).val('');
					alert('Data Tidak ditemukan!');
				}
			});
		})
		.catch(function (error) {
			console.log("Error getting documents: ", error);
		});
}

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
					$('#nik_jenazah').val(dt[i]['NIK Jenazah']);
					$('#nama_jenazah').val(dt[i]['Nama Lengkap Jenazah']);
					$('#tl_jenazah').val(dt[i]['Tanggal Lahir Jenazah']);
					$('#tl_mati').val(dt[i]['Tanggal Kematian']);
					$('#tempat_lahir_jenazah').val(dt[i]['Tempat Lahir Jenazah']);
					$('#jekel_jenazah').val(dt[i]['Jenis Kelamin Jenazah']);
					$('#agama_jenazah').val(dt[i]['Agama Jenazah ']);
					$('#alamat_jenazah').val(dt[i]['Alamat Jenazah']);
					$('#anak_ke').val(dt[i]['Anak Ke ']);
					$('#pekerjaan_jenazah').val(dt[i]['Pekerjaan Jenazah']);
					$('#yang_menerangkan').val(dt[i]['Yang Menerangkan']);
					$('#alamat_ayah').val(dt[i]['Alamat Ayah']);
					$('#nik_ayah').val(dt[i]['NIK Ayah']);
					$('#nama_ayah').val(dt[i]['Nama Ayah']);
					$('#pekerjaan_ayah').val(dt[i]['Pekerjaan Ayah']);
					$('#ttl_ayah').val(dt[i]['TTL Ayah']);
					$('#alamat_ibu').val(dt[i]['Alamat Ibu']);
					$('#nik_ibu').val(dt[i]['NIK Ibu']);
					$('#nama_ibu').val(dt[i]['Nama Ibu']);
					$('#pekerjaan_ibu').val(dt[i]['Pekerjaan Ibu']);
					$('#ttl_ibu').val(dt[i]['TTL Ibu']);
					$('#alamat_pelapor').val(dt[i]['Alamat Pelapor']);
					$('#nik_pelapor').val(dt[i]['NIK Pelapor']);
					$('#pekerjaan_pelapor').val(dt[i]['Pekerjaan Pelapor']);
					$('#ttl_pelapor').val(dt[i]['TTL Pelapor']);
					$('#alamat_saksi1').val(dt[i]['Alamat Saksi1']);
					$('#nik_saksi1').val(dt[i]['NIK Saksi1']);
					$('#pekerjaan_saksi1').val(dt[i]['Pekerjaan Saksi1']);
					$('#ttl_saksi1').val(dt[i]['TTL Saksi1']);
					$('#alamat_saksi2').val(dt[i]['Alamat Saksi2']);
					$('#nik_saksi2').val(dt[i]['NIK Saksi2']);
					$('#pekerjaan_saksi2').val(dt[i]['Pekerjaan Saksi2']);
					$('#ttl_saksi2').val(dt[i]['TTL Saksi2']);
					$('#keperluan').val(dt[i]['Keperluan']);
					// $('#createdAt').val(dt[i]['CreatedAt']);
					// $('#Uid').val(dt[i]['Uid']);
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
				db.collection("Surat Keterangan Kematian").doc(id).delete().then(function () {
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

	// var no_kk = $('#no_kk').val();
	var nik_jenazah = $('#nik_jenazah').val();
	var nama_jenazah = $('#nama_jenazah').val();
	var tl_jenazah = $('#tl_jenazah').val();
	var tl_mati = $('#tl_mati').val();
	var tempat_lahir_jenazah = $('#tempat_lahir_jenazah').val();
	var jekel_jenazah = $('#jekel_jenazah').val();
	var agama_jenazah = $('#agama_jenazah').val();
	var alamat_jenazah = $('#alamat_jenazah').val();
	var anak_ke = $('#anak_ke').val();
	var pekerjaan_jenazah = $('#pekerjaan_jenazah').val();
	var yang_menerangkan = $('#yang_menerangkan').val();

	var nik_ayah = $('#nik_ayah').val();
	var nama_ayah = $('#nama_ayah').val();
	var alamat_ayah = $('#alamat_ayah').val();
	var pekerjaan_ayah = $('#pekerjaan_ayah').val();
	var ttl_ayah = $('#ttl_ayah').val();
	var nik_ibu = $('#nik_ibu').val();
	var nama_ibu = $('#nama_ibu').val();
	var alamat_ibu = $('#alamat_ibu').val();
	var pekerjaan_ibu = $('#pekerjaan_ibu').val();
	var ttl_ibu = $('#ttl_ibu').val();
	var nik_pelapor = $('#nik_pelapor').val();
	var alamat_pelapor = $('#alamat_pelapor').val();
	var pekerjaan_pelapor = $('#pekerjaan_pelapor').val();
	var ttl_pelapor = $('#ttl_pelapor').val();
	var nik_saksi1 = $('#nik_saksi1').val();
	var alamat_saksi1 = $('#alamat_saksi1').val();
	var pekerjaan_saksi1 = $('#pekerjaan_saksi1').val();
	var ttl_saksi1 = $('#ttl_saksi1').val();
	var nik_saksi2 = $('#nik_saksi2').val();
	var alamat_saksi2 = $('#alamat_saksi2').val();
	var pekerjaan_saksi2 = $('#pekerjaan_saksi2').val();
	var ttl_saksi2 = $('#ttl_saksi2').val();
	var keperluan = $('#keperluan').val();
	var createdAt = $('#createdAt').val();
	var Uid = $('#Uid').val();
	var status = $("#status").val();
	if (act == 'add') {
		db.collection("Surat Keterangan Kematian").add({
				// 'Nomor Kepala Keluarga': no_kk,
				'NIK Jenazah': nik_jenazah,
				'Nama Lengkap Jenazah': nama_jenazah,
				'Tanggal Lahir Jenazah': tl_jenazah,
				'Tanggal Kematian': tl_mati,
				'Tempat Lahir Jenazah': tempat_lahir_jenazah,
				'Jenis Kelamin Jenazah': jekel_jenazah,
				'Agama Jenazah ': agama_jenazah,
				'Alamat Jenazah': alamat_jenazah,
				'Anak Ke ': anak_ke,
				'Pekerjaan Jenazah': pekerjaan_jenazah,
				'Yang Menerangkan': yang_menerangkan,
				'Alamat Ayah': alamat_ayah,
				'NIK Ayah': nik_ayah,
				'Nama Ayah': nama_ayah,
				'Pekerjaan Ayah': pekerjaan_ayah,
				'TTL Ayah': ttl_ayah,
				'Alamat Ibu': alamat_ibu,
				'NIK Ibu': nik_ibu,
				'Nama Ibu': nama_ibu,
				'Pekerjaan Ibu': pekerjaan_ibu,
				'TTL Ibu': ttl_ibu,
				'Alamat Pelapor': alamat_pelapor,
				'NIK Pelapor': nik_pelapor,
				'Pekerjaan Pelapor': pekerjaan_pelapor,
				'TTL Pelapor': ttl_pelapor,
				'Alamat Saksi1': alamat_saksi1,
				'NIK Saksi1': nik_saksi1,
				'Pekerjaan Saksi1': pekerjaan_saksi1,
				'TTL Saksi1': ttl_saksi1,
				'Alamat Saksi2': alamat_saksi2,
				'NIK Saksi2': nik_saksi2,
				'Pekerjaan Saksi2': pekerjaan_saksi2,
				'TTL Saksi2': ttl_saksi2,
				'Keperluan': keperluan,
				'status': status,
				'Uid': Uid,
				'idPengajuan': 'tes',
				'createdAt': createdAt
			})
			.then(function (doc) {
				var idPengajuan = doc.id;
				db.collection("Surat Keterangan Kematian").doc(idPengajuan).update({
					'idPengajuan': idPengajuan
				})
				console.log("Document successfully written!");
				tampil();
				swal("Success!", "Data telah tersimpan!", "success");
				$("#f1").css("display", "none");
				$("#f2").css("display", "none");
				$("#f3").fadeIn();
				$("#btn-modal").css("display", "block");
				$("#kembali").css("display", "none");
			})
			.catch(function (error) {
				console.error("Error writing document: ", error);
			});
	} else if (act == 'update') {
		db.collection("Surat Keterangan Kematian").doc(id).update({
				// 'Nomor Kepala Keluarga': no_kk,
				'NIK Jenazah': nik_jenazah,
				'Nama Lengkap Jenazah': nama_jenazah,
				'Tanggal Lahir Jenazah': tl_jenazah,
				'Tanggal Kematian': tl_mati,
				'Tempat Lahir Jenazah': tempat_lahir_jenazah,
				'Jenis Kelamin Jenazah': jekel_jenazah,
				'Agama Jenazah ': agama_jenazah,
				'Alamat Jenazah': alamat_jenazah,
				'Anak Ke ': anak_ke,
				'Pekerjaan Jenazah': pekerjaan_jenazah,
				'Yang Menerangkan': yang_menerangkan,
				'Alamat Ayah': alamat_ayah,
				'NIK Ayah': nik_ayah,
				'Nama Ayah': nama_ayah,
				'Pekerjaan Ayah': pekerjaan_ayah,
				'TTL Ayah': ttl_ayah,
				'Alamat Ibu': alamat_ibu,
				'NIK Ibu': nik_ibu,
				'Nama Ibu': nama_ibu,
				'Pekerjaan Ibu': pekerjaan_ibu,
				'TTL Ibu': ttl_ibu,
				'Alamat Pelapor': alamat_pelapor,
				'NIK Pelapor': nik_pelapor,
				'Pekerjaan Pelapor': pekerjaan_pelapor,
				'TTL Pelapor': ttl_pelapor,
				'Alamat Saksi1': alamat_saksi1,
				'NIK Saksi1': nik_saksi1,
				'Pekerjaan Saksi1': pekerjaan_saksi1,
				'TTL Saksi1': ttl_saksi1,
				'Alamat Saksi2': alamat_saksi2,
				'NIK Saksi2': nik_saksi2,
				'Pekerjaan Saksi2': pekerjaan_saksi2,
				'TTL Saksi2': ttl_saksi2,
				'Keperluan': keperluan,
				'status': status,
				// 'CreatedAt': createdAt,
				'Uid': Uid
			})
			.then(function () {
				console.log("Document successfully updated!");
				tampil();
				swal("Success!", "Data telah terupdate!", "success");
				$("#f1").css("display", "none");
				$("#f2").css("display", "none");
				$("#f3").fadeIn();
				$("#btn-modal").css("display", "block");
				$("#kembali").css("display", "none");
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
	db.collection("Surat Keterangan Kematian").get().then(function (querySnapshot) {
		querySnapshot.forEach(function (doc) {
			dataSet.push([doc.data()['NIK Jenazah'], doc.data()['Nama Lengkap Jenazah'], doc.data()['Tanggal Lahir Jenazah'], doc.data()['Jenis Kelamin Jenazah'], doc.id]);
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
				title: "NIK Alm."
			},
			{
				title: "Nama Alm."
			},
			{
				title: "TTL Alm."
			},
			{
				title: "Jekel Alm."
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
