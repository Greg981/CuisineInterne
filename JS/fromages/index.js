


function afficherFromages() {

    let xhr = new XMLHttpRequest();

    // destination de la requete ajax
    xhr.open('GET', 'fromages.json', true);
    xhr.responseType = 'json';
   
    

    // sert à ecouter la function et reagir quand le serveur repond a la requete xhr
    xhr.addEventListener('load', function(){
        
        // on transforme le tout en tableau  

        let fromagesJson = this.response;
        console.log(this.response);  

        // et on parcours ca avec une boucle foreach
        fromagesJson.forEach(element => {
            let fromage = new Fromage(element.nom, element.type, element.pays, element.classement);
            fromage.afficher();
            
        });


        // // et on parcours ca avec une boucle for ..... of
        // for (let chapitres of chapitresJson) {
        //     console.log(chapitres);
        // } 
    });
    xhr.send();
};

afficherFromages();


console.log("fin de fichier");
