$(document).ready(function () {
	setBase();
	$("#login").click(function(){
		event.preventDefault()
		let iduser = $("#userid").val()
		let password1 = $("#password").val()
		// console.log(id, password)
		data_ktp(iduser, password1)
	})
})

function data_ktp(iduser, password1) {
	var db = firebase.firestore();

	db.collection("User").get()
		.then(function (querySnapshot) {
			querySnapshot.forEach(function (doc) {
				if (doc.data()) {
					var dt = [];
					dt.push(doc.data());
						var rid = $.grep(dt, function(e){ return e.uid == iduser; });
						var rpas = $.grep(dt, function(e){ return e.password == password1; });
						if (rid != '' && rpas != '') {
							// console.log(doc.id);
							window.location.replace(base_url+"login/jd19ja1Dasue92jdDsha10i41210310dja29ej/"+doc.id);
						} else {
							alert('ID atau password salah!')
						}
						// sessionStorage.setItem('login','true');
				} else {
					console.log(dt)
					console.log("No such document!");
				}
			});
		})
		.catch(function (error) {
			console.log("Error getting documents: ", error);
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
