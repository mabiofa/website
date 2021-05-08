<?php
session_start();
$_SESSION['pointer']=3;
if (!empty($_SESSION['id'])) {

include_once("../classes/classes.class.php");

$id_p=$_SESSION['id'];
$c=utilisateurs::connexion();
if($c!=null){
 

$r=$c->query("SELECT * FROM `utilisateurs` WHERE  identifiant='$id_p'");
$t=$r->fetchAll();
      foreach ($t as $row){
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        $identifiant=$row['identifiant'];
        $email=$row['email'];
        $telephone=$row['telephone'];
        $commune=$row['commune'];
        $quartier=$row['quartier'];
        $rue=$row['rue'];
       
      }
    }
}

else
{

header ('Location:Page de connection.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mabiofa </title>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon"  href="images/Logo supermarché.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/compte.css"> 
 
  
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
                                         <li class="nav-text title" id="li-block">
                                          <a href="#">Boissons</a>
                                          <ul  id="compte-sous-menu2">
                                                 <li  ><a href="jus.php">jus</a></li>
                                                 <li ><a href="vin.php">Vins</a></li>
                                              </ul>
                                        </li>
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
                                            <img src="images/épicerie/curcuma-973x683.jpg"  width="100%"height="220px" Align="center">
                               
                                        </div>
                            <div class="promotion">
                                        <h2 class="menustitle">As tu Visité Nos Packs ?</h2>
                                        <div class="container">
                                            <img src="images/épicerie/illustration-épices-CR-Pixabay.jpg"  width="100%"height="220px" Align="center">
                               
                            </div>
              </div>
                                                    
              </nav>
   <div class="compte-corps">
      <div class="mob-div">
        <div class="mob-div-img"> <img src="images/Logo/User_Circle.png"></div>
        <div class="mob-div-id">
          <span><strong><?php echo $prenom.' '.$nom; ?></strong></span><BR>
          <span><strong>999AXXXXXX</strong></span>
        </div>
      </div>
                <p class="vers titre" align="center"><strong>Mon Compte</strong></p>
              <div class="fst-div">
               <a href="#"><div class="fst-div1">
                  <img src="unnamed.png"><br>
                  <span><strong>Mon portefeuile</strong></span><br><br>
                  <strong class="bord">0 Fcfa</strong>
                </div></a>
                
                 <a href="recharge.php"> <div class="fst-div2">
                      <img src="images/Logo/recharge .png"><br>
                      <span><strong>Recharger</strong></span><br>
                  </div></a>
                  <a href="Profil.php"><div class="fst-div3">
                      <img src="images/Logo/etre_employeur.png"><br>
                      <span><strong>Mon profil</strong></span><br>
                  </div></a>
                
              </div>
               <p class="vers titre " align="center"><a href="Contacts.php"> <strong class="vers borde">Avez-vous des Suggestions ?</strong></a></p><br>
               <div class="back">
              <div class="sec-div">
                     <a href="#"> <div class="sec-div1">
                           <img src="images/Logo/ticket-caisse-realiste-factures-papier_107791-186.jpg"><br>
                           <span class="vers"><strong>Mes factures</strong></span>
                      </div></a>
                     <a href="abonnement.php"> <div class="sec-div2">
                           <img src="images/Logo/whiteandpinkstrikeoutcosmeticsbeautylogo1.jpg"><br>
                           <span class="vers"><strong>Abonnement</strong></span>
                      </div></a>
                     <a href="favoris.php"> <div class="sec-div3">
                          <img src="images/Logo/heart-icon.png"><br>
                          <span class="vers"><strong>Mes favoris</strong></span>
                      </div></a>
              </div>

              <div class="trd-div">
                     <a href="#"> <div class="trd-div1">
                        <img src="images/Logo/Picture1.png"><br>
                        <span class="vers"><strong>Localiser ma boutique</strong></span>
                    </div></a>
                  <a href="Suivre ma commande.php">  <div class="trd-div2">
                         <img src="images/Logo/Suive ma commande.png"><br>
                         <span class="vers"><strong>Suivre ma commande</strong> </span>
                    </div></a>
                <a href="Suivre ma commande.php">  <div class="trd-div2">
                         <img src="images/Logo/Suive ma commande.png"><br>
                         <span class="vers"><strong>Livreur</strong> </span>
                    </div></a>
              </div>
            </div>
          
                  <div class="payd vers">
             <strong>Avec MABIOFA EDEN Sarl manger bio et sainement c'est preserver non seulement notre ecosysteme mais aussi garantir votre sante </strong>
                </div>  
           </div>
           
    </div>



<?php include("../includes/footer.php");?>
<script src="js/main.js" ></script>
</body>
</html>