//declarer un tableau contenant les jour de la semaine 

let calendrier = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];

console.log(calendrier);

// afficher tous les éléments du tableau methode1
console.groupCollapsed("Parcours du calendrier avec boucle foreach");
calendrier.forEach(function (jour) {
    console.log(jour);
});
console.groupEnd();

// afficher tous les éléments du tableau methode2
console.groupCollapsed("Parcours du calendrier avec les indices");
for (let i = 0; i < calendrier.length; i++) {
    console.log(calendrier[i]);
};
console.groupEnd();

// afficher tous les éléments du tableau methode3
console.groupCollapsed("Parcours du calendrier avec boucle for ... of");
for (let jour of calendrier) {
    console.log(jour);
};
console.groupEnd();

// afficher tous les éléments du tableau methode4
console.groupCollapsed("Parcours du calendrier avec boucle for.....in");
for (let index in calendrier) {
    console.log(calendrier[index]);
};
console.groupEnd();

// afficher tous les éléments du tableau methode5
console.groupCollapsed("Parcours du calendrier avec forEach et fléchée");
calendrier.forEach(jour => console.log(jour));

console.groupEnd();