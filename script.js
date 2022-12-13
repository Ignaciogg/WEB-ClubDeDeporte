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
window.onclick = function(event){
    if (event.target == modal){
        modal.style.display = "none";
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
var slider_img = document.querySelector('.slider_img');

var FJ5 = ['1.jpg'];
var BJ4, FJ4 = ['1.jpg', '2.jpg'];
var BJ2 = ['1.jpg', '2.png', '3.jpg'];
var BJ3, FJ2, VFJ1, VFJ2, VMJ1, VMJ3 = ['1.jpg', '2.jpg', '3.jpg'];
var VMJ2 = ['1.jpg', '2.jpg', '3.jpg', '4.jpg'];
var FJ1 = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg'];
var BJ1 = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg'];
var FJ3 = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg'];

var i = 0;

function anterior(images){
	if(i <= 0) i = images.length;	
	i--;
	return setImg(images);			 
}

function siguiente(images){
	if(i >= images.length-1) i = -1;
	i++;
	return setImg(images);			 
}

function setImg(images){

  if(images == "BJ1")
    return slider_img.setAttribute("src", "/img/basket/J1/" + BJ1[i]);
  if(images == "BJ2")
    return slider_img.setAttribute("src", "/img/basket/J2/" + BJ2[i]);
  if(images == "BJ3")
    return slider_img.setAttribute("src", "/img/basket/J3/" + BJ3[i]);
  if(images == "BJ4")
    return slider_img.setAttribute("src", "/img/basket/J4/" + BJ4[i]);

  if(images == "FJ1")
    return slider_img.setAttribute("src", "/img/futbol/J1/" + FJ1[i]);
  if(images == "FJ2")
    return slider_img.setAttribute("src", "/img/futbol/J2/" + FJ2[i]);
  if(images == "FJ3")
    return slider_img.setAttribute("src", "/img/futbol/J3/" + FJ3[i]);
  if(images == "FJ4")
    return slider_img.setAttribute("src", "/img/futbol/J4/" + FJ4[i]);
  if(images == "FJ5")
    return slider_img.setAttribute("src", "/img/futbol/J5/" + FJ5[i]);

  if(images == "VFJ1")
    return slider_img.setAttribute("src", "/img/volleyF/J1/" + VFJ1[i]);
  if(images == "VFJ2")
    return slider_img.setAttribute("src", "/img/volleyF/J2/" + VFJ2[i]);

  if(images == "VMJ1")
    return slider_img.setAttribute("src", "/img/volleyM/J1/" + VMJ1[i]);
  if(images == "VMJ2")
    return slider_img.setAttribute("src", "/img/volleyM/J2/" + VMJ2[i]);
  if(images == "VMJ3")
    return slider_img.setAttribute("src", "/img/volleyM/J3/" + VMJ3[i]);
}