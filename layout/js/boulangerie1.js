let carts=document.querySelectorAll('.panier-ajout');
console.log('hi');
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


let valeur=document.querySelector('.valeur2');

	function setItems(product){
		let cartItems = localStorage.getItem('productsInCart');
		cartItems= JSON.parse(cartItems);
		
		if (cartItems != null) {
			if (cartItems[product.tag]==undefined) {

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
	
			valeur.textContent =cartItems[product.tag].incart;
		
		
	
		
		
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
		console.log('hi');

	}else{
		
		localStorage.setItem('totalCost', product.prix);
		document.querySelector('.panier-number span').textContent =product.prix;
		console.log('hell');
	}
}
onloadCartNumbers();







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
