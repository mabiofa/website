
<?php

 session_start();
 if($_SESSION['id']=='Roberto06' or $_SESSION['id']=='admin' )
 {
     $dash='<a href="../adm/dash.php" class="menu2-a">DASHBORD</a><hr>';
     $dash1='<li class="nav-text"><a href="../adm/dash.php" class="menu2-a">DASHBORD</a></li>';
 }
?>


<!------navigation mode web----->
<nav class="menunav">
	<!------icon de menu----->
    <a href="#" class="menu-bars1" id="show-menu">
		<i class="fas fa-bars"></i>
	</a>
	<!------logo----->
      <a href="../index.php" class="amg-a">  <img src="../layout/images/Logo/Logo supermarché sans fond arrière.png" class="amg" style="width: 100%;"></a>
     <!------1ere Liste----->
     
        <ul class="menu1">
                    <li class="nav-text"><a href="#"><strong>Accueil</strong></a></li>
                    <li class="title">
                    	<a href="#"><strong>Nos offres</strong></a><i class="fas fa-caret-down"></i>
		                    	<ul class="sous_menu" id="produit-sous-menu">
		                           <li class="nav-text"><a href="layout/legumes.php"><strong>Nos produits</strong></a></li>
		                           <li class="nav-text"><a href="layout/panier-famille.php"><strong> Nos menus</strong></a></li>
		                           <li class="nav-text"><a href="layout/panier-famille.php"><strong>Restaurant Bio</strong></a></li>
		                       </ul>
                    </li>
                    <li class="nav-text"><a href="layout/Promotions.php"><strong>Promotions</strong></a></li>
                    <li class="nav-text"><a href="layout/Mon panier.php"><strong>Panier</strong></a></li>
           
	                <li class="nav-text"><a href="layout/compte.php"><strong>Mon compte</strong></a></li>
	                          
	                       
                   <li class="title">
                   	   <a href="#" id="apropos"><strong>A propos</strong></a><i class="fas fa-caret-down"></i>
		                   	<ul class="sous_menu">
		                        <li class="nav-text"><a href="layout/Contacts.php"><strong>Contacts</strong></a></li>
		                        <li class="nav-text"><a href="layout/Qui somme nous.php"><strong>Qui sommes-nous ?</strong></a></li>
		                    </ul>
                    </li>
        
        	
                    <?php
                             if($dash1)
                             {
                                 echo $dash1;
                             }
                            ?>
        	</ul>
      
<!------Recherche----->
        <div class="searchbar">
          <input class="search_input" type="text" name="" placeholder="Rechercher un produit....">
          <a href="#" class="search_icon" ><i class="fas fa-search"></i></a>
        </div>
        <a href="../layout/favoris.php">
				     <span class="material-icons">
				favorite_border
				</span>
		</a>
       
    <!------icon de connection----->
       
        <a href="../layout/Page de connection.php" class="users">
           <i class="fas fa-user-alt"></i>
        </a>  
        <!------icon panier----->
        
       <a href="../layout/Mon panier.php" class="shopping-cart">
           <i class="fas fa-shopping-cart"></i>
            <div class="panier-number"><span >0</span></div>
       </a>  
      
    
</nav>
<!-----partie carusel---->
<section class="sect">
  <div class="header" style="display: flex;"><div></div> <img src="../layout/images/Logo/Picture1.png" class="padding"><strong> <a href="https://www.google.com/maps/place/Lomé+Grand+Market/@6.1531073,1.2263696,7765m/data=!3m1!1e3!4m5!3m4!1s0x1023e1c3ed206159:0x544c84923b8a7e88!8m2!3d6.125631!4d1.2254155" style=" color: white; "  title="nous localiser depuis votre maison">Localisation de la boutique</a> </strong><img src="../layout/images/Logo/Suive ma commande.png"><strong style=" color: white; "> <a href="../layout/Suivre ma commande.php" style=" color: white; " title="suivez votre commande depuis votre canapet">suivre ma commande</a></strong> </div>

</section>


<ul class="menu2" id="menu2">
            <div class="menu-amg"><img src="../layout/images/Logo supermarché.png" class="amg"></div>
            <hr>
                   
                     <a href="#" class="menu2-a sous1 down1 ">Menu Solo <i class="fas fa-plus down1 smenuIcon"></i></a>
          <div class="ss-menu1" style="display: none;">
                      <a href="#" class="menu2-a solo up1 ">Menu Solo <i class="fas fa-minus up1 smenuIcon"></i></a>
                            

                             <a href="#" class="menu2-a sous5 down5 green marg">Légumes<i class="fas fa-plus down5 smenuIcon ssIcon "></i></a>
                             <div class="ss-menu5" style="display: none;">
                                <a href="#" class="menu2-a extra up5 green marg">Légumes<i class="fas fa-minus up5 smenuIcon ssIcon"></i></a>
                                <a href="../layout/legumes.php" class="menu2-a small green">Frais</a>
                                   <a href="../layout/Légume de conserve.php"  class="menu2-a small green">Conserves</a>
                                   
                             </div>

                          

                            <a href="#" class="menu2-a sous6 down6 green marg">Epicerie<i class="fas fa-plus down6 smenuIcon ssIcon"></i></a>
                             <div class="ss-menu6" style="display: none;">
                                <a href="#" class="menu2-a extra up6 green marg">Epicerie<i class="fas fa-minus up6 smenuIcon ssIcon"></i></a>
                                <a href="../layout/epicerie.php" class="menu2-a small green">Condiments</a>
                                   <a href="../layout/Huile bio.php"  class="menu2-a small green">Huiles bio</a>
                                                                </div>

                           <a href="../layout/viande.php"  class="menu2-a  green marg">Viandes</a>
                            

                         <a href="#" class="menu2-a sous7 down7 green marg">Boulangerie<i class="fas fa-plus down7 smenuIcon ssIcon"></i></a>
                             <div class="ss-menu7" style="display: none;">
                                <a href="#" class="menu2-a extra up7 green marg">Boulangerie<i class="fas fa-minus up7 smenuIcon ssIcon"></i></a>
                                <a href="../layout/boulangerie Pain.php" class="menu2-a small green">Pain</a>
                                   <a href="../layout/boulangerie confiture-chocolat.php"  class="menu2-a small green">Confiture & chocolat </a>
                                   
                                   <a href="../layout/boulangerie Appéritif bio.php"  class="menu2-a small green">Apéritif bio</a>
                             </div>

                             <a href="../layout/fruit.php"  class="menu2-a  green marg">Fruits</a>
                             

                               <a href="#" class="menu2-a sous8 down8 green marg">Végétaux<i class="fas fa-plus down8 smenuIcon ssIcon"></i></a>
                               <div class="ss-menu8" style="display: none;">
                                <a href="#" class="menu2-a extra up8 green marg">Végétaux<i class="fas fa-minus up8 smenuIcon  ssIcon"></i></a>
                                <a href="../layout/vegetaux.php" class="menu2-a small green">Frais</a>
                                   <a href="../layout/vegetaux Sec.php"  class="menu2-a small green">Secs</a>
                             </div>

                             <a href="../layout/cereale.php"  class="menu2-a  green marg">Céréales</a>
                             <a href="../layout/tubercules.php"  class="menu2-a  green marg">Tubercules</a>

                             <a href="#" class="menu2-a sous9 down9 green marg">Boissons<i class="fas fa-plus down9 smenuIcon ssIcon"></i></a>
                               <div class="ss-menu9" style="display: none;">
                                <a href="#" class="menu2-a extra up9 green marg">Boissons<i class="fas fa-minus up9 smenuIcon ssIcon"></i></a>
                                <a href="../layout/jus.php" class="menu2-a small green">jus de fruits</a>
                                  <a href="../layout/Café & thé infusion.php" class="menu2-a small green">Café, Thé, infusion</a>
                                   
                                   <a href="../layout/sirop-laiterie.php" class="menu2-a small green">Sirop & laiterie</a>
                                   <a href="../layout/vin.php"  class="menu2-a small green">Vins-Alcool</a>
                             </div>

                                   <a href="#" class="menu2-a sous10 down10 green marg">Santé<i class="fas fa-plus down10 smenuIcon ssIcon"></i></a>
                               <div class="ss-menu10" style="display: none;">
                                <a href="#" class="menu2-a extra up10 green marg">Santé<i class="fas fa-minus up10 smenuIcon ssIcon"></i></a>
                                <a href="../layout/Santé-pharmabio.php" class="menu2-a small green">Pharmacie bio</a>
                                   <a href="../layout/Santé-herbe médécinales.php"  class="menu2-a small green">Herbes médicales</a>
                             </div>

                                   <a href="#" class="menu2-a sous11 down11 green marg">Entretient<i class="fas fa-plus down11 smenuIcon ssIcon"></i></a>
                               <div class="ss-menu11" style="display: none;">
                                <a href="#" class="menu2-a extra up11 green marg">Entretient<i class="fas fa-minus up11 smenuIcon ssIcon"></i></a>
                                <a href="layout/Beautè et Hygiène.php" class="menu2-a small green">Beauté et Hygiène</a>
                                   <a href="../layout/Savons.php"  class="menu2-a small green">Savons</a>
                                   <a href="../layout/Huiles essentiels.php"  class="menu2-a small green">Huiles éssentiels</a>
                                   <a href="../layout/Matériels ménages.php" class="menu2-a small green">Matériels de ménage</a>
                             </div>

                                   <a href="#" class="menu2-a sous12 down12 green marg">Maison<i class="fas fa-plus down12 smenuIcon ssIcon"></i></a>
                               <div class="ss-menu12" style="display: none;">
                                <a href="#" class="menu2-a extra up12 green marg">Maison<i class="fas fa-minus up12 smenuIcon ssIcon"></i></a>
                                <a href="../layout/Ustensiles.php" class="menu2-a small green">Ustensiles </a>
                                   <a href="../layout/Appareillages.php"  class="menu2-a small green">Appareillages</a>
                                   <a href="../layout/Meubles.php"  class="menu2-a small green">Meubles écolo</a>
                             </div>
            </div>

                    
                      <a href="#" class="menu2-a sous2 down2 ">Menu Extra <i class="fas fa-plus down2 smenuIcon"></i></a>
                               <div class="ss-menu2" style="display: none;">
                                <a href="#" class="menu2-a extra up2 ">Menu Extra<i class="fas fa-minus up2 smenuIcon"></i></a>
                                <a href="../layout/panier-famille.php" class="menu2-a marg green">Panier Famille</a>
                                   <a href="../layout/panier-solo.php"  class="menu2-a marg green">Panier Solo</a>
                                   <a href="../layout/packs.php"  class="menu2-a marg green">Packs</a>
                             </div>

                     <a href="../layout/Promotions.php" class="menu2-a">Promotions</a>
                     <a href="../layout/Mon panier.php" class="menu2-a">Mon Panier</a>
                     <a href="../layout/compte.php" class="menu2-a">Mon Compte</a>


                     <a href="#" class="menu2-a sous3 apropos down3 ">A Propos <i class="fas fa-plus down3 smenuIcon"></i></a>
                      
                             <div class="ss-menu3" style="display: none;">
                              <a href="#" class="menu2-a up3">A Propos <i class="fas fa-minus up3 smenuIcon"></i></a>

                              <a href="../layout/Contacts.php" class="menu2-a marg green">Contacts</a>
                                 <a href="../layout/FAQ.php"  class="menu2-a marg green" >Faq</a>
                                 <a href="../layout/Qui somme nous.php"  class="menu2-a marg green">Qui Sommes Nous ?</a>
              
</div>
<a href="../index.php" class="menu2-a" ><strong><i class="fas fa-home" style="margin-right: 10%; margin-left: 20%;"></i>Accueil</strong></a>
         <?php
                             if($dash)
                             {
                                 echo $dash;
                             }
                            ?>

                    <div class="biofe"><strong>MABIOFA </strong></div>
          </ul>



<div class="menu2-div">
        </div>
              

               <script>
  var openMenu =document.querySelector('#show-menu');
var hideMenuIcon =document.querySelector('.menu2-div');
var sideMenu = document.querySelector('.menu2-div');

var openMenus =document.querySelector('#menu2');

var opensMenuIcon1 =document.querySelector('.down1');
var hidesMenuIcon1 =document.querySelector('.up1');
var opensMenuIcon2 =document.querySelector('.down2');
var hidesMenuIcon2 =document.querySelector('.up2');
var opensMenuIcon3 =document.querySelector('.down3');
var hidesMenuIcon3=document.querySelector('.up3');

var opensMenuIcon5 =document.querySelector('.down5');
var hidesMenuIcon5 =document.querySelector('.up5');
var opensMenuIcon6 =document.querySelector('.down6');
var hidesMenuIcon6 =document.querySelector('.up6');
var opensMenuIcon7 =document.querySelector('.down7');
var hidesMenuIcon7=document.querySelector('.up7');
var opensMenuIcon8 =document.querySelector('.down8');
var hidesMenuIcon8=document.querySelector('.up8');
var opensMenuIcon9 =document.querySelector('.down9');
var hidesMenuIcon9 =document.querySelector('.up9');
var opensMenuIcon10 =document.querySelector('.down10');
var hidesMenuIcon10=document.querySelector('.up10');
var opensMenuIcon11 =document.querySelector('.down11');
var hidesMenuIcon11=document.querySelector('.up11');
var opensMenuIcon12 =document.querySelector('.down12');
var hidesMenuIcon12=document.querySelector('.up12');
var souMenu1=document.querySelector('.ss-menu1');
var souMenu2=document.querySelector('.ss-menu2');
var souMenu3=document.querySelector('.ss-menu3');

var souMenu5=document.querySelector('.ss-menu5');
var souMenu6=document.querySelector('.ss-menu6');
var souMenu7=document.querySelector('.ss-menu7');
var souMenu8=document.querySelector('.ss-menu8');
var souMenu9=document.querySelector('.ss-menu9');
var souMenu10=document.querySelector('.ss-menu10');
var souMenu11=document.querySelector('.ss-menu11');
var souMenu12=document.querySelector('.ss-menu12');
var sous1=document.querySelector('.sous1');

var sous2=document.querySelector('.sous2');
var sous3=document.querySelector('.sous3');
var sous5=document.querySelector('.sous5');
var sous6=document.querySelector('.sous6');
var sous7=document.querySelector('.sous7');
var sous8=document.querySelector('.sous8');
var sous9=document.querySelector('.sous9');
var sous10=document.querySelector('.sous10');
var sous11=document.querySelector('.sous11');
var sous12=document.querySelector('.sous12');

openMenu.addEventListener('click',function(){
    sideMenu.classList.add('active')
    openMenus.classList.add('active')
});

hideMenuIcon.addEventListener('click',function(){
    sideMenu.classList.remove('active')
    openMenus.classList.remove('active')
});



opensMenuIcon1.addEventListener('click',function(){
     souMenu1.style.display='block';
      sous1.style.display='none';
});

hidesMenuIcon1.addEventListener('click',function(){
      souMenu1.style.display='none';
      sous1.style.display='block';
});

opensMenuIcon2.addEventListener('click',function(){
   souMenu2.style.display='block';
   sous2.style.display='none';
});

hidesMenuIcon2.addEventListener('click',function(){
    souMenu2.style.display='none';
     sous2.style.display='block';
});

opensMenuIcon3.addEventListener('click',function(){
   souMenu3.style.display='block';
   sous3.style.display='none';
});

hidesMenuIcon3.addEventListener('click',function(){
     souMenu3.style.display='none';
      sous3.style.display='block';
});




opensMenuIcon5.addEventListener('click',function(){
     souMenu5.style.display='block';
      sous5.style.display='none';
});

hidesMenuIcon5.addEventListener('click',function(){
      souMenu5.style.display='none';
      sous5.style.display='block';
});

opensMenuIcon6.addEventListener('click',function(){
   souMenu6.style.display='block';
   sous6.style.display='none';
});

hidesMenuIcon6.addEventListener('click',function(){
    souMenu6.style.display='none';
     sous6.style.display='block';
});

opensMenuIcon7.addEventListener('click',function(){
   souMenu7.style.display='block';
   sous7.style.display='none';
});

hidesMenuIcon7.addEventListener('click',function(){
     souMenu7.style.display='none';
      sous7.style.display='block';
});

opensMenuIcon8.addEventListener('click',function(){
   souMenu8.style.display='block';
   sous8.style.display='none';
});

hidesMenuIcon8.addEventListener('click',function(){
     souMenu8.style.display='none';
      sous8.style.display='block';
});

opensMenuIcon9.addEventListener('click',function(){
     souMenu9.style.display='block';
      sous9.style.display='none';
});

hidesMenuIcon9.addEventListener('click',function(){
      souMenu9.style.display='none';
      sous9.style.display='block';
});

opensMenuIcon10.addEventListener('click',function(){
   souMenu10.style.display='block';
   sous10.style.display='none';
});

hidesMenuIcon10.addEventListener('click',function(){
    souMenu10.style.display='none';
     sous10.style.display='block';
});

opensMenuIcon11.addEventListener('click',function(){
   souMenu11.style.display='block';
   sous11.style.display='none';
});

hidesMenuIcon11.addEventListener('click',function(){
     souMenu11.style.display='none';
      sous11.style.display='block';
});

opensMenuIcon12.addEventListener('click',function(){
   souMenu12.style.display='block';
   sous12.style.display='none';
});

hidesMenuIcon12.addEventListener('click',function(){
     souMenu12.style.display='none';
      sous12.style.display='block';
});

</script>
   
