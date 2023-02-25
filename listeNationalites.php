<link rel="stylesheet" href="index.css">

<?php 

include "header.php "; 
include "connexionPDO.php "; 

// Création requete nationalite

$req=$monPdo->prepare("select * from nationalite");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesNationalites=$req->fetchAll();

?>

  
<!-- Titre + bouton "ajouter nationalité"  -->

<div class="container">

  <h3>Liste des Nationalités</h3>

  <br>
  
  <a href="formNationalite.php?action=Ajouter" class='btn btn-sucess'> <img src="Image/plus.png" width="25" > Créer une nationalité</a>

</div>

<br><br>


<!-- Tableaux -->
<div class="container">

<table class="table table-hover table-dark">
    <thead>
      <tr>
        <td><strong>Numéro</strong></td>
        <td><strong>Libellé</strong></td>
        <td><strong>Actions</strong></td>
      </tr>
    </thead>


<?php


// Afficher la requête nationalite

foreach($lesNationalites as $nationalite)

  {

  echo "<tr>";
  echo "<td>$nationalite->num</td>";
  echo "<td>$nationalite->libelle</td>";
  echo"
 
  <td>
    <a href='formNationalite.php?action=Modifier&num=$nationalite->num'>

      <img src='Image/modifier.png'>

    </a>
    
    <a href='#modalSupression' data-toggle='modal'  data-suppression='supprimerNationalite.php?num=$nationalite->num'>
      
      <img src='Image/supprimer.png'>
    
    </a>
    
    </td>
    </tr>
    
    ";
    
    
    
  }
  //'supprimerNationalite.php?num=$nationalite->num'
  ?>
  
  </table>

</div>



<br>
<!-- Boîtes de dialogue -->
<div class="dialecte">

  
  <div id="modalSupression" class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">ATTENTION</h5>
        </div>
        <div class="modal-body">
          <p>Voulez vous supprimer cette nationalité !</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Ne pas supprimer</button>
          <a href="" type="button" id="btnSuppr" class="btn btn-danger" >Supprimer</a>
        </div>
      </div>
    </div>
  </div>

  
</div>

<?php 

  include "footer.php"; 

?>
