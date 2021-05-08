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
    <link rel="shortcut icon"  href="/images/Logo supermarché.png">
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
                                        <h2 class="menustitle">Boeuf bio</h2>
                                        
                                        <div class="container">
                                            <img src="images/viandes/boeuf.jpg">
                               
                                        </div>
                            <div class="promotion">
                                        <h2 class="menustitle">Porc bio</h2>
                                        <div class="container">
                                            <img src="images/viandes/porc.jpg">
                               
                            </div>
                            <div class="promotion">
                                      <p style=" text-align:justify; ">Nourris avec des aliments bio de la ferme et garantis non OGM, les génisses, les vaches et les bœufs, les poulets ,pintades... sont élevés en plein air pendant. ce qui permet de favoriser la biodiversité et de garantir non seulement nos sols mais aussi votre alimentation. </p> 
                               
                            </div>
                    </div>
            </nav>
         <!---------- section produits-------->
                 <div class="products">

<aside id="modal1" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/viandes/poulet-fermier.jpg">
                    <div class="designation">
                        <span class="nom2">poulet-fermier(≈ 02Kg)</span><br>
                       <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu1">3000</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum1()">-</span><span id="valeur1"><span></span></span><strong>poulet</strong><span class="plus2" onclick="nextNum1()">+</span>
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
<aside id="modal2" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/viandes/poulet locale vivant 3kg.jpg">
                    <div class="designation">
                        <span class="nom2">poulet fermier vivante</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu2">1800</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum2()">-</span><span id="valeur2"><span></span></span><strong>poulet</strong><span class="plus2" onclick="nextNum2()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix"id="pt2">1800 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    
                    <div class="panier-ajout js-modal-close ">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
<aside id="modal3" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/viandes/champignon-de-paris1.jpg">
                    <div class="designation">
                        <span class="nom2">champignon-de-paris 1Kg </span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu3">900</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum3()">-</span><span id="valeur3"><span></span></span><strong>KG</strong><span class="plus2" onclick="nextNum3()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt3">900 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
<aside id="modal5" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                   <img src="images/viandes/Poulet entier 2,5Kg.jfif">
                    <div class="designation">
                        <span class="nom2">Poulet Locale (≈ 03Kg)</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu5">900</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum5()">-</span><span id="valeur5"><span></span></span><strong>poulet</strong><span class="plus2" onclick="nextNum5()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt5">900 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
<aside id="modal6" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/viandes/plateau-d-oeufs-1.jpeg">
                    <div class="designation">
                        <span class="nom2">Plateau d'oeuf fermier</span><br>
                       <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu6">900</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum6()">-</span><span id="valeur6"><span></span></span><strong>plateau</strong><span class="plus2" onclick="nextNum6()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt6">900 </span><span class="cfa">FCFA</span></strong>
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
                     <img src="images/viandes/rame.jpg">
                    <div class="designation">
                        <span class="nom2">poisson rame 1Kg</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu7">1200</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum7()">-</span><span id="valeur7"><span></span></span><strong>KG</strong><span class="plus2" onclick="nextNum7()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt7">1200 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
<aside id="modal9" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/viandes/Poisson fraiche2.jfif">
                    <div class="designation">
                        <span class="nom2">Poisson Fraiche (1Kg)</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu9">800</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum9()">-</span><span id="valeur9"><span></span></span><strong>KG</strong><span class="plus2" onclick="nextNum9()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt9">800 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="none"></div>
                    <div class="panier-ajout  js-modal-close ">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
<aside id="modal10" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                     <img src="images/viandes/pintade-fermiere.jpg">
                    <div class="designation">
                        <span class="nom2">pintade-fermiere (≈ 02Kg)</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu10">1000</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum10()">-</span><span id="valeur10"><span></span></span><strong>pintade</strong><span class="plus2" onclick="nextNum10()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt10">1000 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
        </div>

</aside>
<aside id="modal11" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/viandes/Poisson maquereau.png">
                    <div class="designation">
                        <span class="nom2">Poisson maquereau (1Kg)</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu11">2000</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum11()">-</span><span id="valeur11"><span></span></span><strong>KG</strong><span class="plus2" onclick="nextNum11()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt11">2000 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
<aside id="modal13" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/viandes/cuisse de poulet locale.jfif" href="#modal13">
                    <div class="designation">
                        <span class="nom2">cuisse poulet Locale</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu13">1500</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum13()">-</span><span id="valeur13"><span></span></span><strong>KG</strong><span class="plus2" onclick="nextNum13()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt13">1500 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
<aside id="modal14" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/viandes/oeuf-fermier-par-six.jpg">
                    <div class="designation">
                        <span class="nom2">oeuf-fermier-par-six</span><br>
                    <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu14">900</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum14()">-</span><span id="valeur14"><span></span></span><strong>U</strong><span class="plus2" onclick="nextNum14()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt14">900 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
<aside id="modal15" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                   <img src="images/viandes/Poisson capitaine.png">
                    <div class="designation">
                        <span class="nom2">Poisson capitaine (1Kg)</span><br>
                    <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu15">700</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite"> Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum15()">-</span><span id="valeur15"><span></span></span><strong>KG</strong></span><span class="plus2" onclick="nextNum15()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt15">700 </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    
                    <div class="panier-ajout js-modal-close ">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
<aside id="modal17" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/viandes/Poulet 2KG.jfif">
                    <div class="designation">
                        <span class="nom2">Poulet Locale (≈ 2,5Kg)</span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu17">1100</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum17()">-</span><span id="valeur17"><span></span></span><strong>poulet</strong><span class="plus2" onclick="nextNum17()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt17">1100</span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    <div class="panier-ajout js-modal-close">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
<aside id="modal18" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
                <div class="modal-wrapper-inf-im">
                    <img src="images/viandes/oeuf-fermier-par-douze-1.jpg">
                    <div class="designation">
                        <span class="nom2">oeuf-fermier-par-douze </span><br>
                        <strong class="units-prix">Prix unitaire:</strong><span class="unit-prix" id="pu18">300</span><span class="unit-prix"> FCFA</span><br>
                        <span class="disponibilite">  Disponible</span><br>
                    </div>
                    
                </div>
                <div class="increment">
                    <span class="moins2" onclick="prevNum18()">-</span><span id="valeur18"><span></span></span><strong>U</strong><span class="plus2" onclick="nextNum18()">+</span>
                </div>
                <div class="prix-totald">
                    <strong><span class="prix-total">PRIX TOTAL:</span><span class="totalpprix" id="pt18">300  </span><span class="cfa">FCFA</span></strong>
                </div>
                <div class="boutons">
                    
                    <div class="panier-ajout js-modal-close ">AJOUTER AU PANIER</div>
                    <div class="panier-details2"><a href="Mon panier.php">MON PANIER</a></div>
                </div>
            </div>
</aside>
            <li class="item-a">

        <!---------- 1er container----------------------->


                   <div class="produits-container">
                                       
                         <div class="produits-box js-modal prod1" href="#modal1">
                                                    
                                   <div class="produits-b-img js-modal prod1" href="#modal1">
                                     <img src="images/viandes/poulet-fermier.jpg" href="#modal1" class="js-modal prod1">
                                                        </div>
                                         <div class="produits-b-text js-modal prod1" href="#modal1">
                                                 <strong style=" color: #15CD2B; "href="#modal1" class="js-modal prod2">poulet-fermier(≈ 02Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal1" class="js-modal prod3"> <strong href="#modal1" class="js-modal"> 3000 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal1">
                                                                     <span><strong> <u href="#modal1" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal1"><i class="fas fa-shopping-cart js-modal prod1" href="#modal1"></i></a> 
                                                               </div>
                                                       
                                      </div>
 
                                       
                                      <div class="produits-box js-modal prod1" href="#modal2">
                                                    
                                                  <div class="produits-b-img js-modal prod1" href="#modal2">
                                                       <img src="images/viandes/poulet locale vivant 3kg.jpg" href="#modal2" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal2">
                                                            <strong style=" color: #15CD2B; "href="#modal2" class="js-modal prod2">poulet fermier vivante </strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal2" class="js-modal prod3"> <strong href="#modal2" class="js-modal"> 1800 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal2">
                                                                     <span><strong> <u href="#modal2" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal2"><i class="fas fa-shopping-cart js-modal prod1" href="#modal2"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>


                                     <div class="produits-box js-modal prod1" href="#modal3">
                                                    
                                                 <div class="produits-b-img js-modal prod1" href="#modal3">
                                                         <img src="images/viandes/champignon-de-paris1.jpg" href="#modal3" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal3">
                                                            <strong style=" color: #15CD2B; "href="#modal3" class="js-modal prod2">champignon-de-paris 1Kg </strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal3" class="js-modal prod3"> <strong href="#modal3" class="js-modal"> 900 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal3">
                                                                     <span><strong> <u href="#modal2" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal3"><i class="fas fa-shopping-cart js-modal prod1" href="#modal3"></i></a> 
                                                               </div>
                                                        </a>
                                                  </div>

                                                    </div>

                <!---------- 2eme container----------------------->


                        <div  class="produits-container">
                                    <div class="produits-box js-modal prod1" href="#modal5">
                                                    
                                            <div class="produits-b-img js-modal prod1" href="#modal5">
                                                <img src="images/viandes/Poulet entier 2,5Kg.jfif" href="#modal5" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal5">
                                                            <strong style=" color: #15CD2B;"href="#modal5" class="js-modal prod2">Poulet Locale (≈ 03Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal5" class="js-modal prod3"> <strong href="#modal5" class="js-modal"> 900 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal5">
                                                                     <span><strong> <u href="#modal5" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal5"><i class="fas fa-shopping-cart js-modal prod1" href="#modal5"></i></a> 
                                                               </div>
                                                        </a>
                                                   </div>

         <div class="produits-box js-modal prod1" href="#modal6">
                                                    
                                                <div class="produits-b-img js-modal prod1" href="#modal6">
                                                       <img src="images/viandes/plateau-d-oeufs-1.jpeg" href="#modal6" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal6">
                                                            <strong style=" color: #15CD2B; "href="#modal6" class="js-modal prod2">Plateau d'oeuf fermier</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal6" class="js-modal prod3"> <strong href="#modal6" class="js-modal"> 900 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal4">
                                                                     <span><strong> <u href="#modal6" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal6"><i class="fas fa-shopping-cart js-modal prod1" href="#modal6"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>

         <div class="produits-box js-modal prod1" href="#modal7">
                                                    
                                                <div class="produits-b-img js-modal prod1" href="#modal7">
                                                      <img src="images/viandes/rame.jpg" href="#modal7" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal7">
                                                            <strong style=" color: #15CD2B; "href="#modal7" class="js-modal prod2">poisson rame 1Kg</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal7" class="js-modal prod3"> <strong href="#modal4" class="js-modal"> 1200 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal7">
                                                                     <span><strong> <u href="#modal7" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal7"><i class="fas fa-shopping-cart js-modal prod1" href="#modal7"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>

        
                                                                            
                                    </div>

                        <!---------- 3eme container----------------------->

                            <div  class="produits-container">
                                                                
                                        <div class="produits-box js-modal prod1" href="#modal9">
                                                    
                                                 <div class="produits-b-img js-modal prod1" href="#modal9">
                                            <img src="images/viandes/Poisson fraiche2.jfif" href="#modal9" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal9">
                                                            <strong style=" color: #15CD2B;"href="#modal9" class="js-modal prod2">Poisson Fraiche (1Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal9" class="js-modal prod3"> <strong href="#modal9" class="js-modal"> 800 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal9">
                                                                     <span><strong> <u href="#modal9" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal9"><i class="fas fa-shopping-cart js-modal prod1" href="#modal9"></i></a> 
                                                               </div>
                                                        </a>
                                                   </div>

         <div class="produits-box js-modal prod1" href="#modal10">
                                                    
                                              <div class="produits-b-img js-modal prod1" href="#modal10">
                                                    <img src="images/viandes/pintade-fermiere.jpg" href="#modal10" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal10">
                                                            <strong style=" color: #15CD2B; "href="#modal10" class="js-modal prod2">pintade-fermiere (≈ 02Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal10" class="js-modal prod3"> <strong href="#modal10" class="js-modal"> 1000 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal10">
                                                                     <span><strong> <u href="#modal10" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal10"><i class="fas fa-shopping-cart js-modal prod1" href="#modal10"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>
    

         <div class="produits-box js-modal prod1" href="#modal11">
                                                    
                                             <div class="produits-b-img js-modal prod1" href="#modal11">
                                                      <img src="images/viandes/Poisson maquereau.png" href="#modal11" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal11">
                                                            <strong style=" color: #15CD2B; "href="#modal11" class="js-modal prod2">Poisson maquereau (1Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal11" class="js-modal prod3"> <strong href="#modal11" class="js-modal"> 2000 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal11">
                                                                     <span><strong> <u href="#modal11" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal11"><i class="fas fa-shopping-cart js-modal prod1" href="#modal11"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>

                   
                                                    </div>

                                 <!---------- 4eme container----------------------->

                        <div  class="produits-container">
                                                                
                                <div class="produits-box js-modal prod1" href="#modal13">
                                                    
                                               <div class="produits-b-img js-modal prod1" href="#modal13">
                                                    <img src="images/viandes/cuisse de poulet locale.jfif" href="#modal13" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal13">
                                                            <strong style=" color: #15CD2B; "href="#modal13" class="js-modal prod2">cuisse poulet Locale</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal13" class="js-modal prod3"> <strong href="#modal13" class="js-modal"> 1500 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal13">
                                                                     <span><strong> <u href="#modal13" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal13"><i class="fas fa-shopping-cart js-modal prod1" href="#modal13"></i></a> 
                                                               </div>
                                                        </a>
                                                   </div>

         <div class="produits-box js-modal prod1" href="#modal14">
                                                    
                                                        <div class="produits-b-img js-modal prod1" href="#modal14">
                                                            <img src="images/viandes/oeuf-fermier-par-six.jpg" href="#modal14" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal14">
                                                            <strong style=" color: #15CD2B; "href="#modal14" class="js-modal prod2">oeuf-fermier-par-six</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal14" class="js-modal prod3"> <strong href="#modal14" class="js-modal"> 900 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal14">
                                                                     <span><strong> <u href="#modal14" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal14"><i class="fas fa-shopping-cart js-modal prod1" href="#modal14"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>

         <div class="produits-box js-modal prod1" href="#modal15">
                                                    
                                                <div class="produits-b-img js-modal prod1" href="#modal15">
                                                       <img src="images/viandes/Poisson capitaine.png" href="#modal15" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal15">
                                                            <strong style=" color: #15CD2B; "href="#modal15" class="js-modal prod2">Poisson capitaine (1Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal15" class="js-modal prod3"> <strong href="#modal15" class="js-modal"> 700 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal15">
                                                                     <span><strong> <u href="#modal15" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal15"><i class="fas fa-shopping-cart js-modal prod1" href="#modal15"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>

         
                                    </div>
                            <!---------- 5eme container----------------------->
                        <div  class="produits-container">
                                                                        
                                                                
                                    <div class="produits-box js-modal prod1" href="#modal17">
                                                    
                                                        <div class="produits-b-img js-modal prod1" href="#modal17">
                                                            <img src="images/viandes/Poulet 2KG.jfif" href="#modal17" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal17">
                                                            <strong style=" color: #15CD2B; "href="#modal17" class="js-modal prod2">Poulet Locale (≈ 2,5Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal17" class="js-modal prod3"> <strong href="#modal17" class="js-modal"> 1100 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal17">
                                                                     <span><strong> <u href="#modal17" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal17"><i class="fas fa-shopping-cart js-modal prod1" href="#modal17"></i></a> 
                                                               </div>
                                                        </a>
                                                   </div>

         <div class="produits-box js-modal prod1" href="#modal18">
                                                    
                                                <div class="produits-b-img js-modal prod1" href="#modal18">
                                                       <img src="images/viandes/oeuf-fermier-par-douze-1.jpg" href="#modal18" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal18">
                                                            <strong style=" color: #15CD2B; "href="#modal18" class="js-modal prod2">oeuf-fermier-par-douze </strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal18" class="js-modal prod3"> <strong href="#modal18" class="js-modal"> 300 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal18">
                                                                     <span><strong> <u href="#modal18" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal18"><i class="fas fa-shopping-cart js-modal prod1" href="#modal18"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>

                                                            
                                    </div>

                        </li>





                        <!------------------partie mobile------------------------->



                        <li class="item-a2">

        <!---------- 1er container----------------------->


                   <div class="produits-container">
                                       
                         <div class="produits-box js-modal prod1" href="#modal1">
                                                    
                                   <div class="produits-b-img js-modal prod1" href="#modal1">
                                     <img src="images/viandes/poulet-fermier.jpg" href="#modal1" class="js-modal prod1">
                                                        </div>
                                         <div class="produits-b-text js-modal prod1" href="#modal1">
                                                 <strong style=" color: #15CD2B; "href="#modal1" class="js-modal prod2">poulet-fermier(≈ 02Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal1" class="js-modal prod3"> <strong href="#modal1" class="js-modal"> 3000 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal1">
                                                                     <span><strong> <u href="#modal1" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal1"><i class="fas fa-shopping-cart js-modal prod1" href="#modal1"></i></a> 
                                                               </div>
                                                       
                                      </div>
 
                                       
                                      <div class="produits-box js-modal prod1" href="#modal2">
                                                    
                                                  <div class="produits-b-img js-modal prod1" href="#modal2">
                                                       <img src="images/viandes/poulet locale vivant 3kg.jpg" href="#modal2" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal2">
                                                            <strong style=" color: #15CD2B; "href="#modal2" class="js-modal prod2">poulet fermier vivante </strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal2" class="js-modal prod3"> <strong href="#modal2" class="js-modal"> 1800 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal2">
                                                                     <span><strong> <u href="#modal2" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal2"><i class="fas fa-shopping-cart js-modal prod1" href="#modal2"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>


                                     <div class="produits-box js-modal prod1" href="#modal3">
                                                    
                                                 <div class="produits-b-img js-modal prod1" href="#modal3">
                                                         <img src="images/viandes/champignon-de-paris1.jpg" href="#modal3" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal3">
                                                            <strong style=" color: #15CD2B; "href="#modal3" class="js-modal prod2">champignon-de-paris 1Kg </strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal3" class="js-modal prod3"> <strong href="#modal3" class="js-modal"> 900 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal3">
                                                                     <span><strong> <u href="#modal2" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal3"><i class="fas fa-shopping-cart js-modal prod1" href="#modal3"></i></a> 
                                                               </div>
                                                        </a>
                                                  </div>

                                              
                                    <div class="produits-box js-modal prod1" href="#modal5">
                                                    
                                            <div class="produits-b-img js-modal prod1" href="#modal5">
                                                <img src="images/viandes/Poulet entier 2,5Kg.jfif" href="#modal5" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal5">
                                                            <strong style=" color: #15CD2B;"href="#modal5" class="js-modal prod2">Poulet Locale (≈ 03Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal5" class="js-modal prod3"> <strong href="#modal5" class="js-modal"> 900 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal5">
                                                                     <span><strong> <u href="#modal5" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal5"><i class="fas fa-shopping-cart js-modal prod1" href="#modal5"></i></a> 
                                                               </div>
                                                        </a>
                                                   </div>

         <div class="produits-box js-modal prod1" href="#modal6">
                                                    
                                                <div class="produits-b-img js-modal prod1" href="#modal6">
                                                       <img src="images/viandes/plateau-d-oeufs-1.jpeg" href="#modal6" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal6">
                                                            <strong style=" color: #15CD2B; "href="#modal6" class="js-modal prod2">Plateau d'oeuf fermier</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal6" class="js-modal prod3"> <strong href="#modal6" class="js-modal"> 900 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal4">
                                                                     <span><strong> <u href="#modal6" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal6"><i class="fas fa-shopping-cart js-modal prod1" href="#modal6"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>
      </div>

                <!---------- 2eme container----------------------->


                        <div  class="produits-container">
         <div class="produits-box js-modal prod1" href="#modal7">
                                                    
                                                <div class="produits-b-img js-modal prod1" href="#modal7">
                                                      <img src="images/viandes/rame.jpg" href="#modal7" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal7">
                                                            <strong style=" color: #15CD2B; "href="#modal7" class="js-modal prod2">poisson rame 1Kg</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal7" class="js-modal prod3"> <strong href="#modal4" class="js-modal"> 1200 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal7">
                                                                     <span><strong> <u href="#modal7" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal7"><i class="fas fa-shopping-cart js-modal prod1" href="#modal7"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>

        
                                                                            
                                  
                                                                
                                        <div class="produits-box js-modal prod1" href="#modal9">
                                                    
                                                 <div class="produits-b-img js-modal prod1" href="#modal9">
                                            <img src="images/viandes/Poisson fraiche2.jfif" href="#modal9" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal9">
                                                            <strong style=" color: #15CD2B;"href="#modal9" class="js-modal prod2">Poisson Fraiche (1Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal9" class="js-modal prod3"> <strong href="#modal9" class="js-modal"> 800 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal9">
                                                                     <span><strong> <u href="#modal9" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal9"><i class="fas fa-shopping-cart js-modal prod1" href="#modal9"></i></a> 
                                                               </div>
                                                        </a>
                                                   </div>

         <div class="produits-box js-modal prod1" href="#modal10">
                                                    
                                              <div class="produits-b-img js-modal prod1" href="#modal10">
                                                    <img src="images/viandes/pintade-fermiere.jpg" href="#modal10" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal10">
                                                            <strong style=" color: #15CD2B; "href="#modal10" class="js-modal prod2">pintade-fermiere (≈ 02Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal10" class="js-modal prod3"> <strong href="#modal10" class="js-modal"> 1000 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal10">
                                                                     <span><strong> <u href="#modal10" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal10"><i class="fas fa-shopping-cart js-modal prod1" href="#modal10"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>
    

         <div class="produits-box js-modal prod1" href="#modal11">
                                                    
                                             <div class="produits-b-img js-modal prod1" href="#modal11">
                                                      <img src="images/viandes/Poisson maquereau.png" href="#modal11" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal11">
                                                            <strong style=" color: #15CD2B; "href="#modal11" class="js-modal prod2">Poisson maquereau (1Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal11" class="js-modal prod3"> <strong href="#modal11" class="js-modal"> 2000 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal11">
                                                                     <span><strong> <u href="#modal11" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal11"><i class="fas fa-shopping-cart js-modal prod1" href="#modal11"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>

                   
                                       
                                                                
                                <div class="produits-box js-modal prod1" href="#modal13">
                                                    
                                               <div class="produits-b-img js-modal prod1" href="#modal13">
                                                    <img src="images/viandes/cuisse de poulet locale.jfif" href="#modal13" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal13">
                                                            <strong style=" color: #15CD2B; "href="#modal13" class="js-modal prod2">cuisse poulet Locale</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal13" class="js-modal prod3"> <strong href="#modal13" class="js-modal"> 1500 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal13">
                                                                     <span><strong> <u href="#modal13" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal13"><i class="fas fa-shopping-cart js-modal prod1" href="#modal13"></i></a> 
                                                               </div>
                                                        </a>
                                                   </div>
             </div>

                        <!---------- 3eme container----------------------->

                            <div  class="produits-container">
         <div class="produits-box js-modal prod1" href="#modal14">
                                                    
                                                        <div class="produits-b-img js-modal prod1" href="#modal14">
                                                            <img src="images/viandes/oeuf-fermier-par-six.jpg" href="#modal14" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal14">
                                                            <strong style=" color: #15CD2B; "href="#modal14" class="js-modal prod2">oeuf-fermier-par-six</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal14" class="js-modal prod3"> <strong href="#modal14" class="js-modal"> 900 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal14">
                                                                     <span><strong> <u href="#modal14" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal14"><i class="fas fa-shopping-cart js-modal prod1" href="#modal14"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>

         <div class="produits-box js-modal prod1" href="#modal15">
                                                    
                                                <div class="produits-b-img js-modal prod1" href="#modal15">
                                                       <img src="images/viandes/Poisson capitaine.png" href="#modal15" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal15">
                                                            <strong style=" color: #15CD2B; "href="#modal15" class="js-modal prod2">Poisson capitaine (1Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal15" class="js-modal prod3"> <strong href="#modal15" class="js-modal"> 700 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal15">
                                                                     <span><strong> <u href="#modal15" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal15"><i class="fas fa-shopping-cart js-modal prod1" href="#modal15"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>

         
                               
                                                                        
                                                                
                                    <div class="produits-box js-modal prod1" href="#modal17">
                                                    
                                                        <div class="produits-b-img js-modal prod1" href="#modal17">
                                                            <img src="images/viandes/Poulet 2KG.jfif" href="#modal17" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal17">
                                                            <strong style=" color: #15CD2B; "href="#modal17" class="js-modal prod2">Poulet Locale (≈ 2,5Kg)</strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal17" class="js-modal prod3"> <strong href="#modal17" class="js-modal"> 1100 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal17">
                                                                     <span><strong> <u href="#modal17" class="js-modal">En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal17"><i class="fas fa-shopping-cart js-modal prod1" href="#modal17"></i></a> 
                                                               </div>
                                                        </a>
                                                   </div>

         <div class="produits-box js-modal prod1" href="#modal18">
                                                    
                                                <div class="produits-b-img js-modal prod1" href="#modal18">
                                                       <img src="images/viandes/oeuf-fermier-par-douze-1.jpg" href="#modal18" class="js-modal prod1">
                                                        </div>
                                                        <div class="produits-b-text js-modal prod1" href="#modal18">
                                                            <strong style=" color: #15CD2B; "href="#modal18" class="js-modal prod2">oeuf-fermier-par-douze </strong>
                                                            <p align="center" style="margin-top: 4px;" href="#modal18" class="js-modal prod3"> <strong href="#modal18" class="js-modal"> 300 FCFA</strong> </p>
                                                        </div>
                                                                <div class="en-stock js-modal prod1" href="#modal18">
                                                                     <span><strong> <u href="#modal18" class="js-modal"> En stock</u></strong> </span>
                                                                         <a class="add-cart cart1 js-modal prod1" href="#modal18"><i class="fas fa-shopping-cart js-modal prod1" href="#modal18"></i></a> 
                                                               </div>
                                                        </a>
                                                    </div>

                                                            
                                    </div>

                        </li>
             <div class="bas-de-page2">
                  
                    <div class="bas-div22">
                      <div class="bas-div212"> <a href="Mon panier.php" class="a">Votre panier</a></div>
                      <a href="Mon panier.php" class="shopping-cart">
                              <i class="fas fa-shopping-cart"></i>
                        </a>  
                    </div>
                    
                  </div>
                  
           </div>
        </div>
 </div>
     <img src="images/viandes/image_2021-01-18_113909.png" class="pref-img">
    </section>

<?php include("../includes/footer.php");?>
<script src="js/viande.js" ></script>
<script src="js/JQuery.js"></script>
<script src="js/lightslider.js"></script>
</body>
</html>