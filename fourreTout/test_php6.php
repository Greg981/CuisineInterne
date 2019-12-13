

<?php
// var_dump($_POST);

try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=gregbdd;charset=utf8', 'greg981', 'Bushman973');
    //bonne pratrique pour détail des erreurs//
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $req = $bdd->prepare ('INSERT INTO golden_book (fname, lname, email, comment)
                            VALUES (:fname, :lname, :email, :comment)');
    
            $req->bindParam(':fname', $_POST["fname"]);
            $req->bindParam(':lname', $_POST["lname"]);
            $req->bindParam(':email', $_POST["email"]);
            $req->bindParam(':comment', $_POST["comment"]);
    
    
    if($req->execute()){
        echo "inertion réussie";
    }else{
        echo "erreur dans l'insertion";
    };
    echo $req;

}
catch(PDOException $e)
{
    var_dump($e);
}
?>