<!DOCTYPE html>
<html lang="en">

<?php
    include "template/head.php"
?>

<body>
 <!-- Navbar -->
 <?php
        include "template/menu.php";
    ?>

    <!-- First Container -->

    <!-- Third Container (Grid) -->
    <div class="container-fluid bg-1 text-center">
        <h3 class="margin">Nos Produits</h3>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
                <img src="img/livres.jpg" class="img-responsive margin" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
                <img src="img/jouer.jpg" class="img-responsive margin" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
                <img src="img/oiseau.png" class="img-responsive margin" style="width:100%" alt="Image">
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php
        include "template/footer.php"
    ?>

    </body>
    </html>