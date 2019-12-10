let tab = [56, 45, 2, 0, 111, 456, 45655];

console.log (tab);

//Parcours du tableau avec les indices
console.group("Parcours du tableau avec les indices")
for (let i = 0; i < tab.length; i++){
console.log(tab[i]);
}
// console.log("Valeur de i:" +i); // i is not defined
console.groupEnd();
// fin du groupe

//Parcours du tableau avec boucles for ..... of
console.group("Parcours du tableau avec boucles for ..... of")
for (let elem of tab){
console.log(elem);
}
console.groupEnd();
// fin du groupe

//Parcours du tableau avec boucles for ..... in
console.group("Parcours du tableau avec boucles for ..... in")
for (let index in tab){
    console.log(tab[index]);
    }
console.groupEnd();  
// fin du groupe

//Parcours du tableau avec boucles foreach
console.group("Parcours du tableau avec foreach")
tab.forEach(function(elem){
    console.log(elem); 
    });
console.groupEnd();  
// fin du groupe

//Parcours du tableau avec boucles foreach et arrow function
console.group("Parcours du tableau avec foreach et function fléchée")
tab.forEach( (elem) => console.log(elem) );
console.groupEnd(); 
// fin du groupe
