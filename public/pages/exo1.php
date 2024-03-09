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
// $_POST est une super globale(qu'il faut connaitre) prévus pour aller chercher quelque chose qui est "posté"
//  isset c'est "is to set" donc (ce qu'y est créé) le POST avec la valeur de l'input 'table'
    if(isset($_POST['table']) && ($_POST['table'] !== "")){// && verifie que le post n'est pas égal à vide

//en php on déclare la variable par $ suivi sans espace du nom de cette variable
//création d'une variable "chiffre" en récupèrant($_POST) la valeur saisie dans le champ 'table' du formulaire
        $chiffre = $_POST['table'];

        for($i = 1; $i <= 10; $i++) {

//echo sert à afficher coté client(sur le DOM => page html),
//ne pas oublier les doubles guillemets pour afficher des caractères ou pour insérer du html(en caractères donc)
//pour concaténer en php c'est "." point
            echo "<p>" . $i . " x " . $chiffre . " = " . $i * $chiffre . "</p>";
        }
    }else{
        echo "Merci de choisir un nombre";
    }
    
    

        
        // $input = $_POST['table'];

        // Boucle for pour générer la table de multiplication
        // Cette boucle s'exécute 10 fois, de 1 à 10
        // for ($result = 1; $result <= 10; $result++) {

            // Calcule le produit de la valeur saisie ($input) et de l'itérateur de la boucle ($result)
            // $calc = $input * $result;

            // Affiche le résultat de chaque multiplication
            // Le caractère <br> est utilisé pour un saut de ligne en HTML
            // echo "$input x $result = $calc<br>";
        // }
    // }
    ?>
</main>
</body>
</html>