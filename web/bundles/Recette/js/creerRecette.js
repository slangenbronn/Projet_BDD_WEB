$(document).ready(function() {
    $('.js-example-basic-multiple').select2({width: '100%'});
});

function ajouterIngredient() {
	//liste dans select2
	var selected = $("#ing option:selected");
	console.log("res " + selected);
	
	//for select2
	selected.each(function(key, value) {
		//champs quantite
		console.log(key);
		console.log(value);
		console.log($(value).val());
		console.log($(value).text());
		$("#ListeIngredient").append(champsIngredient($(value).val(), $(value).text()));
	})
	
		
		//bouton supprimer

	//clean select2
}

// Fonction dégueulasse
function champsIngredient(id, nom) {
	return "<div id=\'ing" + id + "\'><br><label for=\'name\'>Quantite " + nom + "</label><div class=\'row\'>"
		+ "<div class=\'col-md-9\'><input type=\'number\' name=\'_ing"+ id + "\' value=\'\' required=\'required\' class=\'form-control\'></div>"
		+ "<div class=\'col-md-3\'><button onclick=\'supprLigne()\' type=\'button\'>Supprimer</button></div>"
		+ "</div></div>"
}

//Marche pas
function supprLigne(){
	$(this).parent().parent();
	console.log($(this));
	console.log($(this).parents(".row"));
	// body...
	// parent
	//get element
}
//Fonction pour ajouter post en tab