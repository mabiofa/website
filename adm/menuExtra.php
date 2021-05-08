
<?php
include_once("../classes/classes.class.php");	
	
	 $affiche=utilisateurs::Afficher_me_prod();
      
		
    if (isset($_POST['ajoutsub'])) {
    	 $nom=$_POST['nameA'];
		$prix=$_POST['prixA'];
		$stock=$_POST['stockA'];
		$cat=$_POST['catA'];

          if (!empty($_POST['nameA'])  and !empty($_POST['prixA']) and !empty($_POST['stockA']) and !empty($_POST['catA']) )
           {
                   $ajout=utilisateurs::ajouter_me_prod($nom,$prix,$stock,$cat);
           }
           else{
           	$erreur='Vous avez oublie un champ ';
           }


    }

    if (isset($_POST['deletesub'])) {
    	 $id=$_POST['nameS'];
  if (!empty($_POST['nameS']) )
           {
               $supprimer=utilisateurs::supprimer_me_prod($id);
           }
           else{
           	$erreur='Veuillez entrer le nom du produit a supprimer ';
           }

    }

    if (isset($_POST['modifsub'])) {
    	 $nom=$_POST['nameM'];
		$prix=$_POST['prixM'];
		$stock=$_POST['stockM'];
		$cat=$_POST['catM'];
		$id=$_POST['idM'];

		  if (!empty($_POST['nameM'])  and !empty($_POST['prixM']) and !empty($_POST['stockM']) and !empty($_POST['catM']) and !empty($_POST['idM']) )
           {
             $modifier=utilisateurs::modifier_me_prod($id,$nom,$prix,$stock,$cat);
           }
           else{
           	$erreur='Vous avez oublie un champ ';
           }

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
	<link rel="stylesheet" type="text/css" href="dash1.css">
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
				<a href="menuSolo.php">Mes produits Solo</a>
				<a href="#menuExtra.php">Mes produits Extra</a>
				<a href="statistiquesJ.php">Statistiques du jours</a>
				<a href="statistiquesM.php">Statistiques du mois</a>
				<a href="inscrit.php">Les inscrits</a>
				<a href="newsletter.php">Abonnes a a newsletter</a>
				<a href="abonnes.php">Abonnes aux produits</a>
				<a href="dash.php">Retour au Dashbord Acceuil</a>

				<p><strong>Retour bord</strong></p>
				
	<hr>
                    <div class="biofe"><strong>MABIOFA </strong></div>
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
				<a href="menuSolo.php">Mes produits Solo</a>
				<a href="#menuExtra.php">Mes produits Extra</a>
				<a href="statistiquesJ.php">Statistiques du jours</a>
				<a href="statistiquesM.php">Statistiques du mois</a>
				<a href="inscrit.php">Les inscrits</a>
				<a href="newsletter.php">Abonnes a a newsletter</a>
				<a href="abonnes.php">Abonnes aux produits</a>
				<a href="dash.php">Retour au Dashbord Acceuil</a>

				<p><strong>Retour bord</strong></p>
				
	</div>
<div class="container222">
	<div class="table1">
		<form action="" method="POST">
				<p class="title">AJOUTER UN PRODUIT </p>
				<div>
						<div><label>NOM </label><input type="text" name="nameA" class="text"></div><br>
						<div><label>PRIX </label><input type="text" name="prixA"class="text"></div><br>
						<div><label>STOCK </label><input type="text" name="stockA"class="text"></div><br>
						<div><label>CATEGORIE </label><input type="text" name="catA" class="text"></div><br>
						
			   </div>
				<input type="submit" name="ajoutsub" class="submit" value="OK">

          </form>
			<form action="" method="POST">
				<p class="title">SUPPRIMER UN PRODUIT </p>
				<div>
						<div><label>NOM :</label><input type="text" name="nameS" class="text"></div>
						
						
			   </div>



				<input type="submit" name="deletesub" class="submit" value="OK">
			</form>
			<form action="" method="POST">
				<p class="title">MODIFIER UN PRODUIT </p>
				<div>
					<div><label>ID </label><input type="text" name="idM" class="text"></div><br>
					 <div><label>NOM </label><input type="text" name="nameM" class="text"></div><br>
						<div><label>PRIX </label><input type="text" name="prixM"class="text"></div><br>
						<div><label>STOCK </label><input type="text" name="stockM"class="text"></div><br>
						<div><label>CATEGORIE </label><input type="text" name="catM" class="text"></div><br>
						
			   </div>
				<input type="submit" name="modifsub" class="submit" value="OK">

          </form>
		</div>


	<table >
					
					<tr class="th1">
				    <td colspan="4">ID</td>
					<td>NOM</td>
					<td>PRIX</td>
					<td class="no">STOCK</td>
					<td>CATEGORIE</td>
					
					</tr>
					<?php
					$i=1;
					while ($donnees = $affiche->fetch())
				{
					?>

				<tr class="th2">
						<td colspan="4"><?php echo $donnees['id']; ?></td>
						<td ><?php echo $donnees['nom']; ?></td>
						<td ><?php echo $donnees['prix']; ?></td>
				        <td ><?php echo $donnees['stock']; ?></td>
						<td class="no"><?php echo $donnees['categorie']; ?></td>
						
					</tr>

				
				<?php
                $i++;
				}
				$affiche->closeCursor(); // Termine le traitement de la requête
				?>
      </table>
      
<?php
if (isset($erreur)) {
	 echo $erreur;
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
</body>
</html>