<!-- Présentation -->
<div class="container-fluid bg-1 text-center">
    <h3>A1. Injection</h3>
    <p>
        Cette page contient un formulaire de recherche d'articles, consistant en un simple <i>textbox</i> donnant accès à des requêtes en base de données.<br/>
        Voici donc un accès potentiellement non protégé permettant de <i>hacker</i> le site et pourquoi pas de récupérer des informations utilisateurs ...!
    </p>
</div>

<!-- Formulaire de recherche -->
<div class="container-fluid bg-2 text-center">
    <form class="form-inline" method="post" action="index.php">
      <table>
        <tr>
            <td class="form-group">
                <label for="tbSearch">Rechercher des articles </label>
            </td>
            <td>    
                <input type="search" class="form-control" id="tbSearch" name="tbSearch" placeholder="Renseignez le titre" >
            </td>
            <td>  
                <button type="submit" name = "formsearch" class="btn btn-default">Envoyer</button>
            </td>
        </tr> 
        </table>
    </form>
</div>

<?php

$bdd = new PDO('mysql:host='.BDD_SERVER.';dbname='.BDD_DATABASE.';charset=utf8;', BDD_USER, BDD_PWD);


$articles = $bdd->query('SELECT titre FROM article ORDER BY id DESC');
if(isset($_GET['q']) AND !empty($_GET['q'])) {
   $q = htmlspecialchars($_GET['q']);
   $articles = $bdd->query('SELECT titre FROM article WHERE titre LIKE "%'.$q.'%" ORDER BY id DESC');
   if($articles->rowCount() == 0) {
      $articles = $bdd->query('SELECT titre FROM article WHERE CONCAT(titre, resumee, content) LIKE "%'.$q.'%" ORDER BY id DESC');
   }
}
    // variable contenant le texte à rechercher
    // si le formulaire de recherche est utilisé : on recup le texte du formulaire
// if(isset($_POST['formsearch']))
// {
//     $text = htmlspecialchars($_POST['titre']);

//     if (!empty($_POST['text'])) 
//     {
//         $textlenght = strlen($text);
//         if($textlenght <=80)
//         {   
//             $reqtext = $bdd->prepare ("SELECT * FROM articles WHERE titre = ?");
//             $reqtext->execute(array($text));
//             $textexist = $reqtext->rowCount();
//             {

//                 //construction de la requête
//                 $sql = "select titre, resume, id from article ";
//                 if($txt != "") $sql .= "where titre like '".$txt."%' ";
//                 $sql .= "LIMIT 3 ";

//                 //execution et récup des résultats dans $rows
//                 $req = $bdd->query($sql);
//                 $rows = $req->fetchAll();

//             }
//         }
//         else 
//         {
//            $erreur = "Your request must be below 80 digit!";
//         }
//     }
//     else 
//     {
//        $erreur = "Fill the request dumb ass!";
//     }

    
// }
    //   $txt = '';
    // if (!empty($_POST)) {
    //     $txt = $_POST["tbSearch"];
    // }

    // connexion à la base de données pour recup des articles de la base
    //  try {
        

        //construction de la requête
        // $sql = "select titre, resume, id from article ";
        // if($txt != "") $sql .= "where titre like '".$txt."%' ";
        // $sql .= "LIMIT 3 ";

        //execution et récup des résultats dans $rows
    //     $req = $bdd->query($sql);
    //     $rows = $req->fetchAll();
    // } catch (Exception $e) {  }
?>

<?php
    //pour désactiver les erreurs envoyées à l'utilisateur !!
    error_reporting(-1);
    ini_set('display_errors', 0);
?>

<!-- Articles -->
<div class="container text-center">
    <br/>
    <h3>Derniers articles</h3>
    <br/>
    <div class="row">
    <?php if(count($rows)<1) { ?>
            <p>Aucun résultat ne correspond à votre recherche ...</p>
        <?php } else {  ?>
            <?php foreach($rows as $row): ?>
                <div class="col-sm-4">
                   <h4><?= $row["titre"] ?></h4>
                    <p><?= $row["resume"] ?></p>
                    <img src="./assets/img/<?= $row["id"] ?>.jpg" class="img-responsive margin" style="width:100%" alt="Image">
                </div>
            <?php endforeach; ?>
        <?php }  ?>
    </div>
</div>
<?php if($articles->rowCount() > 0) { ?>
   <ul>
   <?php while($a = $articles->fetch()) { ?>
      <li><?= $a['titre'] ?></li>
      <li>><?= $a['resumee'] ?></li>
   <?php } ?>
   </ul>
<?php } else { ?>
Aucun résultat pour: <?= $q ?>...
<?php } ?>