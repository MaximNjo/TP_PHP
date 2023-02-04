<?php

    include "header.php";


?>


<div class="container mt-5"></div>

<form action="validationForm.php" method="post">

    <div class="form-group">

        <label for="libelle">Libellé</label>
        <input type="text" class="form-conrol" id="libelle" placeholder="Saisir le libellé" name="libelle" >

    </div>
    <div class="row">

        <div class="col"> 
            <a href="listeNationalites.php" class="btn nat">Revenir à la liste</a>
        </div>
        <div class="col"> 
            <button type="submit">Ajouter</button>
        </div>

    </div>


</form>


<br>

<?php

    include "footer.php";


?>