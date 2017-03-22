<?php
require 'control/Control.php';

session_start ();

if (isset ( $_GET ) and ! empty ( $_GET )) {
	if ($_GET ['action'] == 'login') {
		accueil ();
		return false;
	} elseif ($_GET ['action'] == 'supEtu') {
		if (isset ( $_GET ['id'] ) and isset ( $_GET ['ufr'] )) {
			$id = $_GET ['id'];
			$ufr = $_GET ['ufr'];
			supprimer ( $id, $ufr );
			return false;
		}
	} elseif ($_GET ['action'] == 'modEtu') {
		if (isset ( $_GET ['id'] ) and isset ( $_GET ['ufr'] )) {
			$id = $_GET ['id'];
			modifier ( $id );
			return false;
		}
	} elseif ($_GET ['action'] == 'etudiant') {
		accueilEtudiant ();
			return false;
		
	} elseif ($_GET ['action'] == 'listeEtu') {
		$ufr = $_GET ['ufr'];
		listerEtudiant ( $ufr );
		return false;
	} elseif ($_GET ['action'] == 'logout') {
		logout ();
		return false;
	}elseif ($_GET ['action'] == 'utilisateurs') {
		listerUtilisateur();
		return ;
	}elseif ($_GET ['action'] == 'creerutilisateur') {
		ajouterUtilisateur();
		return;
	}elseif ($_GET ['action'] == 'dgcrous') {
		accueilUtilisateur();
		return;
	}elseif ($_GET ['action'] == 'modifieru') {
		if (isset ( $_GET ['id'] )){
			$id = $_GET['id'];
			$uc = new UtilisateurController();
			$uc->modifier($id);
		}
		return;
	}elseif ($_GET ['action'] == 'supprimeru') {
		if (isset ( $_GET ['id'] )){
			$id = $_GET['id'];
			$uc = new UtilisateurController();
			$uc->supprimer($id);
		}
		return;
	}
} elseif (isset ( $_POST )) {
	if (isset ( $_POST ['action'] )) {
		
		if ($_POST ['action'] == 'Connexion') {
			$login = $_POST ['login'];
			$password = $_POST ['password'];
			connexion ( $login, $password );
			return false;
		} elseif ($_POST ['action'] == 'Charger') {
			insererEtudiant ();
			return false;
		} elseif ($_POST ['action'] == 'Modifier') {
			$id = $_POST ['id'];
			$numero = $_POST ['numero'];
			$prenom = $_POST ['prenom'];
			$nom = $_POST ['nom'];
			$date = $_POST ['date_naissance'];
			$lieu = $_POST ['lieu_naissance'];
			$adresse = $_POST ['adresse'];
			$email = $_POST ['email'];
			$telephone = $_POST ['telephone'];
			$ufr = $_POST ['ufr'];
			$filiere = $_POST ['filiere'];
			$niveau = $_POST ['niveau'];
			$annee = $_POST ['annee'];
			
			if (! empty ( $numero ) and ! empty ( $prenom ) and ! empty ( $nom ) and ! empty ( $date ) and ! empty ( $lieu ) and ! empty ( $adresse ) and ! empty ( $email ) and ! empty ( $telephone ) and ! empty ( $ufr ) and ! empty ( $filiere ) and ! empty ( $niveau ) and ! empty ( $annee )) {
				miseajour ( $numero, $prenom, $nom, $date, $lieu, $adresse, $email, $telephone, $ufr, $filiere, $annee, $niveau, $id );
				return false;
			}
		} elseif ($_POST ['action'] == 'Valider') {
			$prenom = $_POST ['prenom'];
			$nom = $_POST ['nom'];
			$adresse = $_POST ['adresse'];
			$email = $_POST ['email'];
			$telephone = $_POST ['telephone'];
			$login = $_POST ['login'];
			$role = $_POST ['role'];
			$uc = new UtilisateurController();
			$uc->add($role, $prenom, $nom, $adresse, $email, $telephone, $login, 'password');
			return ;
		}elseif ($_POST ['action'] == 'Enregister les modifications') {
			$id = $_POST ['id'];
			$prenom = $_POST ['prenom'];
			$nom = $_POST ['nom'];
			$adresse = $_POST ['adresse'];
			$email = $_POST ['email'];
			$telephone = $_POST ['telephone'];
			$login = $_POST ['login'];
			$role = $_POST ['role'];
			$uc = new UtilisateurController();
			$uc->update($role, $prenom, $nom, $adresse, $email, $telephone, $login, $id);
			return;
		}
	}
}

accueil ();
	
	
