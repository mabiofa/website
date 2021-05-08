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
    <link rel="shortcut icon"  href="images/Logo supermarché.png">
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
                                            <img src="images/divers/cd083722e93c8c1e977ee80dcf94f6a9-00867_2.jpg"  width="100%"height="220px" Align="center">
                               
                                        </div>
                            <div class="promotion">
                                        <h2 class="menustitle">As tu Visité Nos Packs ?</h2>
                                        <div class="container">
                                            <img src="images/divers/71FWCN9TU8L._AC_SX425_.jpg"  width="100%"height="220px" Align="center">
                               
                            </div>
                    </div>
            </nav>
         <!---------- section produits-------->
            
            <div> <h1 style=" text-align: center; color : green "> Rien de disponible pour l'instant Merci !!! </h1></div>

        

    </section>

<?php include("../includes/footer.php");?>
<script src="js/divers.js" ></script>
<script src="js/JQuery.js"></script>
<script src="js/lightslider.js"></script>
</body>
</html>