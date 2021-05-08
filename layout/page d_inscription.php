
<?php
 
  include_once("../classes/classes.class.php"); 
  $c=utilisateurs::connexion();
  if($c!=null){
    $bdd=$c;
  if (isset($_POST['enregistrer'])) {
    $identifiant= htmlspecialchars($_POST['identifiant']);
      $nom=htmlspecialchars($_POST['nom']);
      $prenom=htmlspecialchars($_POST['prenom']);
      $commune=htmlspecialchars($_POST['commune']);
      $quartier=htmlspecialchars($_POST['quartier']);
      $rue=htmlspecialchars($_POST['rue']);
      $email=htmlspecialchars($_POST['mail']);
      $mdp=sha1($_POST['mdp']);
      $telephone=htmlspecialchars($_POST['telephone']);
         $date_d_incription=date('j-m-y,h-i-s');
    
    if (!empty($_POST['nom'])  and !empty($_POST['prenom']) and !empty($_POST['identifiant']) and !empty($_POST['mdp']) and !empty($_POST['telephone']) and !empty($_POST['commune']) and !empty($_POST['quartier']) ) 
    {
      
      
      $pseudoLength=strlen($identifiant);
      if ($pseudoLength<=255)
       {
        
$reqidentifiant= $bdd->prepare('SELECT * FROM  utilisateurs WHERE identifiant=:identifiant');
            $reqidentifiant->execute(array('identifiant'=>$identifiant));
            $identifiantexist=$reqidentifiant->rowCount();
            if ($identifiantexist==0) 
            {
               
                if (isset($_POST['cgdu'])) {
                  
              
                  $statut='a deja lu ';
                    
                  $r=$bdd->query("INSERT INTO `utilisateurs`(`id`,`nom`,`prenom`,`identifiant`,`email`,`mot de passe`,`telephone`,`commune`,`quartier`,`rue`,`statut`,`date_d_inscription`) VALUES (NULL,'".$nom."','".$prenom."','".$identifiant."','".$email."','".$mdp."','".$telephone."','".$commune."','".$quartier."','".$rue."','".$statut."','".$date_d_incription."')");
                  header ('Location:fin_inscription.php');

                  
                  }
                  else
                  {
          
                 $erreur="Veuillez lire et cocher la case reservee aux conditions generales d'utilisations";
                  }
                  
                       
                
            }
            else
            {
              $erreur="identifiant deja utilisee !";
            }
          
          
          
        
      }
      else
      {
        $erreur="Votre nom d'utilisateur ne doit pas depasser 255 caracteres";
      }
    }
    else
    {
      $erreur = "Tous les champs doivent etre completes!";
     
    }
  }
}

?>
<?php
session_start();
if (isset($_POST['identifiant'])) {
$_SESSION['id'] = $_POST['identifiant'];
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['mdp'] = $_POST['mdp'];


}
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
	<link rel="shortcut icon"  href="/images/Logo supermarché.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/insc.css">
  

	
	
</head>
<body>
	

<?php /*include("../includes/header.php");*/?>
<div class="ins-container" style="display:block">
	<a href="../index.php" class="amg-a" style="width: 10%;">  <img src="logo-menu/log.png" class="amg" style="width: 20%; "></a>
<a href="../index.php" class="amg-a" style="width: 10%; float:right; margin-right:50px;"><i class="fa fa-arrow-left" style="width: 20%; height:35px; color:white; font-size:2rem; float:right;"></i></a>
	 <div class="erreur" style="color:red;"><?php if(isset($erreur)){
                   echo $erreur;} ?></div>
                <div class="registration" id="enregistrement"  >
      <span class="regist" >Senregistrer</span>
      <hr>
      <p class="nsr">Nous sommes ravis de vous compter parmis nos clients </p>
      <form  action="" method="POST">
        <div class="insdiv1">
          <div class="prenom"><strong>Prénom:</strong></div>
          <div class="insdiv12"><input type="text2" name="prenom" placeholder="ablavi ama" id="chprenom"></div>
            <div class="insdiv12"><strong>Identifiant:</strong></div>
            <div class="insdiv12"><strong>Adresse mail:</strong></div>
             <div class="insdiv11"> <strong>N° téléphone:</strong></div>
             <div class="insdiv11"><strong>Commune:</strong></div>
               <div class="insdiv11"><strong>Quartier:</strong></div>
               <div class="insdiv11"><strong>Rue:</strong></div>
               <div class="insdiv11"><strong>Mot de passe:</strong></div>
               
        </div>
        <div class="insdiv2">
          <div class="nom"><strong>Nom:</strong></div>
         <div><input type="text1" name="nom" placeholder="EXEMPLE" class="chnom" required="required"></div>
          <div><input type="text3" name="identifiant" placeholder="" class="champs" required="required"></div>
          <div><input type="text3" name="mail" placeholder="" class="champs"required="required"></div>
          <div><input type="text4" name="telephone" placeholder="72 45 45 56" class="champs" required="required"></div>
          <div><input type="text4" name="commune" placeholder="Rue des pommiers Agbalepedo" class="champs" required="required"></div>

           <div><input type="text4" name="quartier" placeholder="Rue des pommiers Agbalepedo" class="champs" required="required"></div>

           <div><input type="text4" name="rue" placeholder="Rue des pommiers Agbalepedo" class="champs" required="required"></div>
           <div><input type="password" name="mdp" placeholder="*************" class="champs" required="required"></div>

           

                   <input type="checkbox" name="cgdu" class="checkbox" id="rappel" > <label for="rappel">je déclare avoir lu et accepter <a href="condition générale d_utilisation.php">  les conditions d'utilisations </a></label>
                   
       <input type="submit" name="enregistrer" value="S'enregistrer" class="enr">
        </div>
        
       
      
      
    
     
      
       </form>

      
            </div>
		<div class="registration" id="enregistrement1">
			<span class="regist" >Senregistrer</span>
			<hr>
			<p class="nsr">Nous sommes ravis de vous compter parmis nos clients </p>
			<form  action="" method="POST">
        <div class="form">
        
          
          
          
        
                  
     <div>
           <input type="text1" name="nom"  class="chnom" required="required">
                <span>NOM:<strong style="color: red;">*</strong></span>
       </div> 
       <div>   
      <input type="text2" name="prenom"  id="chprenom" required="required">
              <span>PRENOM:<strong style="color: red;">*</strong></span>
        </div>
        <div>
      <input type="text3" name="identifiant"  class="champs" required="required">
              <span>IDENTIFANT OU PSEUDO:<strong style="color: red;">*</strong></span>
        </div>
        <div>
      <input type="text" name="mail"  class="champs">
             <span>ADRESSE EMAIL:</span>
        </div>
        <div>
             <input type="password" name="mdp"  class="champs" id="password" required="required">
           <span>MOT DE PASSE:<strong style="color: red;">*</strong></span>
         </div>
         <div>
      <input type="text4" name="telephone"  class="champs" required="required">
             <span>NUMERO DE TELEPHONE :<strong style="color: red;">*</strong></span>
           </div>
           
          <strong class="adresse">ADRESSE</strong><br>
          <div>
     <input type="text" name="commune"  class="champs" required="required">
        <span>COMMUNE:<strong style="color: red;">*</strong></span>
      </div>
      <div>
     <input type="text" name="quartier"  class="champs" required="required">
        <span>QUARTIER:<strong style="color: red;">*</strong></span>
      </div>
      <div>
     <input type="text" name="rue"  class="champs" >
        <span>RUE:</span>
      </div>
     
      
            <i class="fas fa-eye" id="eye" onclick="toggle()"></i>         
       
			 </div>
    
			 <input type="checkbox" name="cgdu" class="checkbox" id="rappel1"> <label for="rappel1" >je déclare avoir lu et accepter <a href="condition générale d_utilisation.php">  les conditions d'utilisations </a></label>
                 
       <input type="submit" name="enregistrer" value="S'enregistrer" class="enr">
			
		
		 
			
			 </form>

			
		        </div>
</div>

<?php /*include("../includes/footer.php");*/?>
<script src="js/main.js" ></script>
<script src="js/pass.js" ></script>
</body>
</html>