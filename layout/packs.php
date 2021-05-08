<!DOCTYPE html>
<html>
<head>
	<title>Biofarm Eden</title>
	<!------icons fontawsome----->
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!------liens js----->
	
	<!------icon du titre----->
	<link rel="shortcut icon"  href="/images/Logo supermarché.png">
	<!------feuilles de styles css----->
	
	
	<link rel="stylesheet" type="text/css" href="css/extra.css">
</head>
<body>
	<?php include("../includes/header.php");?>


	<!-- section  Nos produits----->

	<section id="produits" >
		<div class="produits-headings">
				<h1 class="produits-heading"><strong>NOS PACKS</strong></h1>
				<!-- bouton de recherche---->
				 <form style="align-self: right;">
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
                    <li class="nav-text"><a href="panier-solo.php">Panier Solo</a></li>
                     <li class="nav-text1"><a href="#">Packs</a></li>
                   
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
                                            <img src="images/Boissons/jus/jus-de-fruits-1.jpg"  width="100%"height="220px" Align="center">
                               
                                        </div>
                            <div class="promotion">
                                        <h2 class="menustitle">As tu Visité Nos Packs ?</h2>
                                        <div class="container">
                                            <img src="images/Boissons/jus/depositphotos_48435991-stock-photo-fresh-juice-mix-fruit.jpg"  width="100%"height="220px" Align="center">
                               
                               
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
                                  <img src="images/Packs_menu_extra/PACK AUBERGINES.jpg" href="#modal1" class="js-modal prod1">
                                                        </div>
                                         <div class="produits-b-text js-modal prod1" href="#modal1">
                                                 <strong style=" color: #15CD2B; "href="#modal1" class="js-modal prod2">PACK AUBERGINES</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal1" class="js-modal prod3"> <strong href="#modal1" class="js-modal"> 400 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal1">
                                                                     <span><strong> <u href="#modal1" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal1"><i class="fas fa-shopping-cart js-modal prod1" href="#modal1"></i></a> 
                                                               </div>
                                                       
                                      </div>
 <aside id="modal1" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Packs_menu_extra/PACK AUBERGINES.jpg">
                    <div class="designation">
                        <span class="nom2">PACK AUBERGINES</span><br>
                       <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu1">400</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum1()">-</span><span id="valeur1"><span></span></span><strong>poulet</strong><span class="plus2" onclick="nextNum1()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt1">400 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
                
                
            </div>
</aside>
                                       
                                      <div class="produits-box js-modal prod1" href="#modal2">
                                                    
                                                  <div class="produits-b-img js-modal prod1" href="#modal2">
                                                       <img src="images/Packs_menu_extra/PACK LEGUMES EDEN1.jpg" href="#modal2" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal2">
                                                            <strong style=" color: #15CD2B; "href="#modal2" class="js-modal prod2">PACK LEGUMES EDEN 1 </strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal2" class="js-modal prod3"> <strong href="#modal2" class="js-modal"> 400 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal2">
                                                                     <span><strong> <u href="#modal2" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal2"><i class="fas fa-shopping-cart js-modal prod1" href="#modal2"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>
<aside id="modal2" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Packs_menu_extra/PACK LEGUMES EDEN1.jpg">
                    <div class="designation">
                        <span class="nom2">PACK LEGUMES EDEN 1</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu2">400</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum2()">-</span><span id="valeur2"><span></span></span><strong>poulet</strong><span class="plus2" onclick="nextNum2()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix"id="pt2">400 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    
                    <div class="panier-ajout js-modal-close ">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>

                                     <div class="produits-box js-modal prod1" href="#modal3">
                                                    
                                                 <div class="produits-b-img js-modal prod1" href="#modal3">
                                                         <img src="images/Packs_menu_extra/PACK FRUITS EDEN1.jpg" href="#modal3" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal3">
                                                            <strong style=" color: #15CD2B; "href="#modal3" class="js-modal prod2">PACK FRUIT EDEN 1 </strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal3" class="js-modal prod3"> <strong href="#modal3" class="js-modal"> 400 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal3">
                                                                     <span><strong> <u href="#modal2" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal3"><i class="fas fa-shopping-cart js-modal prod1" href="#modal3"></i></a> 
                                                               </div>
                                                        </a>
                                                  </div>
<aside id="modal3" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Packs_menu_extra/PACK FRUITS EDEN1.jpg">
                    <div class="designation">
                        <span class="nom2">PACK FRUIT EDEN 1 </span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu3">400</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum3()">-</span><span id="valeur3"><span></span></span><strong>KG</strong><span class="plus2" onclick="nextNum3()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt3">400 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
                                    <div class="produits-box js-modal prod1" href="#modal5">
                                                    
                                            <div class="produits-b-img js-modal prod1" href="#modal5">
                                                <img src="images/Packs_menu_extra/PACK PIMENTS.jpg" href="#modal5" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal5">
                                                            <strong style=" color: #15CD2B;"href="#modal5" class="js-modal prod2">PACK PIMENTS</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal5" class="js-modal prod3"> <strong href="#modal5" class="js-modal"> 900 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal5">
                                                                     <span><strong> <u href="#modal5" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal5"><i class="fas fa-shopping-cart js-modal prod1" href="#modal5"></i></a> 
                                                               </div>
                                                        </a>
                                                   </div>
<aside id="modal5" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                   <img src="images/Packs_menu_extra/PACK PIMENTS.jpg">
                    <div class="designation">
                        <span class="nom2">PACK PIMENTS</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu5">400</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum5()">-</span><span id="valeur5"><span></span></span><strong>poulet</strong><span class="plus2" onclick="nextNum5()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt5">400 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>


         <div class="produits-box js-modal prod1" href="#modal6">
                                                    
                                                <div class="produits-b-img js-modal prod1" href="#modal6">
                                                       <img src="images/Packs_menu_extra/PACK CHOUX.jpg" href="#modal6" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal6">
                                                            <strong style=" color: #15CD2B; "href="#modal6" class="js-modal prod2">PACK CHOUX</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal6" class="js-modal prod3"> <strong href="#modal6" class="js-modal"> 400 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal4">
                                                                     <span><strong> <u href="#modal6" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal6"><i class="fas fa-shopping-cart js-modal prod1" href="#modal6"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>
<aside id="modal6" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Packs_menu_extra/PACK CHOUX.jpg">
                    <div class="designation">
                        <span class="nom2">PACK CHOUX</span><br>
                       <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu6">400</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum6()">-</span><span id="valeur6"><span></span></span><strong>plateau</strong><span class="plus2" onclick="nextNum6()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt6">400 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>

                                                    </div>

       


                        <div  class="produits-container">
         <div class="produits-box js-modal prod1" href="#modal7">
                                                    
                                                <div class="produits-b-img js-modal prod1" href="#modal7">
                                                      <img src="images/Packs_menu_extra/PACK FRUITS EDEN2.jpg" href="#modal7" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal7">
                                                            <strong style=" color: #15CD2B; "href="#modal7" class="js-modal prod2">PACK AUBERGINES</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal7" class="js-modal prod3"> <strong href="#modal4" class="js-modal"> 1200 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal7">
                                                                     <span><strong> <u href="#modal7" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal7"><i class="fas fa-shopping-cart js-modal prod1" href="#modal7"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>
<aside id="modal7" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                     <img src="images/Packs_menu_extra/PACK FRUITS EDEN2.jpg">
                    <div class="designation">
                        <span class="nom2">PACK AUBERGINES</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu7">400</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum7()">-</span><span id="valeur7"><span></span></span><strong>KG</strong><span class="plus2" onclick="nextNum7()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt7">400 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
        
                                                                            
                               
                                                                
                                        <div class="produits-box js-modal prod1" href="#modal9">
                                                    
                                                 <div class="produits-b-img js-modal prod1" href="#modal9">
                                            <img src="images/Packs_menu_extra/PACK TUBERCULES.jpg" href="#modal9" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal9">
                                                            <strong style=" color: #15CD2B;"href="#modal9" class="js-modal prod2">PACK AUBERGINES</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal9" class="js-modal prod3"> <strong href="#modal9" class="js-modal"> 400 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal9">
                                                                     <span><strong> <u href="#modal9" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal9"><i class="fas fa-shopping-cart js-modal prod1" href="#modal9"></i></a> 
                                                               </div>
                                                        </a>
                                                   </div>
<aside id="modal9" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Packs_menu_extra/PACK TUBERCULES.jpg">
                    <div class="designation">
                        <span class="nom2">PACK AUBERGINES</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu9">400</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum9()">-</span><span id="valeur9"><span></span></span><strong>KG</strong><span class="plus2" onclick="nextNum9()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt9">400 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="none"></div>
                    <div class="panier-ajout  js-modal-close ">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
         <div class="produits-box js-modal prod1" href="#modal10">
                                                    
                                              <div class="produits-b-img js-modal prod1" href="#modal10">
                                                    <img src="images/Packs_menu_extra/pack pommes.jpg" href="#modal10" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal10">
                                                            <strong style=" color: #15CD2B; "href="#modal10" class="js-modal prod2">PACK AUBERGINES</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal10" class="js-modal prod3"> <strong href="#modal10" class="js-modal"> 400 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal10">
                                                                     <span><strong> <u href="#modal10" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal10"><i class="fas fa-shopping-cart js-modal prod1" href="#modal10"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>
<aside id="modal10" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                     <img src="images/Packs_menu_extra/pack pommes.jpg">
                    <div class="designation">
                        <span class="nom2">PACK AUBERGINES</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu10">400</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum10()">-</span><span id="valeur10"><span></span></span><strong>pintade</strong><span class="plus2" onclick="nextNum10()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt10">400 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
         <div class="produits-box js-modal prod1" href="#modal11">
                                                    
                                             <div class="produits-b-img js-modal prod1" href="#modal11">
                                                      <img src="images/Packs_menu_extra/Pack Aubergine.jpg" href="#modal11" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal11">
                                                            <strong style=" color: #15CD2B; "href="#modal11" class="js-modal prod2">PACK AUBERGINES</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal11" class="js-modal prod3"> <strong href="#modal11" class="js-modal"> 400 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal11">
                                                                     <span><strong> <u href="#modal11" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal11"><i class="fas fa-shopping-cart js-modal prod1" href="#modal11"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>
<aside id="modal11" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Packs_menu_extra/Pack Aubergine.jpg">
                    <div class="designation">
                        <span class="nom2">PACK AUBERGINES</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu11">400</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum11()">-</span><span id="valeur11"><span></span></span><strong>KG</strong><span class="plus2" onclick="nextNum11()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt11">400 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
                   
                                                 
                                                                
                                <div class="produits-box js-modal prod1" href="#modal13">
                                                    
                                               <div class="produits-b-img js-modal prod1" href="#modal13">
                                                    <img src="images/Packs_menu_extra/Pack Aubergine.jpg" href="#modal13" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal13">
                                                            <strong style=" color: #15CD2B; "href="#modal13" class="js-modal prod2">PACK AUBERGINES</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal13" class="js-modal prod3"> <strong href="#modal13" class="js-modal"> 400 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal13">
                                                                     <span><strong> <u href="#modal13" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal13"><i class="fas fa-shopping-cart js-modal prod1" href="#modal13"></i></a> 
                                                               </div>
                                                        </a>
                                                   </div>
<aside id="modal13" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Packs_menu_extra/Pack Aubergine.jpg" href="#modal13">
                    <div class="designation">
                        <span class="nom2">PACK AUBERGINES</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu13">400</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum13()">-</span><span id="valeur13"><span></span></span><strong>KG</strong><span class="plus2" onclick="nextNum13()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt13">400 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
    </div>

                        <!---------- 3eme container----------------------->

                            <div  class="produits-container">
         <div class="produits-box js-modal prod1" href="#modal14">
                                                    
                                                        <div class="produits-b-img js-modal prod1" href="#modal14">
                                                            <img src="images/Packs_menu_extra/PACK TISANE1.jpg" href="#modal14" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal14">
                                                            <strong style=" color: #15CD2B; "href="#modal14" class="js-modal prod2">PACK AUBERGINES</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal14" class="js-modal prod3"> <strong href="#modal14" class="js-modal"> 400 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal14">
                                                                     <span><strong> <u href="#modal14" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal14"><i class="fas fa-shopping-cart js-modal prod1" href="#modal14"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>
<aside id="modal14" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Packs_menu_extra/PACK TISANE1.jpg">
                    <div class="designation">
                        <span class="nom2">PACK AUBERGINES</span><br>
                    <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu14">400</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum14()">-</span><span id="valeur14"><span></span></span><strong>U</strong><span class="plus2" onclick="nextNum14()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt14">400 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
         <div class="produits-box js-modal prod1" href="#modal15">
                                                    
                                                <div class="produits-b-img js-modal prod1" href="#modal15">
                                                       <img src="images/Packs_menu_extra/Pack Aubergine.jpg" href="#modal15" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal15">
                                                            <strong style=" color: #15CD2B; "href="#modal15" class="js-modal prod2">PACK AUBERGINES</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal15" class="js-modal prod3"> <strong href="#modal15" class="js-modal"> 400 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal15">
                                                                     <span><strong> <u href="#modal15" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal15"><i class="fas fa-shopping-cart js-modal prod1" href="#modal15"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>
<aside id="modal15" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                   <img src="images/Packs_menu_extra/Pack Aubergine.jpg">
                    <div class="designation">
                        <span class="nom2">PACK AUBERGINES</span><br>
                    <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu15">400</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite"> Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum15()">-</span><span id="valeur15"><span></span></span><strong>KG</strong></span><span class="plus2" onclick="nextNum15()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt15">400 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    
                    <div class="panier-ajout js-modal-close ">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
         
                                                
                                                                
                                    <div class="produits-box js-modal prod1" href="#modal17">
                                                    
                                                        <div class="produits-b-img js-modal prod1" href="#modal17">
                                                            <img src="images/Packs_menu_extra/Pack Aubergine.jpg" href="#modal17" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal17">
                                                            <strong style=" color: #15CD2B; "href="#modal17" class="js-modal prod2">PACK AUBERGINES</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal17" class="js-modal prod3"> <strong href="#modal17" class="js-modal"> 400 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal17">
                                                                     <span><strong> <u href="#modal17" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal17"><i class="fas fa-shopping-cart js-modal prod1" href="#modal17"></i></a> 
                                                               </div>
                                                        </a>
                                                   </div>
<aside id="modal17" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Packs_menu_extra/Pack Aubergine.jpg">
                    <div class="designation">
                        <span class="nom2">PACK AUBERGINES</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu17">400</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum17()">-</span><span id="valeur17"><span></span></span><strong>Kg</strong><span class="plus2" onclick="nextNum17()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt17">400</span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
         <div class="produits-box js-modal prod1" href="#modal18">
                                                    
                                                <div class="produits-b-img js-modal prod1" href="#modal18">
                                                       <img src="images/Packs_menu_extra/Pack Aubergine.jpg" href="#modal18" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal18">
                                                            <strong style=" color: #15CD2B; "href="#modal18" class="js-modal prod2">PACK AUBERGINES</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal18" class="js-modal prod3"> <strong href="#modal18" class="js-modal"> 400 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal18">
                                                                     <span><strong> <u href="#modal18" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal18"><i class="fas fa-shopping-cart js-modal prod1" href="#modal18"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>
<aside id="modal18" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Packs_menu_extra/Pack Aubergine.jpg">
                    <div class="designation">
                        <span class="nom2">PACK AUBERGINES</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu18">400</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">  Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum18()">-</span><span id="valeur18"><span></span></span><strong>U</strong><span class="plus2" onclick="nextNum18()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt18">400  </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    
                    <div class="panier-ajout js-modal-close ">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
 <div class="produits-box js-modal prod1" href="#modal19">
                                                    
                                                        <div class="produits-b-img js-modal prod1" href="#modal19">
                                                           <img src="images/Packs_menu_extra/Pack Aubergine.jpg" href="#modal19" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal19">
                                                            <strong style=" color: #15CD2B; "href="#modal19" class="js-modal prod2">PACK AUBERGINES</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal19" class="js-modal prod3"> <strong href="#modal19" class="js-modal"> 400 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal19">
                                                                     <span><strong> <u href="#modal19" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal19"><i class="fas fa-shopping-cart js-modal prod1" href="#modal19"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>
<aside id="modal19" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/Packs_menu_extra/Pack Aubergine.jpg" >
                    <div class="designation">
                        <span class="nom2">PACK AUBERGINES</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu19">400</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2 prev" onclick="prevNum19()">-</span><span id="valeur19"><span></span></span><strong>KG</strong><span class="plus2 next" onclick="nextNum19()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix"id="pt19">400</span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close panier-ajout">AJOUTER AU PANIER</div>
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
<script src="js/packs.js" ></script>
<script src="js/JQuery.js"></script>
<script src="js/lightslider.js"></script>
</body>
</html>