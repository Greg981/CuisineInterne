<?php require 'header.php' ?>

<?php
if(isset($_GET['del'])){
  $panier->del($_GET['del']);
}
?>


<div class="container-fluid bg-2" style="">
  <h3 class="margin text-center">VOTRE PANIER</h3>
  <div class="container">


    <table class="table table-bordered bg-3">
      <thead class="thead-dark">
        <tr>
          <th>Photo</th>
          <th>Désignation</th>
          <th>Prix Unitaire</th>
          <th>Quantité</th>
          <th>Action</th>
        </tr>
      </thead>

<?php
$ids = array_keys($_SESSION['panier']);
if(empty($ids)){
  $produits = array();
}else{
  $produits = $DB->query('SELECT * FROM produit WHERE id_produit IN ('.implode(',',$ids).')');
}
foreach($produits as $produit):
?>
      <tr>
        <td><img src="assets/img/photos_produits/<?=$produit->id_produit; ?>.jpg" width="100" height="100"></td>
        <td><?=$produit->nom_produit; ?></td>
        <td><?= number_format($produit->prix_produit,2,',',' ');?> €</td>
        <td><?= $_SESSION['panier'][$produit->id_produit];?></td>
        <td><a href="panier.php?del=<?= $produit->id_produit;?>" class="del"><iconify-icon data-icon="openmoji:delete"></iconify-icon></a></td>
      </tr>

<?php endforeach ?>

      <div class="container">
        <table class="table table-bordered bg-3">
          <thead class="thead-dark">
            <tr>
              <th>Total</th>
            </tr>
          </thead>
          <td><?= number_format($panier->total(),2,',',' ');?> €</td>
        </table>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Payer</button>
      </div>
    </table>
  </div>
</div>







<!-- Modal -->
<div style="color:black" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:black">Validation du panier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Commande validée !
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>



<?php require "footer.php"; ?>