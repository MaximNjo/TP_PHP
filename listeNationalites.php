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
  
  <a href="formAjoutNationalite.php" class='btn btn-sucess'> <img src="Image/plus.png" width="25" > Créer une nationalité</a>

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
  
    <img src='Image/modifier.png'>
    <img src='Image/supprimer.png'>

  </td>
  </tr>
  
  ";

  

  }

?>
  
  </table>

</div>



<br>


<?php 

  include "footer.php"; 

?>
