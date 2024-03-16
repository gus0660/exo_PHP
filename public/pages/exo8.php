<?php
include("../common/header.php");
include("../common/footer.php");
?>
<main class="text-center">
    <h1 class="p-4">EXERCICE 8 - Sélection du personnage</h1>
    <form action="#" method="post">
        <label for="perso">Personnage : </label>
        <select name="perso" id="perso" onchange="submit()">
            <option value="p1" selected>Luke</option>
            <option value="p2">Katy</option>
            <option value="p3">Marc</option>
        </select>
        <br>
    </form>
    <h2>Personnage : </h2>
    <div class="gauche"></div>
    <div class="gauche"></div>
    <div class="clearB"></div>
<?php

?>
</main>

    
</body>
</html>