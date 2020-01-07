let image = document.querySelector("main > section > aside > div");

image.onmouseenter = function() {
    image.style.borderRadius = "0%";
};

image.onmouseleave = function() {
    image.style.borderRadius = "50%";
};

let video= document.querySelectorAll("main section section article div")
let fleche = document.querySelectorAll("main section section article header")
fleche[0].addEventListener("click", () => {
    if (video[0].style.visibility  === "hidden") {
        video[0].style.visibility = "visible";
        video[0].style.height = "auto";
      } else {
        video[0].style.visibility  = "hidden";
        video[0].style.height = "0px";
      }
    }
  )

fleche[1].addEventListener("click", () => {
    if (video[1].style.visibility  === "hidden") {
        video[1].style.visibility = "visible";
        video[1].style.height = "auto";
      } else {
        video[1].style.visibility  = "hidden";
        video[1].style.height = "0px";
      }
    }
  )

  fleche[2].addEventListener("click", () => {
    if (video[2].style.visibility  === "hidden") {
        video[2].style.visibility = "visible";
        video[2].style.height = "auto";
      } else {
        video[2].style.visibility  = "hidden";
        video[2].style.height = "0px";
      }
    }
  )
  


function afficherMenuJson() {

    let xhr = new XMLHttpRequest();

    // destination de la requete ajax
    xhr.open('GET', 'menu.json', true);
    xhr.responseType = 'json';
   
    

    // sert à ecouter la function et reagir quand le serveur repond a la requete xhr
    xhr.addEventListener('load', function(){
        
        // on transforme le tout en tableau  

        let menu = this.response;
        console.log(this.response);  


        // et on parcours ca avec une boucle foreach
        menu.forEach(element => {
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

afficherMenuJson();


console.log("fin de fichier");
