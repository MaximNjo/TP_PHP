<?php
include "header.php";
include "connexionPDO.php";

// le num
$num = $_POST["num"];
// le libelle
$libelle = $_POST["libelle"];


// requête libelle
$req=$monPdo->prepare("update nationalite set libelle = :libelle where num = :num");
$req->bindParam(':num', $num);
$req->bindParam(':libelle', $libelle);
$nb = $req->execute();

if($nb == 1){

    echo "
    
    <div class='container'>

        <div class='alert alert-sucess'>
        
            La nationalité a bien été modifié

        </div>
    
    ";


} else{

    echo "
    
        <div class='alert alert-danger'>

            La nationalité n'a pas été modifié
        
        </div>
    
    </div>

    ";

}

?>

<a href="listeNationalites.php" class="btn nat">Revenir à la listes</a>

<br><br>






<?php

include 'footer.php';

?>