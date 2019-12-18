console.log(document.querySelectorAll("div"));
        //mettre des couleurs
        document.querySelectorAll("div")[0].style.color = "blue";
        document.querySelectorAll("div")[1].style.color = "green";
        document.querySelectorAll("div").item(2).style.color = "red";

        document.querySelectorAll("div")[0].style.fontSize = "x-large";
        document.querySelectorAll("div").item(2).style.fontStyle = "italic";
        document.querySelectorAll("div").item(2).style.fontSize = "xx-large";

        //le positionnement
        // document.querySelectorAll("div").item(0).style.display = "inline";
        // document.querySelectorAll("div").item(1).style.display = "inline";
        // document.querySelectorAll("div").item(2).style.display = "inline";
        // document.querySelectorAll("div").item(0).style.display = "inline-block";
        // document.querySelectorAll("div").item(1).style.display = "inline-block";
        // document.querySelectorAll("div").item(2).style.display = "inline-block";
        // document.querySelectorAll("div").item(0).style.float = "left";
        // document.querySelectorAll("div").item(1).style.cssFloat = "left";
        // document.querySelectorAll("div").item(2).style.cssFloat = "left";
        // document.querySelectorAll("div").item(0).style.display = "table-cell";
        // document.querySelectorAll("div").item(1).style.display = "table-cell";
        // document.querySelectorAll("div").item(2).style.display = "table-cell";
        document.body.style.display = "flex";