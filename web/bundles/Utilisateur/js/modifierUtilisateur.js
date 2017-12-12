function alertSupprimer(id, username, adresse){
	swal({
		title: 'Êtes vous sûr ?',
		text: "L\'utilisateur " + id + " " + username + " disparaîtra totalement",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, delete it!'
	}).then((result) => {
		if (result.value) {
			window.location.replace(adresse);
		}
	})
}