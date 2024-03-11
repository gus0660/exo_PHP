<?php
include("../common/header.php");
include("../common/footer.php");
?>
<main class="text-center">
    <h2 class="p-4">EXERCICE 3 Cercle - Périmètre et aire</h2>
    <form method="post" action="#" id="form">
        <label for="rayon">Rayon : </label>
        <input type="number" id="rayon" name="rayon"><br>
        <label for="perimetre">Périmètre : </label>
        <input type="checkbox" id="perimetre" name="perimetre" checked><br>
        <label for="aire">Aire</label>
        <input type="checkbox" id="aire" name="aire" checked><br>
        <input type="submit" value="Envoyer">
    </form>
    <div id="result"></div>
    <?php
    // if (isset($_POST['rayon']) && $_POST['rayon'] > 0) {
    //     $rayon = $_POST['rayon'];
    //     echo "<p>";
    //     if (isset($_POST['perimetre'])) {
    //         echo " le périmètre du cercle de rayon : " . $rayon . "<br> est : " . ($rayon * 2 * pi()) . "<br>";
    //     }
    //     if (isset($_POST['aire'])) {
    //         echo " l'aire du cercle de rayon : " . $rayon . "<br> est : " . ($rayon * $rayon * pi()) . "<br>";
    //         echo "</p>";
    //     }
    // } else {
    //     echo "Merci de saisir une valeur";
    // }
    ?>
</main>
</body>

</html>