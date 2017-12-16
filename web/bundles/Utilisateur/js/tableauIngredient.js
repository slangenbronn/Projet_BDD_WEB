function alertSupprimer(id, username, adresse){
	swal({
		title: 'Êtes vous sûr ?',
		text: "L\'ingrédient " + id + " " + username + " disparaîtra totalement",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Oui, supprimer',
		cancelButtonText: 'Annuler'
	}).then((result) => {
		if (result.value) {
			window.location.replace(adresse);
		}
	})
}