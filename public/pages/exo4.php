<?php
include("../common/header.php");
include("../common/footer.php");
?>
<main class="text-center">
    <h2 class="p-4">EXERCICE 4 - Trouver le nombre choisi par l'ordinateur</h2>
    <form action="#" method="post">
        <input type="hidden" name="reinit" value="yes">
        <input class="m-3" type="submit" value="Reinitialiser">
    </form>
    <form action="#" method="post">
        <label for="chiffre">Quel est le chiffre : </label>
        <input type="number" id="chiffre" name="chiffre">
        <br>
        <input class="m-3" type="submit" value="Valider">
    </form>
    <h3>Saisir une valeur dans le champ ci-dessus</h3>
</main>
</body>
</html>