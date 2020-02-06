Etre ou ne pas être connecté...
Construction d'un formulaire de connexion
Dans un fichier index.php, construisez un formulaire de connexion comprenant 2 champs : login et pwd.
Ce formulaire renvoie vers un script connexion.php.

Validation du formulaire
En cas de connexion réussie, on mettra les identifiants (credentials) en session ($_SESSION).
Dans tous les cas, on effectuera une redirection vers index.php.

Gestion de la connexion
Dans index.php, on incluera une page page.php lorsque l'utilisateur sera connecté.
Sinon, on affichera le formulaire de connexion.
Du coup, on peut imaginer que ce formulaire soit dans un fichier séparé form.php. On aura dans la page page.php un bouton (lien) de déconnexion, renvoyant vers un script logout.php qui, une fois la session détruite, renverra vers index.php.

Une table users
Si vous ne l'avez déjà fait, créez une base de données contenant une table users avec les champs correspondant au formulaire de connexion.
Adaptez le processus de connexion en conséquence ( requête préparée ;-) ).

Mais c'est quoi une session ?
C'est ça. Observez la présence du cookie PHPSESSID dès lors que vous faites un session_start() dans votre script Php.

Etre connecté et le rester
Dans votre formulaire de connexion, ajoutez un champ de type checkbox intitulé "Rester connecté" ou "Se souvenir de moi". N'oubliez pas l'attribut name ;-).
Voici le fonctionnement attendu :

Lorsque l'on valide le formulaire et que l'utilisateur est reconnu, si la case "Rester connecté" était cochée, alors il faut créer un cookie (créer une fonction pour ça). Appelez-le "auth" par exemple.
Si une session existe, on n'affiche pas le formulaire.
Si aucune session n'existe mais qu'un cookie "auth" ($_COOKIE) est présent (dans la requête du navigateur), vérifier si la valeur du cookie "auth" est bien celle attendue (grâce à la fonction qui a servi à générer le cookie), et connecter l'utilisateur ($_SESSION).
Pour un aperçu complet, vous pouvez regarder ici.