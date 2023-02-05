<?php

    include "header.php";


?>

<div class="titreH2">

    <h2>Ajouter une nationalité</h2>
    
</div>

<br>


<div class="formulaire">

    
    <form action="validationForm.php" method="post" >
    
    <div class="form-group">
        
        <label for="libelle">Libellé</label>
        <input type="text" class="form-conrol" id="libelle" placeholder="Saisir le libellé" name="libelle" >
        
    </div>
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