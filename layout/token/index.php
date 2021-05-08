
<?php
  include_once("../classes/classes.class.php"); 
  $cnx=utilisateurs::connexion();

    //recuperation pass////////////////////////////////

if (isset($_GET['token']) && $_GET['token'] != '') {
 

 $stmt=$cnx->prepare('SELECT email FROM users WHERE token=?');
 $stmt->execute([$_GET['token']]);
 $email=$stmt->fetchColumn();

if ($email) {
  ?>
  
  <!DOCTYPE html>
<html>
<head>
  <title>Mabiofa Eden</title>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
    <link rel="shortcut icon"  href="/images/Logo supermarché.png">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/all.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  
</head>
<body>
<?php include("../../includes/header.php");?>
<div class="enr-container">
              <nav class="cdg1">

              <div class="cdgmenusolo">

                         <div class="cdgmenusolo">
                                <div class="cdgmenusolotitre"><h2 class="menustitle">Menu Solo</h2></div>
                                    <ul>
                                         <li><a href="../Legumes.php">Légumes</a></li>
                                        <li><a href="../vegetaux.php">Végétaux</a></li>
                                        <li><a href="../fruit.php">Fruits </a></li>
                                        <li><a href="../epicerie.php">Epiceries</a></li>
                                        <li><a href="../viande.php">viandes</a></li>
                                        <li><a href="../boulangerie.php">Boulangerie</a></li>
                                        <li><a href="../cereales.php">Céréales</a></li>
                                        <li><a href="../tubercules.php">Tubercules</a></li>
                                         <li><a href="../boisson.php">Boissons</a></li>
                                       <li><a href="../vins.php">Vins</a></li>
                                        <li><a href="../divers.php">Divers</a></li>
                                    </ul>
                                </div>
                                
                                <div class="cdgmenuextra">
                                    <div class="cdgmenuextratitre" ><h2 class="menustitle">Menu Extra</h2></div>
                                    <ul>
                                        <li><a href="../panier-famille.php">Panier Famille</a></li>
                                        <li><a href="../panier-solo.php">panier Solo</a></li>
                                        <li><a href="../packs.php">Packs</a></li>
                                    </ul>
                                </div>


                                <div class="promotion">
                                        <h2 class="menustitle">Bien frais !!</h2>
                                        <div class="container">
                                            <img src="../images/Boissons/jus/jus-de-fruits-1.jpg"  width="100%"height="220px" Align="center">
                               
                                        </div>
                            <div class="promotion">
                                        <h2 class="menustitle">As tu Visité Nos Packs ?</h2>
                                        <div class="container">
                                            <img src="../images/Boissons/jus/depositphotos_48435991-stock-photo-fresh-juice-mix-fruit.jpg"  width="100%"height="220px" Align="center">
                                </div>
                          
                    </div>
              </nav>
              <div class="loginbox">
                  <div class="panierPreentete">
            <div class="panierr">Panier</div>
            <div class="paniern">Renseignements</div>
            <div class="panierp">Payement</div>
            <div class="panierres">resultats</div>
          </div>
                  <h1 class="connect"><strong>Recuperation du mot de passe</strong></h1><hr>
                  <form action="" method="POST">
                    <p class="user">Nouveau mot de passe</p>
                    <input type="text"  placeholder="XXXXXXX" name="nMdp">
                    
                   <div class="form-post">
                    <input type="submit" name="submit" value="Changer" class="idt">
                   
                    </div>
                    
                  </form>
   
                </div>
  </div>

<?php include("../../includes/footer.php");?>
<script src="js/main.js" ></script>
</body>
</html>

<?php

}

}

if (isset($_POST['submit'])) {
if (isset($_POST['nMdp'])) {
 
 $hashPassword=sha1($_POST['nMdp']);
  $sql="UPDATE users SET password= ?, token= NULL WHERE email= ? ";
  $stmt= $cnx->prepare($sql);
  $stmt->execute([$hashPassword,$_POST['mail']]);
  echo "mot de passe modifie avec succes";
}
}
?>

