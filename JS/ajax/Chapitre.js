class Chapitre {
    constructor(titre, texte) {
        this.titre = titre;
        this.texte = texte;
    }
    afficher() {
        let section = document.querySelector("section");
        let article = document.createElement("article");
        let monTitre = document.createElement("h1");
        let monParagraphe = document.createElement("p");

        monTitre.innerText = this.titre;
        monParagraphe.innerText = this.texte;
        
        article.appendChild(monTitre);
        article.appendChild(monParagraphe);
        section.appendChild(article);

    }
}