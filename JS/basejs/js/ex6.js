let paragraphe1 = document.createElement("p");
let paragraphe2 = document.createElement("p");
let body = document.body;

paragraphe1.innerHTML = "Voici un 1 er paragraphe";
paragraphe2.innerHTML = "Et comme un gland j'en fais un deuxieme";

paragraphe1.style.padding = "2em";
paragraphe1.style.backgroundColor = "lightblue";
paragraphe1.style.fontStyle = "italic";

paragraphe2.style.padding = "2em";
paragraphe2.style.backgroundColor = "lightgreen";
paragraphe2.style.border = "3px dashed black";
paragraphe2.style.borderRadius = "10px";

body.append(paragraphe1);
body.append(paragraphe2);