<?php require "menu.php"; ?>

<?php


?>





<aside>
    <img class="img-responsive" src="assets/img/bio.jpg" width="100px" height="100px">
    <h3>PANIER</h3>
</aside>

<div class="container-fluid bg-3 text-center">
    <h3 class="margin">Nos Produits Bio</h3>
    <br>
    <div class="row">

        <?php $produits = $DB->query('SELECT * FROM produit'); ?>
        <?php foreach ($produits as $produit) : ?>

            <div class="col-md-3 col-md-offset-1 mb-5">
                <img src="assets/img/photos_produits/<?=$produit->id_produit; ?>.jpg" width="300px" height="300px">
                <p><?=$produit->nom_produit; ?></p>
                <p><?= number_format($produit->prix_produit,2,',',' ');?> €</p>
                <a href="add.panier.php?id_produit=<?= $produit->id_produit;?>"><img src="assets/img/iconaddcart.png" alt="Ajouter au panier" style="margin-bottom: 30px"></a>
            </div>
            
            <?php endforeach ?>
            
            

    </div>


</div>





<?php

require "footer.php";

?>