/**
 * 
 */

function modifier(url) {
	if (confirm("Voulez vous modifier ?")) {
		document.location = url;
	}
}

function supprimer(url) {
	if (confirm("Voulez vous supprimer ?")) {
		document.location = url;
	}
}
