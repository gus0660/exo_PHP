<?php
include("../common/header.php");
include("../common/footer.php");
?>
<main class="text-center">
    <h2 class="p-4">EXERCICE 1</h2>
    <form method="post">
        <label for="table">Quelle table de multiplication voulez-vous afficher ?</label>
        <input type="number" id="table" name="table" required>
        <input type="submit" value="Afficher">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['table']; // Récupération de la valeur saisie par l'utilisateur

        for ($result = 1; $result <= 10; $result++) {
            $calc = $input * $result;
            echo "$input x $result = $calc<br>";
        }
    }
    ?>
</main>
</body>
</html>