function onloadCartNumbers(){
  var productNumbers=sessionStorage.getItem('totalCost');

  if (productNumbers) {
    document.querySelector('.panier-number span').textContent =productNumbers;
  }
}
onloadCartNumbers();