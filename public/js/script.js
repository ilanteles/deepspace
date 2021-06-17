const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

burger.addEventListener('click', () => {
      
        nav.classList.toggle('nav-active');

        navLinks.forEach((link, index) => {
        if(link.style.animation){
            link.style.animation = ``;
        } else{
            link.style.animation = `navLinkFade 0.5s ease forwards ${index / 5}s`;
        }
        });
      
        burger.classList.toggle('toggle');
    });
}

navSlide();

var scale = '80%';
document.body.style.zoom =  scale;    // Chrome, Opera, Edge
document.body.style.msTransform =   scale;       // IE 9
document.body.style.Mztransform = scale;     // Geral

//////////////////////    LOGIN MODAL    ///////////////////////////
var lmodal = document.getElementById("loginModal");
var lbtn = document.getElementById("loginBtn");
var span = document.getElementsByClassName("loginClose")[0];

lbtn.onclick = function() {
  lmodal.style.display = "block";
}

span.onclick = function() {
  lmodal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == lmodal) {
    lmodal.style.display = "none";
  }
}

////////////////////    MENSAGEM MODAL    /////////////////////////
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


//////////////////    PLANETAS MODAL    //////////////////////////
function planetTabs(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";

  planet_modal = document.getElementsByClassName("tabcontent");
window.onclick = function(event) {
  if (event.target == planet_modal) {
    planet_modal.style.display = "none";
  }
}
}