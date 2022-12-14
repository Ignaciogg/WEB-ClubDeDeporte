// Animación inicio
gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray('.section').forEach(section => {
  ScrollTrigger.create({
    trigger: section,
    start: 'top top',
    pin: true,
    pinSpacing: false
  });
});

// Login
var modal = document.getElementById("id01");
var modal2 = document.getElementById("id02");
window.onclick = function(event){
    if (event.target == modal){
        modal.style.display = "none";
    } else if (event.target == modal2){
        modal2.style.display = "none";
    }
}

// Menú responsive
function responsiveMenu(){
  var x = document.getElementById("nav");
  if (x.className === ""){
    x.className = "responsive";
  } else {
    x.className = "";
  }
}

// Galería
$('.carousel').carousel({
  interval: false
})