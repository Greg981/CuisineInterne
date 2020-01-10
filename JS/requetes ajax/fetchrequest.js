var tableau = document.querySelector('table');

fetch('http://localhost:1337/apprenants%27)
.then(resp => resp.json())
.then(data => {
    data.forEach((d)=>{
        let ligne = document.createElement('tr');

        let nom = document.createElement('td');
        nom.textContent = d.nom;

        let prenom = document.createElement('td');
        prenom.textContent = d.prenom;

        let mail = document.createElement('td');
        mail.textContent = d.mail;

        let avatar = new Image();
        avatar.src = 'http://localhost:1337/%27+d.avatar.url';

        let img = document.createElement('td');
        img.appendChild(avatar);

        ligne.appendChild(nom);
        ligne.appendChild(prenom);
        ligne.appendChild(mail);
        ligne.appendChild(img);!


        console.log("tableau ?", tableau);
        tableau.append(ligne);

    })

});