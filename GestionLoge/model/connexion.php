<?php

function chargerCSV($index, $destination, $maxsize = FALSE, $extensions = FALSE) {
	// Test1: fichier correctement uploadé
	if (! isset ( $_FILES [$index] ) or empty($_FILES [$index]) or $_FILES [$index] ['error'] > 0)
		return FALSE;
	// Test2: taille limite
	if ($maxsize !== FALSE and $_FILES [$index] ['size'] > $maxsize)
		return FALSE;
	// Test3: extension
	$ext = substr ( strrchr ( $_FILES [$index] ['name'], '.' ), 1 );
	if ($extensions !== FALSE and ! in_array ( $ext, $extensions ))
		return FALSE;
	// Déplacement
	return move_uploaded_file ( $_FILES [$index] ['tmp_name'], $destination );
}

function executer($fichier) {
	$bdd = getBdd();
	$sql = "LOAD DATA LOCAL INFILE '$fichier' INTO TABLE etudiant CHARACTER SET LATIN1 FIELDS TERMINATED BY ';' ENCLOSED BY '\"' LINES TERMINATED BY '\\n' (`ID_ROLE`, `NUMERO`, `PRENOM`, `NOM`, @vardate, `LIEU_NAISSANCE`, `ADRESSE`, `EMAIL_ETU`, `TELEPHONE`, `UFR`, `FILIERE`, `NIVEAU`, `ANNEE_INS`, `LOGIN`, `PASSWORD`) set DATE_NAISSANCE = STR_TO_DATE(@vardate,'%d/%m/%Y');";
	$bdd->exec($sql);
}

function login($login, $password) {
	$bdd = getBdd();
    $st = $bdd->prepare('select * from utilisateur where login = ? and password = ?');
    $st->execute(array($login, $password));
    return $st->fetch(PDO::FETCH_OBJ);
}

function getBdd() {
	$bdd = new PDO('mysql:host=localhost;dbname=logement;charset=utf8', 'root',
			'', array(PDO::MYSQL_ATTR_LOCAL_INFILE=>1, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $bdd;
}

function listeEtudiant($ufr) {
	$sql = 'SELECT `ID_UTILISATEUR`, `ID_ROLE`, `NUMERO`, `PRENOM`, `NOM`, `DATE_NAISSANCE`, `LIEU_NAISSANCE`, `ADRESSE`, `EMAIL_ETU`, `TELEPHONE`, `UFR`, `FILIERE`, `NIVEAU`, `ANNEE_INS` FROM `etudiant` WHERE `UFR` = ?';
	$bdd = getBdd();
	$rs = $bdd->prepare($sql);
	$rs->execute(array($ufr));
	return $rs->fetchAll(PDO::FETCH_OBJ);
}

function trouverEtudiant($id) {
	$bdd = getBdd();
	$st = $bdd->prepare('select * from etudiant where ID_UTILISATEUR = ?');
	$st->execute(array($id));
	return $st->fetch(PDO::FETCH_OBJ);
}

function updateEtu($numero, $prenom, $nom, $date, $lieu, $adresse, $email, $telephone, $ufr, $filiere, $annee, $niveau, $id) {
	$bdd = getBdd();
	$sql = 'UPDATE `etudiant` SET `NUMERO`=?,`PRENOM`=?,`NOM`=?,`DATE_NAISSANCE`=?,`LIEU_NAISSANCE`=?,`ADRESSE`=?,`EMAIL_ETU`=?,`TELEPHONE`=?,`UFR`=?,`FILIERE`=?,`NIVEAU`=?,`ANNEE_INS`=? WHERE `ID_UTILISATEUR`=?';
	$st = $bdd->prepare($sql);
	$st->execute(array($numero, $prenom, $nom, $date, $lieu, $adresse, $email, $telephone, $ufr, $filiere, $niveau, $annee, $id));
}

function delete($id) {
	$bdd = getBdd();
	$sql = "DELETE FROM etudiant WHERE ID_UTILISATEUR = ?";
	$st = $bdd->prepare($sql);
	$st->execute(array($id));
}

