//on cree une constante avec l'ID du boutton et on ajoute l'ecouteur sur le click
const button = document.getElementById("boutton");
button.addEventListener("click", fonction);
//on cree une fonction qui affiche dans le HTML la phrase + les variables concatené avec les backtick
function fonction () {
    let date = new Date(); // affiche la date
    let nom = document.getElementById("nom").value;//capture la valeur de la zone de saisie
    let prenom = document.getElementById("prenom").value;//capture la valeur de la zone de saisie
    document.getElementById("reponse").innerHTML = `Bonjour je m'appelle ${nom} ${prenom} aujourdhui il est le ${date}`;

}
// on utilise l'event onmousemove(quand la souris bouge) pour activer une fonction avec un argument (e)
onmousemove = function(e){
                    
        document.getElementById("horizentale").innerHTML = `Position horizontal (X): ${e.clientX}`;//on affiche lo position horizentale 
        document.getElementById("verticale").innerHTML = `Position vertical (Y): ${e.clientY}`;//on affiche la position verticale
}