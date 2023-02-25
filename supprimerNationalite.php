<?php
include "header.php";
include "connexionPDO.php";

$num = $_GET['num'];

$req=$monPdo->prepare("delete from nationalite  where num = :num");
$req->bindParam(':num', $num);
$nb = $req->execute();


  
    
    
if($nb == 1){

    echo "
    
    <div class='container'>

        <div class='alert alert-sucess'>
        
            La nationalité a bien été supprimé 

        </div>
    
    ";


} else{

    echo "
    
        <div class='alert alert-danger'>

            Promblème : La nationalité n'a pas été supprimé
        
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