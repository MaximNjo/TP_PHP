<?php

    include "header.php";
    $num=$_GET['num'];

    include "connexionPDO.php "; 

// Création requete nationalite

$req=$monPdo->prepare("select * from nationalite where num= :num");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->bindParam(':num', $num);
$req->execute();
$lesNationalites=$req->fetchAll();


?>

<div class="titreH2">

    <h2>Modifier une nationalité</h2>
    
</div>

<br>


<div class="formulaire">

    
    <form action="validationModifForm.php" method="post" >
    
    <div class="form-group">
        
        <label for="libelle">Libellé</label>
        <input type="text" class="form-conrol" id="libelle" placeholder="Saisir le libellé" name="libelle"  value= "<?php $lesNationalites->libelle ?>">
        
    </div>
    <input type="hidden" id="num" name="num" value="<?php $lesNationalites->num ?>">
    <div class="row">
        
        <div class="col"> 
            <a href="listeNationalites.php" class="btn nat">Revenir à la listes</a>
        &nbsp;&nbsp;&nbsp;
            <button type="submit">Ajouter</button>
        </div>
        
    </div>
    
    
</form>

</div>

<br>

<?php

    include "footer.php";


?>