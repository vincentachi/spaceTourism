

// js burger
var burgerMenu = document.getElementById('burger');
 
var overlay = document.getElementById('navP2');
 
burgerMenu.addEventListener('click', function() {
  this.classList.toggle("close");
  overlay.classList.toggle("overlay");
});
// fin js burger
