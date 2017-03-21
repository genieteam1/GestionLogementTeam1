<!DOCTYPE html>
<html>
<head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="shorcut icon" href="web/images/logo.jpg" >
 
  <!-- Bootstrap -->
           <link rel="stylesheet" type="text/css"  href="web/bootstrap/css/bootstrap.min.css" />
		   <link type="text/css" rel="stylesheet" href="web/style/css/style.css" />
		   <link rel="stylesheet" type="text/css"  href="web/font-awesome/css/font-awesome.min.css" />
		   <link type="text/css" rel="stylesheet" href="web/owl-carousel/owl.carousel.css" />
  <title>GesEtudiant</title> 
  
</head>

<style type="text/css">
      [class*="col"] { margin-bottom: 5px;
		<!-- border:1px solid white; -->}
      img { width: 100%; }
      body { margin-top: 10px; }
    </style>
	
	 


<body>
	
   <div class="container conteneur_couleur">
   <!---------------------------------------------------------Debut header ------------------------------------------------------->
		<!-- <header class="row">
				<div class="col-lg-12">
				  <img class="bordure1" src="medias/images/banniere.jpg" alt="banniere de AG3MD"/>
				</div>
      </header> 
	  <!---------------------------------------------------------Fin header  ------------------------------------------------------->
		 <!---------------------------------------------------------Debut navigation  ------------------------------------------------------->
	 <div class="row">
		
		
      </div>
	   <!---------------------------------------------------------Fin Navigation ------------------------------------------------------->
	  <!---------------------------------------------------------Debut slide  ------------------------------------------------------->
	  <div class="row">
			<section class="col-lg-12">
			 <div class="row">
					<section class="col-lg-12">
					  	
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                 <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
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
                                           <img src="web/images/image1.jpg" alt="...">
                                           
                                        </div>
								
										
										
										</div>
                                    </div>

                                 <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                        </div>
                            

					</section>
			</div>
			<!---------------------------------------------------------Fin slide  ------------------------------------------------------->
			<!---------------------------------------------------------Debut Login  ------------------------------------------------------->
			 <div class="row">
								<section class="col-md-4">
								
								</section>
					<section class="col-md-4 ombretex3">
					<div  id="non_visible" class=" alert alert-danger"  >Login ou mot de Passe incorrecte</div>
					<div  id="non_visibleEspace" class=" alert alert-danger"  >Erreur !!!! Les Champs sont vides</div>
						<form action="index.php" method="post">
						  <div class="form-group">
							<label for="exampleInputLogin">Login :</label>
							<input type="text" name="login" class="form-control" id="inputLogin" placeholder="Login">
						  </div>
						  <div class="form-group">
							<label for="exampleInputPassword">Password :</label>
							<input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
						  </div>
						  
						  <input id="boutonConnexion" name="action" value="Connexion" type="submit" class="btn btn-default" /> 
						</form>
				
				</section>
				<section class="col-md-4">
				
				</section>
					
			</div>
			 <div class="row">
			<!---------------------------------------------------------Fin Login  ------------------------------------------------------->		
					
					
			</div>
			</section>
			
			<div class="row">
					
			</div>
			<!---------------------------------------------------------Debut Bas  ------------------------------------------------------->
			
	  <!---------------------------------------------------------Fin Bas  ------------------------------------------------------->
      </div>
      
	<div id="scrollUp">
			<!-- <a href="#top"><img src="medias/images/to_top.png"/></a> -->
	</div>	
		
	</div>
		
    </div>
   
    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->

        <script src="web/bootstrap/jquery/jquery-1.11.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="web/bootstrap/js/bootstrap.min.js"></script>
		<script src="web/owl-carousel/owl.carousel.min.js"></script>
		<script src="web/style/js/stylejs.js"></script>
		
	<script>
	   /* function verificationConnexion1(){
		var codeEtu=document.getElementById("CodeEtudiant").value;
		var pwdEtu=document.getElementById("passwordEtudiant").value;
	}
	
	$(function(){
	//declaration des variables 
			var $loginUser = $('#inputLogin'),
				$pwdUser = $('#inputPassword'),
				$envoi = $('#boutonConnexion'),
				$erreur=$('#non_visible'),
				$erreurEspace=$('#non_visibleEspace');
				
				
			  $loginUser.keyup(function(){
							$erreurEspace.css({ 
									display : 'none'
								});
							$erreur.css({ 
									display : 'none'
								});
							if($(this).val().length < 5){ // si la chaine de caractéres est inférieure à 5
								$(this).css({ // on rend le champ rouge
									borderColor : 'red',
									color : 'red'
								});
							 }
							 else{
								 $(this).css({ // si tout est bon, on le rend vert
									  borderColor : 'green',
									  color : 'green'
								});
							 }
				});
				$pwdUser.keyup(function(){
							$erreur.css({ 
									display : 'none'
								});
							
				}); */
			/* function verificationConnexion(){
				
				
				//Connexion locale
				if(($loginUser.val()=='') && ($pwdUser.val()=='')){
					$erreurEspace.css('display', 'block'); // on prend soin de cacher le message d'erreur pour les champs vides
					
				}else if(($loginUser.val()!='bounama') && ($pwdUser.val()!='diarama')){
					$erreur.css('display', 'block'); // on prend soin de cacherle message d'erreur
				}else document.location='pme.html';
				
				//Connexion via un serveur
				 
				
				
			} */		
			 
			 /* $envoi.click(function(e){
				e.preventDefault();
				verificationConnexion();
			}); */
			
			
			//});
	   </script>
	
	
</body>
</html>