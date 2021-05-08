<?php
include_once("../classes/classes.class.php");	
	
//	 WHERE `recharges`.`id_recharge` = 5;
	
     $cnx=utilisateurs::connexion();


     if($cnx!=NULL){
			$affiche=$cnx->query("SELECT utilisateurs.nom,utilisateurs.telephone,utilisateurs.prenom,recharges.montant,.recharges.moyen,recharges.numero,recharges.dateRecharge FROM `recharges` INNER JOIN utilisateurs WHERE recharges.id_user=utilisateurs.id AND recharges.statut='NO'");
			$af=$cnx->query("SELECT COUNT(*) FROM `recharges` ");
     }
	if(isset($_POST['confirmer']))
{

    $num=$_POST['num']-1;
    $quer=$cnx->query("SELECT utilisateurs.nom,utilisateurs.telephone,utilisateurs.prenom,recharges.id_recharge,recharges.montant,.recharges.moyen,recharges.numero,recharges.dateRecharge FROM `recharges` INNER JOIN utilisateurs WHERE recharges.id_user=utilisateurs.id AND recharges.statut='NO'");
    $e=$quer->fetchAll();
    $ident=$e[$num][3];
    $modif= $cnx->prepare('UPDATE recharges SET statut = \'yes\' WHERE id_recharge=:identifiant');
   $modif->execute(array('identifiant'=>$ident));
   
    	$affiche->closeCursor();
    		$affiche=$cnx->query("SELECT utilisateurs.nom,utilisateurs.telephone,utilisateurs.prenom,recharges.montant,.recharges.moyen,recharges.numero,recharges.dateRecharge FROM `recharges` INNER JOIN utilisateurs WHERE recharges.id_user=utilisateurs.id AND recharges.statut='NO'");
			$af=$cnx->query("SELECT COUNT(*) FROM `recharges` ");

    echo $_POST['num'];
}		
?>
<!DOCTYPE html>
<html>
<head>
	<title>MABIOFA EDEN ADMIN-DASHBORD</title>
	<!------icons fontawsome----->
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/lightslider.css">
	<!------liens js----->
	
	<!------icon du titre----->
	<link rel="shortcut icon"  href="../layout/images/Logo supermarché.png">
	<!------feuilles de styles css----->
	<link rel="stylesheet" type="text/css" href="ins.css">
</head>
<body>
<ul class="menu2" id="menu2">
            <div class="menu-amg"><img src="../layout/images/Logo supermarché.png" class="amg"></div>
            <hr>
            
	
	<div class="container11">
				<p><strong>Application</strong></p>
				<a href="../index.php">Accueil</a>
				<a href="../layout/Profil.php">Profil</a>
				<a href="../layout/Mon panier.php">Panier</a>
				<a href="../layout/Qui somme nous.php">Qui sommes nous</a>
				<a href="../layout/Contacts.php">Contacts</a>
				<a href="../layout/FAQ.php">FAQS</a>
				<a href="../layout/condition générale d_utilisation.php">CGDU</a>

				<p><strong>Bord de controle</strong></p>
				<a href="#">Mes produits</a>
				<a href="#">Statistiques du jours</a>
				<a href="#">Statistiques du mois</a>
				<a href="#">Les inscrits</a>
				<a href="#">Abonnes a a newsletter</a>
				<a href="#">Abonnes aux produits</a>
				<a href="dash.php">Retour a l'accueil</a>

				<p><strong>Retour bord</strong></p>
				
	<hr>
                    <div class="biofe"><strong>MABIOFA</strong></div>
          </ul>
<div class="menu2-div">
        </div>
<div class="header">
	<!------icon de menu----->
    <a href="#" class="menu-bars1" id="show-menu">
		<i class="fas fa-bars"></i>
	</a>
	<img src="../layout/images/Logo supermarché.png">
	<div>
		<span class="tb"><strong>TABLEAU DE BORD</strong></span>
		<span class="adam"><strong>Mr ADAM Abou</strong></span><br>
		<span class="ad">Admin</span>
    </div>
    
</div>


<div class="container">
	
	<div class="container1">
				<p><strong>Application</strong></p>
				<a href="index.php">Accueil</a>
				<a href="Profil.php">Profil</a>
				<a href="Mon panier.php">Panier</a>
				<a href="Qui somme nous.php">Qui sommes nous</a>
				<a href="Contacts.php">Contacts</a>
				<a href="FAQ.php">FAQS</a>
				<a href="condition générale d_utilisation.php">CGDU</a>

				<p><strong>Bord de controle</strong></p>
				<a href="index.php">Accueil</a>
				<a href="Profil.php">Profil</a>
				<a href="Mon panier.php">Panier</a>
				<a href="Qui somme nous.php">Qui sommes nous</a>
				<a href="Contacts.php">Contacts</a>
				<a href="FAQ.php">FAQS</a>
				<a href="condition générale d_utilisation.php">CGDU</a>

				<p><strong>Retour bord</strong></p>
				
	</div>
	
	

	
	
<div class="container2">
    <form action="" method="POST">
    <input  type="text" class="input" name="num">
	<input class="btn btn-primary" type="submit" name="confirmer" value="Confirmer"><input class="btn btn-primary" name="annuler" type="submit" value="Annuler">
	</form>
	<table class="table">
  <thead class="table-dark">
     <tr>
     <th scope="col" class="non">N°</th>
      <th scope="col">Nom & Prenom</th>
      <th scope="col">Montant</th>
      <th scope="col" class="non">Telephone</th>
      <th scope="col" class="non">Moyen</th>
      <th scope="col" class="non">Date</th>
      <th scope="col">numero d'envoi</th>
      
    </tr>
  </thead>
  <tbody>
      <?php
					$i=1;
					while ($donnees = $affiche->fetch())
				{
					
					?>
    <tr>
      <th scope="row" class="non"><?php echo $i; ?></th>
      <td><?php echo $donnees['nom']; ?><br><?php echo $donnees['prenom']; ?></td>
     
      <td class="non " href="#modal<?php echo $i ?>"><?php echo $donnees['montant']; ?></td>
      <td class="non"><?php echo $donnees['telephone']; ?></td>
      <td><?php echo $donnees['moyen']; ?></td>
      <td><?php echo $donnees['dateRecharge']; ?></td>
      <td><?php echo $donnees['numero']; ?></td>
      
    </tr>
    
    <?php
                 $i++;
				
                   }
				$affiche->closeCursor(); // Termine le traitement de la requête
				?>
  </tbody>
</table>
      
<span>Nbr total:</span>

<?php
$aff=$af->fetchColumn();
echo $aff;
?>
<?php
	if(isset($_POST['confirmer']))
{

    $num=$_POST['num'];
    
    echo $donnees[1][2];
    
}		
?>

</div>
</div>


<?php include("footer.php");?>
<script>
  var openMenu =document.querySelector('#show-menu');
var hideMenuIcon =document.querySelector('.menu2-div');
var sideMenu = document.querySelector('.menu2-div');
var openMenus =document.querySelector('#menu2');

openMenu.addEventListener('click',function(){
    sideMenu.classList.add('active')
    openMenus.classList.add('active')
});

hideMenuIcon.addEventListener('click',function(){
    sideMenu.classList.remove('active')
    openMenus.classList.remove('active')
});
</script>
<script src="../js/modal1.js" ></script>
<script type="text/javascript" src="../layout/jquery-3.6.0.js"></script>
<script type="text/javascript" src="../layout/bootstrap/js/bootstrap.js"></script>
</body>
</html>