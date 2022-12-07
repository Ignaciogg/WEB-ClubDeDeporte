// Seleccionador
function seleccionar(link){
    var opciones = document.querySelectorAll('#links  a');
    opciones[0].className = "";
    opciones[1].className = "";
    opciones[2].className = "";
    opciones[3].className = "";
    opciones[4].className = "";
    opciones[5].className = "";
    opciones[6].className = "";
    opciones[7].className = "";
    opciones[8].className = "";
    opciones[9].className = "";
    opciones[10].className = "";
    opciones[11].className = "";
    opciones[12].className = "";
    opciones[13].className = "";
    opciones[14].className = "";
    opciones[15].className = "";
    opciones[16].className = "";
    link.className = "seleccionado";
}

// Scroll inicio
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
window.onclick = function(event){
    if (event.target == modal){
        modal.style.display = "none";
    }
}

// Slideshow
var slider_img = document.querySelector('.slider-img');
var images = ['UEM-basket.png', 'UEM-futbol.jpeg', 'UEM-piscina.png'];
var i = 0;

function anterior(){
	if(i <= 0) i = images.length;	
	i--;
	return setImg();			 
}

function siguiente(){
	if(i >= images.length-1) i = -1;
	i++;
	return setImg();			 
}

function setImg(){
	return slider_img.setAttribute("src", "img/" + images[i]);
}