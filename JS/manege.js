document.write("<h1>Lancons le manège</h1>");

let nbTicket = Number(prompt("Combien de ticket??"));
console.log("Le manège démarre ");
document.write("Le manège démarre <br>");

for (let tour = 1; tour <= nbTicket*10; tour++) {
console.log("C'est le tour numéro " + tour);
document.write("c'est le tour numéro " + tour + "<br>");
}


console.log("Le manège s'arrête")
document.write("Le manège s'arrête")