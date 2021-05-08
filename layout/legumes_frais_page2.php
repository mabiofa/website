
<!DOCTYPE html>
<html>
<head>
  <title>Mabiofa Eden</title>
  <!------icons fontawsome----->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/lightslider.css">
  <!------liens js----->
  
  <!------icon du titre----->
  <link rel="shortcut icon"  href="images/Accueil-contact/Logo-fleure-supermarché.png">
  <!------feuilles de styles css----->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/styl.css">
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="css/slick.css">
</head>
<body>
  <?php include("../includes/header.php");?>


  <!-- section  Nos produits----->

  <section id="produits" >
    <div class="produits-headings">
        <h1 class="produits-heading"><strong>NOS PRODUITS</strong></h1>
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
                    

                      <li class="nav-text title" id="li-block">
                      <a href="#">Légumes </a>
                      <ul class="sous_menu2" id="compte-sous-menu2">
                             <li class="nav-text2" ><a href="legumes.php">Frais</a></li>
                             <li class="nav-text2"><a href="Légume de conserve.php">Conserves</a></li>
                          </ul>
                    </li>

                      <li class="nav-text title" id="li-block">
                      <a href="#">Epiceries</a>
                      <ul class="sous_menu2" id="compte-sous-menu2">
                             <li class="nav-text2" ><a href="epicerie.php">Condiments</a></li>
                             <li class="nav-text2"><a href="Huile bio.php">Huiles bio</a></li>
                             
                            
                          </ul>
                    </li>

                    <li class="nav-text"><a href="viande.php">Viandes</a></li>

                      <li class="nav-text title" id="li-block">
                      <a href="#">boulangerie </a>
                      <ul class="sous_menu2" id="compte-sous-menu2">
                             <li class="nav-text2" ><a href="boulangerie Pain.php">Pain</a></li>
                             <li class="nav-text2"><a href="boulangerie confiture-chocolat.php">Confiture & chocolat </a></li>
                          <li class="nav-text2"><a href="boulangerie Appéritif bio.php">Apéritif bio</a></li>
                          </ul>
                    </li>

                     <li class="nav-text"><a href="fruit.php">Fruits</a></li>
                   
                      <li class="nav-text title" id="li-block">
                      <a href="#">Végétaux </a>
                      <ul class="sous_menu2" id="compte-sous-menu2">
                             <li class="nav-text2" ><a href="vegetaux.php">Frais</a></li>
                             <li class="nav-text2"><a href="vegetaux Sec.php">Secs</a></li>
                          </ul>
                    </li>

                    <li class="nav-text"><a href="cereales.php">Céréales</a></li>
                    <li class="nav-text"><a href="tubercules.php">Tubercules</a></li>

                    <li class="nav-text title" id="li-block">
                      <a href="#">Boissons</a>
                      <ul class="sous_menu2" id="compte-sous-menu2">
                             <li class="nav-text2" ><a href="jus.php">jus de fruits</a></li>
                             <li class="nav-text2"><a href="Café & thé infusion.php">Café, Thé, infusion</a></li>
                             <li class="nav-text2"><a href="sirop-laiterie.php">Sirop & laiterie</a></li>
                             <li class="nav-text2"><a href="vin.php">Vins-Alcool</a></li>
                          </ul>
                    </li>

                    <li class="nav-text title" id="li-block">
                      <a href="#">Sante</a>
                      <ul class="sous_menu2" id="compte-sous-menu2">
                             <li class="nav-text2" ><a href="Santé-pharmabio.php">Pharmacie bio</a></li>
                             <li class="nav-text2"><a href="Santé-herbe médécinales.php">Herbes medicales</a></li>
                       
                          </ul>
                    </li>

                    <li class="nav-text title" id="li-block">
                      <a href="#">Entretient </a>
                      <ul class="sous_menu3" id="compte-sous-menu2">
                             <li class="nav-text2" ><a href="Beautè et Hygiène.php">Beauté et Hygiène</a></li>
                             <li class="nav-text2"><a href="Savons.php">Savons</a></li>
                             <li class="nav-text2"><a href="Huiles essentiels.php">Huiles essentiels</a></li>
                             <li class="nav-text2"><a href="Matériels ménages.php">Matériels de ménage</a></li>
                            
                          </ul>
                    </li>

                    <li class="nav-text title" id="li-block">
                      <a href="#">Maison </a>
                      <ul class="sous_menu3" id="compte-sous-menu2">
                             <li class="nav-text2" ><a href="Ustensiles.php">Ustensiles</a></li>
                             <li class="nav-text2"><a href="Appareillages.php">Appareillages</a></li>
                             <li class="nav-text2"><a href="Meubles.php">Meubles</a></li>
                          </ul>
                    </li>
            </ul>
      
     </div>
     <div class="second-toggle">
     <div class="categorie2">
      <div class="hamburger">
        <div class="line"></div>
         <div class="line"></div>
          <div class="line"></div>
      </div>
        <ul class="prod-menu2">
                    <li class="nav-texts"><a href="#">Légumes</a></li>
                    <li class="nav-texts"><a href="epicerie.php">Epiceries</a></li>
                    <li class="nav-texts"><a href="viande.php">Viandes</a></li>
                    <li class="nav-texts"><a href="boulangerie.php">boulangerie</a></li>
                     <li class="nav-texts"><a href="fruit.php">Fruits</a></li>
                     <li class="nav-texts"><a href="vegetaux.php">Végétaux</a></li>
                    <li class="nav-texts"><a href="cereales.php">Céréales</a></li>
                    <li class="nav-texts"><a href="tubercules.php">Tubercules</a></li>
                    <li class="nav-texts" ><a href="jus.php">jus</a></li>
                    <li class="nav-texts"><a href="vin.php">Vins</a></li>
                    <li class="nav-texts"><a href="divers.php">Divers</a></li>
            </ul>
      
     </div>
   </div>
    <div class="afterhead">
        <nav class="cdg1">
                          <div class="cdgmenusolo">
                                <div class="cdgmenusolotitre"><h2 class="menustitle">Menu Solo</h2></div>
                                    <ul class="prod-menu">
                    

                      <li class="nav-text title" id="li-block">
                      <a href="#">Légumes </a>
                      <ul class="sous_menu4" id="compte-sous-menu2">
                              <li class="nav-text2" ><a href="legumes.php">Frais</a></li>
                             <li class="nav-text2"><a href="Légume de conserve.php">Conserves</a></li>
                          </ul>
                    </li>

                      <li class="nav-text title" id="li-block">
                      <a href="#">Epiceries </a>
                      <ul class="sous_menu4" id="compte-sous-menu2">
                             <li class="nav-text2" ><a href="epicerie.php">Condiments</a></li>
                             <li class="nav-text2"><a href="Huile bio.php">Huiles bio</a></li>
                            
                          </ul>
                    </li>

                    <li class="nav-text"><a href="viande.php">Viandes</a></li>

                      <li class="nav-text title" id="li-block">
                      <a href="#">boulangerie </a>
                      <ul class="sous_menu4" id="compte-sous-menu2">
                             <li class="nav-text2" ><a href="boulangerie Pain.php">Pain</a></li>
                             <li class="nav-text2"><a href="boulangerie confiture-chocolat.php">Confiture & chocolat </a></li>
                          <li class="nav-text2"><a href="boulangerie Appéritif bio.php">Apéritif bio</a></li>
                          </ul>
                    </li>

                     <li class="nav-text"><a href="fruit.php">Fruits</a></li>
                   
                      <li class="nav-text title" id="li-block">
                      <a href="#">Végétaux </a>
                      <ul class="sous_menu4" id="compte-sous-menu2">
                              <li class="nav-text2" ><a href="vegetaux.php">Frais</a></li>
                             <li class="nav-text2"><a href="vegetaux Sec.php">Secs</a></li>
                          </ul>
                    </li>

                    <li class="nav-text"><a href="cereales.php">Céréales</a></li>
                    <li class="nav-text"><a href="tubercules.php">Tubercules</a></li>

                    <li class="nav-text title" id="li-block">
                      <a href="#">Boissons</a>
                      <ul class="sous_menu4" id="compte-sous-menu2">
                             <li class="nav-text2" ><a href="jus.php">jus de fruits</a></li>
                             <li class="nav-text2"><a href="Café & thé infusion.php">Café, Thé, infusion</a></li>
                             <li class="nav-text2"><a href="sirop-laiterie.php">Sirop & laiterie</a></li>
                             <li class="nav-text2"><a href="vin.php">Vins-Alcool</a></li>
                          </ul>
                    </li>

                    <li class="nav-text title" id="li-block">
                      <a href="#">Sante</a>
                      <ul class="sous_menu4" id="compte-sous-menu2">
                             <li class="nav-text2" ><a href="Santé-pharmabio.php">Pharma bio</a></li>
                             <li class="nav-text2"><a href="Santé-herbe médécinales.php">Herbes medicales</a></li>
                       
                          </ul>
                    </li>

                    <li class="nav-text title" id="li-block">
                      <a href="#">Entretient </a>
                      <ul class="sous_menu4" id="compte-sous-menu2">
                             <li class="nav-text2" ><a href="Beautè et Hygiène.php">Beauté et Hygiène</a></li>
                             <li class="nav-text2"><a href="Savons.php">Savons</a></li>
                             <li class="nav-text2"><a href="Huiles essentiels.php">Huiles essentiels</a></li>
                             <li class="nav-text2"><a href="Matériels ménages.php">Matériels de ménage</a></li>
                            
                          </ul>
                    </li>

                    <li class="nav-text title" id="li-block">
                      <a href="#">Maison </a>
                      <ul class="sous_menu4" id="compte-sous-menu2">
                             <li class="nav-text2" ><a href="Ustensiles.php">Ustensiles</a></li>
                             <li class="nav-text2"><a href="Appareillages.php">Appareillages</a></li>
                             <li class="nav-text2"><a href="Meubles.php">Meubles</a></li>
                          </ul>
                    </li>
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
                                            <img src="images/légumes/b6ad6020c6c8.jpeg"  width="100%"height="220px" Align="center">
                               
                                        </div>
                            <div class="promotion">
                                        <h2 class="menustitle">As tu Visité Nos Packs ?</h2>
                                        <div class="container">
                                            <img src="images/légumes/12-unids-set-ABS-Pl-stico-Vegetal-m-quina-de-Cortar-Rallador-de-Verduras-Herramienta-Gadget_3_580x580.jpg"  width="100%"height="220px" Align="center">
                               
                            </div>
                    </div>
            </nav>
         <!---------- section produits-------->
                <div class="products">



 

<aside id="modal6" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/légumes/haricot_vert4.jfif">
                    <div class="designation">
                        <span class="nom2">Haricot vert (1/2Kg)</span><br>
                       <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu6">600</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum6()">-</span><span id="valeur6"><span></span></span><strong>KG</strong><span class="plus2" onclick="nextNum6()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt6">600 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
<aside id="modal7" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                     <img src="images/légumes/petit pois1.jfif">
                    <div class="designation">
                        <span class="nom2">Petit pois (1/2Kg)</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu7">500</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum7()">-</span><span id="valeur7"><span></span></span><strong>KG</strong><span class="plus2" onclick="nextNum7()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt7">500 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
<aside id="modal8" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/légumes/Laitues.jpeg">
                    <div class="designation">
                        <span class="nom2">laitue (1pieds)</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu8">150</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite"> Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum8()">-</span><span id="valeur8"><span></span></span><strong>pieds</strong><span class="plus2" onclick="nextNum8()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt8">150 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close ">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
<aside id="modal9" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/légumes/courgettes2.jfif">
                    <div class="designation">
                        <span class="nom2">Courgettes (1Kg)</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu9">700</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibiliten"> Non Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum9()">-</span><span id="valeur9"><span></span></span><strong>KG</strong><span class="plus2" onclick="nextNum9()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt9">700 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout none"></div>
                    <div class="fermer js-modal-close ">FERMER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>

<aside id="modal15" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                   <img src="images/légumes/Tomates6.jpg">
                    <div class="designation">
                        <span class="nom2">Tomates Mongales (1/2Kg)</span><br>
                    <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu15">900</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibiliten">Non Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum15()">-</span><span id="valeur15"><span></span></span><strong>KG</strong></span><span class="plus2" onclick="nextNum15()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt15">900 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout none"></div>
                    <div class="fermer js-modal-close ">FERMER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>

<aside id="modal18" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/légumes/Célérise.jpg">
                    <div class="designation">
                        <span class="nom2">Céleris (1/2Kg)</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu18">500</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibiliten"> Non Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum18()">-</span><span id="valeur18"><span></span></span><strong>KG</strong><span class="plus2" onclick="nextNum18()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt18">500  </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout none"></div>
                    <div class="fermer js-modal-close ">FERMER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>


            
            <li class="item-a">

        <!---------- 1er container----------------------->


                   <div class="produits-container">
                                   
                              <div class="produits-box js-modal prod1" href="#modal7">
                                                    
                                                <div class="produits-b-img js-modal prod1" href="#modal7">
                                                      <img src="images/légumes/petit pois1.jfif" href="#modal7" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal7">
                                                            <strong style=" color: #15CD2B; "href="#modal7" class="js-modal prod2">Petit pois (1/2Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal7" class="js-modal prod3"> <strong href="#modal4" class="js-modal">500 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal7">
                                                                     <span><strong> <u href="#modal7" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal7"><i class="fas fa-shopping-cart js-modal prod1" href="#modal7"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>

                            <div class="produits-box js-modal prod1" href="#modal8">
                                                    
                                               <div class="produits-b-img js-modal prod1" href="#modal8">
                                                    <img src="images/légumes/Laitues.jpeg" href="#modal8" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal8">
                                                            <strong style=" color: #15CD2B; "href="#modal8" class="js-modal prod2">laitue (1pieds)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal8" class="js-modal prod3"> <strong href="#modal8" class="js-modal"> 150 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal8">
                                                                     <span><strong> <u href="#modal8" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal8"><i class="fas fa-shopping-cart js-modal prod1" href="#modal8"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>

                                                    
                                    </div>

                <!---------- 2eme container----------------------->


                        <div  class="produits-container">
                                    

         <div class="produits-box js-modal prod1" href="#modal6">
                                                    
                                                <div class="produits-b-img js-modal prod1" href="#modal6">
                                                       <img src="images/légumes/haricot_vert4.jfif" href="#modal6" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal6">
                                                            <strong style=" color: #15CD2B; "href="#modal6" class="js-modal prod2">Haricot vert (1/2Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal6" class="js-modal prod3"> <strong href="#modal6" class="js-modal"> 600 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal4">
                                                                     <span><strong> <u href="#modal6" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal6"><i class="fas fa-shopping-cart js-modal prod1" href="#modal6"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>

         
                        
                                    </div>

                        <!---------- 3eme container----------------------->

                            <div  class="produits-container">
                                                                
                                        <div class="produits-box js-modal prod1" href="#modal9">
                                                    
                                                 <div class="produits-b-img js-modal prod1" href="#modal9">
                                                       <img src="images/légumes/courgettes2.jfif" href="#modal9" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal9">
                                                            <strong style=" color: #15CD2B; "href="#modal9" class="js-modal prod2">Courgettes (1Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal9" class="js-modal prod3"> <strong href="#modal9" class="js-modal"> 700 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stockr js-modal prod1" href="#modal9">
                                                                     <span><strong> <u href="#modal9" class="js-modal">Non en stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal9"><i class="fas fa-shopping-cart js-modal prod1" href="#modal9"></i></a> 
                                                               </div>
                                                        </a>
                                                   </div>

        
                        
                                                    </div>

                                 <!---------- 4eme container----------------------->

                        <div  class="produits-container">
                                                                
                                <div class="produits-box js-modal prod1" href="#modal15">
                                                    
                                                <div class="produits-b-img js-modal prod1" href="#modal15">
                                                       <img src="images/légumes/Tomates6.jpg" href="#modal15" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal15">
                                                            <strong style=" color: #15CD2B; "href="#modal15" class="js-modal prod2">Tomates Mongales (1/2Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal15" class="js-modal prod3"> <strong href="#modal15" class="js-modal"> 900 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stockr js-modal prod1" href="#modal15">
                                                                     <span><strong> <u href="#modal15" class="js-modal">Non en stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal15"><i class="fas fa-shopping-cart js-modal prod1" href="#modal15"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>

      

                                    </div>
                            <!---------- 5eme container----------------------->
                        <div  class="produits-container">
                                                                        
                                                                
                                 

         <div class="produits-box js-modal prod1" href="#modal18">
                                                    
                                                <div class="produits-b-img js-modal prod1" href="#modal18">
                                                       <img src="images/légumes/Célérise.jpg" href="#modal18" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal18">
                                                            <strong style=" color: #15CD2B; "href="#modal18" class="js-modal prod2">Céleris (1/2Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal18" class="js-modal prod3"> <strong href="#modal18" class="js-modal"> 500 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stockr js-modal prod1" href="#modal18">
                                                                     <span><strong> <u href="#modal18" class="js-modal">Non en stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal18"><i class="fas fa-shopping-cart js-modal prod1" href="#modal18"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>

        

                        </li>





   <!------------------------ partie mobile-------------------------->
   




       <li class="item-a2">

        <!---------- 1er container----------------------->


                   <div class="produits-container">
                                       
                               
         <div class="produits-box js-modal prod1" href="#modal6">
                                                    
                                                <div class="produits-b-img js-modal prod1" href="#modal6">
                                                       <img src="images/légumes/haricot_vert4.jfif" href="#modal6" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal6">
                                                            <strong style=" color: #15CD2B; "href="#modal6" class="js-modal prod2">Haricot vert (1/2Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal6" class="js-modal prod3"> <strong href="#modal6" class="js-modal"> 600 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal4">
                                                                     <span><strong> <u href="#modal6" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal6"><i class="fas fa-shopping-cart js-modal prod1" href="#modal6"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>
  
         <div class="produits-box js-modal prod1" href="#modal7">
                                                    
                                                <div class="produits-b-img js-modal prod1" href="#modal7">
                                                      <img src="images/légumes/petit pois1.jfif" href="#modal7" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal7">
                                                            <strong style=" color: #15CD2B; "href="#modal7" class="js-modal prod2">Petit pois (1/2Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal7" class="js-modal prod3"> <strong href="#modal4" class="js-modal">500 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal7">
                                                                     <span><strong> <u href="#modal7" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal7"><i class="fas fa-shopping-cart js-modal prod1" href="#modal7"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>
</div>

                <!---------- 2eme container----------------------->


                        <div  class="produits-container">
         <div class="produits-box js-modal prod1" href="#modal8">
                                                    
                                               <div class="produits-b-img js-modal prod1" href="#modal8">
                                                    <img src="images/légumes/Laitues.jpeg" href="#modal8" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal8">
                                                            <strong style=" color: #15CD2B; "href="#modal8" class="js-modal prod2">laitue (1pieds)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal8" class="js-modal prod3"> <strong href="#modal8" class="js-modal"> 150 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal8">
                                                                     <span><strong> <u href="#modal8" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal8"><i class="fas fa-shopping-cart js-modal prod1" href="#modal8"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>

                                                                            
                                   
                                                                
                                        <div class="produits-box js-modal prod1" href="#modal9">
                                                    
                                                 <div class="produits-b-img js-modal prod1" href="#modal9">
                                                       <img src="images/légumes/courgettes2.jfif" href="#modal9" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal9">
                                                            <strong style=" color: #15CD2B; "href="#modal9" class="js-modal prod2">Courgettes (1Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal9" class="js-modal prod3"> <strong href="#modal9" class="js-modal"> 700 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stockr js-modal prod1" href="#modal9">
                                                                     <span><strong> <u href="#modal9" class="js-modal">Non en stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal9"><i class="fas fa-shopping-cart js-modal prod1" href="#modal9"></i></a> 
                                                               </div>
                                                        </a>
                                                   </div>
     

 </div>

                        <!---------- 3eme container----------------------->

                            <div  class="produits-container">
         <div class="produits-box js-modal prod1" href="#modal15">
                                                    
                                                <div class="produits-b-img js-modal prod1" href="#modal15">
                                                       <img src="images/légumes/Tomates6.jpg" href="#modal15" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal15">
                                                            <strong style=" color: #15CD2B; "href="#modal15" class="js-modal prod2">Tomates Mongales (1/2Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal15" class="js-modal prod3"> <strong href="#modal15" class="js-modal"> 900 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stockr js-modal prod1" href="#modal15">
                                                                     <span><strong> <u href="#modal15" class="js-modal">Non en stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal15"><i class="fas fa-shopping-cart js-modal prod1" href="#modal15"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>

         <div class="produits-box js-modal prod1" href="#modal15">
                                                    
                                                <div class="produits-b-img js-modal prod1" href="#modal15">
                                                       <img src="images/légumes/Célérise.jpg" href="#modal15" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal15">
                                                            <strong style=" color: #15CD2B; "href="#modal15" class="js-modal prod2">Céleris (1/2Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal15" class="js-modal prod3"> <strong href="#modal15" class="js-modal"> 500 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stockr js-modal prod1" href="#modal15">
                                                                     <span><strong> <u href="#modal15" class="js-modal">Non en stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal15"><i class="fas fa-shopping-cart js-modal prod1" href="#modal15"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>

       
                                                                    
                                    </div>

                        </li>       
                     
           <div class="bas-de-page">
                    <div class="ul-div">
                      <ul>
                        <li class="checked"><a href="legumes_frais.php"><strong><<</strong></a></li>
                       <li class="check"><a href="legumes_frais.php">1</a></li>
                        <li class="checked"><a href="#">2</a></li>
                       
                      </ul>
                    </div>
                     <div class="bas-div2">
                      <div class="bas-div21"> <a href="Mon panier.php" class="a">Votre panier</div>
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
<script src="js/legumes2.js" ></script>
 <script >

 </script>
<script src="js/JQuery.js"></script>
<script src="js/lightslider.js"></script>
</body>
</html>