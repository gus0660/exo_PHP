<?php
include("../common/header.php");
include("../common/footer.php");
?>
<main class="text-center">
    <h1 class="p-4">EXERCICE 8 - Sélection du personnage</h1>
    <form action="#" method="post">
        <label for="perso">Personnage : </label>
        <select name="perso" id="perso" onchange="this.form.submit()">
        <?php
        $selected_perso = $_POST['perso'] ?? null;
        ?>
            <option value="p1" <?php echo $selected_perso === 'p1' ? 'selected' : ''; ?>>Luke</option>
            <option value="p2" <?php echo $selected_perso === 'p2' ? 'selected' : ''; ?>>Katy</option>
            <option value="p3" <?php echo $selected_perso === 'p3' ? 'selected' : ''; ?>>Marc</option>
        </select>
        <br>
    </form>
    <h2>Personnage : </h2>
    <?php
    
    // pour chaque nom sélectionné dans le select,
    // son image s'affiche et ses caractéristiques aussi en dessous
    // on doit générer une div class"gauche" avec l'image correspodante pour chaque perso
    // <img src="./images/player.png" alt="homme" width="100" height="150"></div>
    // <img src="./images/playerF.png" alt="femme" width="100" height="150"></div>
    // <img src="./images/playerM.png" alt="homme" width="100" height="150"></div>
    // une autre div class"gauche" pour les caractéristiques du perso
    $persos = [
        "p1" => [
            "Nom" => "Luke",
            "Age" => 27,
            "Sexe" => "Homme",
            "Force" => "5",
            "Agilité" => "4",
            "Image" => "./images/player.png"
        ],
        "p2" => [
            "Nom" => "Katy",
            "Age" => 22,
            "Sexe" => "Femme",
            "Force" => "3",
            "Agilité" => "6",
            "Image" => "./images/playerF.png"
        ],
        "p3" => [
            "Nom" => "Marc",
            "Age" => 33,
            "Sexe" => "Homme",
            "Force" => "7",
            "Agilité" => "2",
            "Image" => "./images/playerM.png"
        ]
    ];
    
// Cette instruction conditionnelle vérifie deux choses :
// 1. Si une valeur a été sélectionnée et assignée à la variable $selected_perso
// 2. Si la valeur dans $selected_perso correspond à une clé existante du tableau $persos
    if ($selected_perso && array_key_exists($selected_perso, $persos)) {

        // Si les 2 conditions ci-dessus sont remplies, le bloc de code suivant s'exécute

// Cette ligne crée une (div) avec une classe "gauche"
// Elle contient une balise image(img), dont la source(src) est obtenue du tableau $persos
// En utilisant la clé $selected_perso pour trouver le sous tableau correct, et ensuite en extrayant l'URL de l'image correspondante
// L'attribut 'alt' de l'image est défini par la valeur 'Nom' du sous tableau correspondant.
        echo '<div class="gauche"><img src="' . $persos[$selected_perso]['Image'] . '" alt="' . $persos[$selected_perso]['Nom'] . '" width="100" height="150"></div>';

// Une autre div est crée avec la classe "gauche"
        echo '<div class="gauche">';

// Cette boucle 'foreach' parcourt chaque paire clé-valeur dans le sous tableau du personnage sélectionné
        foreach ($persos[$selected_perso] as $key => $value) {
            if ($key !== "Image") {
                echo "<p>$key : $value</p>";
            }
        }
        echo '</div>';
    }
    ?>
    <div class="clearB"></div>


</main>


</body>

</html>