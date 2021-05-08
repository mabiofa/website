<!DOCTYPE html>
<html>
<head>
	<title>MABIOFA Shop</title>
	<!------icons fontawsome----->
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/lightslider.css">
	<!------liens js----->
	
	<!------icon du titre----->
	<link rel="shortcut icon"  href="images/Logo/Logo fleure supermarché.png">
	<!------feuilles de styles css----->
	
	
	 <link rel="stylesheet" type="text/css" href="css/extra.css">
</head>
<body>
	<?php include("../includes/header.php");?>


	<!-- section  Nos produits----->

	<section id="produits" >
		<div class="produits-headings">
				<h1 class="produits-heading"><strong>NOS PANIERS SOLO</strong></h1>
				<!-- bouton de recherche---->
				
				 <form >
				 	<div class="search-zone">
		                           
		                            <input type="text" placeholder="PRODUITS Agricoles">
		                             <div class="search-area"><i class="fas fa-search"></i></div>
		             </div>
		         </form>
     </div>
     <!-- categories de produits---->
     <div class="categories">
     	<ul class="prod-menu">
                    <li class="nav-text"><a href="panier-famille.php">Panier Famille</a></li>
                    <li class="nav-text1"><a href="#">Panier Solo</a></li>
                     <li class="nav-text"><a href="packs.php">Packs</a></li>
                   
        	</ul>
      
     </div>
     <div class="afterhead">
		<nav class="cdg1">
			            	<div class="cdgmenusolo">
								<div class="cdgmenusolotitre"><h2 class="menustitle">Menu Solo</h2></div>
									<ul>
										
										 <li><a href="Legumes.php">Légumes</a></li>
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
                                            <img src="images/végétaux/unnamed (1).jpg"  width="100%"height="220px" Align="center">
                               
                                        </div>
                            <div class="promotion">
                                        <h2 class="menustitle">As tu Visité Nos Packs ?</h2>
                                        <div class="container">
                                            <img src="images/végétaux/bioactivadores-de-origen-vegetal.jpg"  width="100%"height="220px" Align="center">
                               
                            </div>
                    </div>
			</nav>
         <!---------- section produits-------->
				<div class="products">
					   
							 
						 <li class="item-a">

        <!---------- 1er container----------------------->


                   <div class="produits-container">
                                       
                                <div class="produits-box js-modal prod1" href="#modal1">
                                                    
                                                        <div class="produits-b-img js-modal prod1" href="#modal1">
                                                            <img src="images/Panier_Solo/Slide1.png" href="#modal1" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal1">
                                                           <strong style=" color: #15CD2B;"href="#modal1" class="js-modal prod2">panier Solo / Sauce d'ademè </strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal1" class="js-modal prod3"> <strong href="#modal1" class="js-modal"> 3 000 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal1">
                                                                     <span><strong> <u href="#modal1" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal1"><i class="fas fa-shopping-cart js-modal prod1" href="#modal1"></i></a> 
                                                               </div>
                                                       
                                      </div>
 <aside id="modal1" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Panier_Solo/Slide1.png">
                    <div class="designation">
                        <span class="nom2">panier Solo / Sauce d'ademè </span><br>
                       <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu1">3000</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum1()">-</span><span id="valeur1"><span></span></span><strong>Unité</strong><span class="plus2" onclick="nextNum1()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt1">3000 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
                
                
            </div>
</aside>
                                       
                                           
                                <div class="produits-box js-modal prod1" href="#modal1">
                                                    
                                                        <div class="produits-b-img js-modal prod1" href="#modal1">
                                                            <img src="images/Panier_Solo/Slide2.png" href="#modal1" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal1">
                                                           <strong style=" color: #15CD2B;"href="#modal1" class="js-modal prod2">panier Solo / Sauce Gboma </strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal1" class="js-modal prod3"> <strong href="#modal1" class="js-modal"> 3 000 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal1">
                                                                     <span><strong> <u href="#modal1" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal1"><i class="fas fa-shopping-cart js-modal prod1" href="#modal1"></i></a> 
                                                               </div>
                                                       
                                      </div>
 <aside id="modal1" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Panier_Solo/Slide2.png">
                    <div class="designation">
                        <span class="nom2">panier Solo / Sauce Gboma </span><br>
                       <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu1">3000</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum1()">-</span><span id="valeur1"><span></span></span><strong>Unité</strong><span class="plus2" onclick="nextNum1()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt1">3000 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
                
                
            </div>
</aside>
                                <div class="produits-box js-modal prod1" href="#modal1">
                                                    
                                                        <div class="produits-b-img js-modal prod1" href="#modal1">
                                                            <img src="images/Panier_Solo/Slide3.png" href="#modal1" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal1">
                                                           <strong style=" color: #15CD2B;"href="#modal1" class="js-modal prod2">panier Solo / Sauce yébésséssé </strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal1" class="js-modal prod3"> <strong href="#modal1" class="js-modal"> 1 500 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal1">
                                                                     <span><strong> <u href="#modal1" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal1"><i class="fas fa-shopping-cart js-modal prod1" href="#modal1"></i></a> 
                                                               </div>
                                                       
                                      </div>
 <aside id="modal1" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Panier_Solo/Slide3.png">
                    <div class="designation">
                        <span class="nom2">panier Solo / Sauce Yébésséssé </span><br>
                       <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu1">1500</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum1()">-</span><span id="valeur1"><span></span></span><strong>Unité</strong><span class="plus2" onclick="nextNum1()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt1">1500 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
                
                
            </div>
</aside>
                                       
                                <div class="produits-box js-modal prod1" href="#modal1">
                                                    
                                                        <div class="produits-b-img js-modal prod1" href="#modal1">
                                                            <img src="images/Panier_Solo/Slide4.png" href="#modal1" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal1">
                                                           <strong style=" color: #15CD2B;"href="#modal1" class="js-modal prod2">panier Solo / Sauce de Gnatou </strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal1" class="js-modal prod3"> <strong href="#modal1" class="js-modal"> 2 500 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal1">
                                                                     <span><strong> <u href="#modal1" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal1"><i class="fas fa-shopping-cart js-modal prod1" href="#modal1"></i></a> 
                                                               </div>
                                                       
                                      </div>
 <aside id="modal1" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Panier_Solo/Slide4.png">
                    <div class="designation">
                        <span class="nom2">panier Solo / Sauce de Gnatou </span><br>
                       <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu1">2500</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum1()">-</span><span id="valeur1"><span></span></span><strong>Unité</strong><span class="plus2" onclick="nextNum1()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt1">2500 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
                
                
            </div>
</aside>
                                    </div>

                <!---------- 2eme container----------------------->


                       <div class="produits-container">
                                       
                                <div class="produits-box js-modal prod1" href="#modal1">
                                                    
                                                        <div class="produits-b-img js-modal prod1" href="#modal1">
                                                            <img src="images/Panier_Solo/Slide5.png" href="#modal1" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal1">
                                                           <strong style=" color: #15CD2B;"href="#modal1" class="js-modal prod2">panier Solo / Sauce d'Aloma </strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal1" class="js-modal prod3"> <strong href="#modal1" class="js-modal"> 2 000 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal1">
                                                                     <span><strong> <u href="#modal1" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal1"><i class="fas fa-shopping-cart js-modal prod1" href="#modal1"></i></a> 
                                                               </div>
                                                       
                                      </div>
 <aside id="modal1" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Panier_Solo/Slide5.png">
                    <div class="designation">
                        <span class="nom2">panier Solo / Sauce d'Aloma </span><br>
                       <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu1">2000</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum1()">-</span><span id="valeur1"><span></span></span><strong>Unité</strong><span class="plus2" onclick="nextNum1()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt1">2000 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
                
                
            </div>
</aside>
                                       
                                <div class="produits-box js-modal prod1" href="#modal1">
                                                    
                                                        <div class="produits-b-img js-modal prod1" href="#modal1">
                                                            <img src="images/Panier_Solo/Slide6.png" href="#modal1" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal1">
                                                           <strong style=" color: #15CD2B;"href="#modal1" class="js-modal prod2">panier Solo / Sauce de Fétri </strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal1" class="js-modal prod3"> <strong href="#modal1" class="js-modal"> 1 800 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal1">
                                                                     <span><strong> <u href="#modal1" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal1"><i class="fas fa-shopping-cart js-modal prod1" href="#modal1"></i></a> 
                                                               </div>
                                                       
                                      </div>
 <aside id="modal1" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Panier_Solo/Slide6.png">
                    <div class="designation">
                        <span class="nom2">panier Solo / Sauce de Fétri</span><br>
                       <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu1">1800</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum1()">-</span><span id="valeur1"><span></span></span><strong>Unité</strong><span class="plus2" onclick="nextNum1()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt1">1800 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
                
                
            </div>
</aside>
                                       
                                <div class="produits-box js-modal prod1" href="#modal1">
                                                    
                                                        <div class="produits-b-img js-modal prod1" href="#modal1">
                                                            <img src="images/Panier_Solo/Slide7.png" href="#modal1" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal1">
                                                           <strong style=" color: #15CD2B;"href="#modal1" class="js-modal prod2">panier Solo / Sauce d'Aubergine</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal1" class="js-modal prod3"> <strong href="#modal1" class="js-modal"> 1 500 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal1">
                                                                     <span><strong> <u href="#modal1" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal1"><i class="fas fa-shopping-cart js-modal prod1" href="#modal1"></i></a> 
                                                               </div>
                                                       
                                      </div>
 <aside id="modal1" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Panier_Solo/Slide7.png">
                    <div class="designation">
                        <span class="nom2">panier Solo / Sauce d'Aubergine </span><br>
                       <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu1">1500</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum1()">-</span><span id="valeur1"><span></span></span><strong>Unité</strong><span class="plus2" onclick="nextNum1()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt1">1500 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
                
                
            </div>
</aside>
                                                                     
                                    </div>

                        <!---------- 3eme container----------------------->

                           <div class="produits-container">
                                       
                                <div class="produits-box js-modal prod1" href="#modal1">
                                                    
                                                        <div class="produits-b-img js-modal prod1" href="#modal1">
                                                            <img src="images/Panier_Solo/Slide8.png" href="#modal1" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal1">
                                                           <strong style=" color: #15CD2B;"href="#modal1" class="js-modal prod2">panier Solo /Pomme de terre entrée  </strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal1" class="js-modal prod3"> <strong href="#modal1" class="js-modal"> 2 500 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal1">
                                                                     <span><strong> <u href="#modal1" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal1"><i class="fas fa-shopping-cart js-modal prod1" href="#modal1"></i></a> 
                                                               </div>
                                                       
                                      </div>
 <aside id="modal1" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Panier_Solo/Slide8.png">
                    <div class="designation">
                        <span class="nom2">panier Solo / Pomme de terre entrée </span><br>
                       <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu1">2500</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum1()">-</span><span id="valeur1"><span></span></span><strong>Unité</strong><span class="plus2" onclick="nextNum1()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt1">2500 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
                
                
            </div>
</aside>
                                       
                                <div class="produits-box js-modal prod1" href="#modal1">
                                                    
                                                        <div class="produits-b-img js-modal prod1" href="#modal1">
                                                            <img src="images/Panier_Solo/Slide9.png" href="#modal1" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal1">
                                                           <strong style=" color: #15CD2B;"href="#modal1" class="js-modal prod2">panier Solo / Salade de laitues  </strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal1" class="js-modal prod3"> <strong href="#modal1" class="js-modal"> 2 200 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal1">
                                                                     <span><strong> <u href="#modal1" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal1"><i class="fas fa-shopping-cart js-modal prod1" href="#modal1"></i></a> 
                                                               </div>
                                                       
                                      </div>
 <aside id="modal1" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Panier_Solo/Slide9.png">
                    <div class="designation">
                        <span class="nom2">panier Solo / Salade de laitues </span><br>
                       <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu1">2200</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum1()">-</span><span id="valeur1"><span></span></span><strong>Unité</strong><span class="plus2" onclick="nextNum1()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt1">2200 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
                
                
            </div>
</aside>
                                       
                                <div class="produits-box js-modal prod1" href="#modal1">
                                                    
                                                        <div class="produits-b-img js-modal prod1" href="#modal1">
                                                            <img src="images/Panier_Solo/Slide10.png" href="#modal1" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal1">
                                                           <strong style=" color: #15CD2B;"href="#modal1" class="js-modal prod2">panier Solo / Salade de choux </strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal1" class="js-modal prod3"> <strong href="#modal1" class="js-modal"> 2 000 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal1">
                                                                     <span><strong> <u href="#modal1" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal1"><i class="fas fa-shopping-cart js-modal prod1" href="#modal1"></i></a> 
                                                               </div>
                                                       
                                      </div>
 <aside id="modal1" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Panier_Solo/Slide10.png">
                    <div class="designation">
                        <span class="nom2">panier Solo / Salade de choux </span><br>
                       <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu1">2000</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum1()">-</span><span id="valeur1"><span></span></span><strong>Unité</strong><span class="plus2" onclick="nextNum1()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt1">2000 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
                
                
            </div>
</aside>
            
                                                    </div>


                        </li>
					    <div class="bas-de-page2">
                   
                    <div class="bas-div22">
                      <div class="bas-div212"><a href="Mon panier.php" class="a" >Votre panier</a></div>
                      <a href="Mon panier.php" class="shopping-cart">
                              <i class="fas fa-shopping-cart"></i>
                        </a>  
                    </div>
                    
                  </div>
                  
           </div>
				    </div>
           </div>
		</section>


<?php include("../includes/footer.php");?>
<script src="js/solo.js" ></script>
<script src="js/JQuery.js"></script>
<script src="js/lightslider.js"></script>
</body>
</html>