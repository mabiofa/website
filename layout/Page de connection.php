
<?php
   session_start();
 
    $p=$_SESSION['pointer'];
  include_once("../classes/classes.class.php"); 

   
  if(isset($_POST['submit']))
{
   echo $_POST['essai'] ;
  if (!empty($_POST['identifiant'])  and !empty($_POST['mdp']) ){
    $login=htmlspecialchars($_POST['identifiant']);
    $password=sha1($_POST['mdp']);
   
    $c=utilisateurs::authentif($login,$password);
      
   
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
          header("Location:index.php");
           }           }
      }
    
    
    }

}
else
{
$erreur='Veuillez remplir tous les champs ';
}

  }
  if(isset($_POST['ins']))
{
  header("Location:page d_inscription.php");
}
 $cnx=utilisateurs::connexion();
?>


<?php


 if($_SESSION['id']=='Roberto06' or $_SESSION['id']=='admin' )
 {
     $dash='<a href="../adm/dash.php" class="menu2-a">DASHBORD</a><hr>';
     $dash1='<li class="nav-text"><a href="../adm/dash.php" class="menu2-a">DASHBORD</a></li>';
 }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Mabiofa Eden</title>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="shortcut icon"  href="/images/Logo supermarché.png">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/styl.css">
  
</head>
<body>

<?php /*include("../includes/headerConec.php");*/?>




<div class="enr-container">
    <a href="../index.php" class="amg-a" style="width: 10%;">  <img src="logo-menu/logo2.png" class="amg" style="width: 20%; "></a>

<a href="../index.php" class="amg-a" style="width: 10%; float:right; margin-right:50px;"><i class="fa fa-arrow-left" style="width: 20%; height:35px; color:white; font-size:2rem; float:right;"></i></a>
           
              
              <div class="loginbox"  >
                 
                  <h1 class="connect"><strong>Connection</strong></h1><br>
                  <form action="" method="POST">
                    <div id="connect" style="display:block;">
                    <input type="text"  placeholder="Votre identifiant" name="identifiant">
                    
                    <input type="password" name="mdp" placeholder="Mot de passe">
                    
                   <input type="checkbox" name="checkbox" class="checkbox" id="rappel" name=""> <label for="rappel"><strong></strong>Rappelez vous de moi</strong></label>
                   <div class="erreur" style="color: red;"><?php if(isset($erreur)){
                   echo $erreur;} ?></div>
                   <div class="form-post">
                   
                    <input class="btn btn-primary" type="submit" value="Se connecter" name="submit">
                  <input class="btn btn-primary" type="submit" value="S'inscrire" name="ins">
                    </div>
                    <p class="blue"><a href="#" onclick="func0();">Mot de passe oublié ?   </a>    
                    <a href="page d_inscription.php" class="blue" style="padding-left: 12px;">  Creer un compte</a></p>
                    </div>
                 <div class="dnone" style="display: none;" id="renit">
                     <p class="user">Veuillez entrer votre Email</p>
                    <input type="text"  placeholder="                                                                                    @gmail.com" name="mail">
                    <input type="submit" name="renitialiser" value="Renitialiser" class="idt">
                    <input type="submit" name="" value="Retour" class="idt" onclick="func();" >
                    </div>
                  </form>
     
                </div>
  </div>

<?php /*include("../includes/footer.php");*/?>
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
                     var div2=document.getElementById('connect');
                    
                      div2.style.display='none';
                 
                  }
                 
   
                </script>
