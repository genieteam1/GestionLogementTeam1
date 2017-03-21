<?php $titre = 'Modification d\'un étudiant'; ?>
<?php ob_start(); ?>

<?php include 'inc/menu.php';?>
<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-6">

<form class="form-horizontal" action="index.php" method="post">
	<input type="hidden" name="id" value="<?= $etu->ID_UTILISATEUR ?>" />
	<div class="form-group">
		<label for="numero" class="col-sm-2 control-label">Code Permanant</label>
		<div class="col-sm-10">
			<input type="text" name="numero" value="<?= $etu->NUMERO ?>"
				class="form-control" id="numero" placeholder="Code Permanant">
		</div>
	</div>
	<div class="form-group">
		<label for="prenom" class="col-sm-2 control-label">Prénom</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" value="<?= $etu->PRENOM?>"
				id="prenom" name="prenom" placeholder="Prénom">
		</div>
	</div>
	<div class="form-group">
		<label for="nom" class="col-sm-2 control-label">Nom</label>
		<div class="col-sm-10">
			<input type="text" name="nom" value="<?= $etu->NOM?>"
				class="form-control" id="nom" placeholder="Nom">
		</div>
	</div>
	<div class="form-group">
		<label for="date_naissance" class="col-sm-2 control-label">Date de
			Naissance</label>
		<div class="col-sm-10">
			<input type="text" name="date_naissance"
				value="<?= $etu->DATE_NAISSANCE?>" class="form-control"
				id="date_naissance" placeholder="Date de Naissance">
		</div>
	</div>
	<div class="form-group">
		<label for="lieu_naissance" class="col-sm-2 control-label">Lieu de
			Naissance</label>
		<div class="col-sm-10">
			<input type="text" name="lieu_naissance"
				value="<?= $etu->LIEU_NAISSANCE?>" class="form-control"
				id="lieu_naissance" placeholder="Lieu de Naissance">
		</div>
	</div>
	<div class="form-group">
		<label for="adresse" class="col-sm-2 control-label">Adresse</label>
		<div class="col-sm-10">
			<input type="text" name="adresse" value="<?= $etu->ADRESSE ?>"
				class="form-control" id="adresse" placeholder="Adresse">
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-10">
			<input type="email" name="email" value="<?= $etu->EMAIL_ETU ?>"
				class="form-control" id="email" placeholder="Email">
		</div>
	</div>
	<div class="form-group">
		<label for="telephone" class="col-sm-2 control-label">Téléphone</label>
		<div class="col-sm-10">
			<input type="text" name="telephone" value="<?= $etu->TELEPHONE ?>"
				class="form-control" id="telephone" placeholder="Téléphone">
		</div>
	</div>
	<div class="form-group">
		<label for="ufr" class="col-sm-2 control-label">UFR</label>
		<div class="col-sm-10">
			<input type="text" name="ufr" value="<?= $etu->UFR ?>"
				class="form-control" id="ufr" placeholder="UFR">
		</div>
	</div>
	<div class="form-group">
		<label for="telephone" class="col-sm-2 control-label">Filière</label>
		<div class="col-sm-10">
			<input type="text" name="filiere" value="<?= $etu->FILIERE ?>"
				class="form-control" id="telephone" placeholder="Filière">
		</div>
	</div>
	<div class="form-group">
		<label for="niveau" class="col-sm-2 control-label">Niveau</label>
		<div class="col-sm-10">
			<input type="text" name="niveau" value="<?= $etu->NIVEAU ?>"
				class="form-control" id="niveau" placeholder="Niveau">
		</div>
	</div>
	<div class="form-group">
		<label for="annee" class="col-sm-2 control-label">Année Inscription</label>
		<div class="col-sm-10">
			<input type="text" name="annee" value="<?= $etu->ANNEE_INS ?>"
				class="form-control" id="annee" placeholder="Année Inscription">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<input type="submit"
		value="Modifier" name="action" class="btn btn-default"/>
		</div>
	</div>
</form>
</div>
<div class="col-lg-3"></div>
</div>
<?php

$contenu = ob_get_clean ();
require 'view/default.php';

?>