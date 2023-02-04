<?php 

include "header.php "; 
include "connexionPDO.php "; 

// Création requete nationalite

$req=$monPdo->prepare("select * from nationalite");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesNationalites=$req->fetchAll();

?>


<main role="main"> 
  <div class="container">

  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">LES NATIONALITÉS</th>
    
      </tr>
    </thead>


      <?php

      // Afficher la requête nationalite

      foreach($lesNationalites as $nationalite)

      {

        echo "<tr>";
        echo "<td>$nationalite->libelle</td>";
        echo "<td>$nationalite->num</td>";
        echo "</tr>";


      }

      ?>
  
    
 
</table>

</div>


</main>


<?php 

include "footer.php"; 

?>