<?php $titre = 'Liste des Utilisateurs'; ?>
<?php ob_start(); ?>
<?php include 'inc/menuDgCrous.php';?>
<div class="row">
<form>
<div class="col-lg-1">
	</div>
		
	<div class="col-lg-3">
		
		 <div class="form-group">
			<label for="exampleInputName2">Code etudiant :</label>
			<input type="text" class="form-control" id="exampleInputName2" placeholder="Tous les étudiants">
		  </div>
 
	</div>
	
	<div class="col-lg-3">
		<label for="exampleInputName2">Filiére :</label>
		<select class="form-control">
		<option selected >Tous</option>
		  <option  >AMRT</option>
		  <option>D2AW</option>
		  <option>ECOMA</option>
		  <option>IJ</option>
		  <option>SIR</option>
		</select>
	 </div>
	 
	 <div class="col-lg-3">
		<label for="exampleInputName2">Niveau :</label>
		<select class="form-control">
		<option selected >Tous</option>
		  <option>Licence 1</option>
		  <option>Licence 2</option>
		  <option>Licence 3</option>
		  <option>Master 1</option>
		  <option>Master 2</option>
		</select>
	 </div>
	 <div class="col-lg-2">
	 
		<button type="submit" class="btn btn-primary">Trier</button>
	</div>
		
	 
	 </form>
  </div>
<div id="row">
	<div class="col-lg-3">
		<a href="index.php?action=creerutilisateur" type="button"
			class="btn btn-primary btn-lg btn-block">Nouveau Utilisateur</a>

	</div>
	<div class="col-lg-9">
		<table class="table">
			<tr>
				<th class="active">ID</th>
				<th class="success">Prénom</th>
				<th class="danger">Nom</th>
				<th class="warning ">Adresse</th>
				<th class="warning ">Email</th>
				<th class="info">Téléphone</th>
				<th class="active">Login</th>
				<th class="warning">Rôle</th>
				<th class="active" colspan="2">Action</th>
			</tr>
			<?php foreach ($utilisateurs as $u) { ?>
				<tr>
				<td><?= $u->ID_UTILISATEUR ?></td>
				<td><?= $u->PRENOM ?></td>
				<td><?= $u->NOM ?></td>
				<td><?= $u->ADRESSE ?></td>
				<td><?= $u->EMAIL ?></td>
				<td><?= $u->TELEPHONE?></td>
				<td><?= $u->LOGIN ?></td>
				<td><?= $u->LIBELLE ?></td>
				<td><a
					href="index.php?action=modifieru&id=<?= $u->ID_UTILISATEUR ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
				<td><a
					href="index.php?action=supprimeru&id=<?= $u->ID_UTILISATEUR ?>"><span class="glyphicon glyphicon-remove"></span></a></td>
			</tr>
			<?php }?>
		</table>
	</div>


</div>

<?php

$contenu = ob_get_clean ();
require 'view/default.php';

?>