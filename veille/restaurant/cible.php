<?php require "menu.php" ?> <?php require "cosql.php" ?>

<?php	
	if (!empty($_POST['name']) && !empty($_POST['email']) && 
		isset($_POST['num'])); {

		try {
			$req = $bdd->prepare ('INSERT INTO reservation (nom, prenom, mail, telephone, nb, msg, heure) 
									VALUES (:nom, :prenom, :mail, :telephone, :nb, :msg, :heure)');
					$req->bindParam(':nom', $_POST["name"]);
					$req->bindParam(':prenom', $_POST["sname"]);
					$req->bindParam(':mail', $_POST["email"]);
					$req->bindParam(':telephone', $_POST["tele"]);
					$req->bindParam(':nb', $_POST["num"]);
					$req->bindParam(':msg', $_POST["msge"]);
					$req->bindParam(':heure', $_POST["heure"]);			
			$req->execute();
		
			echo "<div class='formvalid'>
			Votre réservation a été prise en compte.<br> 
			Vous recevrez un e-mail de confirmation dans les plus brefs délais</div>";
		} catch (PDOException $e) {
		echo 'erreur : '.$e->getMessage();
		}	
	} ?>
<?php require "footer.php" ?>