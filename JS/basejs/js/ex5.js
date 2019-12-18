//modification de la zone sensible au hover
document.querySelector("div").style.display = "inline-block";
document.body.style.textAlign = "center";

//mouse over
document.querySelector("div").onmouseenter = function(){
    this.style.color = "red";
};
document.querySelector("div").onmouseleave = function(){
    this.style.color = "blue";
};

//clic sur l'élément
document.querySelector("div").onclick = function(){   
    
    this.animate([
            // keyframes
            { transform: 'translateX(0px)' }, 
            { transform: 'translateX(-300px)' },
            { transform: 'translateX(0px)' }
        ],{ 
            // timing options
            duration: 1000
            // iterations: Infinity
    });
};

// document.querySelector("h1").onclick = function(){   
    
//     this.classList.toggle("move");
// };