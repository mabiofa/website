      
      
     console.log('ar');

function onloadCartNumbers(){
  var productNumbers=sessionStorage.getItem('totalCost');
  var productNumber=sessionStorage.getItem('cartNumbers');
  var fdl=sessionStorage.getItem('fdl');
  var tva=sessionStorage.getItem('tva');
  var pt=sessionStorage.getItem('pt');
   var spt=sessionStorage.getItem('spt');
  if (productNumbers) {
    document.querySelector('.panier-number span').textContent =productNumbers;
    document.querySelector('.pay1 span').textContent =productNumber;
    document.querySelector('.pay2 span').textContent =spt;
     document.querySelector('.pay3 span').textContent =fdl;
      document.querySelector('.pay4 span').textContent =tva;
       document.querySelector('.finpayt span').textContent =pt;
  }
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
                
                <div class="prodnam" ><strong name="produ-nom" class="none">${item.tag}</strong><span name="increment" class="none">${item.icrement}</span> ${item.name}<br><strong class="upri none">${item.prixu} FCFA</strong></div>
               <div class="pKg">${item.prixu}</div>
                
                <div class="nKg"><span class="pnombre" name="pnombre">${item.incart*item.icrement}</span></div>
               
                
                 <div class="montant"><strong><span class="pprix" name="pprix">${item.prix}</span><span class="priu" name="prixu">${item.prixu}</span><span class="pcfa">  FCFA</span></strong></div>
              
                 
               </div>
`
           
     
           
         });

      }
		 
  
}


      
	


onloadCartNumbers();
displayCart();


 







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


