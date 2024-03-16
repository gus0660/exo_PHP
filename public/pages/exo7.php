<?php
include("../common/header.php");
include("../common/footer.php");
?>
<main class="text-center">
    <h2 class="p-4">EXERCICE 7</h2>

    <?php
    $tableau = array(2, 6, 12, 5, 26, 34, 40, 60);
    // créer une fonction qui vérifie si un tableau ne contient que des valeurs impaires ou non
    function is_impair($tableau){
        foreach ($tableau as $valeur) {
            if ($valeur % 2 == 1) {
                return false;
            }
        }
        return true;
    }
    // Afficher un message pour l'indiquer à l'utilisateur Résultat : Le tableau contient des valeurs impaires
    if (is_impair($tableau)) {
        echo "Le tableau ne contient pas des valeurs impaires";
    } else {
        echo "Le tableau contient des valeurs impaires";
    }
    ?>



</main>


</body>

</html>
<!-- Etape 1
Réaliser un tableau contenant les valeurs : 2,6,12,5,26,34,40,60
Etape 2
Réaliser une fonction qui vérifie si un tableau ne contient que des valeurs paires ou non
Etape 3
Afficher un message pour l'indiquer à l'utilisateur
Résultat :
Le tableau contient des valeurs impaires -->