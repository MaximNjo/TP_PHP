<?php


include "header.php";
$action = $_GET['action'];



if($action == "Modifier"){

    include "connexionPDO.php "; 
    
    $num = $_GET['num'];
    $req=$monPdo->prepare("select * from nationalite where num= :num");
    $req->setFetchMode(PDO::FETCH_OBJ);
    $req->bindParam(':num', $num);
    $req->execute();
    $lesNationalites=$req->fetch();

}




?>

<div class="titreH2">

    <h2> <?php echo $action ?> une nationalité </h2>
    
</div>

<br>


<div class="formulaire">

    <form action="valideFormNationalite.php" method="post" >
    
    <div class="form-group">
        
        <label for="libelle">Libellé</label>
        <input type="text" class="form-conrol" id="libelle" placeholder="Saisir le libellé" name="libelle"  value= "<?php if($action == "Modifier") { echo $lesNationalites->libelle; } ?>">
        
    </div>
    <input type="hidden" id="num" name="num" value=" <?php if($action == "Modifier") { echo $lesNationalites->num; } ?>" >
    <div class="row">
        
        <div class="col"> 
            <a href="listeNationalites.php" class="btn nat">Revenir à la listes</a>
        &nbsp;&nbsp;&nbsp;
            <button type="submit"> <?php echo $action; ?>  </button>
        </div>
        
    </div>
    
    
</form>

</div>

<br>

<?php

    include "footer.php";


?>