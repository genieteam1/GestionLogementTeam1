<?php
require 'model/connexion.php';
require 'model/Utilisateur.php';
require 'control/UtilisateurController.php';

function accueil() {
	require 'view/login.php';
}
function connexion($login, $password) {
	$user = login ( $login, $password );
	if ($user != null) {
		$_SESSION ['user'] = $user;
		if ($user->ID_ROLE == 3) {
			require 'view/etudiant.php';
			return false;
		} elseif($user->ID_ROLE == 4) {
			require 'view/dgcrous.php';
			return ;
		}elseif($user->ID_ROLE == 5) {
			require 'view/dgcrous.php';
			return ;
		}
	} else {
		require 'view/login.php';
	}
}
function insererEtudiant() {
	$dossier = 'document/' . time () . '.csv';
	
	if(chargerCSV ( 'fichier', $dossier ) !== FALSE){
		if(verifierCSV($dossier) == "ok") {
			executer ( $dossier );
			$message = "Enregistrement effectué";
			require 'view/etudiant.php';
			return false;
		} else {
			$erreur = verifierCSV($dossier);
			require 'view/etudiant.php';
		}
	} else {
		
		$erreur = "Veuillez choisir un fichier d'abord";
		require 'view/etudiant.php';
	}
	
	
}
function modifier($id) {
	$etu = trouverEtudiant ( $id );
	require 'view/modifierEtudiant.php';
}
function listerEtudiant($ufr) {
	$liste = listeEtudiant ($ufr);
	$ufr = $ufr;
	require 'view/listeEtudiant.php';
}

function accueilEtudiant() {
	require 'view/etudiant.php';
}
function miseajour($numero, $prenom, $nom, $date, $lieu, $adresse, $email, $telephone, $ufr, $filiere, $annee, $niveau, $id) {
	updateEtu ( $numero, $prenom, $nom, $date, $lieu, $adresse, $email, $telephone, $ufr, $filiere, $annee, $niveau, $id );
	listerEtudiant ($ufr);
}
function supprimer($id, $ufr) {
	delete ( $id );
	listerEtudiant ($ufr);
}
function verifierCSV($fichier) {
	$fic = fopen ( $fichier, "a+" );
	$ligne = 1;
	while ( $tab = fgetcsv ( $fic, 1024, ';' ) ) {
		$champs = count($tab);
		for($i = 0; $i < $champs; $i++) {
			if(empty($tab[$i])) {
				return "Erreur dans la ligne : ".$ligne." champs n° : ". ++$i;
			}
		}
		$ligne++;
	}
	return "ok";
}

function logout() {
	session_destroy();
	header("location : index.php");
}

function listerUtilisateur() {
	$u = new UtilisateurController();
	$u->lister();
}

function ajouterUtilisateur() {
	$u = new UtilisateurController();
	$u->ajouter();
}

function accueilUtilisateur() {
	$u = new UtilisateurController();
	$u->accueil();
}

function updateUtilisateur($role, $prenom, $nom, $adresse, $email, $telephone, $login, $id) {
	$u = new UtilisateurController();
	$u->update($role, $prenom, $nom, $adresse, $email, $telephone, $login, $id);
}

function addUtilisateur($role, $prenom, $nom, $adresse, $email, $telephone, $login) {
	$u = new UtilisateurController();
	$u->add($role, $prenom, $nom, $adresse, $email, $telephone, $login);
}



