      let carts=document.querySelectorAll('.panier-ajout');
      
     console.log('art');
for (let i=0; i< carts.length; i++) {

	carts[i].addEventListener('click', () => {
	
		cartNumbers(products[i]);
		totalCost(products[i]);
		
	} )
}
      

function onloadCartNumbers(){
	var productNumbers=sessionStorage.getItem('totalCost');
  document.getElementById('prixt').textContent =sessionStorage.getItem('totalCost');
  var livraison=document.querySelector('.livraison-mont span');
  productNumbers=parseInt(productNumbers);
  if(productNumbers<5000){
    livraison.textContent=500;

	if (productNumbers) {
		document.querySelector('.panier-number span').textContent =productNumbers;
    document.querySelector('.total-montant span').textContent =productNumbers+500;
    var nonarrondi=(productNumbers+500)*0.82;
    var arrondi=parseInt((productNumbers+500)*0.82);
    if ((nonarrondi-arrondi)<0.5) {
    console.log(arrondi);
    console.log(nonarrondi);
    document.querySelector('.tva span').textContent =productNumbers-arrondi+500;
    document.querySelector('.sous-total span').textContent =arrondi;
  }else{
    document.querySelector('.tva span').textContent =productNumbers-arrondi+500;
    document.querySelector('.sous-total span').textContent =arrondi+1;
  }
	                     }

                         }
                         else{
                          livraison.textContent=0;
                          if (productNumbers) {
    document.querySelector('.panier-number span').textContent =productNumbers;
    document.querySelector('.total-montant span').textContent =productNumbers;
    var nonarrondi=productNumbers*0.82;
    var arrondi=parseInt(productNumbers*0.82);
    if ((nonarrondi-arrondi)<0.5) {
    console.log(arrondi);
    console.log(nonarrondi);
    document.querySelector('.tva span').textContent =productNumbers-arrondi;
    document.querySelector('.sous-total span').textContent =arrondi;
  }else{
    document.querySelector('.tva span').textContent =productNumbers-arrondi;
    document.querySelector('.sous-total span').textContent =arrondi+1;
  }
                       }
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

	function setItems(product){
		let cartItems = sessionStorage.getItem('productsInCart');
		cartItems= JSON.parse(cartItems);
		
		if (cartItems != null) {
			if (cartItems[product.tag] == undefined) {

				cartItems={
					...cartItems,
					[product.tag]:product
				}

			}
			cartItems[product.tag].incart =cartItems[product.tag].incart+index1+index2+index3+index4+index5+index6+index7+index8+index9+index10+
      index11+index12+index13+index14+index15+index16+index17+index18+index19+index20;

		}
		else{
			product.incart = index1+index2+index3+index4+index5+index6+index7+index8+index9+index10+
      index11+index12+index13+index14+index15+index16+index17+index18+index19+index20;
		    cartItems = {
			[product.tag]:product
		     }
		}
		sessionStorage.setItem("productsInCart", JSON.stringify(cartItems));
	
		
		
	
		
		
		
	}
   let c=0;

   function displayCart()
   {console.log('arti');
			let cartItems=sessionStorage.getItem('productsInCart');
      cartItems=JSON.parse(cartItems);
      let productContainer=document.querySelector('.productContainer');
      if (cartItems && productContainer) {
        productContainer.innerHTML ='';
        
        Object.values(cartItems).map(item =>{
           productContainer.innerHTML +=`

            
               <div class="panier-tableau">
                <div class="prod-image"><img src="images/${item.image}"></div>
                <div class="produ-nom" ><strong name="produ-nom" class="none">${item.tag}</strong><span name="increment" class="none">${item.icrement}</span> <strong>${item.name}</strong><br><strong class="upri">${item.prixu} FCFA</strong></div>
               
                <div class="dpaudp">
                <div class="prod-kilo"><strong><span class="pnombre" name="pnombre">${item.incart*item.icrement}</span></strong></div>
                <div class="dpaud">
                <div class="prod-plus"><strong><span class="plus3"><span class="material-icons">expand_less</span></span></strong></div>
                <div class="prod-moins"><strong><span class="moins3"><span class="material-icons">expand_more</span></span></strong></div>
                </div>
                </div>
                 <div class="prod-prix"><strong><span class="pprix" name="pprix">${item.prix}</span><span class="priu" name="prixu">${item.prixu}</span><span class="pcfa">FCFA</span></strong></div>
                <div class="prod-box"><i class="fas fa-trash delete"></i></div>
                 
               </div>
`
           
     
           
         });

      }
		  let dropbox=document.querySelectorAll('.delete');
      let tagName= document.getElementsByName('produ-nom');
        let augmenter=document.querySelectorAll('.plus3');
  let nkilo=document.getElementsByName('pnombre');
  let prixu=document.getElementsByName('prixu');
  let pprix=document.getElementsByName('pprix');
   let prixt=document.getElementById('prixt');
   let increment=document.getElementsByName('increment');

       for (let i=0; i< dropbox.length; i++) {
  
  dropbox[i].addEventListener('click', () => {
   var ta=tagName[i].textContent;
   
    removeCart(ta,pprix[i]);
    
    
  } )
  
}


       for (let i=0; i< augmenter.length; i++) {
        if (c<augmenter.length) {
  prixt.textContent=parseInt(prixt.textContent)+parseInt(pprix[i].textContent);
  
  c++;
 }

       
  augmenter[i].addEventListener('click', () => {
  
       ajout(nkilo[i],pprix[i],prixu[i],tagName[i].textContent,increment[i]);
  } )
  
}
  let diminuer=document.querySelectorAll('.moins3');
       for (let i=0; i< diminuer.length; i++) {

  diminuer[i].addEventListener('click', () => {
   
   retrait(nkilo[i],pprix[i],prixu[i],tagName[i].textContent,increment[i]);
  } )
  
}
   }
	


onloadCartNumbers();
displayCart();


 

function ajout(e,e1,e2,e3,e4)
{
  
 e.textContent=parseFloat(e.textContent)+parseFloat(e4.textContent);

  e1.textContent=parseInt(e1.textContent)+parseInt(e2.textContent);
  prixt.textContent=parseInt(prixt.textContent)+parseInt(e2.textContent);
  sessionStorage.setItem("totalCost",parseInt(prixt.textContent));
   let cartItem=sessionStorage.getItem('productsInCart');
    cartItem=JSON.parse(cartItem);
     if (cartItem) {

        Object.values(cartItem).map(item =>{
     
     for (var id in cartItem) {
      if (id==e3) {
        cartItem[id].incart=parseFloat(e.textContent)/0.5;

        cartItem[id].prix=parseInt(e1.textContent);
       
                 }
                              }
         });
       sessionStorage.setItem("productsInCart", JSON.stringify(cartItem));
     
      }
      var productNumbers=sessionStorage.getItem('totalCost');

  if (productNumbers) {
    document.querySelector('.panier-number span').textContent =productNumbers;
    document.querySelector('.total-montant span').textContent =productNumbers;
    console.log('ho');
       }
       
}
function retrait(e,e1,e2,e3,e4)
{
  if (parseInt(e.textContent)>0) {
 e.textContent=parseFloat(e.textContent)-parseFloat(e4.textContent);
 e1.textContent=parseInt(e1.textContent)-parseInt(e2.textContent);
prixt.textContent=parseInt(prixt.textContent)-parseInt(e2.textContent);
sessionStorage.setItem("totalCost",parseInt(prixt.textContent));
let cartItem=sessionStorage.getItem('productsInCart');
    cartItem=JSON.parse(cartItem);
 if (cartItem) {

        Object.values(cartItem).map(item =>{
     
     for (var id in cartItem) {
      if (id==e3) {
         cartItem[id].incart=parseFloat(e.textContent)/0.5;
        cartItem[id].prix=parseInt(e1.textContent);
                 }
                              }
         });
       sessionStorage.setItem("productsInCart", JSON.stringify(cartItem));
     
      }
      var productNumbers=sessionStorage.getItem('totalCost');

  if (productNumbers) {
    document.querySelector('.panier-number span').textContent =productNumbers;
     document.querySelector('.total-montant span').textContent =productNumbers;
       }
       }
       
}

 
function removeCart(e,e1)
   {
      let cartItem=sessionStorage.getItem('productsInCart');
      cartItem=JSON.parse(cartItem);
      
     
      if (cartItem) {

        Object.values(cartItem).map(item =>{
     
     for (var id in cartItem) {
      if (id==e) {
        console.log (cartItem[id]);
       delete cartItem[id];
       

                 }
                              }
         });
       sessionStorage.setItem("productsInCart", JSON.stringify(cartItem));
     
      }
     

      prixt.textContent=parseInt(prixt.textContent)-parseInt(e1.textContent);
      sessionStorage.setItem("totalCost",parseInt(prixt.textContent));
      var productNumbers=sessionStorage.getItem('totalCost');

  if (productNumbers) {
    document.querySelector('.panier-number span').textContent =productNumbers;
    document.querySelector('.total-montant span').textContent =productNumbers;
       }
    displayCart();
        
        
        
   }
onloadCartNumbers();



/*partie js pour ajout de produit---------------*/

           
        

        
        
                
               
             /*
                 
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
                                
                                             
                                                  }
                             var num3=number3.getElementsByTagName('span');
                             
                            var index3=0;
                            
                                function nextNum3() {
                                // body...
                                num3[index3].style.display='none';
                                index3=(index3+1)% num3.length;
                                num3[index3].style.display='initial';
                                
                                                  }
                            var num4=number4.getElementsByTagName('span');
                            
                            var index4=0;
                                function nextNum4() {
                                // body...
                                num4[index4].style.display='none';
                                index4=(index4+1)% num4.length;
                                num4[index4].style.display='initial';
                                
                                             
                                                  }
                            var num5=number5.getElementsByTagName('span');
                           
                            var index5=0;
                            
                                function nextNum5() {
                                // body...
                                num5[index5].style.display='none';
                                index5=(index5+1)% num5.length;
                                num5[index5].style.display='initial';
                                
                                                  }
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
                                
                                                  }
                            var num8=number8.getElementsByTagName('span');
                           
                            var index8=0;
                                function nextNum8() {
                                // body...
                                num8[index8].style.display='none';
                                index8=(index8+1)% num8.length;
                                num8[index8].style.display='initial';
                                
                                             
                                                  }
                            var num9=number9.getElementsByTagName('span');
                           
                            var index9=0;
                            
                                function nextNum9() {
                                // body...
                                num9[index9].style.display='none';
                                index9=(index9+1)% num9.length;
                                num9[index9].style.display='initial';
                                
                                                  }
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
                                
                                                  }
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
                               
                                                  }
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
                                
                                                  }
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
                                
                                                  }
                            var num18=number18.getElementsByTagName('span');
                            
                            var index18=0;
                                function nextNum18() {
                                // body...
                                num18[index18].style.display='none';
                                index18=(index18+1)% num18.length;
                                num18[index18].style.display='initial';
                                
                                             
                                                  }
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
                                
                                 
       }

                                      

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
     }*/
      

  /*-----------------------partie modal--------------------*/

  let modal=null;
	const openModal = function (e){
	 
	e.preventDefault();
		const target=document.querySelector(e.target.getAttribute('href'));
		target.style.display = null;
		target.setAttribute('arial-modal','true');
		target.removeAttribute('arial-hidden');
		modal=target;
		modal.addEventListener('click',closeModal);
		modal.querySelector('.js-modal-close').addEventListener('click', closeModal);
		modal.querySelector('.js-modal-stop').addEventListener('click', stopPropagation);
		
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
    
    onloadCartNumbers();

}
/*
{
  totalprice();
  var prixtotal=parseInt(price1.textContent)+parseInt(price2.textContent)+parseInt(price3.textContent)+parseInt(price4.textContent)+parseInt(price5.textContent)+
  parseInt(price6.textContent)+parseInt(price7.textContent)+parseInt(price8.textContent)+parseInt(price9.textContent)+parseInt(price10.textContent)+parseInt(price11.textContent)+
  parseInt(price12.textContent)+parseInt(price13.textContent)+parseInt(price14.textContent)+parseInt(price15.textContent)+parseInt(price16.textContent)+parseInt(price17.textContent)+
  parseInt(price18.textContent)+parseInt(price19.textContent)+parseInt(price20.textContent);
  console.log('me',parseInt(price5.textContent));
  console.log(prixtotal);
  let cartCost=localStorage.getItem('totalCost');

  if (cartCost != null) {
    cartCost=parseInt(cartCost);
    
    localStorage.setItem('totalCost',cartCost+prixtotal);
     cartCost=localStorage.getItem('totalCost');
    document.querySelector('.panier-number span').textContent =cartCost;
    

  }else{
    
    localStorage.setItem('totalCost', prixtotal);
    document.querySelector('.panier-number span').textContent =prixtotal;
    
  }
}*/

const stopPropagation= function(e)
{
	e.stopPropagation();
}

document.querySelectorAll('.js-modal').forEach(a => {
	a.addEventListener('click', openModal);

});
