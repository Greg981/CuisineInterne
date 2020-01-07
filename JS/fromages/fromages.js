class Fromage {
    constructor(nom, type, pays, classement) {
        this.nom = nom
        this.type = type
        this.pays = pays
        this.classement = classement
    }
    afficher() {
        let section = document.querySelector("section");
        let maDiv = document.createElement("div");
        let monNom = document.createElement("h3");
        let monType = document.createElement("h4");
        let monPays = document.createElement("h5");
        let monClassement = document.createElement("p");
        let monArticle = document.createElement("article");

        monNom.innerText = this.nom;
        monType.innerText = "Type : " + this.type;
        monPays.innerText = "Pays : " + this.pays;
        monClassement.innerHTML = this.classement;


        section.appendChild(maDiv);
        monArticle.appendChild(monType);
        monArticle.appendChild(monPays);
        monArticle.appendChild(monNom);
        monArticle.appendChild(monClassement);
        maDiv.appendChild(monArticle);

    }
}