console.log("voiture");

class Voiture{

// ce qui caraterise la voiture
constructor(marq, color, boit){

    this.marque = marq;
    this.couleur = color;
    this.boiteVitesse = boit;
    this.modele = "3";
}

// Ce que sait faire la voiture
klaxonner() {
    console.log("Inh ,Inh ,Tu Tu Tu ");
}

rouler(){
    console.log("It's alive ");   
}
tourner(){
    console.log("Et voila j'ai tourné");  
}

}