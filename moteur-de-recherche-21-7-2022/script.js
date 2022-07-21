function chercherOccurence() {
var text = document.getElementById("text-area").innerText;
var input = document.getElementById("search").value;
var rege = new RegExp(input, "g");
var occurences = text.match(rege);
document.getElementById('result').innerText = occurences;
var underLine = document.getElementById('result').classList;
underLine.add('souligner');

}


