<?php $titre = 'Création de User'; ?>
<?php ob_start(); ?>
<?php include 'inc/menuDgCrous.php';?>
<div id="row">
	<div class="col-lg-3">
	<a href="index.php?action=utilisateurs"  class="btn btn-primary btn-lg btn-block">Utilisateurs</a>
	</div>
	<div class="col-lg-6">
		<form class="form-group" action="index.php" method="post">
				<div class="form-group">
				<label for="nom">Nom :</label>
				<input type="text" name="nom" class="form-control" id="nom" placeholder="Nom user">
			  </div>
			  
			  <div class="form-group">
				<label for="prenom">Prénom :</label>
				<input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prenom user">
			  </div>
			  
			  <div class="form-group">
				<label for="adresse">Adresse :</label>
				<input type="text" name="adresse" class="form-control" id="adresse" placeholder="Adresse user">
			  </div>
			  <div class="form-group">
				<label for="email">Email :</label>
				<input type="email" name="email" class="form-control" id="email" placeholder="Adresse user">
			  </div>
			  <div class="form-group">
				<label for="telephone">Téléphone :</label>
				<input type="text" name="telephone" class="form-control" id="telephone" placeholder="Téléphone user">
			  </div>
			  <div class="form-group">
				<label for="login">Login :</label>
				<input type="text" name="login" class="form-control" id="login" placeholder="Login user">
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
			  
			  <input type="submit" name="action" class="btn btn-primary" value="Valider" />
		</form>
		
		
		
		

	</div>
	<div class="col-lg-3">
	</div>


</div>

<?php

$contenu = ob_get_clean ();
require 'view/default.php';

?>