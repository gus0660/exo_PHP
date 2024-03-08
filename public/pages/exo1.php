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
    // Vérifie si le formulaire a été soumis en utilisant la méthode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Récupère la valeur saisie dans le champ 'table' du formulaire
        $input = $_POST['table'];

        // Boucle for pour générer la table de multiplication
        // Cette boucle s'exécute 10 fois, de 1 à 10
        for ($result = 1; $result <= 10; $result++) {

            // Calcule le produit de la valeur saisie ($input) et de l'itérateur de la boucle ($result)
            $calc = $input * $result;

            // Affiche le résultat de chaque multiplication
            // Le caractère <br> est utilisé pour un saut de ligne en HTML
            echo "$input x $result = $calc<br>";
        }
    }
    ?>
</main>
</body>
</html>