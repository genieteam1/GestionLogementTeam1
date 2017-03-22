<?php
if (!isset ( $_SESSION ['user'] )){
	header ( "location : ../index.php" );
	exit();
}
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
		   <link rel="stylesheet" type="text/css"  href="web/bootstrap/css/bootstrap.min.css" />
		   <link type="text/css" rel="stylesheet" href="web/style/css/style.css" />
		   <link rel="stylesheet" type="text/css"  href="web/font-awesome/css/font-awesome.min.css" />
		   <link type="text/css" rel="stylesheet" href="web/owl-carousel/owl.carousel.css" />
		   
        <title><?= $titre ?></title>
    </head>
    <body>
        <div class="container" >
            <div class="row">
                <img alt="Banniere" src="web/images/Banniere.jpg" width="1170px" class="img-responsive img-rounded">
            </div>
            <div class="row" style="background-color: #fff">
                <?= $contenu ?>
            </div>
            <div class="row">
                <img alt="Pied_de_page" src="web/images/Pied_de_page.jpg" width="1170px" class="img-responsive img-rounded">
            </div>
        </div> 
        <script src="web/bootstrap/jquery/jquery-1.11.1.min.js"></script>
        <script src="web/bootstrap/js/bootstrap.min.js"></script>
		<script src="web/owl-carousel/owl.carousel.min.js"></script>
		<script src="web/style/js/stylejs.js"></script>
		<script src="web/style/js/verifier.js"></script>
		<?php if (isset($erreur)) { ?>
	<script>
		$(document).ready(function(){
			$("div.alert-danger").show("slow").delay(4000).hide("slow");
			return false;
		});
	</script>
	<?php } ?>
	<?php if (isset($message)) { ?>
	<script>
		$(document).ready(function(){
			$("#message").show("slow").delay(4000).hide("slow");
			return false;
		});
	</script>
	<?php } ?>
    </body>
</html>