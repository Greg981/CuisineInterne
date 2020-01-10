// besoin d'un serveur node et npm ,
// express js qui est une dépendance qui permet de faire des serveurs web avec node
// besoin socket.io

var app = require('express')(); // permet d'appeler les dépendances 
var http = require ('http').Server(app);
var io =require('socket.io')(http);

app.get('/', function (req, res){ // '/' indique d'aller chercher à la racine  / permet d'indiquer au serveur les fichiers à charger // req c'est du express qui correspond à la requête du visiteur
    res.sendFile(__dirname + '/index.html'); // __dirname(prédéfini) = répertoire courant (Home/../../..)
})

// On va dire à socket.io coté serveur On va écouter tous les clients qui se connecte et se déconnecte
// Méthode .on permet d'écouter les modifications/ échanges entre client/serveur
io.on('connection', function(socket){ // évènement prédéfini connection
// Dès qu'un utilisateur se connecte on éxécute la fonction avec socket en param
    console.log('a user is connected');
    socket.on('disconnect', function(){ // évènement prédéfini disconnect
        console.log('a user is disconnected');
    })
    socket.on('chat message', function(msg){ // J'écoute le message côté serveur
        console.log('message reçu : ' + msg);
        io.emit('chat message', msg) // je renvoie au client
    })
})

http.listen(3000, function(){
    console.log("Serveur running on, 3000");
})