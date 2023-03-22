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



function cacherStock(){

  var elt=document.getElementsByClassName("stock");
  var elt2=document.getElementById("BoutonStock");

  if (elt2.value=="Cacher Stock"){
    console.log(elt.length);
    var taille=elt.length;
    for (var i = 0; i < taille; i++) {
      console.log(elt[i]);
      elt[i].style.display="none";    
  }
  
  elt2.value="Afficher Stock";

  }else{
    if (elt2.value=="Afficher Stock"){
      console.log(elt.length);
    var taille=elt.length;
    for (var i = 0; i < taille; i++) {
      console.log(elt[i]);
      elt[i].style.display="table-cell";    
  }
  
  elt2.value="Cacher Stock";

    }else{
      console.log("Erreur");
    }
  }
}


function initStock(){
  var elt=document.getElementsByClassName("stock");
    elt[1].innerHTML= 50;
    elt[2].innerHTML=40;
    elt[3].innerHTML=31;   
  }



function ajouter1(obj){
  elt=obj.previousElementSibling;
  console.log(elt);
  var valeur=parseInt(elt.value,10);
  if(valeur<elt.parentNode.previousElementSibling.innerHTML){
    valeur+=1;
    elt.value=valeur;
  }
  
}

function enlever1(obj){
  elt=obj.nextElementSibling;
  var valeur=parseInt(elt.value,10);
  if (valeur>0){
    valeur-=1;
    elt.value=valeur;
  } 
 
}

function agrandirimage(obj){
  obj.style.height='50%';
  obj.style.width='auto';
}

function reduireimage(obj){
  obj.style.height='20ch';
  obj.style.width='auto';
}


function verifierpanier(obj){
  var valeur=parseInt(obj.previousElementSibling.previousElementSibling.value,10);
  var stockMaxi=parseInt(obj.parentNode.previousElementSibling.innerHTML,10);
  var qteCommandee= parseInt(obj.parentNode.nextElementSibling.innerHTML,10);
  console.log(obj.previousElementSibling.previousElementSibling);
  console.log("StockMaxi="+stockMaxi+"    Valeur="+valeur);
  if (valeur<0 || valeur> stockMaxi){
    alert("Erreur, vous devez saisir une valeur comprise entre 1 et "+stockMaxi);
  }else{
    var res=stockMaxi-valeur;  
    obj.parentNode.previousElementSibling.innerHTML=res;
    obj.parentNode.nextElementSibling.innerHTML=qteCommandee+valeur
  }

  
  

}

function envoiMessage(){
  let email=encodeURIComponent("diegoojedachercoles@gmail.com");
  let radios =document.getElementsByName("genre");
  for (let i = 0; i < radios.length; i++) {
    if (radios[i].checked) {
      var sexe=radios[i].value;
      //console.log("Sexe selectionné:"+ radios[i].value);
      break;
    }

  }
var selectElement = document.getElementById("selection");
var selection = selectElement.options[selectElement.selectedIndex].textContent;
//console.log("Selection: "+selection);

  var message= "Nom: "+document.getElementById("nom").value
  +"\nPrénom: "+document.getElementById("prenom").value+
  "\nEmail: "+document.getElementById("email").value +
  "\nSexe: "+sexe+
  "\nDate de naissance"+document.getElementById("datenaissance").value+
  "\nMétier: "+selection+
  "\n\n\n\n\n\n"+document.getElementById("texte").value;



  var sujet=document.getElementById("sujet").value;

  message= encodeURIComponent(message);
  window.location.href="mailto:"+email+"?subject="+sujet+"&body="+message;


}