//cacher les paroles et changer l'intitule du boutton
const button2 = document.getElementById("masquer-paroles");
button2.addEventListener("click", cacherParoles);
function cacherParoles (event) {
    var x = document.getElementById("paroles");
    if (x.style.visibility === "hidden") {
        x.style.visibility = "visible";
    } else {
        x.style.visibility = "hidden";
        
    }
    
}

// cacher les refrains et remplacer l'intitulé du boutton
const button1 = document.getElementById("masquer-refrains");
button1.addEventListener("click", cacherRefrains);
function cacherRefrains (e) {
    const y = document.getElementsByClassName("refrain");
   for ( const z of y) {
    z.style.visibility = "hidden";
    z.innerHTML = "[Refrain]";
    document.getElementById("a").innerText = "Afficher les refrains";

   }
    
}