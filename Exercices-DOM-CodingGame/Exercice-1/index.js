 //remplacer le titre h1
 document.body.firstElementChild.innerHTML = "Rick Astley - Never Gonna Give You Up";
//effacer la premiere ligne
const enDouble = document.getElementsByClassName("couplet");
for (i=0; i<enDouble.length; i++) {
    enDouble[i].removeChild(enDouble[i].firstChild);
    enDouble[i].removeChild(enDouble[i].firstElementChild);
 }
 //effacer les doublons
const doublons = document.getElementsByClassName("refrain").innerText;
for (i=0; i<doublons.length; i++) {
    if (i%2 === 0) {
        doublons[i].remove(); 
    }
}

//supprimer l'element avec erreur
document.getElementById("erreur").remove();
//ajouter un fooeter
let foot = document.createElement("footer");
document.body.appendChild(foot).innerText = "© Copyright 2020 - Nom";
