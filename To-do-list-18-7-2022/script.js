function ajoutezTache () {
    let tacheEntre = document.createElement("li");
    tacheEntre.innerHTML = document.getElementById("boite").value;
    document.getElementById("liste").appendChild(tacheEntre);
    tacheEntre.onclick = effaceList;
    sauvegarde();
}

function effaceList () {
    document.getElementById("liste").removeChild(this);
    sauvegarde();
}

function sauvegarde () {
    localStorage.sauver = document.getElementById("liste").innerHTML;
}

function chargerList () {
    document.getElementById("liste").innerHTML = localStorage.sauver;
    for(var i = 0; i < liste.children.length; i++) {
        liste.children[i].onclick = effaceList;
      }
      
}

