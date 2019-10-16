let bonjour = document.getElementById('b1');// bouton cliquez moi
let ajouter = document.getElementById('b2');//bouton paragraphe

bonjour.addEventListener('click', alerte);// creation de l'alerte 
ajouter.addEventListener('click', ajout);// creation de l'ajout

function alerte() {
    alert('bonjour Comment allez vous ?'); //message du pop up
}



function ajout() { // boite ajout paragrhape
    let para = document.createElement('p');
    para.textContent = 'Le paragraphe a bien été ajouté, ça prouve que ca fonctionne ';
    document.body.appendChild(para);
}


$(function () { // scrip pour le selecteur de langue
    $('.selectpicker').selectpicker();
});