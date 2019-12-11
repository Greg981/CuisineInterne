console.log("chapitre");

// declaration de la function 
function chapitre(chap) {
    let maDiv = document.createElement("div");
    let monTitre = document.createElement("h1");
    let monParagraphe = document.createElement("p");
    monTitre.innerText = chap.titre;
    monParagraphe.innerText = chap.texte;
    maDiv.appendChild(monTitre);
    maDiv.appendChild(monParagraphe);
    document.body.appendChild(maDiv);
}

let bienvenue = {
    titre: "Bienvenue",
    texte: "Bienvenue sur mon site de merde"
};

let chapitre1 = {
    titre: "Chapitre 1 : un chapitre pour débuter",
    texte: "Paragraphe chapitre 1"
};

let chapitre2 = {
    titre: "Chapitre 2 : un autre chapitre",
    texte: "Paragraphe chapitre 2"
};

let chapitre3 = {
    titre: "Chapitre 3 : encore un chapitre",
    texte: "Paragraphe chapitre 3"
};

// appel de la function
chapitre(bienvenue);
chapitre(chapitre1);
chapitre(chapitre2);
chapitre(chapitre3);
