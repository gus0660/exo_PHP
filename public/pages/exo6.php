<?php
include("../common/header.php");
include("../common/footer.php");
?>
<main class="text-center">
    <h1 class="p-4">EXERCICE 6 - Choix du personnage</h1>
    <h2>Selection du personnage</h2>
    <form action="#" method="post">
        <label for="perso">Personnage : </label>
        <select class="m-2" id="perso" name="perso">
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
        </select><br>
        <input class="m-2" type="submit" value="Valider">
    </form>
        <?php
    if (isset($_POST['perso'])) {
        $perso = $_POST['perso'];
        if ($perso == "homme") {
            echo "<img src='./images/player.png' alt='homme' width='100' height='150'>";
        } else {
            echo "<img src='./images/playerF.png' alt='femme' width='100' height='150'>";
        }
    }
    ?>
</main>

    
</body>
</html>
<!-- le but : avoir un input qui nous permet de choisir entre homme ou femme,
après avoir validé avec le bouton "valider", une image en rapport au choix qu'on a fait, apparait -->

