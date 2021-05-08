<?php
   session_start();
 
    $p=$_SESSION['pointer'];
  include_once("../classes/classes.class.php"); 
 
  
  if(isset($_POST['submit']))
{
   
  if (!empty($_POST['identifiant'])  and !empty($_POST['mdp']) ){
    $login=htmlspecialchars($_POST['identifiant']);
    $password=sha1($_POST['mdp']);
    echo 'yes';
    $c=utilisateurs::authentif($login,$password);
     
     echo $c;
    if($c==-1){
   
    
    $erreur="Veuillez entrer un login/password correct !";
            
    }
    else{
      $_SESSION['id'] = $_POST['identifiant'];
      if ($p==1) {
        header("Location:Profil.php");
      }
      else{
        if ($p==2) {
          header("Location:payement.php");
           }
        else{
          if ($p==3) {
          header("Location:compte.php");
           }
        else{
         echo $_SESSION['id'];
           }           }
      }
    
    
    }

}
else
{
$erreur='Veuillez remplir tous les champs ';
}
if(isset($_POST['inscription']))
{
  header("Location:page d_inscription.php");
}
  }
 $cnx=utilisateurs::connexion();
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
  <link rel="stylesheet" type="text/css" href="css/styl.css">
  
</head>
<body>

<?php include("../includes/headerConec.php");?>




<div class="enr-container">
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
                                         <li><a href="boisson.php">Boissons</a></li>
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
                                            <img src="images/Boissons/jus/jus-de-fruits-1.jpg"  width="100%"height="220px" Align="center">
                               
                                        </div>
                            <div class="promotion">
                                        <h2 class="menustitle">As tu Visité Nos Packs ?</h2>
                                        <div class="container">
                                            <img src="images/Boissons/jus/depositphotos_48435991-stock-photo-fresh-juice-mix-fruit.jpg"  width="100%"height="220px" Align="center">
                                </div>
                          
                    </div>
              </nav>
              <div class="loginbox"  >
                  <div class="panierPreentete">
            <div class="panierr">Panier</div>
            <div class="paniern">Renseignements</div>
            <div class="panierp">Payement</div>
            <div class="panierres">resultats</div>
          </div>
                  <h1 class="connect"><strong>Connection</strong></h1><hr>
                  <form action="" method="POST">
                    <p class="user">NOM d'utilisateur ou Email</p>
                    <input type="text"  placeholder="                                                                                    @gmail.com" name="identifiant">
                    <p class="mdp">Mot de passe</p>
                    <input type="password" name="mdp" placeholder="">
                   <input type="checkbox" name="checkbox" class="checkbox" id="rappel" name=""> <label for="rappel">Rappelez vous de moi</label>
                   <div class="erreur" style="color: red;"><?php if(isset($erreur)){
                   echo $erreur;} ?></div>
                   <div class="form-post">
                    <input type="submit" name="submit" value="Se connecter" class="idt">
                    <input type="submit" name="inscription" value="S'identifier" class="ins">
                    </div>
                    <p class="blue"><a href="#" onclick="func0();">Mot de passe oublié ?   </a>    
                    <a href="page d_inscription.php" class="blue" style="padding-left: 12px;">  Creer un compte</a></p>

                 <div class="dnone" style="display: none;" id="renit">
                     <p class="user">Veuillez entrer votre Email</p>
                    <input type="text"  placeholder="                                                                                    @gmail.com" name="mail">
                    <input type="submit" name="renitialiser" value="Renitialiser" class="idt">
                    </div>
                  </form>
      <a href="Mon panier.php"><div class="valider3"><strong>Retour au panier</strong></div></a>
                </div>
  </div>

<?php include("../includes/footer.php");?>
<script src="js/main.js" ></script>
</body>
</html>
<?php

if (isset($_POST['renitialiser'])) {

if (!empty($_POST['mail'])) {
  echo "yes";
 $token=uniqid();
 $url="https://biofarm-eden.com/layout/token?token=$token";
 $message="Bonjour/Bonsoir,voici votre lien pour la renitialisation du mot de passe:$url";
 $headers='Content-Type: text/plain; charset="utf-8"'." ";

 if (mail($_POST['mail'], 'mot de passe oublie',$message,$headers)) {
  $sql="UPDATE utilisateurs SET token= ? WHERE email= ? ";
  $stmt= $cnx->prepare($sql);
    $stmt->execute([$token,$_POST['mail']]);
 }
}
}


?>
<script type="text/javascript">
                 
                     function func0()
                  {

                    
                    var div1=document.getElementById('renit');
                    
                      div1.style.display='block';
                     
                 
                  }
                 
   
                </script>
