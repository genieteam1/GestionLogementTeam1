<?php $titre = 'Liste des étudiants'; ?>
<?php ob_start(); ?>

<?php include 'inc/menu.php';?>

<?php

$contenu = ob_get_clean ();
require 'view/default.php';

?>