<!DOCTYPE html>
<html>
<head>
	<title>BIOFARM EDEN</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	
 <!------icon du titre----->
<link rel="shortcut icon"  href="logo-menu/lfv.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/paniers.css">
		
	
</head>
<body style="background: url(logo-menu/plume.jpg) ;">
<?php include("../includes/header.php");?>

<h1 style="color:  #10B40E;">MON PANIER</h1>
<div class="ins-container">
	<nav class="cdg1">
        <div class="cdgmenusolo">
                 <div class="cdgmenusolo">
                                <div class="cdgmenusolotitre"><h2 class="menustitle">Menu Solo</h2></div>
                                    <ul>
                                         <li><a href="legumes.php">Légumes</a></li>
                                        <li><a href="epicerie.php">Epicerie</a></li>
                                        <li><a href="viande.php">viandes</a></li>
                                        <li><a href="boulangerie.php">Boulangerie</a></li>
                                        <li><a href="fruit.php">Fruits </a></li>
                                        <li><a href="vegetaux.php">Végétaux</a></li>
                                        <li><a href="cereales.php">Céréales</a></li>
                                        <li><a href="tubercules.php">Tubercules</a></li>
                                         <li class="nav-text title" id="li-block">
                                          <a href="#">Boissons</a>
                                          <ul  id="compte-sous-menu2">
                                                 <li  ><a href="jus.php">jus</a></li>
                                                 <li ><a href="vin.php">Vins</a></li>
                                              </ul>
                                        </li>
                                        <li><a href="divers.php">Divers</a></li>
                                    </ul>
                                </div>
                                
                                <div class="cdgmenuextra">
                                    <div class="cdgmenuextratitre" ><h2 class="menustitle">Menu Extra</h2></div>
                                    <ul>
                                        <li><a href="panier-famille.php">Panier Famille</a></li>
                                        <li><a href="panier-solo.php">panier Solo</a></li>
                                        <li><a href="packs.php">Packs</a></li>
                                    </ul>
                                </div>


                              <div class="promotion">
                                        <h2 class="menustitle">Bien frais !!</h2>
                                        <div class="container">
                                            <img src="images/épicerie/curcuma-973x683.jpg"  width="100%"height="220px" Align="center">
                               
                                        </div>
                            <div class="promotion">
                                        <h2 class="menustitle">As tu Visité Nos Packs ?</h2>
                                        <div class="container">
                                            <img src="images/épicerie/illustration-épices-CR-Pixabay.jpg"  width="100%"height="220px" Align="center">
                               
                            </div>
              </div>
                                                    
              </nav>
			  <div class="mon-panier">
          <div class="panierPreentete">
            <div class="paniern">Panier</div>
            <div class="panierr">Renseignements</div>
            <div class="panierp">Payement</div>
            <div class="panierres">resultats</div>
          </div>
							<div class="panier-entete">
							     <a href="#modalp" class="details js-modal"><div class="panier-details js-modal" href="#modalp"><strong href="#modalp" class="js-modal">Details de mon panier</strong></div></a>
							     
							</div>
      <aside id="modalp" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
              <div class="dpe"><strong>PANIER</strong></div>
               <div class="productContainer">
               

               
               </div>
               
               <div class="panier-prixtotal">
                 <strong>TOTAL:<span class="prixt" id="prixt">0</span><span class="prixt">FCFA</span></strong>
               </div>
               <div  class="js-modal-close termin">Terminer</div>
              
            </div>
</aside>
							
							<div class="panier-third">
								<div class="names"><strong>Sous-total HT</strong></div>
								<div class="valeurs sous-total"><span></span></div>
							</div>
							<div class="panier-fourth">
								<div class="names"><strong>TVA:</strong></div>
								<div class="valeurs tva"><span></span>FCFA</div>
							</div>
							<div class="panier-fifth">
								<div class="names"><strong>Code promo:</strong></div>
								<div class="valeurs1 code-promo">
									<input type="text" name="" placeholder="INDISPONIBLE!!!" class="abon-mont-inp">
                              </div>
							</div>
							<div class="panier-sixth">
								<div class="names"><strong>Livraison:</strong></div>
								<div class="valeurs livraison-mont"><span></span>FCFA</div>
							</div>
							<div class="panier-seventh">
								<div class="names"><strong>TOTAL TTC:</strong></div>
								<div class="valeurs total-montant"><span></span>FCFA </div>
							</div>
              <a href="payement.php"><div class="valider3">je valide ma commande</div></a>
							
			  </div>	
        	
     </div>
      
<?php include("../includes/footerA.php");?>
 
            <script src="js/paniers.js" ></script>
   
</body>
</html>