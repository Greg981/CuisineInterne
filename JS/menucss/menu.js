 
let liste = document.getElementsByTagName('li');
for(let list of liste){
    console.log(list.children.length);
    if(list.children.length > 0){
        list.onmousedown = function(couleur){
            console.log(couleur.currentTarget.children[0]);
            let menu_tmp = couleur.currentTarget.children[0];
            menu_tmp.classList.toggle('visible');

        }
    }
}