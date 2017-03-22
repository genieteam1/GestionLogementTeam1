<?php

/**
 * 
 * @author Kane
 *
 */


class UtilisateurController {
	private $u;
	
	public function __construct() {
		$this->u = new Utilisateur();
	}
	
	/**
	 * 
	 */
	public function lister() {
		$utilisateurs = $this->u->listerUtilisateur();
		require 'view/utilisateurs.php';
		return;
	}
	
	/**
	 * @method Permet d'afficher un formulaire d'ajout d'un utilisateur
	 * @return boolean
	 */
	public function ajouter() {
		$roles = $this->u->listerRole();
		require 'view/creerutilisateur.php';
		return FALSE;
	}
	
	/**
	 * @method Permet d'afficher la page d'accueil du DG CROUS
	 * @return boolean
	 */
	public function accueil() {
		require 'view/dgcrous.php';
		return FALSE;
	}
	
	
	/**
	 * 
	 * @param unknown $role
	 * @param unknown $prenom
	 * @param unknown $nom
	 * @param unknown $adresse
	 * @param unknown $email
	 * @param unknown $telephone
	 * @param unknown $login
	 * @param unknown $password
	 */
	public function add($role, $prenom, $nom, $adresse, $email, $telephone, $login, $password) {
		$this->u->ajouter($role, $prenom, $nom, $adresse, $email, $telephone, $login, $password);
		$this->lister();
	}
	
	/**
	 * 
	 * @param unknown $role
	 * @param unknown $prenom
	 * @param unknown $nom
	 * @param unknown $adresse
	 * @param unknown $email
	 * @param unknown $telephone
	 * @param unknown $login
	 * @param unknown $id
	 */
	public function update($role, $prenom, $nom, $adresse, $email, $telephone, $login, $id) {
		$this->u->update($role, $prenom, $nom, $adresse, $email, $telephone, $login, $id);
		$this->lister();
	}
	
	public function modifier($id) {
		$roles = $this->u->listerRole();
		$u = $this->u->trouver($id);
		require 'view/modifierUtilisateur.php';
		return FALSE;
	}
	
	public function supprimer($id) {
		$u = $this->u->supprimer($id);
		$this->lister();
	}
	
	
	
}