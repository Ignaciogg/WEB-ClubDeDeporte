/* Scrolltrigger
gsap.registerPlugin(ScrollTrigger);

gsap.to('.seccion',{

})*/

// Nav fixed
const nav = document.querySelector('#nav');
const navTop = nav.offsetTop;

function stickyNavigation() {
  console.log('navTop = ' + navTop);
  console.log('scrollY = ' + window.scrollY);

  if (window.scrollY >= navTop) {
    // nav offsetHeight = height of nav
    document.body.style.paddingTop = nav.offsetHeight + 'px';
    document.body.classList.add('fixed-nav');
  } else {
    document.body.style.paddingTop = 0;
    document.body.classList.remove('fixed-nav');
  }
}

window.addEventListener('scroll', stickyNavigation);

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

function validarFormulario() {
  //evento.preventDefault();
  var usuario = document.getElementById('nombre_registro').value;
  var apellido = document.getElementById('apellido_registro').value;
  var correo = document.getElementById('correo_registro').value;
  var pass = document.getElementById('pass_registro').value;
  re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
  if(usuario.length == 0) {
    alert('Nombre no válido');
    return;
  }  
  else if (apellido.length == 0) {
    alert('Apellidos no válido');
    return;
  }
	else if(!re.exec(correo)){
		alert('email no valido');
    return;
  }
  else if (pass.length < 6) {
    alert('La contraseña debe tener más de 6 caracteres');
    return;
  }
  return true;
}