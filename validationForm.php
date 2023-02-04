<?php
include "header.php";
include "connexionPDO.php";
// le libelle
$libelle = $_POST["libelle"];
?>
<?php
$req=$monPdo->prepare("insert into nationalite(libelle) values (:libelle)");
$req->bindParam(':libelle', $libelle);
$req->execute();
$lesNationalites=$req->fetchAll();
?>


<?php

include 'footer.php';

?>