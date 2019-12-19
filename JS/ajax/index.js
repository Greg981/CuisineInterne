document.write("tu laches rien!");


let bouton = document.getElementById("bouton");
bouton.addEventListener('click', () => {
    afficherChapitres();
});

function afficherChapitres() {

    let xhr = new XMLHttpRequest();

    // destination de la requete ajax
    xhr.open('GET', 'datas/datas.php');
    xhr.responseType = 'json';

    // sert à ecouter la function et reagir quand le serveur repond a la requete xhr
    xhr.addEventListener('load', function(){
        let section = document.querySelector("section");
        section.innerHTML = "";
        // on transforme le tout en tableau  

        let chapitresJson = this.response;

        // et on parcours ca avec une boucle foreach
        chapitresJson.forEach(element => {
            let chapitre = new Chapitre(element.titre, element.texte);
            chapitre.afficher();
        });

        // // et on parcours ca avec une boucle for ..... of
        // for (let chapitres of chapitresJson) {
        //     console.log(chapitres);
        // } 
    });
    xhr.send();
};




console.log("fin de fichier");
