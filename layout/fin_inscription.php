
<?php
session_start();
$prenom =$_SESSION['prenom'];
$nom=$_SESSION['nom'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mabiofa Eden</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon"  href="images/Logo supermarché.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/profil.css">
  

	
	
</head>
<body>
	

<?php include("../includes/header.php");?>
<div class="ins-container">
	<nav class="cdg1">
        <div class="cdgmenusolo">
                 <div class="cdgmenusolo">
                                <div class="cdgmenusolotitre"><h2 class="menustitle">Menu Solo</h2></div>
                                    <ul>
                                        <li><a href="Legumes.php">Légumes</a></li>
                                        <li><a href="vegetaux.php">Végétaux</a></li>
                                        <li><a href="fruit.php">Fruits </a></li>
                                        <li><a href="epicerie.php">Epiceries</a></li>
                                        <li><a href="viande.php">viandes</a></li>
                                        <li><a href="boulangerie.php">Boulangerie</a></li>
                                        <li><a href="cereales.php">Céréales</a></li>
                                        <li><a href="tubercules.php">Tubercules</a></li>
                                        <li ><a href="boisson.php">Boissons</a></li>
                                        <li><a href="vins.php">Vins</a></li>
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
                                            <img src="images/légumes/b6ad6020c6c8.jpeg"  width="100%"height="220px" Align="center">
                               
                                        </div>
                            <div class="promotion">
                                        <h2 class="menustitle">As tu Visité Nos Packs ?</h2>
                                        <div class="container">
                                            <img src="images/légumes/produits-2.jpg"  width="100%"height="220px" Align="center">
                               
                            </div>
              </div>
                                                    
              </nav>
  
     <div class="bienvenu-section">
      <div class="first">
        <p align="center">Incriptions operee avec succes</p>
        Bienvenue une fois de plus a vous Monsieur/Madame <span class="first-nom"><?php echo $prenom;echo " ";  echo $nom; ?></span><br>
        Vous pouvez desormais consulter votre <a href="Profil.php">profil</a> depuis notre plateforme.<br>
        <span class="first-last">MABIOFA EDEN un service <span class="cent">100%  de qualite et bio</span> au plaisir de tous sans exception</span><br>
        <span class="Visitez">Visitez nos gammes innegalee de produits</span>


      </div>
       <div class="second">
         <div class="second1">
           <div class="solop">
             <img src="images/légumes/produits-2.jpg">
             <a href="legumes.php"><div>MENU SOLO</div></a>
           </div>
           <div class="extrap">
             <img src="images/Panier famille/pannier légumes familly xxl.jfif">
             <a href="panier-famille.php"><div>MENU EXTRA</div></a>
           </div>
         </div>
         <div class="second2">
           <div class="promotionp">
             <img src="images/impromotions/imgpublicitaire4.jpg">
             <a href="Promotions.php"><div>PROMOTIONS</div></a>
           </div>
         </div>
       </div>
       
     </div>
</div>

<?php include("../includes/footer.php");?>
<script src="js/main.js" ></script>
<script src="js/pass.js" ></script>
</body>
</html>