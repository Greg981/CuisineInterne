console.log("Events");

let boutonClic = document.getElementById("boutonClic");
let inputTest = document.getElementById("inputTest");

console.log(boutonClic);

boutonClic.addEventListener('click', (event) => {
console.log(event);
alert("ok");

});

inputTest.addEventListener('keyup', (e) => {
console.log(e.target.value);
});

document.body.addEventListener('mouseover',(e) => {
console.log("X = ",e.clientX,"Y = ",e.clientY);

});