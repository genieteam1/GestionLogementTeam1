<?php
require 'control/Control.php';

session_start ();

if (isset ( $_GET ) and ! empty ( $_GET )) {
	if ($_GET ['action'] == 'login') {
		accueil ();
		return false;
	} elseif ($_GET ['action'] == 'supEtu') {
		$id = $_GET ['id'];
			$ufr = $_GET ['ufr'];
			supprimer ( $id, $ufr );
			return false;
		
	} elseif ($_GET ['action'] == 'modEtu') {
		if (isset ( $_SESSION ['user'] ) and $_SESSION ['user']->ID_ROLE == 3) {
			$id = $_GET ['id'];
			$ufr = $_GET ['ufr'];
			modifier ( $id );
			return false;
		} else {
			header ( "location : view/login.php" );
		}
	} elseif ($_GET ['action'] == 'etudiant') {
		if (isset ( $_SESSION ['user'] ) and $_SESSION ['user']->ID_ROLE == 3) {
			accueilEtudiant();
			return false;
		} else {
			header ( "location : view/login.php" );
		}
		
	}
	elseif ($_GET ['action'] == 'listeEtu') {
		$ufr = $_GET['ufr'];
		listerEtudiant($ufr);
		return false;
	}elseif ($_GET ['action'] == 'logout') {
		logout();
		return false;
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
		}
	}
}

accueil();
	
	
