
<?php
session_start();
$_SESSION['pointer']=1;
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
	<title>Mabiofa Eden</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="shortcut icon"  href="/images/Logo supermarché.png">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/profil.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	
</head>
<body>
<?php include("../includes/header.php");?>
<section class="cont-entete">
	<div class="cont-name">Mon Profil</div>
		  
</section>
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
                                            <img src="images/épicerie/curcuma-973x683.jpg"  width="100%"height="220px" Align="center">
                               
                                        </div>
                            <div class="promotion">
                                        <h2 class="menustitle">As tu Visité Nos Packs ?</h2>
                                        <div class="container">
                                            <img src="images/épicerie/illustration-épices-CR-Pixabay.jpg"  width="100%"height="220px" Align="center">
                               
                            </div>
                    </div>
            </nav>
         <!---------- section-------->
                <div class="products">
<section class="profil-section">
 <div class="divp">
  <div class="div1">
    <div class="profil-t spa"><strong>Nom :</strong></div> 
    <div class="profil-t spa1"><strong>Prénom:</strong></div>
    <div class="profil-t spa"><strong>Identifiant:</strong></div>
     <div class="profil-t spa1"><strong>Téléphone:</strong></div>
      <div class="profil-t spa"><strong>Email:</strong></div>
      <div class="profil-t spa1"><strong>Commune:</strong></div> 
      <div class="profil-t spa"><strong>Quartier:</strong></div>
      <div class="profil-t spa1"><strong>Rue:</strong></div> 
  </div>

 <div class="div2">
   <div class="profil-valeur span"><strong><?php echo $nom; ?></strong></div>
    <div class="profil-valeur span1"><strong><?php echo $prenom; ?></strong></div>
    <div class="profil-valeur span"><strong><?php echo $identifiant; ?></strong></div>
    <div class="profil-valeur span1"><strong><?php echo $telephone; ?></strong></div>
    <div class="profil-valeur span"><strong><?php echo $email; ?></strong></div>
    <div class="profil-valeur span1"><strong><?php echo $commune; ?></strong></div>
    <div class="profil-valeur span"><strong><?php echo $quartier; ?></strong></div>
      <div class="profil-valeur span1"><strong><?php echo $rue; ?></strong></div>
 </div>
  </div>
    
    

  <div class="simple" >
    <span class="profil-t"><strong>Abonné à la ferme</strong></span> 
    <div class="abon-stat"> Oui</div>
  </div>
  <div class="simple">
    <span class="profil-t"><strong>Total d'achats mensuel:</strong></span> 
    <div class="achats-prix">10 000 FCFA</div>
  </div>
  <div class="panier-abon">
    <div class="panier-abon-div">Mon panier d'abonné</div>
    <a href="Mon panier.php" class="shopping-cart">
           <i class="fas fa-shopping-cart"></i>
       </a> 
    
  </div>
    <div class="abon-text"><u><strong>Abonnnement à la ferme !!!</strong></u></div>
    <div>
      <p class="para">En vous abonnant a la ferme vous obtenez des avantages tels que :des promations ; des remises sur achats; des cartes de fidelite qui vous donnerons droit a des privileges .<br><br>
      C'est quoi un abonnemnent a la ferme BIOFARM EDEN?<br>
      Quels sont les privileges de cet abonnement?<br>
        Comment s'abonner a la ferme?</p>
    </div>
    <a href="modalite d_abonnemnent.php" class="a-click"><div class="click">Cliquez ici pour mieux vous informer</div></a>
  

  
</section>
              </div>
 </div>

<?php include("../includes/footer.php");?>
 <script src="js/main.js" ></script>
</body>
</html>