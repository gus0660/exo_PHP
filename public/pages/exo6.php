<?php
include("../common/header.php");
include("../common/footer.php");
?>
<main class="text-center">
    <h1 class="p-4">EXERCICE 6 - Choix du personnage</h1>
    <h2>Selection du personnage</h2>
    <form action="#" method="post">
        <label for="perso">Personnage : </label>
        <select id="perso" name="perso">
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
        </select>
        <input type="submit" value="Valider">
    </form>

</main>

    
</body>
</html>
<!-- le but : avoir un input qui nous permet de choisir entre homme ou femme, après avoir validé avec le bouton "valider" -->
<!-- une image en rapport au choix qu'on a fait, apparait -->
<?php

?>