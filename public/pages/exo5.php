<?php
include("../common/header.php");
include("../common/footer.php");
?>
<main class="text-center">
    <h2 class="p-4">EXERCICE 5 - Calculer une moyenne</h2>
    <form action="#" method="get">
        <label for="nb">Combien de notes : </label>
        <input type="number" name="nb" id="nb">
        <input type="submit" value="Valider">
    </form>
    <h3>Saisir une valeur dans le champ ci-dessus</h3>

</main>

    
</body>
</html>
<!-- le but : après avoir entré une valeur dans l'input "Combien de notes", et valider, générer le nombre de notes sous forme d'inputs avec un label "note N°1, 2, etc.. -->
<!-- donc il faut aller chercher le "get" avec $_GET -->