var nav = document.getElementById('navbar')

window.addEventListener('scroll', function(){
  if(window.pageYOffset > 150){
    nav.classList.add('bgNavbar','shadow');
  }
  else{
    nav.classList.remove('bgNavbar','shadow');
  }
});