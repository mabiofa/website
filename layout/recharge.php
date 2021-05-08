<?php
session_start();
 $id=$_SESSION['id'];
 include_once("../classes/classes.class.php"); 
  $c=utilisateurs::connexion();
 if($c!=null){
     $bdd=$c;
$r= $bdd->prepare('SELECT * FROM  utilisateurs WHERE identifiant=:identifiant');
$r->execute(array('identifiant'=>$id));
$t=$r->fetchAll();
     foreach ($t as $row){
			
					$idu=$row[0];
				}


 date_default_timezone_set("UTC");
 
 
 
 if(isset($_POST['submitPT']))
{
     $date=date('y-m-d');
   $time=date('H:i:s');
$datea=$date.' a '.$time;
    $montant=$_POST['tmmont'];
    $moyen='T-Money';
    $statut='NO';
   
    $numero=$_POST['numero'];
    
 $e=$bdd->query("INSERT INTO `recharges`(`id_recharge`,`id_user`,`montant`,`dateRecharge`,`moyen`,`statut`,`numero`) VALUES (NULL,'".$idu."','".$montant."','".$datea."','".$moyen."','".$statut."','".$numero."')");
 $_POST['tmmont']=NULL;
 header ('Location:fin_recharge.php');
}

if(isset($_POST['submitPF']))
{
 $date=date('y-m-d');
 $time=date('H:i:s');
$datea=$date.' a '.$time;
    $montant=$_POST['tmmont1'];
    $moyen='FLOOZ';
    $statut='NO';
    $numero=$_POST['numero1'];
 $e=$bdd->query("INSERT INTO `recharges`(`id_recharge`,`id_user`,`montant`,`dateRecharge`,`moyen`,`statut`,`numero`) VALUES (NULL,'".$idu."','".$montant."','".$datea."','".$moyen."','".$statut."','".$numero."')");

}


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
  <link rel="shortcut icon"  href="images/Logo supermarché.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/recharge.css"> 
 
  
</head>
<body style="background: url(logo-menu/plume.jpg);">
  

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






<!-- First modal dialog -->
<!--
<div class="modal fade" id="modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      ...
      <div class="modal-footer">
        <!-- Toogle to second dialog -->
       <!-- <button class="btn btn-primary" data-bs-target="#modal2" data-bs-toggle="modal" data-bs-dismiss="modal">Open #modal2</button>
      </div>
    </div>
  </div>
</div>
<!-- Second modal dialog -->
 <!--<div class="modal fade" id="modal2" aria-hidden="true" aria-labelledby="..." tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      ...
      <div class="modal-footer">
        <!-- Toogle to first dialog, `data-bs-dismiss` attribute can be omitted - clicking on link will close dialog anyway -->
    <!--    <a class="btn btn-primary" href="#modal" data-bs-toggle="modal" role="button">Open #modal</a>
      </div>
    </div>
  </div>
</div>
<!-- Open first dialog -->
<!--<a class="btn btn-primary" data-bs-toggle="modal" href="#modal" role="button">Open #modal</a>
-->




<form action="" method="POST">
<aside id="modal3" class="modal" aria-hidden="true" role="dialog" style="display:none;">
     
            <div class="modal-wrapper js-modal-stop">
              <p align="center" class="Pmoney">  <span class="vers tit">Choisisssez votre mode de recharge</span></p>
              <div class="tmoney"  id="style">
                    <div>
                    <input type="checkbox" name="tmoney" class="checkbox tmoneyCheck js-modal1" id="mobile2" onclick="func2();" href="#modal1">
                     
                     <label for="mobile2" class="paie decale"><img src="images/Logo/Logo_TMoney_Togocom_New1.png" class="inpImg"  ></label>
                  </div>
                  <div >
                    <input type="checkbox" name="flooz" class="checkbox floozCheck js-modal1" id="mobile3" href="#modal2">
                     
                     <label for="mobile3" class="paie decale"><img src="images/Logo/logo-flooz.jpg"  class="inpImg"></label>
                  </div>
                </div>
               
                <button class="btn btn-primary js-modal-close " type="button">Fermer</button>
              </div>
        
</aside>
</form>
 <form action="" method="POST" id="form">



 <aside id="modal1" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
             <div class="modal-wrapper js-modal-stop1">
              <img src="images/Logo/WhatsApp-Image-2021-02-06-at-9.14.27-PM - Copie.jpeg" class="imgF">
               <div class="tmoney-div">
                <span>Vous avez choisit de payer par <span class="floozN"><strong>TMONEY</strong></span>.</span><br>
                <span>Voici le numero de transaction</span><br>
                <span class="numb"><strong>93-49-89-58</strong></span><br>
                <span>Code de transction: *145*1*1*<span id="montanttm"></span>*93 49 89 58#</span><br>
                <span class="nbp"><span class="nb">NB:</span> Vous devez bien noter  le numero qui vous a servit a éffectuer la transaction</span>
               

 
               </div>
               <div class="code" style="display: block;" >
                <div class="code11">
                    <span>Saisissez le numero avc lequel vous avez éffectué la transaction</span>
                    <br>
                    <input type="text" name="numero" required="required"><br>
                </div>
                <br>
                 <input type="text" name="tmmont" required="required" id="montant" style="display:none;">
                        <input type="submit" name="submitPT" value="ENVOYER">
               </div>
               <span class="nb">     
          
        </span>
               <button class="btn btn-primary js-modal-close1 " type="button">Retour</button>
              
            </div>
</aside>
</form>

 <form action="" method="POST">
     
 <aside id="modal2" class="modal" aria-hidden="true" role="dialog" style="display: none;">
     
            <div class="modal-wrapper js-modal-stop1">
              <img src="images/Logo/logo-flooz.jpg" class="imgF">
               <div class="tmoney-div">
                <span>Vous avez choisit de payer par <span class="floozN"><strong>FLOOZ</strong></span>.</span><br>
                <span>Voici le numéro de transaction</span><br>
                <span class="numb"><strong>96-84-70-22</strong></span><br>
                <span>Code de transction: *155*1*1*96 84 70 22*<span id="montantf"></span>#</span><br>
                <span class="nbp"><span class="nb">NB:</span> Vous devez bien noter  le numero qui vous a servit a éffectuer la transaction </span>
                

               </div>
               <div class="code" >
                <div class="code11">
                        <span>Saisissez le numero avc lequel vous avez éffectué la transaction </span><br>
                        <input type="text" name="numero1" required="required" ><br>
               </div>
               <br>
                                <input type="text" name="tmmont1" required="required" id="montant1" style="display:none;">
                         <input type="submit" name="submitPF" required="required" value="ENVOYER">
               </div>
               
               <span class="nb">     
        </span>
               <button class="btn btn-primary js-modal-close1 " type="button">Retour</button>
              
            </div>
</aside>
</form>


   <div class="compte-corps">
    
               <p class="vers titre" ><a href="compte.php" class="fas-a"><i class="fas fa-arrow-left"></i></a> <strong align="center">Recharger mon Compte</strong></p>
              <div class="fst-div">
               <a href="#"><div class="fst-div1">
                  <img src="unnamed.png"><br>
                  <span><strong>Solde en compte actuel</strong></span><br><br>
                  
                </div></a>
                
                
                  <div class="fst-div3">
                      <span class="vers grd"><strong>0 FCFA</strong></span><br/>
                      <span class=" ptit" id="pls" style="display: none;"><strong><i class="fas fa-plus down2 smenuIcon"></i><span id="prx">5000</span> FCFA</strong></span>
                  </div>
                
              </div>
              <form action="" method="POST">
           <p align="center">  <span class="vers tit">Saisissez le montant a recharger</span></p><br>
               <p class="vers titre vdiv" align="center"> <strong class="vers borde"><input type="text" name="montr" placeholder="Entrer le montant a recharger" class="rech" onkeyup="vals(this.value);"></strong></p><br>
              
               <p align="center"><span class="vers tit">Ces frais serviront a supporter les transactions T-money et Flooz</span></p><br>
               <div class="back">
              <div class="rechDiv">
                <div class="rechDiv1"><strong>Frais(2%):</strong></div>
                <div class="rechDiv2"><strong><span id="frais">0</span> FCFA</strong></div>
              </div>
              <div class="rechDiv">
                  <div class="rechDiv3"><strong>Total</strong></div>
                  <div class="rechDiv4"><strong><span id="total">0</span> FCFA</strong></div>
              </div>
               </div>
             
            <input type="submit" name="submit1" value="RECHARGER" align="center" class="input js-modal" id="input" href="#modal3" onclick="funV();" >
            </form>
                  <div class="payd vers"> 
             <strong>Avec MABIOFA EDEN Sarl manger bio et sainement c'est preserver non seulement notre ecosysteme mais aussi garantir votre sante </strong>
                </div>  
           </div>
           
    </div>

 <script type="text/javascript">
  console.log('nn');
  var i=1;
  document.write("<span>m,i</span>");
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
                   
  /*--------------------------------------minuterie-------------------------*/
                  
                  
                 
 
                  
/*---------------------------finminuterie-----------------------------------*/
                  var span=document.getElementById('pls');
                     var prix=document.getElementById('prx');
                     var valeur;
                  function vals(value)
                  {
                      var x,y,z;
                      z=0.5;
                      
                   
                      x=value*0.02; 
                      y=value*1.02;
                        valeur=value;
                      if(typeof x ==='number'){
                      document.getElementById('frais').textContent=x;
                       document.getElementById('total').textContent=Math.ceil(y);
                       document.getElementById('montanttm').textContent=document.getElementById('total').textContent;
                       document.getElementById('montantf').textContent=document.getElementById('total').textContent;
                      }
                  }
                   
             function myFunction() {
                     span.style.display='none';
                          }
                          
             function funV()
                  {console.log(parseInt(prix.textContent));
                  prix.textContent=valeur;
                     span.style.display='block';
                      document.getElementById('montant').value=valeur;
                    document.getElementById('montant1').value=valeur;
                     console.log('k');
                   setTimeout(myFunction, 30000);
                  }
                 
                </script>

<?php include("../includes/footer.php");?>
<script src="js/main.js" ></script>
<script src="js/modal2.js" ></script>
</body>
</html>