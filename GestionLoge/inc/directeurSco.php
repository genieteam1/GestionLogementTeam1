<?php if (isset($erreur)) { ?>
	<script>
		$(function(){
			$("div.alert").show("slow").delay(4000).hide("slow");
			return false;
		});
	</script>
	<?php } ?>
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
	
</form>
