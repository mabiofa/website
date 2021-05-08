<?php
include_once("classes.class.php");	
	
	
     $cnx=utilisateurs::connexion();

     if($cnx!=NULL){
			$affiche=$cnx->query("SELECT * FROM `utilisateurs` ");
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
	<link rel="shortcut icon"  href="images/LOGO2.png">
	<!------feuilles de styles css----->
	<link rel="stylesheet" type="text/css" href="dash.css">
</head>
<body>
<div class="header">
	
     BIENVENUE DANS VOTRE ESPACE PRIVE D'AMINISTRATION MONSIEUR ABOU ADAM
</div>

<div class="container">
	
	<div class="container1">
				<a href="profil.php"><div class="lien1">MON PROFIL</div></a>
				<a href="#"><div class="lien1">MES STATISTIQUES</div></a>
				<a href="../index.php"><div class="lien1">ACCUEIL</div></a>
				
	</div>
<div class="container2">
	<table >
					
					<tr class="th1">
				    <td>N</td>
					<td>NOM</td>
					<td>PRENOM</td>
					<td>EMAIL</td>
					<td>TELEPHONE</td>
					<td>ADRESSE</td>
					<td>STATUT</td>
					<td>DATE D'INSCRIPTION</td>
					</tr>
					<?php
					$i=1;
					while ($donnees = $affiche->fetch())
				{
					
					?>

				 <tr class="th2">
						<td><?php echo $i; ?></td>
						<td><?php echo $donnees['nom']; ?></td>
				       <td><?php echo $donnees['prenom'];?></td>
						<td><?php echo $donnees['email']; ?></td>
						<td><?php echo $donnees['telephone']; ?></td>
						<td><?php echo $donnees['commune'].$donnees['quartier'].$donnees['rue']; ?></td>
						<td><?php echo $donnees['statut']; ?></td>
						<td><?php echo $donnees['date_d_inscription']; ?> AA/MM/JJ,HH/MM/SS</td>
						
						
					</tr>

				<?php
                 $i++;
				}

				$affiche->closeCursor(); // Termine le traitement de la requête
				?>
	
      </table>
</div>
</div>



</body>
</html>