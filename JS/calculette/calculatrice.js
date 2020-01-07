// Récupérer tous les articles dans la section
var calculatrice = document.querySelectorAll("section article");
var textResultat = document.querySelector("h1");
// Les cases
calculatrice.forEach(clic);
function clic(touche, index){
    touche.onclick = function(){
        // Traitement du texte de la calculatrice pour évaluer les opérations à mener
        if(this.innerText == "="){
            calculResultat(textResultat.innerText);
        }else if(this.innerText == "CE"){
            init();
        }else
            textResultat.innerText += this.innerText;
        }
}
// Fonction d'initialisation pour annuler tout
function init(){
    textResultat.innerText = "";
}

// Fonction de calcul des résultats
function calculResultat(val){
    textResultat.innerText += "="+eval(val);
}
// Gestion du clavier
addEventListener("keydown", function(e){
    // Test sur la touche majuscule enfoncée
    if(e.shiftKey){
        // On valide qu'il sagit bien des bonnes touches avec les keycodes
        if (e.keyCode >=48 && e.keyCode <= 57 || e.keyCode == 187 || e.keyCode == 191){
            textResultat.innerText += e.key; // ajout des valeurs dans le champ de calcul
            console.log(e.currentTarget);
        }
    }else if(e.keyCode == 187){
        calculResultat(textResultat.innerText); // Lancement des résultats avec la touche =
    }else if(e.keyCode == 54 || e.keyCode == 220){
        textResultat.innerText += e.key;
    }
})