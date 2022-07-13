
 
 function titre()  {
    
    var h1 = document.createElement("h1");
    var title = document.createTextNode("Michael Jackson Thriller");
    h1.style.cssText = "text-align:center;"
    h1.appendChild(title);
    document.body.appendChild(h1);

   
}

titre();
// variable globale
paroles = document.createElement("div")

function parole() {
  
    paroles.className = ("paroles");
    paroles.style.cssText = 'background-color:light-blue;font-size:55px;border:2px solid black;height:200px;';
    document.body.appendChild(paroles);

   
}

parole();

function paragraphes() {
    var p1 = document.createElement("p");
    paroles.appendChild(p1);
    p1.innerHTML = chanson[0];

}

paragraphes();