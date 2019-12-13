
class Robot{
// ce qui caracterise le robot
constructor(r, color, ant, vue, yeu ){
    this.race = r;
    this.couleur = color;
    this.bras = 2;
    this.jambe = 2;
    this.tete = 1;
    this.antenne = ant;
    this.vueMetre = vue;
    this.yeux = yeu;
}

// Ce que sait faire le robot
leverLesBras() {
    console.log("bras en l'air ");
}
leverUneJambe() {
    console.log("Pour que je me casse la gueule .... Pas question! ");
}

avancer(){
    console.log("je peux pas j'ais piscine ");   
}

danser(){
    console.log("heu ça dépend avec qui!!!!");  
}

tourner(){
    console.log("Oui ca je peux faire");  
}

parler(){
    console.log("Ca je peux dire des conneries pendant des heures");  
}

utiliser(){
    console.log("Mon antenne? en mode Wifi ou pour telephoner ?"); 
}

echelle(){
    console.log("c'est bon je suis montée"); 
}

echelle1(){
    console.log("c'est bon je suis descendu"); 
}

escalader(){
    console.log("c'est bon j'ai escaladée l'arbre"); 
}

sauter(){
    console.log("j'ai sautée l'obstacle"); 
}

droite(){
    console.log("je suis allée à droite");
}
gauche(){
    console.log("je suis allée à gauche");
}

}
