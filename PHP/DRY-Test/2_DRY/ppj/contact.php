<!DOCTYPE html>
<html lang="en">


    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <?php
    include "template/head.php"
?>

</head>

<body>

    <!-- Navbar -->
    <?php
        include "template/menu.php";
    ?>

    <!-- First Container -->
    <div class="container-fluid bg-1">
        <h3 class="margin text-center">Contactez-nous</h3>
        <form class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Votre nom">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Prénom</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Votre prénom">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Votre Email">
            </div>
            <div class="form-group">
                <label for="comment">Message</label>
                <textarea class="form-control" rows="5" id="message" placeholder="Votre message"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Envoyer</button>
        </form>
    </div>

    <!-- Footer -->
    <?php
        include "template/footer.php"
    ?>


</body>

</html>