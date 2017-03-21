<?php $titre = 'Liste des étudiants'; ?>
<?php ob_start(); ?>
<?php include 'inc/menu.php';?>
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
				href="javascript:modifier('index.php?action=modEtu&ufr=<?= $ufr ?>&id=<?= $etu->ID_UTILISATEUR ?>')">Modifier</a></td>
			<td><a
				href="javascript:supprimer('index.php?action=supEtu&ufr=<?= $ufr ?>&id=<?= $etu->ID_UTILISATEUR ?>')">Supprimer</a></td>
		</tr>
				<?php }?>
			</tbody>
</table>
</div>

<?php

$contenu = ob_get_clean ();
require 'view/default.php';

?>