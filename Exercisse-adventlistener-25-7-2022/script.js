const button = document.getElementById("boutton");
button.addEventListener("click", fonction);

function fonction () {
    let date = new Date();
    let nom = document.getElementById("nom").value;
    let prenom = document.getElementById("prenom").value;
    document.getElementById("reponse").innerHTML = `Bonjour je m'appelle ${nom} ${prenom} aujourdhui il est le ${date}`;

}