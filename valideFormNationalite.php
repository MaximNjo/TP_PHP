<?php
include "header.php";
include "connexionPDO.php";

$action = $_GET['action'];
$num = $_POST["num"];
$libelle = $_POST["libelle"];


// requête libelle
    if($action == "Modifier"){
    $req=$monPdo->prepare("update nationalite set libelle = :libelle where num = :num");
    $req->bindParam(':num', $num);
    $req->bindParam(':libelle', $libelle);
    $nb = $req->execute();
} else {

    $req=$monPdo->prepare("insert into nationalite(libelle) values (:libelle)");
    $req->bindParam(':libelle', $libelle);
    
    
}

$nb = $req->execute();
$message = $action == "Modifier" ? "modifiée" : "ajoutée";

if($nb == 1){

    echo "
    
    <div class='container'>

        <div class='alert alert-sucess'>
        
            La nationalité a bien été " . $message . "

        </div>
    
    ";


} else{

    echo "
    
        <div class='alert alert-danger'>

            La nationalité n'a pas été " . $message . "
        
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