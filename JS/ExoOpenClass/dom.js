console.log("D.O.M");

let main = document.createElement('main');

main.innerHTML = "Salut c'est moi"

let section = document.createElement('section');
main.appendChild(section);

section.innerHTML = "C'a marche vraiment"

let h2 = document.querySelector('h2');
h2.after(main);


console.log(main);
console.dir(main);
