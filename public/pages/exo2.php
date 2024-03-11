<?php
include("../common/header.php");
include("../common/footer.php");
?>
<main class="text-center">
    <h2 class="p-4">EXERCICE 2 Affichage d'une pyramide</h2>
    <form method="post" action="exo2.php">
        <label for="table">Choisir la hauteur de la pyramide</label>
        <input type="number" id="table" name="table" required>
        <input type="submit" value="Afficher">
        <div id="result"></div>
    </form>
</main>
</body>
</html>