function concatener() {
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    document.getElementById("nomcomplet").value = `${nom} ${prenom}`;
   
}