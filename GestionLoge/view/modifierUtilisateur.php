<?php $titre = 'Création de User'; ?>
<?php ob_start(); ?>
<?php include 'inc/menuDgCrous.php';?>
<div id="row">
	<div class="col-lg-3">
		<a href="index.php?action=utilisateurs"
			class="btn btn-primary btn-lg btn-block">Utilisateurs</a>
	</div>
	<div class="col-lg-6">
		<form class="form-group" action="index.php" method="post"> 
		<input type="hidden" name="id" value="<?= $u->ID_UTILISATEUR ?>">
			<div class="form-group">
				<label for="prenom">Prénom :</label> <input type="text"
					name="prenom" class="form-control" id="prenom"
					value="<?= $u->PRENOM ?>">
			</div>
			<div class="form-group">
				<label for="nom">Nom :</label> <input name="nom"
					type="text" class="form-control" id="nom"
					value="<?= $u->NOM ?>">
			</div>
			<div class="form-group">
				<label for="adresse">Adresse :</label> <input type="text"
					name="adresse" class="form-control" id="adresse"
					value="<?= $u->ADRESSE ?>" />
			</div>
			<div class="form-group">
				<label for="email">Email :</label> <input type="text"
					name="email" class="form-control" id="email"
					value="<?= $u->EMAIL ?>" />
			</div>
			<div class="form-group">
				<label for="telephone">Téléphone :</label> <input
					type="text" name="telephone" class="form-control"
					id="telephone" value="<?= $u->TELEPHONE ?>" />
			</div>
			<div class="form-group">
				<label for="login">Login :</label> <input type="text"
					name="login" class="form-control" id="login"
					value="<?= $u->LOGIN ?>" />
			</div>
			
			<div class="form-group">
				<label for="role">Rôle :</label>
				<select name="role" class="form-control">
				<option value="">-------------</option>
				<?php foreach ($roles as $role) { ?>
					<option value="<?= $role->ID_ROLE ?>"><?= $role->LIBELLE ?></option>
				<?php } ?>
				</select>
			  </div>
			
			<input type="submit" name="action" value="Enregister les modifications" class="btn btn-primary" />
		</form>





	</div>
	<div class="col-lg-3"></div>


</div>

<?php

$contenu = ob_get_clean ();
require 'view/default.php';

?>