let carts=document.querySelectorAll('.panier-ajout');
console.log('hoi');
let products = [
    {icrement:1,
  name:'panier de fruits bio standard ',
  tag:"panier de fruits bio standard ",
  image:'Panier solo/panier-de-fruits-biologiques-standard.jpg',
  prix:0,
  prixu:400,
  incart:0},
   {icrement:1,
  name:'panier de legumes bio standard',
  tag:"panier de legumes bio standard",
  image:'Panier solo/panier-de-legumes-biologiques-standard.jpg',
  prix:0,
  prixu:400,
  incart:0},
/*
  {icrement:1,
  name:'champignon-de-paris 1Kg',
  tag:"champignon-de-paris 1Kg ",
  image:'viandes/champignon-de-paris1.jpg',
  prix:0,
  prixu:900,
  incart:0},

  {icrement:1,
  name:'Champignon séché bio',
  tag:"Champignon séché bio",
  image:'divers/champignon_sèché_bio.jpg',
  prix:0,
  prixu:1000,
  incart:0},
*/
  {icrement:1,
  name:'panier légumes solo',
  tag:"panier légumes solo",
  image:'Panier solo/panier légumes solo xl.jpg',
  prix:0,
  prixu:400,
  incart:0},
/*
  {icrement:1,
  name:'Plateau d\'oeuf fermier',
  tag:"Plateau d'oeuf fermier",
  image:'viandes/plateau-d-oeufs-1.jpeg',
  prix:0,
  prixu:900,
  incart:0},

  {icrement:1,
  name:'poisson rame 1Kg',
  tag:"poisson rame 1Kg",
  image:'viandes/rame.jpg',
  prix:0,
  prixu:1200,
  incart:0},
/*
  {icrement:1,
  name:'cafe-des-plateaux',
  tag:"cafe-des-plateaux",
  image:'divers/cafe-des-plateaux.jpg',
  prix:0,
  prixu:1200,
  incart:0},
*/
  {icrement:1,
  name:'panier mixte solo (légumes/fruits)',
  tag:"panier mixte solo (légumes/fruits)",
  image:'Panier solo/panier mixte solo (légumes _ fruits)(1).jpg',
  prix:0,
  prixu:400,
  incart:0},
/*
  {icrement:1,
  name:'pintade-fermiere (≈ 02Kg)',
  tag:"pintade-fermiere (≈ 02Kg)",
  image:'viandes/pintade-fermiere.jpg',
  prix:0,
  prixu:1000,
  incart:0},
/*
  {icrement:1,
  name:'Poisson maquereau (1Kg)',
  tag:"Poisson maquereau (1Kg)",
  image:'viandes/Poisson maquereau.jpg',
  prix:0,
  prixu:2000,
  incart:0},
/*
  {icrement:1,
  name:'Thé de kinkeliba',
  tag:"Thé de kinkeliba",
  image:'divers/kinkeliba.jpg',
  prix:0,
  prixu:2000,
  incart:0},
*
  {icrement:1,
  name:'Patate douce (1Kg) ',
  tag:"Patate douce (1Kg) ",
  image:'tubercules/patate jaune.jpg',
  prix:0,
  prixu:1500,
  incart:0},
/*
  {icrement:1,
  name:'oeuf-fermier-par-six',
  tag:"oeuf-fermier-par-six",
  image:'viandes/oeuf-fermier-par-six.jpg',
  prix:0,
  prixu:900,
  incart:0},

  {icrement:1,
  name:'Poisson capitaine (1Kg)',
  tag:"Poisson capitaine (1Kg)",
  image:'viandes/Poisson capitaine.jpg',
  prix:0,
  prixu:700,
  incart:0},
/*
  {icrement:1,
  name:'Thé relax',
  tag:"Thé relax",
  image:'divers/relax.jpg',
  prix:0,
  prixu:2000,
  incart:0},

  {icrement:1,
  name:'Ignames',
  tag:"Ignames",
  image:'tubercules/ignames2.jpg',
  prix:0,
  prixu:1100,
  incart:0},
/*
  {icrement:1,
  name:'oeuf-fermier-par-douze ',
  tag:"oeuf-fermier-par-douze ",
  image:'viandes/oeuf-fermier-par-douze-1.jpg',
  prix:0,
  prixu:300,
  incart:0},
/*
  {icrement:1,
  name:'Arachisde préparé sèché',
  tag:"Arachisde préparé sèché",
  image:'divers/cacahuete-bio-coque-grillee-300g.jpg',
  prix:0,
  prixu:300,
  incart:0},

  {icrement:1,
  name:'Thé-ellen-white',
  tag:"Thé-ellen-white",
  image:'divers/the-ellen-white.jpg',
  prix:0,
  prixu:2200,
  incart:0}
*/
];


for (let i=0; i< carts.length; i++) {

  carts[i].addEventListener('click', () => {
  
    cartNumbers(products[i]);
    totalCost(products[i]);
    
    
  } )
}
      

function onloadCartNumbers(){
  var productNumbers=sessionStorage.getItem('totalCost');

  if (productNumbers) {
    document.querySelector('.panier-number span').textContent =productNumbers;
  }
}

function cartNumbers(product){
  console.log(product);
  var productNumbers=sessionStorage.getItem('cartNumbers');
  
  
  productNumbers=parseInt(productNumbers);
  if (productNumbers) {
    sessionStorage.setItem('cartNumbers',productNumbers+1);
    

  }
  else{
   sessionStorage.setItem('cartNumbers', 1);
    
    


  }
  setItems(product);
}
let a=0;
  function setItems(product){
    let cartItems = sessionStorage.getItem('productsInCart');
    cartItems= JSON.parse(cartItems);
    
    product.prix=parseInt(price1.textContent)+parseInt(price2.textContent)//+parseInt(price3.textContent)//+parseInt(price4.textContent)
    +parseInt(price5.textContent)
      //+parseInt(price6.textContent)+parseInt(price7.textContent)//+parseInt(price8.textContent)
      +parseInt(price9.textContent)//+parseInt(price10.textContent)+parseInt(price11.textContent)
      //+parseInt(price12.textContent)
      //+parseInt(price13.textContent)//+parseInt(price14.textContent)+parseInt(price15.textContent)//+parseInt(price16.textContent)
      ;//+parseInt(price17.textContent);
     // +parseInt(price18.textContent);//+parseInt(price19.textContent)+parseInt(price20.textContent);
      
     
    
    if (cartItems != null && product.prix!=0) {
      if (cartItems[product.tag] == undefined ) {

        cartItems={
          ...cartItems,
          [product.tag]:product
        }

      }
    
      if (product.incart==0) {
      cartItems[product.tag].prix =parseInt(price1.textContent)+parseInt(price2.textContent)//+parseInt(price3.textContent)//+parseInt(price4.textContent)
      +parseInt(price5.textContent)
     // +parseInt(price6.textContent)+parseInt(price7.textContent)//+parseInt(price8.textContent)
      +parseInt(price9.textContent)//+parseInt(price10.textContent)+parseInt(price11.textContent)
     // +parseInt(price12.textContent)
      //+parseInt(price13.textContent)//+parseInt(price14.textContent)+parseInt(price15.textContent)//+parseInt(price16.textContent)
     // +parseInt(price17.textContent)
      ;
      //+parseInt(price18.textContent);//+parseInt(price19.textContent)+parseInt(price20.textContent);
      a++;}
      else{cartItems[product.tag].prix = cartItems[product.tag].prix + parseInt(price1.textContent)+parseInt(price2.textContent)//+parseInt(price3.textContent)//+parseInt(price4.textContent)
        +parseInt(price5.textContent)
      //+parseInt(price6.textContent)+parseInt(price7.textContent)//+parseInt(price8.textContent)
      +parseInt(price9.textContent)//+parseInt(price10.textContent)+parseInt(price11.textContent)
      //+parseInt(price12.textContent)
     // +parseInt(price13.textContent)//+parseInt(price14.textContent)+parseInt(price15.textContent)//+parseInt(price16.textContent)
     // +parseInt(price17.textContent)
      ;
     // +parseInt(price18.textContent);//+parseInt(price19.textContent)+parseInt(price20.textContent);
    }

      cartItems[product.tag].incart =cartItems[product.tag].incart+index1+index2//+index3//+index4
      +index5//+index6+index7//+index8
      +index9//+index10+
     // index11//+index12
     // +index13//+index14+index15//+index16
      //+index17
      ;//+index18;//+index19+index20;
    }
    else{
      product.incart = index1+index2//+index3//+index4
      +index5//+index6+index7//+index8+
      index9+index10+
      index11//+index12
    //  +index13//+index14+index15//+index16
      //+index17
      ;//+index18;//+index19+index20;
      /*
      product.prix = parseInt(price1.textContent)+parseInt(price2.textContent)+parseInt(price3.textContent)+parseInt(price4.textContent)+parseInt(price5.textContent)
      +parseInt(price6.textContent)+parseInt(price7.textContent)+parseInt(price8.textContent)+parseInt(price9.textContent)+parseInt(price10.textContent)+parseInt(price11.textContent)
      +parseInt(price12.textContent)+parseInt(price13.textContent)+parseInt(price14.textContent)+parseInt(price15.textContent)+parseInt(price16.textContent)+parseInt(price17.textContent)
      +parseInt(price18.textContent)+parseInt(price19.textContent)+parseInt(price20.textContent);*/
        if (product.prix!=0) {
        cartItems = {
      [product.tag]:product
         } 
       }
    }
    sessionStorage.setItem("productsInCart", JSON.stringify(cartItems));
  
    
    
  
    
    
    
  }
   

   function incarts(product)
   {
      
    
   }
  


onloadCartNumbers();







 

/*partie js pour ajout de produit---------------*/

            var number1= document.getElementById('valeur1');
                var number2= document.getElementById('valeur2');
               // var number3= document.getElementById('valeur3');
               // var number4= document.getElementById('valeur4');
                var number5= document.getElementById('valeur5');
               // var number6= document.getElementById('valeur6');
               // var number7= document.getElementById('valeur7');
               // var number8= document.getElementById('valeur8');
                var number9= document.getElementById('valeur9');
               // var number10= document.getElementById('valeur10');
               // var number11= document.getElementById('valeur11');
               /// var number12= document.getElementById('valeur12');
                //var number13= document.getElementById('valeur13');
               // var number14= document.getElementById('valeur14');
               // var number15= document.getElementById('valeur15');
               // var number16= document.getElementById('valeur16');
               // var number17= document.getElementById('valeur17');
               // var number18= document.getElementById('valeur18');
               // var number19= document.getElementById('valeur19');
            //var number20= document.getElementById('valeur20');
        

        
        
                for ( i=1; i<100;i++) {
                var span1=document.createElement('span');
                   var span2=document.createElement('span');
                 //  var span3=document.createElement('span');
                 //  var span4=document.createElement('span');
                   var span5=document.createElement('span');
                  // var span6=document.createElement('span');
                  // var span7=document.createElement('span');
                  // var span8=document.createElement('span');
                   var span9=document.createElement('span');
                   //var span10=document.createElement('span');
                  // var span11=document.createElement('span');
                  // var span12=document.createElement('span');
                  // var span13=document.createElement('span');
                   //var span14=document.createElement('span');
                   //var span15=document.createElement('span');
                   //var span16=document.createElement('span');
                  // var span17=document.createElement('span');
                  // var span18=document.createElement('span');
                 //  var span19=document.createElement('span');
               // var span20=document.createElement('span');
               
               span1.textContent =i;
                   span2.textContent =i;
                   //span3.textContent =i;
                   //span4.textContent =i;
                   span5.textContent =i;
                  // span6.textContent =i;
                  // span7.textContent =i;
                   //span8.textContent =i;
                   span9.textContent =i;
                  // span10.textContent =i;
                  // span11.textContent =i;
                   //span12.textContent =i;
                  // span13.textContent =i;
                  // span14.textContent =i;
                  // span15.textContent =i;
                  // span16.textContent =i;
                  // span17.textContent =i;
                  // span18.textContent =i;
                   //span19.textContent =i;
              // span20.textContent =i;
              

             number1.appendChild(span1);
                   number2.appendChild(span2);
                  // number3.appendChild(span3);
                  // number4.appendChild(span4);
                   number5.appendChild(span5);
                  // number6.appendChild(span6);
                 //  number7.appendChild(span7);
                  // number8.appendChild(span8);
                   number9.appendChild(span9);
                 //  number10.appendChild(span10);
                 //  number11.appendChild(span11);
                  // number12.appendChild(span12);
                  // number13.appendChild(span13);
                 //  number14.appendChild(span14);
                  // number15.appendChild(span15);
                  // number16.appendChild(span16);
                   //number17.appendChild(span17);
                  // number18.appendChild(span18);
                  // number19.appendChild(span19);
           //  number20.appendChild(span20);
             
                   
                }
                 
       var num1=number1.getElementsByTagName('span');
       
                       var index1=0;

                                function nextNum1() {
                                // body...
                                num1[index1].style.display='none';
                                index1=(index1+1)% num1.length;
                                num1[index1].style.display='initial';
                                
                                                  }
                            var num2=number2.getElementsByTagName('span');
                            
                            var index2=0;
                                function nextNum2() {
                                // body...
                                num2[index2].style.display='none';
                                index2=(index2+1)% num2.length;
                                num2[index2].style.display='initial';
                                
                                             
                                                  }  /*
                             var num3=number3.getElementsByTagName('span');
                             
                            var index3=0;
                            
                                function nextNum3() {
                                // body...
                                num3[index3].style.display='none';
                                index3=(index3+1)% num3.length;
                                num3[index3].style.display='initial';
                                
                                                  }
                                                  /*
                            var num4=number4.getElementsByTagName('span');
                            
                            var index4=0;
                                function nextNum4() {
                                // body...
                                num4[index4].style.display='none';
                                index4=(index4+1)% num4.length;
                                num4[index4].style.display='initial';
                                
                                             
                                                  }*/
                            var num5=number5.getElementsByTagName('span');
                           
                            var index5=0;
                            
                                function nextNum5() {
                                // body...
                                num5[index5].style.display='none';
                                index5=(index5+1)% num5.length;
                                num5[index5].style.display='initial';
                                
                                                  }  /*
                            var num6=number6.getElementsByTagName('span');
                            
                            var index6=0;
                                function nextNum6() {
                                // body...
                                num6[index6].style.display='none';
                                index6=(index6+1)% num6.length;
                                num6[index6].style.display='initial';
                                
                                             
                                                  }
                            var num7=number7.getElementsByTagName('span');
                            
                            var index7=0;
                            
                                function nextNum7() {
                                // body...
                                num7[index7].style.display='none';
                                index7=(index7+1)% num7.length;
                                num7[index7].style.display='initial';
                                
                                                  }/*
                            var num8=number8.getElementsByTagName('span');
                           
                            var index8=0;
                                function nextNum8() {
                                // body...
                                num8[index8].style.display='none';
                                index8=(index8+1)% num8.length;
                                num8[index8].style.display='initial';
                                
                                             
                                                  }*/
                            var num9=number9.getElementsByTagName('span');
                           
                            var index9=0;
                            
                                function nextNum9() {
                                // body...
                                num9[index9].style.display='none';
                                index9=(index9+1)% num9.length;
                                num9[index9].style.display='initial';
                                
                                                  }  /*
                            var num10=number10.getElementsByTagName('span');
                            
                            var index10=0;
                                function nextNum10() {
                                // body...
                                num10[index10].style.display='none';
                                index10=(index10+1)% num10.length;
                                num10[index10].style.display='initial';
                                
                                                  }
                            var num11=number11.getElementsByTagName('span');
                            
                            var index11=0;
                            
                                function nextNum11() {
                                // body...
                                num11[index11].style.display='none';
                                index11=(index11+1)% num11.length;
                                num11[index11].style.display='initial';
                                
                                                  }/*
                            var num12=number12.getElementsByTagName('span');
                           
                            var index12=0;
                                function nextNum12() {
                                // body...
                                num12[index12].style.display='none';
                                index12=(index12+1)% num12.length;
                                num12[index12].style.display='initial';
                               
                                             
                                                  }
                            var num13=number13.getElementsByTagName('span');
                            
                            var index13=0;
                            
                                function nextNum13() {
                                // body...
                                num13[index13].style.display='none';
                                index13=(index13+1)% num13.length;
                                num13[index13].style.display='initial';
                               
                                                  }  /*
                            var num14=number14.getElementsByTagName('span');
                            
                            var index14=0;
                                function nextNum14() {
                                // body...
                                num14[index14].style.display='none';
                                index14=(index14+1)% num14.length;
                                num14[index14].style.display='initial';
                              
                                             
                                                  }
                         var num15=number15.getElementsByTagName('span');
                         
                            var index15=0;
                            
                                function nextNum15() {
                                // body...
                                num15[index15].style.display='none';
                                index15=(index15+1)% num15.length;
                                num15[index15].style.display='initial';
                                
                                                  }/*
                            var num16=number16.getElementsByTagName('span');
                            
                            var index16=0;
                                function nextNum16() {
                                // body...
                                num16[index16].style.display='none';
                                index16=(index16+1)% num16.length;
                                num16[index16].style.display='initial';
                                
                                             
                                                  }
                             var num17=number17.getElementsByTagName('span');
                             
                            var index17=0;
                            
                                function nextNum17() {
                                // body...
                                num17[index17].style.display='none';
                                index17=(index17+1)% num17.length;
                                num17[index17].style.display='initial';
                                
                                                  }  /*
                            var num18=number18.getElementsByTagName('span');
                            
                            var index18=0;
                                function nextNum18() {
                                // body...
                                num18[index18].style.display='none';
                                index18=(index18+1)% num18.length;
                                num18[index18].style.display='initial';
                                
                                             
                                                  }/*
                            var num19=number19.getElementsByTagName('span');
                            
                            var index19=0;
                            
                                function nextNum19() {
                                // body...
                                num19[index19].style.display='none';
                                index19=(index19+1)% num19.length;
                                num19[index19].style.display='initial';
                                
                                                  }
                            var num20=number20.getElementsByTagName('span');
                            
                            var index20=0;
                                function nextNum20() {
                                // body...
                                num20[index20].style.display='none';
                                index20=(index20+1)% num20.length;
                                num20[index20].style.display='initial';
                                
                                 
       }*/

                                      

     function prevNum1() {
                    // body...
                                    if (index1>0) {
                                    num1[index1].style.display='none';
                                    index1=(index1-1+num1.length)% num1.length;
                                    num1[index1].style.display='initial';
                                    ;
                                  }
                         }
                         function prevNum2() {
                                        // body...
                                        if (index2>0) {
                                        num2[index2].style.display='none';
                                        index2=(index2-1+num2.length)% num2.length;
                                        num2[index2].style.display='initial';
                                       

                                      }
                                    }
                                    function prevNum3() {
                                        // body...
                                        if (index3>0) {
                                        num3[index3].style.display='none';
                                        index3=(index3-1+num3.length)% num3.length;
                                        num3[index3].style.display='initial';
                                       

                                      }
                                    }
                                    function prevNum4() {
                                        // body...
                                        if (index4>0) {
                                        num4[index4].style.display='none';
                                        index4=(index4-1+num4.length)% num4.length;
                                        num4[index4].style.display='initial';
                                        


                                      }
                                    }
                                    function prevNum5() {
                                        // body...
                                        if (index5>0) {
                                        num5[index5].style.display='none';
                                        index5=(index5-1+num5.length)% num5.length;
                                        num5[index5].style.display='initial';
                                        

                                      }
                                    }
                                    function prevNum6() {
                                        // body...
                                        if (index6>0) {
                                        num6[index6].style.display='none';
                                        index6=(index6-1+num6.length)% num6.length;
                                        num6[index6].style.display='initial';
                                        


                                      }
                                    }
                                    function prevNum7() {
                                        // body...
                                        if (index7>0) {
                                        num7[index7].style.display='none';
                                        index7=(index7-1+num7.length)% num7.length;
                                        num7[index7].style.display='initial';
                                        

                                      }
                                    }
                                    function prevNum8() {
                                        // body...
                                        if (index8>0) {
                                        num8[index8].style.display='none';
                                        index8=(index8-1+num8.length)% num8.length;
                                        num8[index8].style.display='initial';
                                     

                                      }
                                    }
                                    function prevNum9() {
                                        // body...
                                        if (index9>0) {
                                        num9[index9].style.display='none';
                                        index9=(index9-1+num9.length)% num9.length;
                                        num9[index9].style.display='initial';
                                       

                                      }
                                    }
                                    function prevNum10() {
                                        // body...
                                        if (index10>0) {
                                        num10[index10].style.display='none';
                                        index10=(index10-1+num10.length)% num10.length;
                                        num10[index10].style.display='initial';
                                        

                                      }
                                    }
                                    function prevNum11() {
                                        // body...
                                        if (index11>0) {
                                        num11[index11].style.display='none';
                                        index11=(index11-1+num11.length)% num11.length;
                                        num11[index11].style.display='initial';
                                       
                                      }
                                    }
                                    function prevNum12() {
                                        // body...
                                        if (index12>0) {
                                        num12[index12].style.display='none';
                                        index12=(index12-1+num12.length)% num12.length;
                                        num12[index12].style.display='initial';
                                       

                                      }
                                    }
                                    function prevNum13() {
                                        // body...
                                        if (index13>0) {
                                        num13[index13].style.display='none';
                                        index13=(index13-1+num13.length)% num13.length;
                                        num13[index13].style.display='initial';
                                        

                                      }
                                    }
                                    function prevNum14() {
                                        // body...
                                        if (index14>0) {
                                        num14[index14].style.display='none';
                                        index14=(index14-1+num14.length)% num14.length;
                                        num14[index14].style.display='initial';
                                        

                                      }
                                    }
                                    function prevNum15() {
                                        // body...
                                        if (index15>0) {
                                        num15[index15].style.display='none';
                                        index15=(index15-1+num15.length)% num15.length;
                                        num15[index15].style.display='initial';
                                        
                                      }
                                    }
                                    function prevNum16() {
                                        // body...
                                        if (index16>0) {
                                        num16[index16].style.display='none';
                                        index16=(index16-1+num16.length)% num16.length;
                                        num16[index16].style.display='initial';
                                       
                                      }
                                    }
                                    function prevNum17() {
                                        // body...
                                        if (index17>0) {
                                        num17[index17].style.display='none';
                                        index17=(index17-1+num17.length)% num17.length;
                                        num17[index17].style.display='initial';
                                       

                                      }
                                    }
                                    function prevNum18() {
                                        // body...
                                        if (index18>0) {
                                        num18[index18].style.display='none';
                                        index18=(index18-1+num18.length)% num18.length;
                                        num18[index18].style.display='initial';
                                        
                                      }
                                    }
                                    function prevNum19() {
                                        // body...
                                        if (index19>0) {
                                        num19[index19].style.display='none';
                                        index19=(index19-1+num19.length)% num19.length;
                                        num19[index19].style.display='initial';}
                                    }
                                    function prevNum20() {
                                        // body...
                                        if (index20>0) {
                                        num20[index20].style.display='none';
                                        index20=(index20-1+num20.length)% num20.length;
                                        num20[index20].style.display='initial';}
     }
      

  /*-----------------------partie modal--------------------*/

  let modal=null;
  const openModal = function (product){
    
  product.preventDefault();
    const target=document.querySelector(product.target.getAttribute('href'));
    incarts(product);
    target.style.display = null;
    target.setAttribute('arial-modal','true');
    target.removeAttribute('arial-hidden');
    modal=target;
    modal.addEventListener('click',closeModal);
    modal.querySelector('.js-modal-close').addEventListener('click', closeModal);
    modal.querySelector('.js-modal-stop').addEventListener('click', stopPropagation);
    num1[0].style.display='block';num2[0].style.display='block';//num3[0].style.display='block';
    //num4[0].style.display='block';
    num5[0].style.display='block';//num6[0].style.display='block';
    //num7[0].style.display='block';//num8[0].style.display='block';
    num9[0].style.display='block';
    //num10[0].style.display='block';num11[0].style.display='block';//num12[0].style.display='block';
    //num13[0].style.display='block';//num14[0].style.display='block';num15[0].style.display='block';
    //num16[0].style.display='block';
    //num17[0].style.display='block';//num18[0].style.display='block';  
    //num19[0].style.display='block';num20[0].style.display='block';
   index1=0;index2=0;//index3=0;//index4=0;
   index5=0;//index6=0;index7=0;//index8=0;
   index9=0;//index10=0;
    //index11=0;//index12=0;
   // index13=0;//index14=0;index15=0;//index16=0;
   // index17=0;//index18=0;//index19=0;index20=0;
}
function removeInitial(){
  num1[0].style.display='none';;num2[0].style.display='none';//num3[0].style.display='none';
    //num4[0].style.display='none';
    num5[0].style.display='none';//num6[0].style.display='none';
    //num7[0].style.display='none';//num8[0].style.display='none';
    num9[0].style.display='none';
    //num10[0].style.display='none';num11[0].style.display='none';//num12[0].style.display='none';
   // num13[0].style.display='none';//num14[0].style.display='none';num15[0].style.display='none';
    //num16[0].style.display='none';
   // num17[0].style.display='none';//num18[0].style.display='none';  
   // num19[0].style.display='none';num20[0].style.display='none';

}
var price1=document.getElementById('pt1');var price2=document.getElementById('pt2');
//var price3=document.getElementById('pt3');//var price4=document.getElementById('pt4');
var price5=document.getElementById('pt5');//var price6=document.getElementById('pt6');
//var price7=document.getElementById('pt7');//var price8=document.getElementById('pt8');
var price9=document.getElementById('pt9');//var price10=document.getElementById('pt10');
//var price11=document.getElementById('pt11');//var price12=document.getElementById('pt12');
//var price13=document.getElementById('pt13');//var price14=document.getElementById('pt14');
//var price15=document.getElementById('pt15');//var price16=document.getElementById('pt16');
//var price17=document.getElementById('pt17');//var price18=document.getElementById('pt18');
//var //price19=document.getElementById('pt19');var price20=document.getElementById('pt20');
ca=parseInt(price1.textContent);
function totalprice(){

var price1=document.getElementById('pt1');var price2=document.getElementById('pt2');
//var price3=document.getElementById('pt3');//var price4=document.getElementById('pt4');
var price5=document.getElementById('pt5');//var price6=document.getElementById('pt6');
//var price7=document.getElementById('pt7');//var price8=document.getElementById('pt8');
var price9=document.getElementById('pt9');//var price10=document.getElementById('pt10');
//var price11=document.getElementById('pt11');//var price12=document.getElementById('pt12');
//var price13=document.getElementById('pt13');//var price14=document.getElementById('pt14');
//var price15=document.getElementById('pt15');//var price16=document.getElementById('pt16');
//var price17=document.getElementById('pt17');//var price18=document.getElementById('pt18');
//var //price19=document.getElementById('pt19');var price20=document.getElementById('pt20');

var uprice1=document.getElementById('pu1');var uprice2=document.getElementById('pu2');
//var uprice3=document.getElementById('pu3');//var uprice4=document.getElementById('pu4');
var uprice5=document.getElementById('pu5');//var uprice6=document.getElementById('pu6');
//var uprice7=document.getElementById('pu7');//var uprice8=document.getElementById('pu8');
var uprice9=document.getElementById('pu9');//var uprice10=document.getElementById('pu10');
//var uprice11=document.getElementById('pu11');//var uprice12=document.getElementById('pu12');
//var uprice13=document.getElementById('pu13');//var uprice14=document.getElementById('pu14');
//var uprice15=document.getElementById('pu15');//var uprice16=document.getElementById('pu16');
//var uprice17=document.getElementById('pu17');//var uprice18=document.getElementById('pu18');
//var //uprice19=document.getElementById('pu19');var uprice20=document.getElementById('pu20');

    

    price1.textContent=index1*parseInt(uprice1.textContent);price2.textContent=index2*parseInt(uprice2.textContent);//price3.textContent=index3*parseInt(uprice3.textContent);
    //price4.textContent=index4*parseInt(uprice4.textContent);
    price5.textContent=index5*parseInt(uprice5.textContent);//price6.textContent=index6*parseInt(uprice6.textContent);
    //price7.textContent=index7*parseInt(uprice7.textContent);//price8.textContent=index8*parseInt(uprice8.textContent);
    price9.textContent=index9*parseInt(uprice9.textContent);
   // price10.textContent=index10*parseInt(uprice10.textContent);price11.textContent=index11*parseInt(uprice11.textContent);//price12.textContent=index12*parseInt(uprice12.textContent);
    //price13.textContent=index13*parseInt(uprice13.textContent);//price14.textContent=index14*parseInt(uprice14.textContent);price15.textContent=index15*parseInt(uprice15.textContent);
    //price16.textContent=index16*parseInt(uprice16.textContent);
    //price17.textContent=index17*parseInt(uprice17.textContent);//price18.textContent=index18*parseInt(uprice18.textContent);
    //price19.textContent=index19*parseInt(uprice19.textContent);price20.textContent=index20*parseInt(uprice20.textContent);
   

  

  }
const closeModal= function(e){
  if (modal==null) return
  e.preventDefault();
    modal.style.display = "none";
    modal.removeAttribute('arial-modal');
    modal.setAttribute('arial-hidden','true');
  
    modal.removeEventListener('click',closeModal);
    modal.querySelector('.js-modal-close').removeEventListener('click', closeModal);
    modal.querySelector('.js-modal-stop').removeEventListener('click', stopPropagation);
    modal=null;
    num1[index1].style.display='none';num2[index2].style.display='none';//num3[index3].style.display='none';
    //num4[index4].style.display='none';
    num5[index5].style.display='none';//num6[index6].style.display='none';
   // num7[index7].style.display='none';//num8[index8].style.display='none';
    num9[index9].style.display='none';
    //num10[index10].style.display='none';num11[index11].style.display='none';//num12[index12].style.display='none';
    //num13[index13].style.display='none';//num14[index14].style.display='none';num15[index15].style.display='none';
    //num16[index16].style.display='none';
    //num17[index17].style.display='none';//num18[index18].style.display='none';
    //num19[index19].style.display='none';num20[index20].style.display='none';
    

}

totalprice();

function totalCost(product)
{
  totalprice();
  var prixtotal=parseInt(price1.textContent)+parseInt(price2.textContent)//+parseInt(price3.textContent)//+parseInt(price4.textContent)
  +parseInt(price5.textContent)
  //+parseInt(price6.textContent)//+parseInt(price7.textContent)//+parseInt(price8.textContent)
  +parseInt(price9.textContent)//+parseInt(price10.textContent)+parseInt(price11.textContent)+
  //parseInt(price12.textContent)
  //+parseInt(price13.textContent)//+parseInt(price14.textContent)+parseInt(price15.textContent)//+parseInt(price16.textContent)
 // +parseInt(price17.textContent)
 ;//+
  //parseInt(price18.textContent);//+parseInt(price19.textContent)+parseInt(price20.textContent);
  
  
  let cartCost=sessionStorage.getItem('totalCost');

  if (cartCost != null) {
    cartCost=parseInt(cartCost);
    
    sessionStorage.setItem('totalCost',cartCost+prixtotal);
     cartCost=sessionStorage.getItem('totalCost');
    document.querySelector('.panier-number span').textContent =cartCost;
    

  }else{
    
    sessionStorage.setItem('totalCost', prixtotal);
    document.querySelector('.panier-number span').textContent =prixtotal;
    
  }
}

const stopPropagation= function(e)
{
  e.stopPropagation();
}

document.querySelectorAll('.js-modal').forEach(a => {
  a.addEventListener('click', openModal);

});
document.querySelectorAll('.details').forEach(a => {
  a.addEventListener('click', openModal);

});
document.querySelectorAll('.js-modal').forEach(b => {
  b.addEventListener('click', totalprice);

});
document.querySelectorAll('.plus2').forEach(b => {
  b.addEventListener('click', removeInitial);

});
document.querySelectorAll('.plus2').forEach(b => {
  b.addEventListener('click', totalprice);

});
document.querySelectorAll('.moins2').forEach(b => {
  b.addEventListener('click', totalprice);

});
