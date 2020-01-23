<!DOCTYPE html>
<html lang="en">

<?php
    include "config/config.php";
    include "template/head.php";
?>

<body>

    <!-- Navbar -->
    <?php
        include "template/menu.php";
    ?>

    <!-- First Container -->
    <div class="container-fluid bg-1 text-center">
        <h3 class="margin">Qui sommes-nous ?</h3>
        <img src="img/bird.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
        <h3>I'm an adventurer</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>

    <!-- Second Container -->
    <div class="container-fluid bg-2 text-center">
        <h3 class="margin">Notre expertise</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <a href="#" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-search"></span> Search
        </a>
    </div>

    <!-- Third Container (Grid) -->
    <div class="container-fluid bg-3 text-center">
        <h3 class="margin">Nos activités</h3>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
                <img src="img/birds1.jpg" class="img-responsive margin" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
                <img src="img/birds2.jpg" class="img-responsive margin" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
                <img src="img/birds3.jpg" class="img-responsive margin" style="width:100%" alt="Image">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php
        include "template/footer.php"
    ?>

</body>

</html>