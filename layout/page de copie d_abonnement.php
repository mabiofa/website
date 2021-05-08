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
                                         <li class="nav-text title" id="li-block">
                                          <a href="#">Boissons</a>
                                          <ul  id="compte-sous-menu2">
                                                 <li  ><a href="jus.php">jus</a></li>
                                                 <li ><a href="vin.php">Vins</a></li>
                                              </ul>
                                        </li>
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
                                            <img src="images/épicerie/curcuma-973x683.jpg"  width="100%"height="220px" Align="center">
                               
                                        </div>
                            <div class="promotion">
                                        <h2 class="menustitle">As tu Visité Nos Packs ?</h2>
                                        <div class="container">
                                            <img src="images/épicerie/illustration-épices-CR-Pixabay.jpg"  width="100%"height="220px" Align="center">
                               
                            </div>
              </div>
                                                    
              </nav>
    <div class="s_abonner">
      <span class="abonner" >S'abonner</span>
      <hr>
      <p class="nsr1">Nous sommes ravis de vous compter parmis nos abonnes </p>
      <form>
        <div class="presentation">
                <div class="abon-prenom">
                     <div class="prenom-title"><strong>Prenom:<span>*</span></strong></div>
                      <input type="text" name="" placeholder="ablavi ama" class="abon-prenom-inp">
                </div>
                <div class="abon-nom">
                     <div class="nom-title"><strong>Nom:<span>*</span></strong></div>
                      <input type="text" name="" placeholder="exemple" class="abon-nom-inp">
                </div>

        </div>

        <div class="abonn-type">
              <div class="abon-type">

                  <div class="type-title"><strong>Type d'abonnement:</strong></div>
                       <input type="checkbox" name="checkbox" class="checkbox" id="mois">
                                   <label for="mois">Par mois</label>
                     <input type="checkbox" name="checkbox" class="checkbox" id="semaine">
                      
                                 <label for="semaine">Par semaines</label>
                 </div>
                        <div class="jour-choix">
                                  <div class="jour-title"><strong>Choisissez deux jours de la semaine</strong></div>
                                  <span class="livraison-domicile">( Pour la livraison a domicile )</span>
                                  <div class="jour-select">
                                          <div class="jour">
                                                 <div class="jour-input">jours de livraison</div>
                                                 <div class="fleche"><i class="fa fa-angle-down"></i></div>
                                         </div>
                                         <div class="jours-ld">
                                              <ul>
                                                   <li class="ar">
                                                    <input type="checkbox" name="checkbox" class="checkbox" id="lundi">
                                                       <label for="lundi">Lundi</label>
                                                        
                                                   </li>
                                                   <li class="ar1">
                                                    <input type="checkbox" name="checkbox" class="checkbox" id="mardi">
                                                       <label for="mardi">Mardi</label>
                                                        
                                                   </li>
                                                   <li class="ar">
                                                      <input type="checkbox" name="checkbox" class="checkbox" id="mercredi">
                                                       <label for="mercredi">Mercredi</label>
                                                      
                                                   </li>
                                                   <li class="ar1">
                                                    <input type="checkbox" name="checkbox" class="checkbox" id="jeudi">
                                                       <label for="jeudi">Jeudi</label>
                                                        
                                                   </li>
                                                   <li class="ar">
                                                    <input type="checkbox" name="checkbox" class="checkbox" id="vendredi">
                                                       <label for="vendredi">Vendredi</label>
                                                        
                                                   </li>
                                                   <li class="ar1">
                                                     <input type="checkbox" name="checkbox" class="checkbox" id="samedi">
                                                       <label for="samedi">Samedi</label>
                                                       
                                                   </li>
                                                  <li class="ar">
                                                      <input type="checkbox" name="checkbox" class="checkbox" id="dimanche">
                                                       <label for="dimanche">Dimanche</label>
                                                      
                                                   </li>
                                              </ul>
                                           
                                         </div>
                                  </div>
                        
                      
                 </div>
              
        </div>
        <div class="abon-info">
                  <div class="abon-ema1">
                    <span class="jour-title"><strong>Email: </strong></span><input type="text" name="" placeholder="exemple@gmail.com">
                  </div>
                 <div class="abon-ema"> 
                 <span class="jour-title"> <strong>N° de tél:</strong></span><input type="text" name="" placeholder="72 45 45 56">
                </div>
        </div>
        <div class="abon-select">

                 <div class="produits-choix">
                                  <div class="produits-title"><strong>Choisissez les produits</strong></div>
                                 
                                  <div class="produits-select">
                                          <div class="produits1">
                                                 <div class="produits-input">je choisis mes produits a abonne</div>
                                                 <div class="fleche"><i class="fa fa-angle-down"></i></div>
                                         </div>
                                         <div class="produits-ld">
                                              <ul class="ld-ul">
                                                   <li class="ar">
                                                    
                                                       <span class="texte">Legumes</span>
                                                       <ul class="produits-sous-menu">
                                            <li class="produits-nomp"><strong>Legumes</strong></li>
                                            <li class="produits2">Carotes</li>
                                            <li class="produits-nom">Tomates bobo</li>
                                             <li class="produits2">Piments Long vert</li>
                                            <li class="produits-nom">Bettraves</li>
                                            <li class="produits2">Concombres</li>
                                            <li class="produits-nom">Choux blanc</li>
                                            <li class="produits2">Choux violet</li>
                                              </ul>
                                                       
                                                        
                                                   </li>
                                                   <li class="ar1">
                                                    
                                                       <span class="texte">Vegetaux</span>
                                                          <ul class="produits-sous-menu">
                                            <li class="produits-nomp"><strong>Legumes</strong></li>
                                            <li class="produits2">Carotes</li>
                                            <li class="produits-nom">Tomates bobo</li>
                                             <li class="produits2">Piments Long vert</li>
                                            <li class="produits-nom">Bettraves</li>
                                            <li class="produits2">Concombres</li>
                                            <li class="produits-nom">Choux blanc</li>
                                            <li class="produits2">Choux violet</li>
                                              </ul>
                                                        
                                                   </li>
                                                   <li class="ar">
                                                      
                                                       <span class="texte">Fruits</span>
                                                          <ul class="produits-sous-menu">
                                            <li class="produits-nomp"><strong>Legumes</strong></li>
                                            <li class="produits2">Carotes</li>
                                            <li class="produits-nom">Tomates bobo</li>
                                             <li class="produits2">Piments Long vert</li>
                                            <li class="produits-nom">Bettraves</li>
                                            <li class="produits2">Concombres</li>
                                            <li class="produits-nom">Choux blanc</li>
                                            <li class="produits2">Choux violet</li>
                                              </ul>
                                                      
                                                   </li>
                                                   <li class="ar1">
                                                  
                                                       <span class="texte">Viandes</span>
                                                          <ul class="produits-sous-menu">
                                            <li class="produits-nomp"><strong>Legumes</strong></li>
                                            <li class="produits2">Carotes</li>
                                            <li class="produits-nom">Tomates bobo</li>
                                             <li class="produits2">Piments Long vert</li>
                                            <li class="produits-nom">Bettraves</li>
                                            <li class="produits2">Concombres</li>
                                            <li class="produits-nom">Choux blanc</li>
                                            <li class="produits2">Choux violet</li>
                                              </ul>
                                                        
                                                   </li>
                                                   <li class="ar">
                                              
                                                       <span class="texte">Epicerie</span>
                                                          <ul class="produits-sous-menu">
                                            <li class="produits-nomp"><strong>Legumes</strong></li>
                                            <li class="produits2">Carotes</li>
                                            <li class="produits-nom">Tomates bobo</li>
                                             <li class="produits2">Piments Long vert</li>
                                            <li class="produits-nom">Bettraves</li>
                                            <li class="produits2">Concombres</li>
                                            <li class="produits-nom">Choux blanc</li>
                                            <li class="produits2">Choux violet</li>
                                              </ul>
                                                        
                                                   </li>
                                                   <li class="ar1">
                                                   
                                                       <span class="texte">Cereales</span>
                                                          <ul class="produits-sous-menu">
                                            <li class="produits-nomp"><strong>Legumes</strong></li>
                                            <li class="produits2">Carotes</li>
                                            <li class="produits-nom">Tomates bobo</li>
                                             <li class="produits2">Piments Long vert</li>
                                            <li class="produits-nom">Bettraves</li>
                                            <li class="produits2">Concombres</li>
                                            <li class="produits-nom">Choux blanc</li>
                                            <li class="produits2">Choux violet</li>
                                              </ul>
                                                       
                                                   </li>
                                                  <li class="ar">
                                                     
                                                       <span class="texte">Tubercules</span>
                                                          <ul class="produits-sous-menu">
                                            <li class="produits-nomp"><strong>Legumes</strong></li>
                                            <li class="produits2">Carotes</li>
                                            <li class="produits-nom">Tomates bobo</li>
                                             <li class="produits2">Piments Long vert</li>
                                            <li class="produits-nom">Bettraves</li>
                                            <li class="produits2">Concombres</li>
                                            <li class="produits-nom">Choux blanc</li>
                                            <li class="produits2">Choux violet</li>
                                              </ul>
                                                      
                                                   </li>
                                                   <li class="ar1">
                                                     
                                                       <span class="texte">Boissons</span>
                                                          <ul class="produits-sous-menu">
                                            <li class="produits-nomp"><strong>Legumes</strong></li>
                                            <li class="produits2">Carotes</li>
                                            <li class="produits-nom">Tomates bobo</li>
                                             <li class="produits2">Piments Long vert</li>
                                            <li class="produits-nom">Bettraves</li>
                                            <li class="produits2">Concombres</li>
                                            <li class="produits-nom">Choux blanc</li>
                                            <li class="produits2">Choux violet</li>
                                              </ul>
                                                       
                                                   </li>
                                                   <li class="ar">
                                                      
                                                       <span class="texte">Divers</span>
                                                          <ul class="produits-sous-menu">
                                            <li class="produits-nomp"><strong>Legumes</strong></li>
                                            <li class="produits2">Carotes</li>
                                            <li class="produits-nom">Tomates bobo</li>
                                             <li class="produits2">Piments Long vert</li>
                                            <li class="produits-nom">Bettraves</li>
                                            <li class="produits2">Concombres</li>
                                            <li class="produits-nom">Choux blanc</li>
                                            <li class="produits2">Choux violet</li>
                                              </ul>
                                                      
                                                   </li>
                                              </ul>
                                           
                                         </div>
                                  </div>
                                </div>
                    <div class="abon-montant">
                      <div class="montant-title"><strong>Montant total verse:</strong></div>
                      <input type="text" name="" placeholder="10.000 FCFA" class="abon-mont-inp">
              </div>
        </div>
        <div class="valider">Valider votre panier d'abonne</div>
        <div class="deuxieme-partie">
        <div class="mode-de-paiement">
                <strong>Mode de payement</strong>
                <span style="opacity: 100%;">(Optez pour un mode de payement a votre convenance!!!)</span>
        </div>
        <div class="paiement-div">
              <div class="paiement-livraison">
                <input type="checkbox" name="checkbox" class="checkbox" id="livraison">
                    <label for="livraison" class="paie"><strong>Payement a la livraison</strong></label>
                <input type="checkbox" name="checkbox" class="checkbox" id="cheque">
                    <label for="cheque" class="decale">Par cheque</label>
                    <input type="checkbox" name="checkbox" class="checkbox" id="liquidite">
                    <label for="liquidite" class="decale">En liquidite</label>
              </div>
              <div class="paiement-mobiled">
                  <div class="paiement-mobile">
                     <input type="checkbox" name="checkbox" class="checkbox" id="mobile">
                     <label for="mobile" class="paie"><strong>Payement mobile</strong></label>
                  </div>
                  <div><img src="images/LOGO/payement mobile.JPG"></div>
              </div>
              <div class="paiement-bancaired">
                  <div class="paiement-bancaire">
                       <input type="checkbox" name="checkbox" class="checkbox" id="bancaire">
                       <label for="bancaire"  class="paie"><strong>Payement par carte bancaire</strong></label>
                  </div>
                  <div><img src="images/Logo/payment par carte bancaire.jpg"></div>
              </div>
                
        </div>
        <div class="confirmation">
           <span class="confirmation-title"><strong>Confirmation de payement mobile :</strong></span>
           <input type="text" name="" placeholder="Exemple:9AOBD5647I767SZ">

          
        </div>
        
        <strong class="point-de-livraison">Point de livraison</strong>
        <div class="abon-adresse">
                  <div class="rue-ema">
                    <strong>RUE<span>*</span> </strong><br>
                    <input type="text" name="" placeholder="" class="champ">
                  </div>
                 <div class="quartier-ema">
                  <strong>COMMUNE/QUARTIER<span>*</span></strong> <br>
                  <input type="text" name="" placeholder="" class="champ">
                </div>
        </div>
        <div class="valider2">Validation finale</div>
        
          </div>
        </form>
      </div>
    </div>



<?php include("../includes/footer.php");?>
<script src="js/main.js" ></script>
</body>
</html>