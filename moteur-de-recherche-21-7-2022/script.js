function chercherOccurence() {
var text = document.getElementById("text-area").innerText;
var input = document.getElementById("search").value;

if(input!="") {
    var expReg = new RegExp(input, "ig");
    var nouvelForm = "<span style='background-color:red;'>"+ input +"</span>";
    text = text.replace(expReg,nouvelForm);
    document.getElementById("text-area").innerHTML = text;
}


}