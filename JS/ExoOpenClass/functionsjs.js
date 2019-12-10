console.log("functions");
//déclaration de function 

//function direBonjour(nom, prenom){
//    console.log("Bonjour " + nom + prenom +" !!!!");
//}

function direBonjour(nom, prenom){
let message = `bonjour ${prenom} ${nom} !!`;
    return message;
}


// appel de la function 
// direBonjour("Greg", " Sebastien");

let message = direBonjour("Einstein", "Albert");
console.log(message);