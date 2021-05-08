<!DOCTYPE html>
<html>
<head>
  <title>Mabiofa Eden</title>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   
    <link rel="shortcut icon"  href="images/Logo supermarché.png">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/styl.css">
  
</head>
<body>
<?php include("../includes/header.php");?>
<div class="produits-headings">
        <h1 class="produits-heading"><strong>PROMOTIONS</strong></h1>
        <!-- bouton de recherche---->
         <form >
          <div class="search-zone">
                               
                                <input type="text" placeholder="PRODUITS Agricoles">
                                 <div class="search-area"><i class="fas fa-search"></i></div>
                 </div>
             </form>
     </div>
<div class="enr-container">
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
                                         <li><a href="boisson.php">Boissons</a></li>
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


           <!------partie promotion------------------------------------------------->

                    <div class="promotion">
                                        <h2 class="menustitle">Bien frais !!</h2>
                                        <div class="container">
                                            <img src="images/légumes/b6ad6020c6c8.jpeg"  width="100%"height="220px" Align="center">
                               
                                        </div>
                            <div class="promotion">
                                        <h2 class="menustitle">As tu Visité Nos Packs ?</h2>
                                        <div class="container">
                                            <img src="images/légumes/produits-2.jpg"  width="100%"height="220px" Align="center">
                               
                            </div>
                    </div>

              </nav>
              <!--------- partie corps des produits de promotions----------------------------------->

            <div class="promotion-corps">
                <h2 align="center" style="margin-top:100px; color:  #15CD2B;" >Oups !!!!!!!!!!! </br style="margin-top: 50px;" > Pas de favoris pour l'instant </h2>  

                  
           </div>
  </div>
                

<?php include("../includes/footer.php");?>
<script src="js/main.js" ></script>
</body>
</html>