<?php $titre = 'Liste des étudiants'; ?>
<?php ob_start(); ?>
<?php include 'inc/menu.php';?>
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
<div class="table-responsive">
<table
	class="table table-bordered table-hover table-striped table-condensed">
	<thead>
		<tr>
			<th>Numéro</th>
			<th>Prénom</th>
			<th>Nom</th>
			<th>Date de naissance</th>
			<th>Lieu de naissance</th>
			<th>Adresse</th>
			<th>Email</th>
			<th>Téléphone</th>
			<th>UFR</th>
			<th>Filière</th>
			<th>Niveau</th>
			<th>Année Inscription</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
				<?php foreach ($liste as $etu) {?>
				<tr>
			<td><?= $etu->NUMERO ?></td>
			<td><?= $etu->PRENOM ?></td>
			<td><?= $etu->NOM ?></td>
			<td><?= $etu->DATE_NAISSANCE ?></td>
			<td><?= $etu->LIEU_NAISSANCE ?></td>
			<td><?= $etu->ADRESSE ?></td>
			<td><?= $etu->EMAIL_ETU ?></td>
			<td><?= $etu->TELEPHONE ?></td>
			<td><?= $etu->UFR ?></td>
			<td><?= $etu->FILIERE ?></td>
			<td><?= $etu->NIVEAU ?></td>
			<td><?= $etu->ANNEE_INS ?></td>
			<td><a
				href="javascript:modifier('index.php?action=modEtu&ufr=<?= $ufr ?>&id=<?= $etu->ID_UTILISATEUR ?>')"><span class="glyphicon glyphicon-pencil"></span></a></td>
			<td><a
				href="javascript:supprimer('index.php?action=supEtu&ufr=<?= $ufr ?>&id=<?= $etu->ID_UTILISATEUR ?>')"><span class="glyphicon glyphicon-remove"></span></a></td>
		</tr>
				<?php }?>
			</tbody>
</table>
</div>

<?php

$contenu = ob_get_clean ();
require 'view/default.php';

?>