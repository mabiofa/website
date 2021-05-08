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
          <div class="panierPreentete">
            <div class="panierr">Panier</div>
            <div class="panierr">Renseignements</div>
            <div class="panierp">Payement</div>
            <div class="paniern">resultats</div>
          </div>
						       
         <br>  <strong class="secliv">Pour une livraison securisee :</strong><br> <br>  <span style="color:#10B40E;" class="secliv1">Eh !!! oui nous garantissons votre commande a la livraison par un code QR.Telecharger le et presenter le a l'agent livreur pour pouvoir receptionner votre commande</span><br><br>
                  <?php echo '<img src="qrcode.php" style="display:none;">';
                  echo '<img src="'.$urlRelativeFilePath.'" / class="qrimg">'; ?><br><br>
                  <form action="" method="POST"><input class="btn btn-primary" type="submit" name="submit" value="Telecharger"></form> <br><br>
                  
                  <strong class="secliv">Votre facture :</strong><br><br> 
			<div class="finpay">
        <span class="rec "><strong><?php echo Date('d-m-y'); ?></strong></span>
       <p align="center" class="rec vers margin"><strong><u>Recu de payement de la commande</u></strong></p> 
         <div class="finpay1">
           <div class="finpay12">
              <strong>Societe:</strong><br>
              <strong><span class="vers">MABIOFA EDEN sarl</span></strong><br>
              <span>Siege social:</span><br>
              <span>Tel: 93-49-89-58</span><br>
              <span class="dec"> 96-84-70-22</span><br>
             
           </div>
           <div class="finpay12 marg">
             <strong>Facture reference:</strong><br>
             <span class="mbe">MBE 00005 A</span>
           </div>
         </div>	
            <span class="mail">Mail:ServiceClient@mabiofa-eden.com</span><br>

         <div class="finpay1">
           <div class="finpay122">
             <strong>Adresse de Facturation du client:</strong><br>
             <span><?php echo $nom." ".$prenom; ?></span><br>
             <span><?php echo $rue; ?></span><br>
             <span><?php echo $lieu; ?></span><br>
           </div>
          
         </div>
    <p class="titre vers"><strong> Details de commande:</strong></p>
          <div class="tabHead">
            <div class="prodnam"><strong>Produits</strong></div>
            <div class="pKg"><strong>Prix au Kg</strong></div>
            <div class="nKg"><strong>Nbr de Kg</strong></div>
            <div class="montant"><strong>Montant</strong></div>
          </div>
          <div class="productContainer">
                             
          </div>
    <p class="titre vers"> <strong>Details de Facturation:</strong></p>
    <hr class="hr">
          <div class="finpay1">
                    <div class="finpay21">
                      <div class="pay1">Nombre de produits Commandes:</div>
                      <div class="pay2">Montant total de la commande:</div>
                      <div class="pay3">Frais de Livraison:</div>
                      <div class="pay4">TVA paye:</div>
                    </div>
                    <div class="finpay22">
                      <div class="pay1"><strong><span>--</span></strong></div>
                      <div class="pay2"><strong><span>---</span> FCFA</strong></div>
                      <div class="pay3"><strong><span>---</span> FCFA</strong></div>
                      <div class="pay4"><strong><span>---</span> FCFA</strong></div>
                    </div>
          </div>
          <div class="finpayt"><strong class="st1">Total TTC a payer:</strong><strong><span>---</span> FCFA</strong></div>
       <p class="titre vers"><strong> Mode de payement:</strong></p>
           <span class="md"> <?php echo $modeliv; ?></span> 
           <div class="nbp">
             <strong><u>NB:</u></strong>Vous recevrez votre adresse de livraison sur votre numero de telephone avec lequel vous vous etes enregistre sur a pate-forme ou par mail.

           </div>   
           <div class="payd vers">
             <strong>Avec MABIOFA EDEN Sarl manger bio et sainement c'est preserver non seulement notre ecosysteme mais aussi garantir votre sante </strong>
           </div>    
     </div>

  </div>
</div>
     
<?php include("../includes/footer.php");?>
 
            <script src="js/finpay.js" ></script>
   
</body>
</html>