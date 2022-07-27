function ajoutezTache () {
    let tacheEntre = document.createElement("li");
    tacheEntre.innerHTML = document.getElementById("boite").value;
    document.getElementById("liste").appendChild(tacheEntre);
    tacheEntre.onclick = effaceList;
    sauvegarde();//on sauve apres chaque ajout de tache a la liste
}

function effaceList () {
    document.getElementById("liste").removeChild(this);
    sauvegarde();//on sauve apres chaque effacement de tache
}

function sauvegarde () {
    localStorage.sauver = document.getElementById("liste").innerHTML; //on sauve dans le local storage une donneé avec la clé "sauver" et qui contient le html de notre liste
}

function chargerList () { 
    document.getElementById("liste").innerHTML = localStorage.sauver;// on charge dans l'html de notre liste les donneés sauveés dans not locale storage sous la clé "sauver"
    for(var i = 0; i < liste.children.length; i++) {//la liste chargée n'a pas la fonction effaceList() d'effacement appmliqueé, donc on la reapplique avec une boucle
        liste.children[i].onclick = effaceList;
      }
      
}

