<!DOCTYPE html>
<html>
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
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
                <li><a href="testest5.php">test </a></li>
            </ul>

        </nav>
        <!-- navigation bar section end-->

  <body>

        <!-- Form section start -->
            <div class="section1">
                <h2 class="chef"><span>Golden Book feedback form</span></h2>
        
                <svg class="face" height="200" width="200">
                    <circle cx="50" cy="50" r="50" fill="#FDD835"/>
                    <circle cx="30" cy="30" r="10" fill="#FFFFFF"/>
                    <circle cx="70" cy="30" r="10" fill="#FFFFFF"/>
                    <circle cx="30" cy="30" r="5" fill="#000000"/>
                    <circle cx="70" cy="30" r="5" fill="#000000"/>
                    <path d="M 30 70 q 20 20 40 0" stroke="#FFFFFF" stroke-width="5" fill="none" />
                </svg>
            </div>
 



        <!-- Slideshow container Section Start -->
        <div class="slideshow-container">

<!-- Full-width slides/quotes -->
<div class="mySlides">
    <q>I have not failed. I've just found 10,000 ways that won't work.</q>
    <p class="author">- Thomas A. Edison</p>
</div>

<div class="mySlides">
    <q>De passage &agrave; Avignon, j'ai eu le plaisir de venir manger chez Mr Cuisto,</br>
        situ&eacute;en plein coeur du centre historique de la Fameuse cit&eacute; des Paoes.</br>
        Compl&egrave;tement r&eacute;nov&eacute;, ce Restaurant, poss&egrave;de deux entr&eacute;es, offre des salles;</br>
        assez spacieuses, tr&egrave;s confortables et surtout climatis&eacute;es:
         halte &agrave; sugg&eacute;rer</q>
    <p class="author">Jean-Paul<em>&nbsp;-TOULON, FRANCE</p>
</div>


<div class="mySlides">
        <q>Acceuil tres sympatique,le personnel est tres serviable , les prix sont imbattable.</q>
        <p class="author">Matthieu P OLORON (64)</p>
</div>

<div class="mySlides">
    <q>Restaurant parfaitement situ&eacute; &agrave; proximit&eacute;</br>
    du palais des papes et de la place de l'horloge.&nbsp;</br>
    Personnel tres sympatique , d&eacute;co tres sympa,</br>
    Menu du chef inoubliable.</q>
    <p class="author">Sarah<em>&nbsp;- Toulouse</p>
</div>

<div class="mySlides">
    <q>La proximit&eacute; de la gare, l'emplacement dans la rue pricipale,</br>
    Le menu de groupe "Roast Piglet" une vrai tuerie!!!; en surprise du chef</br>
    un disgestif offert pour mon anniversaire , c'etait tr&eacute;s sympa de leurs part.</q>
    <p class="author">Claudine<em>&nbsp;- Corgoloin</p>
</div>

<!-- Next/prev buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- Dots/bullets/indicators -->
<div class="dot-container">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
<span class="dot" onclick="currentSlide(4)"></span>
<span class="dot" onclick="currentSlide(5)"></span>
</div>
<!-- slide show container Section End -->

<!--scrip pour gerer le slide Start -->
<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>
    <!--scrip pour gerer le slide End -->
    





            
  <?php
      // define variables and set to empty values
      $fnameErr = $lnameErr = $emailErr = "";
      $fname = $lname = $email = $comment =  "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["fname"])) {
      $fnameErr = "First Name is required";
      } else {
                $fname = test_input($_POST["fname"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
                $fnameErr = "Only letters and white space allowed";}  
              }
      if (empty($_POST["lname"])) {
      $lnameErr = "Last Name is required";
      } else {
                $lname = test_input($_POST["lname"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
                $lnameErr = "Only letters and white space allowed";}  
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
                $comment = test_input($_POST["comment"]);}
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
  ?>

<p><span class="error">* required field </span></p>
<form method="post" action="test_php6.php">  
  First Name: <input type="text" name="fname" value="<?php echo $fname;?>">
  <span class="error">* <?php echo $fnameErr;?></span>
  <br><br>
  Last Name: <input type="text" name="lname" value="<?php echo $lname;?>">
  <span class="error">* <?php echo $lnameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

            

        <!-- Form section end -->

        <div class="quote"><p>"Live your dreams, do not dream your life"</p></div>

                    <div class="copyright">
                        &copy; 2019 Greg. All rights reserved.
                    </div>
        </body>