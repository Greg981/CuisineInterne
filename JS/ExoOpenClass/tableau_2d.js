console.log("tableau 2d");

let tab = [
    [3, 99], //creer un tableau dans tableau
    [45, 1],
    [10, 111]
];

// for (let i = 0; i< tab.length; i++){
//     console.log(tab[i]);
//     for (let j =0; j< tab[i].length; j++){ //lire un tableau dans un tableau
//         console.log(tab[i][j]);
//     }
// } 

//lire un tableau dans un tableau avec boucle for... of
// for (let elem of tab){
//     console.log(elem);
//     for (let nombre of elem){
//         console.log(nombre);
//     }
// }

//lire un tableau dans un tableau avec boucle for... in
// for (let elem in tab) {
//     console.log(tab[elem]);
//     for (let index in tab[elem]) {
//         console.log(tab[elem][index]);
//     }
// }

//lire un tableau dans un tableau avec boucle foreach
tab.forEach(function (elem) {
    console.log(elem);
    elem.forEach(function (nombre) {
        console.log(nombre);

    });

});