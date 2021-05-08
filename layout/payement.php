<?php
session_start();
$_SESSION['pointer']=2;
$id_p= $_SESSION['id'];


if (!empty($_SESSION['id'])) {

include_once("../classes/classes.class.php");

$c=utilisateurs::connexion();
if($c!=null){
 
$r=$c->query("SELECT * FROM `utilisateurs` WHERE  identifiant='$id_p'");
$t=$r->fetchAll();
      foreach ($t as $row){
       
        $id_u=$row['id'];
       
      }
            if(isset($_POST['submitcheq']))
                {
                    
                  
                         header ('Location:fin_payement.php');
                          $_SESSION['modeliv']='Cheque';
                          $_SESSION['rue']=$_POST['rue3'];
                          $_SESSION['lieu']=$_POST['lieu3'];
                }
                if(isset($_POST['submitliq']))
                {
                   
                  
                     header ('Location:fin_payement.php');
                      $_SESSION['modeliv']='Cheque';
                     $_SESSION['rue']=$_POST['rue4'];
                          $_SESSION['lieu']=$_POST['lieu4'];
                }

            if(isset($_POST['submitPT']))
                {
                     $_SESSION['modeliv']='TMONNEY';
                    header ('Location:index.php'); 
                }
            if(isset($_POST['submitPF']))
                {
                       
                    header ('Location:index.php');
                    $_SESSION['modeliv']='FLOOZ';
               }
             }


     
}
else
{
  
header ('Location:Page de connection.php');
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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/profil.css">
	
	
</head>
<body>
<?php include("../includes/header.php");?>


<div class="ins-container">
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
                                         <li ><a href="boisson.php">Boissons</a></li>
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
			  <div class="mon-panier">
          <div class="panierPreentete">
            <div class="panierp">Panier</div>
            <div class="panierr">Renseignements</div>
            <div class="paniern">Payement</div>
            <div class="panierres">resultats</div>
          </div>
			
							  <div class="deuxieme-partie">

        <div class="mode-de-paiement">
                <strong>Mode de payement</strong>

                <span>(Optez pour un mode de payement a votre convenance!!!)</span>
        </div>
        <form action="" method="POST">



 <aside id="modal1" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
             <div class="modal-wrapper js-modal-stop">
              <img src="images/Logo/WhatsApp-Image-2021-02-06-at-9.14.27-PM - Copie.jpeg">
               <div class="tmoney-div">
                <span>Vous avez choisit de payer par <span class="floozN"><strong>TMONEY</strong></span>.</span><br>
                <span>Voici le numero de transaction</span><br>
                <span class="numb"><strong>93-49-89-58</strong></span><br>
                <span>Code de transction: *145*1*1*Montant*Numéro#</span><br>
                <span class="nbp"><span class="nb">NB:</span> Vous recevrez un code après la transaction effectuée</span>
                 <a  onclick="func2();"><div class="click1">Clicquez ici après avoir envoyé </div></a>

               </div>
               <div class="code" style="display: none;" id="code1">
                <div class="code11">
                    <span>Saisissez le code que vous avez recu  sur votre numéro</span>
                    <br>
                    <input type="text" name="tmoneyInput" required="required"><br>
                </div>
                <span>Veuillez entrer ensuite l'adresse de livraison</span><br>
                 <strong class="point-de-livraison">Point de livraison</strong>
                        <div class="abon-adresse">
                                  <div class="rue-ema">
                                    <strong>RUE<span>*</span> </strong><br>
                                    <input type="text" name="rue1" placeholder="" class="champ" required="required">
                                  </div>
                                 <div class="quartier-ema">
                                  <strong>COMMUNE/QUARTIER<span>*</span></strong> <br>
                                  <input type="text" name="lieu1" placeholder="" class="champ" required="required">
                                </div>
                        </div><br>
                        <input type="submit" name="submitPT" value="ENVOYER">
               </div>
               <span class="nb">     
          
        </span>
               <div  class="js-modal-close termin">RETOUR</div>
              
            </div>
</aside>
</form>
 <form action="" method="POST">
 <aside id="modal2" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
              <img src="images/Logo/logo-flooz.jpg">
               <div class="tmoney-div">
                <span>Vous avez choisit de payer par <span class="floozN"><strong>FLOOZ</strong></span>.</span><br>
                <span>Voici le numéro de transaction</span><br>
                <span class="numb"><strong>96-84-70-22</strong></span><br>
                <span>Code de transction: *155*1*1*Numéro*Montant#</span><br>
                <span class="nbp"><span class="nb">NB:</span> Vous recevrez un code après la transaction éffectuée</span>
                 <a  onclick="func3();"><div class="click1">Clicquez ici après avoir envoyé </div></a>

               </div>
               <div class="code" style="display: none;" id="code2">
                <div class="code11">
                        <span>Saisissez le code que vous avez recu sur votre numéro</span><br>
                        <input type="text" name="floozInput" required="required" ><br>
               </div>
               <span>Veuillez entrer ensuite l'adresse de livraison</span><br>
                 <strong class="point-de-livraison">Point de livraison</strong>
                        <div class="abon-adresse">

                                  <div class="rue-ema">
                                    <strong>RUE<span>*</span> </strong><br>
                                    <input type="text" name="rue2" placeholder="" class="champ" required="required">
                                  </div>
                                 <div class="quartier-ema">
                                  <strong>COMMUNE/QUARTIER<span>*</span></strong> <br>
                                  <input type="text" name="lieu2" placeholder="" class="champ" required="required">
                                </div>
                        </div><br>
                         <input type="submit" name="submitPF" value="ENVOYER">
               </div>
               
               <span class="nb">     
        </span>
               <div  class="js-modal-close termin">RETOUR</div>
              
            </div>
</aside>
</form>
 <form action="" method="POST">
<aside id="modal3" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
              <img src="images/Logo/124413613.jpg">
               <div class="tmoney-div">
                <span>Vous avez choisit de payer par <span class="floozN"><strong>CHEQUE</strong></span>.</span><br>
                <span>Veuillez entrer l'adresse de livraison</span><br>
               </div>
               
               <strong class="point-de-livraison">Point de livraison</strong>
        <div class="abon-adresse">
          
                  <div class="rue-ema">
                    <strong>RUE<span>*</span> </strong><br>
                    <input type="text" name="rue3" placeholder="" class="champ" required="required">
                  </div>
                 <div class="quartier-ema">
                  <strong>COMMUNE/QUARTIER<span>*</span></strong> <br>
                  <input type="text" name="lieu3" placeholder="" class="champ" required="required">
                </div>
              
                
        </div>
        <div class="code">
                <input type="submit" name="submitcheq" value="ENVOYER">
              </div>
        
               <div  class="js-modal-close termin">RETOUR</div>
              
            </div>
</aside>
</form>
 <form action="" method="POST">
<aside id="modal4" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop">
              <img src="images/Logo/main-donnant-l-argent-à-l-autre-main-29283860.jpg">
               <div class="tmoney-div">
                <span>Vous avez choisit de payer en <span class="floozN"><strong>LIQUIDITE</strong></span>.</span><br>
                <span>Veuillez entrer l'adresse de livraison</span><br>

               </div>
               <strong class="point-de-livraison">Point de livraison</strong>
        <div class="abon-adresse">
          
                  <div class="rue-ema">
                    <strong>RUE<span>*</span> </strong><br>
                    <input type="text" name="rue4" placeholder="" class="champ" required="required">
                  </div>
                 <div class="quartier-ema">
                  <strong>COMMUNE/QUARTIER<span>*</span></strong> <br>
                  <input type="text" name="lieu4" placeholder="" class="champ" required="required">
                </div>

                
                
        </div>
               <div class="code">
                <input type="submit" name="submitliq" value="ENVOYER">
              </div>
               <span class="nb">    
          
        </span>
               <div  class="js-modal-close termin">RETOUR</div>
              
            </div>
</aside>
</form>
 <form action="" method="POST">
        <div class="paiement-div">
              <div class="paiement-livraison">

                <input type="checkbox" name="checkbox" class="checkbox livrer" id="livraison" onclick="func0();">
                    <label for="livraison" class="paie"><strong>Payement a la livraison</strong></label>
                    <div style="display: none;" id="livrer">
                <input type="checkbox" name="cheque" class="checkbox js-modal" id="cheque" href="#modal3">
                    <label for="cheque" class="decale">Par cheque</label>
                    <input type="checkbox" name="liquid" class="checkbox js-modal" id="liquidite" href="#modal4">
                    <label for="liquidite" class="decale">En liquidite</label>
                  </div>
              </div>
              <div class="paiement-mobiled">
                  <div class="paiement-mobile">
                     <input type="checkbox" name="mobilep" class="checkbox mobileCheck" id="mobile" onclick="func();">
                     
                     <label for="mobile" class="paie"><strong>Payement mobile</strong></label>

                  </div>
                  
                  <div class="tmoney" style="display: none;" id="style">
                    <div>
                    <input type="checkbox" name="tmoney" class="checkbox tmoneyCheck js-modal" id="mobile2" onclick="func2();" href="#modal1">
                     
                     <label for="mobile2" class="paie decale"><img src="images/Logo/Logo_TMoney_Togocom_New1.png"  ></label>
                  </div>
                  <div >
                    <input type="checkbox" name="flooz" class="checkbox floozCheck js-modal" id="mobile3" href="#modal2">
                     
                     <label for="mobile3" class="paie decale"><img src="images/Logo/logo-flooz.jpg"  ></label>
                  </div>
                </div>



              </div>


                <div class="paiement-bancaired">
                  <div class="paiement-bancaire">
                       <input type="checkbox" name="checkbox" class="checkbox" id="bancaire">
                       <label for="bancaire"  class="paie"><strong>Payement par carte bancaire</strong></label>
                  </div>
                  <div><img src="images/Logo/payment par carte bancaire.jpg"></div>
                  <p align="center"><span >Non disponible</span></p>
              </div>
        </div>
        
 <span class="nb">   
          
        </span>
        
        
        
          </div>
                       <a href="Mon panier.php"><div class="valider3"><strong>Retour au panier</strong></div></a>       
			  </div>		
     </div>
   </form>
     
<?php include("../includes/footer.php");?>
  <script type="text/javascript">
                  function func()
                  {
                    var mobile=document.getElementsByClassName('mobileCheck');
                    var div=document.getElementById('style');
                    console.log(mobile[0]);
                    if (mobile[0].checked) {
                      div.style.display='block';
                      console.log('ho');
                    }
                    if (!mobile[0].checked)
                    {
                      div.style.display='none';
                    }
                  }
                     function func0()
                  {
                    var mobile=document.getElementsByClassName('livrer');
                    var div=document.getElementById('livrer');
                    console.log(mobile[0]);
                    if (mobile[0].checked) {
                      div.style.display='block';
                      console.log('ho');
                    }
                    if (!mobile[0].checked)
                    {
                      div.style.display='none';
                    }
                  }
                 
                </script>
 <script src="js/main.js" ></script>
 <script src="js/modal1.js" ></script>
   
</body>
</html>