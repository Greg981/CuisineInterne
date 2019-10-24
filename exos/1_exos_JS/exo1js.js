var elmt = document.getElementById("example"); /* on recupere l'element*/

/* on modifie le style*/
elmt.style.color = "black";
elmt.style.textAlign = "center";
elmt.style.fontSize = "3em";


var elmt = document.getElementById("text"); /* on recupere l'element*/

/* on modifie le style*/
elmt.style.textAlign = "center";

var x = 0;
var y = 0;

function deplacer(dx, dy)
{
   var bloc = document.getElementById("test");
   // on enregistre la nouvelle position
   x += dx;
   y += dy;
   // on place le bloc
   bloc.style.left = x + "px";
   bloc.style.top = y + "px";
}

var example = document.getElementById('example'),
text = document.getElementById('text'),
ids = document.getElementsByClassName('id');

function moveBefore() {
if (example == ids[0]) {
text = text.parentNode.removeChild(text);
document.body.insertBefore(text, example);
}
else {
example = example.parentNode.removeChild(example);
document.body.insertBefore(example, text);
}
}