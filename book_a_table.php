<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equip="X-UA-Compatible" content="ie=edge">
        <title>la fabrique du petit mange</title>
        <link href="lafabriquedupetitmange.css" rel="stylesheet">
    </head>

        <!-- header start -->
        <header class="tete">
         
            <div id="header" class="section">
                <style>
            
                </style>
                <p>Welcome to :<strong><ins>"La Fabrique du petit mangé"</strong></ins> Dinner</p>   
            </div>
            <!--photo resto start-->
            <img id="resto" src="photo/restaurant.jpg" border="5px">
            <!--photo resto end-->
        </header>
        <!-- header end -->

        <!-- navigation bar section start-->
        <nav>
            <ul>
                <li><a href="lafabriquedupetitmange.html">home</a></li>   
                <li><a href="today_menu.html">Today menu</a></li>
                <li><a href="chef_speciality.html">Chef Speciality</a></li>
                <li><a href="book_a_table.php">Book a table</a></li>
                <li><a href="golden_book.php">Golden book </a></li>
                <li><a href="test.html">test </a></li>
            </ul>
    
        </nav>
        <!-- navigation bar section end-->

<body>

   
    
<?php
      // define variables and set to empty values
      $NomErr = $PrenomErr = $telmobileErr = $emailErr = "";
      $Nom = $Prenom = $adresse = $telfixe = $telmobile = $email = $comment =  "";

    // Vérifier que les données soient envoyées par un POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["Nom"])) {
        $NomErr = "First Name is required";
      } else {
          $Nom = test_input($_POST["Nom"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z ]*$/",$Nom)) {
          $NomErr = "Only letters and white space allowed";}  
      }
    
      if (empty($_POST["Prenom"])) {
        $PrenomErr = "Last Name is required";
      } else {
                $Prenom = test_input($_POST["Prenom"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$Prenom)) {
                $PrenomErr = "Only letters and white space allowed";}  
        }
     
      if (empty($_POST["adresse"])) {
          $adresse = "";
      } else {
          $adresse = test_input($_POST["adresse"]);
        }
      
      if (empty($_POST["telfixe"])) {
        $telfixe = "";
      } else {
        $telfixe = test_input($_POST["telfixe"]);}
      }

      if (empty($_POST["telmobile"])) {
          $telmobileErr = "mobile phone number is required";
      } else {
          $telmobile = test_input($_POST["telmobile"]);
          // check if number only contains number
          if (!preg_match(" \^(\d\d\s){4}(\d\d)$\ ",$telmobile)) {
          $telmobileErr = "Only number allowed";
        }

      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
          $email = test_input($_POST["email"]);
          // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";}
      }
      
          if (empty($_POST["comment"])) {
        $comment = "";
      } else {
        $comment = test_input($_POST["comment"]);
      }
    }
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
  ?>
 
    <!---->
    <div class="container">
    <p><span class="error">* required field </span></p>
            <form action="phpbook_table.php" method="post">

                <div class="row">
                    <div class="col-25">
                        <label for="Nom">Nom</label>
                        <span class="error">* <?php echo $NomErr;?></span>
                    </div>
                    <div class="col-75">
                        <input type="text" id="Nom" name="Nom" placeholder="Your first name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="Prenom">Prenom</label>
                        <span class="error">*</span>
                    </div>
                    <div class="col-75">
                        <input type="text" id="Prenom" name="Prenom" placeholder="Your last name..">
                    </div>
                </div>

                <div class="row">
                        <div class="col-25">
                            <label for="adresse">Adresse</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="adresse" name="adresse" placeholder="Your email..">
                        </div>
                </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="telfixe">Telephone Fixe</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="telfixe" name="telfixe" placeholder="Your Land line..">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="telmobile">Portable</label>
                            <span class="error">*</span>
                        </div>
                        <div class="col-75">
                            <input type="text" id="telmobile" name="telmobile" placeholder="Your Mobile phone..">
                        </div>
                    </div>

                <div class="row">
                        <div class="col-25">
                            <label for="email">Email</label>
                            <span class="error">*</span>
                        </div>

                        <div class="col-75">
                            <input type="text" id="email" name="email" placeholder="Your email..">
                        </div>
                </div>
                <div class="row">

                    <div class="col-25">
                        <label for="comment">Leave a feedback</label>
                    </div>

                    <div class="col-75">
                        <textarea id="comment" name="comment" placeholder="Write your feedback.."
                            style="height:200px"></textarea>
                    </div>
                </div>

                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            
        </div>
    </form>
    

<!-- Form section end -->


<div class="quote"><p>"Live your dreams, do not dream your life"</p></div>


    <div class="copyright">
        &copy; 2019 Greg. All rights reserved.
    </div>
</body>

</html>

