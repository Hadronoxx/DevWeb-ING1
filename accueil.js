/*fonction qui va cacher tous les elements dont l'id vaut accueil, mms, skittles,haribo et contact*/
function toutcacher(){
  var elt=document.getElementById("accueil");
  elt.style.display="none";
  elt=document.getElementById("mms");
  elt.style.display="none";
  elt=document.getElementById("skittle");
  elt.style.display="none";
  elt=document.getElementById("haribo");
  elt.style.display="none";
  elt=document.getElementById("Contact");
  elt.style.display="none";
}

function accueil(){
  toutcacher();
  var elt=document.getElementById("accueil");
  elt.style.display="block";

}

function mms(){
  toutcacher();
  var elt=document.getElementById("mms");
  elt.style.display="block";

}

function skittle(){
  toutcacher();
  var elt=document.getElementById("skittle");
  elt.style.display="block";

}

function haribo(){
  toutcacher();
  var elt=document.getElementById("haribo");
  elt.style.display="block";

}

function Contact(){
  toutcacher();
  var elt=document.getElementById("Contact");
  elt.style.display="block";

}
