/*-----------------------partie modal--------------------*/


function func2()
                  {
                    
                    var div1=document.getElementById('code1');
                    
                      div1.style.display='block';
                     
                  }


                   function func3()
                  {
                    
                    var div2=document.getElementById('code2');
                    
                      div2.style.display='block';
                     
                  }

                  function func5()
                  {
                    
                    var div3=document.getElementById('code1');
                    
                      div3.style.display='none';
                     
                  }


                   function func6()
                  {
                    
                    var div4=document.getElementById('code2');
                    
                      div4.style.display='none';
                     
                  }

  let modal=null;
  const openModal = function (product){
    
  product.preventDefault();
    const target=document.querySelector(product.target.getAttribute('href'));
    
    target.style.display = null;
    target.setAttribute('arial-modal','true');
    target.removeAttribute('arial-hidden');
    modal=target;
    modal.addEventListener('click',closeModal);
    modal.querySelector('.js-modal-close').addEventListener('click', closeModal);
    modal.querySelector('.js-modal-stop').addEventListener('click', stopPropagation);
    func5();
    func6();
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
    func5();
    func6();
  }
  const stopPropagation= function(e)
{
  e.stopPropagation();
}

document.querySelectorAll('.js-modal').forEach(a => {
  a.addEventListener('click', openModal);

});

 