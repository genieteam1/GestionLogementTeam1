<?php $titre = 'DG Crous'; ?>
<?php ob_start(); ?>
<?php include 'inc/menuDgCrous.php';?>
<div id="row">
	<div class="col-lg-3">
	<a href="index.php?action=utilisateurs"  class="btn btn-primary btn-lg btn-block">Utilisateurs</a>
	<button type="button" class="btn btn-primary btn-lg btn-block">Liste des étudiants</button>
	<button type="button" class="btn btn-primary btn-lg btn-block">Les Résidences </button>
	<button type="button" class="btn btn-primary btn-lg btn-block">Default</button>

	</div>
	
	
	<!---------------------------------------------------------Debut slide  ------------------------------------------------------->

	<section class="col-lg-9">

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