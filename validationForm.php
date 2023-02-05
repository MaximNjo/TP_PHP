<?php
include "header.php";
include "connexionPDO.php";


// le libelle
$libelle = $_POST["libelle"];


// requête libelle
$req=$monPdo->prepare("insert into nationalite(libelle) values (:libelle)");
$req->bindParam(':libelle', $libelle);
$nb = $req->execute();

if($nb == 1){

    echo "
    
    <div class='container'>

        <div class='alert alert-sucess'>
        
            La nationalité a bien été ajouté

        </div>
    
    ";


} else{

    echo "
    
        <div class='alert alert-danger'>

            La nationalité n'a pas été ajouté
        
        </div>
    
    </div>
    ";

}

?>






<?php

include 'footer.php';

?>