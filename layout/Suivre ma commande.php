<?php
session_start();
$filenam=$_SESSION['filename'];
 include_once("../classes/classes.class.php");
 $urlRelativeFilePath=$_SESSION['url'];
 $modeliv=$_SESSION['modeliv'];
if(isset($_POST['submit'])){
if(!empty($filenam))
{
	$filename = basename($filenam);
	$filepath = 'qrcodes/' . $filename;
	if(!empty($filename) && file_exists($filepath)){

//Define Headers
		header("Cache-Control: public");
		header("Content-Description: FIle Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/zip");
		header("Content-Transfer-Emcoding: binary");

		readfile($filepath);
		exit;

	}
	else{
		echo "This File Does not exist.";
	}
}

}
/*----------------------------------------------------------*/

$c=utilisateurs::connexion();
if($c!=null){
 
$id_p= $_SESSION['id'];
$lieu= $_SESSION['lieu'];
$rue= $_SESSION['rue'];
 
$c=utilisateurs::connexion();



$r=$c->query("SELECT * FROM `utilisateurs` WHERE  identifiant='$id_p'");
$t=$r->fetchAll();
      foreach ($t as $row){
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        $email=$row['email'];
        $telephone=$row['telephone'];
        $id_u=$row['id'];
       
      }

    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>BIOFARM EDEN</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	
 <!------icon du titre----->
    <link rel="shortcut icon"  href="images/Logo supermarché.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/finpay.css">
	
	
</head>
<body>
<?php include("../includes/header.php");?>


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
          <strong class="rgh"><?php echo Date('d-m-y'); ?></strong>
						       
         <br> <br> <strong class="secliv2">Bienvenu Mr/Mme <?php echo $nom." ".$prenom; ?></strong><br> <br>  <span  class="secliv2">vous avez passe votre commande a -----.Vous trouverez ci-dessous votre code de livraison en QR.Presentez le a l'agent livreur a son arrive pour confirmer votre identification.</span><br><br>
                  <?php echo '<img src="qrcode.php" style="display:none;">';
                  echo '<img src="'.$urlRelativeFilePath.'" / class="qrimg">'; ?><br><br>
                  <form action="" method="POST"><input class="btn btn-primary" type="submit" name="submit" value="Telecharger"></form> <br><br>
                    <span  class="secliv2">Si votre commande tarde ,ou vous avez des reclammations , veiller nous contacter au numero suivant:</span><br><br>
                    <div class="numero">
                               <div class="numero1">
                                +228 93 49 89 58
                            </div>
                            <div class="numero2">
                                +228 96 84 70 22
                            </div>
                    </div><br>
                     <p align="center"><span  class="secliv2">Ou nous ecrire</span></p>
                     <a href="Contacts.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Nous ecrire</a><br>
<br><br>
                     <span style="color:#10B40E;" class="secliv2">Tres heureux de vous servir,MABIOFA vous remercie pour votre comprehension</span><br>
                

  </div>
</div>
     
<?php include("../includes/footer.php");?>
 
            <script src="js/finpay.js" ></script>
   
</body>
</html>