<?php
include("../common/header.php");
include("../common/footer.php");
?>
<main class="text-center">
<h1 class="p-4">EXERCICE 10 - Affichage des personnages</h1>
    <h2>Personnage : </h2>
    
<?php
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
// $selected_perso = $_POST['perso'] ?? null;
foreach ($persos as $key => $value) {
    echo "<div class='gauche'>
    <img src='{$value['Image']}' alt='{$value['Nom']}' width='100' height='150'>
    </div>";
}
?>
</main>

    
</body>
</html>