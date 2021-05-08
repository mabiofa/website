let carts=document.querySelectorAll('.plus2');
console.log('hou');
let products = [
    {
	name:'Pain sucre 1 baguete',
	tag:"painsucre1",
	prix:600,
	incart:0},
   {
	name:'Pain sucre 2 baguete',
	tag:"painsucre2",
	prix:5000,
	incart:0},

	{
	name:'Pain sucre 3 baguete',
	tag:"painsucre3",
	prix:100,
	incart:0},

	{
	name:'Pain sucre 4 baguete',
	tag:"painsucre4",
	prix:200,
	incart:0},

	{
	name:'Pain sucre 5 baguete',
	tag:"painsucre5",
	prix:500,
	incart:0},

	{
	name:'Pain sucre 6 baguete',
	tag:"painsucre6",
	prix:500,
	incart:0},

	{
	name:'Pain sucre 7 baguete',
	tag:"painsucre7",
	prix:500,
	incart:0},

	{
	name:'Pain sucre 8 baguete',
	tag:"painsucre8",
	prix:500,
	incart:0},

	{
	name:'Pain sucre 9 baguete',
	tag:"painsucre9",
	prix:500,
	incart:0},

	{
	name:'Pain sucre 10 baguete',
	tag:"painsucre10",
	prix:500,
	incart:0},

	{
	name:'Pain sucre 11 baguete',
	tag:"painsucre11",
	prix:500,
	incart:0},

	{
	name:'Pain sucre 12 baguete',
	tag:"painsucre12",
	prix:500,
	incart:0},

	{
	name:'Pain sucre 13 baguete',
	tag:"painsucre13",
	prix:500,
	incart:0},

	{
	name:'Pain sucre 14 baguete',
	tag:"painsucre14",
	prix:500,
	incart:0},

	{
	name:'Pain sucre 15 baguete',
	tag:"painsucre15",
	prix:500,
	incart:0},

	{
	name:'Pain sucre 16 baguete',
	tag:"painsucre16",
	prix:500,
	incart:0},

	{
	name:'Pain sucre 17 baguete',
	tag:"painsucre17",
	prix:500,
	incart:0},

	{
	name:'Pain sucre 18 baguete',
	tag:"painsucre18",
	prix:500,
	incart:0},

	{
	name:'Pain sucre 19 baguete',
	tag:"painsucre19",
	prix:500,
	incart:0},

	{
	name:'Pain sucre 20 baguete',
	tag:"painsucre20",
	prix:500,
	incart:0}

];


for (let i=0; i< carts.length; i++) {

	carts[i].addEventListener('click', () => {
	
		cartNumbers(products[i]);
		totalCost(products[i]);
		
		
	} )
}
      

function onloadCartNumbers(){
	var productNumbers=localStorage.getItem('totalCost');

	if (productNumbers) {
		document.querySelector('.panier-number span').textContent =productNumbers;
	}
}

function cartNumbers(product){
	console.log(product);
	var productNumbers=localStorage.getItem('cartNumbers');
	
	
	productNumbers=parseInt(productNumbers);
	if (productNumbers) {
		localStorage.setItem('cartNumbers',productNumbers+1);
		

	}
	else{
		localStorage.setItem('cartNumbers', 1);
		
		


	}
	setItems(product);
}

	function setItems(product){
		let cartItems = localStorage.getItem('productsInCart');
		cartItems= JSON.parse(cartItems);
		
		if (cartItems != null) {
			if (cartItems[product.tag] == undefined) {

				cartItems={
					...cartItems,
					[product.tag]:product
				}

			}
			cartItems[product.tag].incart +=1;
		}
		else{
			product.incart = 1;
		    cartItems = {
			[product.tag]:product
		     }
		}
		localStorage.setItem("productsInCart", JSON.stringify(cartItems));
	
		
		
	
		
		
		
	}
   

   function incarts(product)
   {
			
		
   }
	

function totalCost(product)
{
	let cartCost=localStorage.getItem('totalCost');

	if (cartCost != null) {
		cartCost=parseInt(cartCost);
		
		localStorage.setItem('totalCost',cartCost+product.prix);
		 cartCost=localStorage.getItem('totalCost');
		document.querySelector('.panier-number span').textContent =cartCost;
		

	}else{
		
		localStorage.setItem('totalCost', product.prix);
		document.querySelector('.panier-number span').textContent =product.prix;
		
	}
}
onloadCartNumbers();







 

/*partie js pour ajout de produit---------------*/

            var number1= document.getElementById('valeur1');
                var number2= document.getElementById('valeur2');
                var number3= document.getElementById('valeur3');
                var number4= document.getElementById('valeur4');
                var number5= document.getElementById('valeur5');
                var number6= document.getElementById('valeur6');
                var number7= document.getElementById('valeur7');
                var number8= document.getElementById('valeur8');
                var number9= document.getElementById('valeur9');
                var number10= document.getElementById('valeur10');
                var number11= document.getElementById('valeur11');
                var number12= document.getElementById('valeur12');
                var number13= document.getElementById('valeur13');
                var number14= document.getElementById('valeur14');
                var number15= document.getElementById('valeur15');
                var number16= document.getElementById('valeur16');
                var number17= document.getElementById('valeur17');
                var number18= document.getElementById('valeur18');
                var number19= document.getElementById('valeur19');
            var number20= document.getElementById('valeur20');
                for ( i=1; i<100;i++) {
                var span1=document.createElement('span');
                   var span2=document.createElement('span');
                   var span3=document.createElement('span');
                   var span4=document.createElement('span');
                   var span5=document.createElement('span');
                   var span6=document.createElement('span');
                   var span7=document.createElement('span');
                   var span8=document.createElement('span');
                   var span9=document.createElement('span');
                   var span10=document.createElement('span');
                   var span11=document.createElement('span');
                   var span12=document.createElement('span');
                   var span13=document.createElement('span');
                   var span14=document.createElement('span');
                   var span15=document.createElement('span');
                   var span16=document.createElement('span');
                   var span17=document.createElement('span');
                   var span18=document.createElement('span');
                   var span19=document.createElement('span');
                var span20=document.createElement('span');
               span1.textContent =i;
                   span2.textContent =i;
                   span3.textContent =i;
                   span4.textContent =i;
                   span5.textContent =i;
                   span6.textContent =i;
                   span7.textContent =i;
                   span8.textContent =i;
                   span9.textContent =i;
                   span10.textContent =i;
                   span11.textContent =i;
                   span12.textContent =i;
                   span13.textContent =i;
                   span14.textContent =i;
                   span15.textContent =i;
                   span16.textContent =i;
                   span17.textContent =i;
                   span18.textContent =i;
                   span19.textContent =i;
               span20.textContent =i;
                   
             number1.appendChild(span1);
                   number2.appendChild(span2);
                   number3.appendChild(span3);
                   number4.appendChild(span4);
                   number5.appendChild(span5);
                   number6.appendChild(span6);
                   number7.appendChild(span7);
                   number8.appendChild(span8);
                   number9.appendChild(span9);
                   number10.appendChild(span10);
                   number11.appendChild(span11);
                   number12.appendChild(span12);
                   number13.appendChild(span13);
                   number14.appendChild(span14);
                   number15.appendChild(span15);
                   number16.appendChild(span16);
                   number17.appendChild(span17);
                   number18.appendChild(span18);
                   number19.appendChild(span19);
             number20.appendChild(span20);
                   
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
                                    num1[index1].style.display='initial';}
                         }
                         function prevNum2() {
                                        // body...
                                        if (index2>0) {
                                        num2[index2].style.display='none';
                                        index2=(index2-1+num2.length)% num2.length;
                                        num2[index2].style.display='initial';}
                                    }
                                    function prevNum3() {
                                        // body...
                                        if (index3>0) {
                                        num3[index3].style.display='none';
                                        index3=(index3-1+num3.length)% num3.length;
                                        num3[index3].style.display='initial';}
                                    }
                                    function prevNum4() {
                                        // body...
                                        if (index4>0) {
                                        num4[index4].style.display='none';
                                        index4=(index4-1+num4.length)% num4.length;
                                        num4[index4].style.display='initial';}
                                    }
                                    function prevNum5() {
                                        // body...
                                        if (index5>0) {
                                        num5[index5].style.display='none';
                                        index5=(index5-1+num5.length)% num5.length;
                                        num5[index5].style.display='initial';}
                                    }
                                    function prevNum6() {
                                        // body...
                                        if (index6>0) {
                                        num6[index6].style.display='none';
                                        index6=(index6-1+num6.length)% num6.length;
                                        num6[index6].style.display='initial';}
                                    }
                                    function prevNum7() {
                                        // body...
                                        if (index7>0) {
                                        num7[index7].style.display='none';
                                        index7=(index7-1+num7.length)% num7.length;
                                        num7[index7].style.display='initial';}
                                    }
                                    function prevNum8() {
                                        // body...
                                        if (index8>0) {
                                        num8[index8].style.display='none';
                                        index8=(index8-1+num8.length)% num8.length;
                                        num8[index8].style.display='initial';}
                                    }
                                    function prevNum9() {
                                        // body...
                                        if (index9>0) {
                                        num9[index9].style.display='none';
                                        index9=(index9-1+num9.length)% num9.length;
                                        num9[index9].style.display='initial';}
                                    }
                                    function prevNum10() {
                                        // body...
                                        if (index10>0) {
                                        num10[index10].style.display='none';
                                        index10=(index10-1+num10.length)% num10.length;
                                        num10[index10].style.display='initial';}
                                    }
                                    function prevNum11() {
                                        // body...
                                        if (index11>0) {
                                        num11[index11].style.display='none';
                                        index11=(index11-1+num11.length)% num11.length;
                                        num11[index11].style.display='initial';}
                                    }
                                    function prevNum12() {
                                        // body...
                                        if (index12>0) {
                                        num12[index12].style.display='none';
                                        index12=(index12-1+num12.length)% num12.length;
                                        num12[index12].style.display='initial';}
                                    }
                                    function prevNum13() {
                                        // body...
                                        if (index13>0) {
                                        num13[index13].style.display='none';
                                        index13=(index13-1+num13.length)% num13.length;
                                        num13[index13].style.display='initial';}
                                    }
                                    function prevNum14() {
                                        // body...
                                        if (index14>0) {
                                        num14[index14].style.display='none';
                                        index14=(index14-1+num14.length)% num14.length;
                                        num14[index14].style.display='initial';}
                                    }
                                    function prevNum15() {
                                        // body...
                                        if (index15>0) {
                                        num15[index15].style.display='none';
                                        index15=(index15-1+num15.length)% num15.length;
                                        num15[index15].style.display='initial';}
                                    }
                                    function prevNum16() {
                                        // body...
                                        if (index16>0) {
                                        num16[index16].style.display='none';
                                        index16=(index16-1+num16.length)% num16.length;
                                        num16[index16].style.display='initial';}
                                    }
                                    function prevNum17() {
                                        // body...
                                        if (index17>0) {
                                        num17[index17].style.display='none';
                                        index17=(index17-1+num17.length)% num17.length;
                                        num17[index17].style.display='initial';}
                                    }
                                    function prevNum18() {
                                        // body...
                                        if (index18>0) {
                                        num18[index18].style.display='none';
                                        index18=(index18-1+num18.length)% num18.length;
                                        num18[index18].style.display='initial';}
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
		num1[0].style.display='block';
        

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
}

const stopPropagation= function(e)
{
	e.stopPropagation();
}

document.querySelectorAll('.js-modal').forEach(a => {
	a.addEventListener('click', openModal);

});
