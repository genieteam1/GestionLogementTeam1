<?php $titre = 'Liste des étudiants'; ?>
<?php ob_start(); ?>
<?php include 'inc/menu.php';?>
<div id="row">
	<div class="col-lg-5">
	
<form action="index.php" method="post" enctype="multipart/form-data"
	class="form-horizontal">
	<div class="form-group">
		<label for="fichier" class="col-sm-3 control-label">Fichier CSV : </label>
		<div class="col-sm-9">
			<input type="file" name="fichier" class="form-control" id="fichier">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-9">
			<input type="submit" value="Charger" name="action"
				class="btn btn-primary" />
		</div>
	</div>
	<div class="alert alert-block alert-danger" style="display: none">
		<h4>Erreur !</h4>
		<?php if (isset($erreur)) {echo $erreur; }?>
	</div>
	<div id="message" class="alert alert-block alert-success" style="display: none">
		<h4>Message !</h4>
		<?php if (isset($message)) {echo $message; }?>
	</div>
	
</form>
	</div>

		<!---------------------------------------------------------Debut slide  ------------------------------------------------------->

	<section class="col-lg-7">

			<div id="carousel-example-generic" class="carousel slide"
				data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0"
						class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="web/images/image1.jpg" alt="...">

					</div>
					<div class="item">
						<img src="web/images/image2.jpg" alt="...">

					</div>
					<div class="item">
						<img src="web/images/image2.jpg" alt="...">

					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic"
				role="button" data-slide="prev"> <span
				class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a> <a class="right carousel-control"
				href="#carousel-example-generic" role="button" data-slide="next"> <span
				class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</section>

		<!---------------------------------------------------------Fin slide  ------------------------------------------------------->

</div>

<?php

$contenu = ob_get_clean ();
require 'view/default.php';

?>