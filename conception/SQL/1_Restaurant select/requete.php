 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>requète</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


</head>
<body>
    
    <main class="container">

    <?php
        require "connexion.php";
        $conn = new Connexion();
        
        // 1ere requetes
        // Lister les commandes de la table n°10, les trier par date chronologique (SELECT WHERE ORDER BY)
         $req = $conn->select("SELECT * FROM commandes WHERE idTable=10 ORDER BY DateCommande ASC LIMIT 2");
         $conn->tableIt($req);


        // 2ieme requetes
        //Lister les commandes de la table n°10 ou n°6 pour le service du midi (AND, OR IN)

         $req1 = $conn->select("SELECT * FROM commandes WHERE idTable IN (6, 10) AND idService=1 ");
         $conn->tableIt($req1);

         // 3ieme requetes
         //Afficher le nb de commandes passé à la table n°10 (COUNT et AS)

         $req2 = $conn->select("SELECT COUNT(*) AS number FROM commandes WHERE idTable=10");
         echo "Il y a " . $req2[0]["number"] . "commandes passé à la table 10<br>";

        // 4ieme requetes
        //  Afficher le nb de commande passé à la table n°10, pour chacun des services midi et soir (GROUP BY)
        $req3 = $conn->select("SELECT COUNT(*) AS number FROM commandes WHERE idTable=10 GROUP BY idService LIMIT 2");
        echo "Il y a " . $req3[0]["number"] . " commandes passé à la table 10 le midi et" . $req3[1]["number"] . " commandes passé à la table 10 le soir<br>";

        //5. Reprendre la requête précédente et remplacer l'id du service par Midi ou Soir (CASE WHEN)
        $req4 = $conn->select("SELECT CASE WHEN idService=1 THEN 'midi' ELSE 'soir' END as Service, COUNT(idTable) as 'nb repas' FROM commandes WHERE idTable = 10 GROUP BY idService");
        echo "Il y a " . $req4[0]["number"];

        //6. Afficher les commandes à venir, les trier par date anti-chronologique (NOW) 
        $req5 = $conn->select("SELECT * FROM commandes WHERE dateCommande>NOW() LIMIT 2");
        $conn->tableit($req5);

        // 7. Afficher les commandes du dernier trimestre 2019 (YEAR, MONTH)
        $req6 = $conn->select("SELECT * FROM commandes WHERE YEAR(dateCommande)=2019 AND MONTH(dateCommande)>=10 LIMIT 2");
        $conn->tableit($req6);
  
        // 8. Reprendre la requête précédente et remplacer la date de commande par le mois et l'année : octobre 2019 (DATE_FORMAT)
        $req7 = $conn->select("SELECT *, DATE_FORMAT(dateCommande, '%M, %Y') AS data FROM commandes WHERE YEAR(dateCommande)=2019 AND MONTH(dateCommande) = 10  LIMIT 2");
        $conn->tableit($req7);
  
        // 9. Afficher le nb de commandes total pour chaque mois de l'année 2019
        $req8 = $conn->select("SELECT COUNT(*) FROM commandes WHERE YEAR(dateCommande)=2019 GROUP BY MONTH(dateCommande) LIMIT 2");
        $conn->tableit($req8);
  
        // 10. Reprendre la requête précédente en n'affichant que les mois pour lesquels il y a au moins 5 commandes 
        $req9 = $conn->select("SELECT COUNT(*) AS item FROM commandes WHERE YEAR(dateCommande)=2019 GROUP BY MONTH(dateCommande) HAVING item>=5 LIMIT 2");
        $conn->tableIt($req9);

        echo "SOUS REQUETES";

         // 1. Lister les noms des employés qui n'ont pris aucune commande
         $req10 = $conn->select("SELECT * FROM employes WHERE idEmploye NOT IN (SELECT idEmploye FROM commandes) ");
         $conn->tableit($req10);
        
        // 2. Lister les noms des employés qui ont pris plus de 5 commandes en 2019
        $req11 = $conn->select("SELECT nom FROM employes WHERE idEmploye IN (SELECT idEmploye FROM commandes WHERE YEAR(dateCommande)=2019 GROUP BY idEmploye HAVING count(idEmploye)>5) ");
        $conn->tableit($req11, ["Nom"]); 

        // 3. Lister les noms des boissons qui n'ont jamais été commandées
        $req12 = $conn->select("SELECT designation, idBoisson FROM boissons WHERE idBoisson NOT IN (SELECT idBoisson FROM commande_boissons) ");
        $conn->tableit($req12, ["Designation", "idBoisson"]);

        //   4. Afficher le nom des boisson qui ont été commandées au moins 10 fois
        $req13 = $conn->select("SELECT designation, idBoisson FROM boissons WHERE idBoisson IN
        (SELECT idBoisson FROM commande_boissons GROUP BY idBoisson HAVING count(idBoisson) >= 10)");
        $conn->tableit($req13, ["Designation", "idBoisson"]);

        ?>
        </main>
    </body>
    </html>