
<?php
include_once("../classes/classes.class.php");	
	
	
     $cnx=utilisateurs::connexion();


     if($cnx!=NULL){
			

			$af=$cnx->query("SELECT COUNT(*) FROM `utilisateurs` ");
			$afS=$cnx->query("SELECT COUNT(*) FROM `solomenu` ");
			$afM=$cnx->query("SELECT COUNT(*) FROM `extramenu` ");
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
				<a href="../index.php">Accueil</a>
				<a href="../layout//Profil.php">Profil</a>
				<a href="../layout//Mon panier.php">Panier</a>
				<a href="../layout//Qui somme nous.php">Qui sommes nous</a>
				<a href="../layout//Contacts.php">Contacts</a>
				<a href="../layout//FAQ.php">FAQS</a>
				<a href="../layout//condition générale d_utilisation.php">CGDU</a>

				<p><strong>Bord de controle</strong></p>
				<a href="menuSolo.php">Mes produits Solo</a>
				<a href="#menuExtra.php">Mes produits Extra</a>
				<a href="statistiquesJ.php">Statistiques du jours</a>
				<a href="statistiquesM.php">Statistiques du mois</a>
				<a href="inscrit.php">Les inscrits</a>
				<a href="newsletter.php">Abonnes a a newsletter</a>
				<a href="abonnes.php">Abonnes aux produits</a>
				
                     
				<p><strong>Retour bord</strong></p>
				
	</div>

	<div class="container2">
				<div class="container21">
					<div class="head"><strong>Mes produits</strong></div>
					<div class="corps">
							<a href="menuSolo.php"> 
									<div class="div1">
										<img src="ognon_blanc.png"><br>
									 	<strong> Listes des produits solo</strong>

									 </div>
							</a>
							 <a href="menuExtra.php">
									 <div class="div2">
									 	<img src="menuExtra.jpg"><br>
									 	<strong>Listes des produits extra</strong>
									 </div>
							</a>
							<a href="recharges.php">
									 <div class="div2">
									 	<img src="menuExtra.jpg"><br>
									 	<strong>Recharges Non traites</strong>
									 </div>
							</a>
					</div>
				</div>

				<div class="container21">
					<div class="head"><strong>Les statistiques de vente</strong></div>
					<div class="corps">
							<a href="abons.php">
								<div class="div3">
									<img src="statistiques.jpg"><br>
									<strong>Statistiques du jour</strong>
								</div>
							</a>
						<a href="newsl.php">
								<div class="div4">
									<img src="mStat.jpg"><br>
									<strong>Statistiques du mois</strong>
								</div>
					    </a>
					    <a href="newsl.php">
								<div class="div4">
									<img src="bilan.jpg"><br>
									<strong>Bilan economique</strong>
								</div>
					    </a>
					</div>
				</div>
			


			<div class="container21">
				  <div class="head"><strong>Les inscriptions et donnees utilisateurs</strong></div>
				  <div class="corps">
						<a href="inscrit.php">
							<div class="div5">
								<img src="inscrit.jpg"><br>
								<strong>Les inscrits</strong>
							</div>
						</a>
						<a href="mois.php">
							<div class="div6">
								<img src="newsletter.jpg"><br>
								<strong>Abonnes newsletter</strong>
							</div>
		                </a>
		                <a href="mois.php">
							<div class="div6">
								<img src="abonnes.jpg"><br>
								<strong>Abonnes aux produits</strong>
							</div>
		                </a>
		            </div>
				</div>

              <div class="container21">
              	<div class="head"><strong>Acces rapide de donnees</strong></div>
              	<div class="corps">
						<a href="jour.php">
							<div class="div7">
								<div><strong><?php
$affS=$afS->fetchColumn();
if ($affS<10) {
echo '0'.$affS;
}
else
{
	echo $affS;
}

?></strong></div>
								<strong>Nbr de produits menu solo</strong>
							</div>
						</a>
						<a href="mois.php">
							<div class="div8">
								<div><strong><?php
$affM=$afM->fetchColumn();
if ($affM<10) {
echo '0'.$affM;
}
else
{
	echo $affM;
}

?></strong></div>
								<strong>Nbr de produits menu extra</strong>
							</div>
		                </a>
		                <a href="mois.php">
							<div class="div8">
						<div><strong><?php
$aff=$af->fetchColumn();
if ($aff<10) {
echo '0'.$aff;
}
else
{
	echo $aff;
}

?></strong></div>
								<strong>Nbr de personnes inscrites</strong>
							</div>
		                </a>
		                <a href="mois.php">
							<div class="div8">
								<div><strong>00028</strong></div>
								<strong>Nbr de personnes abonnes</strong>
							</div>
		                </a>
		                </div>
				</div>

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
</body>
</html>