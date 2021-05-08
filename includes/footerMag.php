
 <footer>
     <p align="center"><span > Nos partenaires </span></p>
     <div class="parten">
    <img src="images/Logo/Logo supermarché sans fond arrière.png" class="parten1">
    <img src="images/Logo/Logo société sans arrière fond.png" class="parten2">
    <img src="images/Logo/Logo ferme 1.png" class="parten3">
</div>


            <div class="btns">
                
                
                  <form action="" method="POST">
                    <div class="search-zone">
                                   
                                    <input type="text" placeholder="Inscrivez-vous à la news letter" name="email">
                                     <div class="search-area"><input type="submit" value="Email" name="subm"></div>
                     </div>
                 </form>
            </div>
            </div>
    
            <div class="wrapper">
                
                <ul class="ul2">
                    <li ><span class="li3"><a href="" ><strong>Pourquoi Nous?</strong></a></span></li>
                    <li>Parce que nous garantissons votre bien être tout en préservant notre écosystème</li>
                </ul>
                <ul class="ul3">
                    <li ><span class="li2"><strong>NEWSLETTERS</strong></span></li>
                    <li>Entrez votre adresse mail pour recevoir des notifications des nouveaux produits et des codes de réduction.</li>
                </ul>
                <ul class="ul1">
                    <li ><span class="li2"><strong>LINKS</strong></span></li>
                    <li class="nav-text"><a href="../index.php">Mabiofa Shop</a></li>
                    <li class="nav-text"><a href="abonnement.php">Abonnement</a></li>
                    <li class="nav-text"><a href="compte.php">Mon Portefeuille bio</a></li>
                    <li class="nav-text"><a href="#">Bio-Magazeen</a></li>
                    <li class="nav-text"><a href="Pourquoi_le_bio.php">Pourquoi Bio ? </a></li>
                    
                    <li class="nav-text"><a href="Qui somme nous.php">Qui sommes nous ?</a></li>
                    <li class="nav-text"><a href="Contacts.php">Contacts</a></li>
                    
                </ul>
                <ul class="ul4">
                    <li ><span class="li4"><strong>CONTACTS</strong></span></li>
                    <li>TEL:(+228) 93 49 89 58
                        <P class=""><span class="number">(+228) 96 84 70 22</span></P>
                        Email:<a href="contact@mabiofa-eden.com" class="email" title="cliquez ici pour nous envoyer un mail">contact@mabiofa-eden.com</a>
                        <p>Adresse : Agoè-Télessou</p>
                         Lome-TOGO</li>
                    <li> 
                        
                        <a href="https://www.facebook.com/Biofarm-EDEN-108259434213928/" title ="MABIOFA EDEN Sarl. Facebook.com"><img src="images/Logo/facebooklogo.png" class="amg6"></a>
                        <a href="https://www.linkedin.com/company/MABIOFA-EDEN/" title ="MABIOFA EDEN SARL Linkedin"><img src="images/Logo/LinkedIn_logo.jpg" class="amg5"></a>
                        <a href=" " title =" https://twitter"><img src="images/Logo/tiwtter.png" class="amg6"></a>
                        <a href=" " title ="https://www.instagram.com/"><img src="images/Logo/instagram.png" class="amg5"></a>
      
                    </li>
            </div>
            </footer>
            <div class="afterFooter">
                <a href="condition générale d_utilisation.php" title="condition générale d'utilisation" ><strong style="padding-left: 0px;" style="color: black;" style="margin-left: 0px;">MABIOFA EDEN</strong> tout droit réservé</a>
                <img src="images/Logo/mode paiement3.png" class="imgmodepaiement">         
            </div>
       
  <?php
include_once("classes/classes.class.php");
 $cnx=utilisateurs::connexion();
if (isset($_POST['subm'])) {

if (!empty($_POST['email'])) {
  echo "yes";

 $url="https://biofarm-eden.com/layout/token?token=$token";
 $message="<html>
            <body >
            <img src=\"https://biofarm-eden.com/layout/images/Logo supermarché.png\"><br>
            <div>
            Merci de vous etre inscrit a la newsletter !!!!
            </div>
            </body>
            </html>
";
 $headers='Content-Type: text/plain; charset="utf-8"'." ";
$date=date(d-m-y);
 $sql="INSERT INTO utilisateurs VALUES (Null,?,?) ";
  $stmt= $cnx->prepare($sql);
    $stmt->execute([$date,$_POST['email']]);
mail($_POST['mail'], 'Inscription a la newsletter BIOFA',$message,$headers);
 
}
}

?>