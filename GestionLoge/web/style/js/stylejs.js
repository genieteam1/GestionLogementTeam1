
//pour les partenaires
$(document).ready(function() {
 
				$("#owl-demo").owlCarousel({
 
				autoPlay: 3000, //Set AutoPlay to 3 seconds
					
				items : 4,
					itemsDesktop : [1199,3],
							itemsDesktopSmall : [979,3]});
 
});
//pour le bouton top 
jQuery(function(){
$(function () {
$(window).scroll(function () { //Fonction appelée quand on descend la page
if ($(this).scrollTop() > 200 ) {  // Quand on est à 200pixels du haut de page,
$('#scrollUp').css('right','10px'); // Replace à 10pixels de la droite l'image
} else { 
$('#scrollUp').removeAttr( 'style' ); // Enlève les attributs CSS affectés par javascript
}
});
});
});

 /*  //Pour Fixer la barre de navigation au scrole
$(window).scroll(function (event) {
    // A chaque fois que l'utilisateur va scroller (descendre la page)
    var y = $(this).scrollTop(); // On récupérer la valeur du scroll vertical
 
    //si cette valeur > à 200 on ajouter la class
    if (y >= 200) {
      $('.navbar').addClass('fixed');
    } else {
      // sinon, on l'enlève
      $('.navbar').removeClass('fixed');
    }
  });   */