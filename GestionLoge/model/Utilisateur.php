<?php
/**
 * @author Kane
 *
 */

class Utilisateur {
	

	private $bdd;
	
	public function __construct(){
		$this->bdd = new PDO('mysql:host=localhost;dbname=logement;charset=utf8', 'root',
				'', array(PDO::MYSQL_ATTR_LOCAL_INFILE=>1, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
		$this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	
	public function ajouter($role, $prenom, $nom, $adresse, $email, $telephone, $login, $password) {
		$sql = 'INSERT INTO `utilisateur`(`ID_ROLE`, `PRENOM`, `NOM`, `ADRESSE`, `EMAIL`, `TELEPHONE`, `LOGIN`, `PASSWORD`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$req = $this->bdd->prepare($sql);
		$req->execute(array($role, $prenom, $nom, $adresse, $email, $telephone, $login, $password));
	}
	
	public function listerUtilisateur() {
		$sql = "SELECT `ID_UTILISATEUR`, `PRENOM`, `NOM`, `ADRESSE`, `EMAIL`, `TELEPHONE`, `LOGIN`, `LIBELLE` FROM utilisateur, role WHERE utilisateur.`ID_ROLE` = role.`ID_ROLE` AND LIBELLE NOT IN ('Etudiant', 'DirecteurCROUS')";
		$req = $this->bdd->prepare($sql);
		$req->execute();
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	
	public function listerRole() {
		$sql = "SELECT * FROM role WHERE LIBELLE NOT IN ('Etudiant', 'DirecteurCROUS')";
		$req = $this->bdd->prepare($sql);
		$req->execute();
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	
	public function update($role, $prenom, $nom, $adresse, $email, $telephone, $login, $id) {
		$sql = "UPDATE `utilisateur` SET `ID_ROLE`=?,`PRENOM`=?,`NOM`=?,`ADRESSE`=?,`EMAIL`=?,`TELEPHONE`=?,`LOGIN`=? WHERE `ID_UTILISATEUR`=?";
		$req = $this->bdd->prepare($sql);
		$req->execute(array($role, $prenom, $nom, $adresse, $email, $telephone, $login, $id));
	}
	
	public function trouver($id) {
		$sql = "SELECT * FROM utilisateur WHERE ID_UTILISATEUR = ?";
		$req = $this->bdd->prepare($sql);
		$req->execute(array($id));
		return $req->fetch(PDO::FETCH_OBJ);
	}
	
	public function supprimer($id) {
		$sql = "DELETE FROM utilisateur WHERE ID_UTILISATEUR = ?";
		$req = $this->bdd->prepare($sql);
		$req->execute(array($id));
	}
	
	

}