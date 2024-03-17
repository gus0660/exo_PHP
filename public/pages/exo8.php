<?php
include("../common/header.php");
include("../common/footer.php");
?>
<main class="text-center">
    <h1 class="p-4">EXERCICE 8 - Sélection du personnage</h1>
    <form action="#" method="post">
        <label for="perso">Personnage : </label>
        <select name="perso" id="perso" onchange="submit()">
            <option value="p1">Luke</option>
            <option value="p2">Katy</option>
            <option value="p3">Marc</option>
        </select>
        <br>
    </form>
    <h2>Personnage : </h2>
    <!-- <div class="gauche"></div>
    <div class="gauche"></div> -->
    <div class="clearB"></div>
    
<?php
// pour chaque nom sélectionné dans le select,
// son image s'affiche et ses caractéristiques aussi en dessous
// on doit générer une div class"gauche" avec l'image correspodante pour chaque perso
// une autre div class"gauche" pour les caractéristiques du perso
$perso = [
    [
        "Nom : " => "Luke",
        "Age : " => 27,
        "Sexe : " => "Homme",
        "Force : " => "5",
        "Agilité : " => "4",
    ],
    [
        "Nom : " => "Katy",
        "Age : " => 22,
        "Sexe : " => "Femme",
        "Force : " => "3",
        "Agilité : " => "6",
    ],
    [
        "Nom : " => "Marc",
        "Age : " => 33,
        "Sexe : " => "Homme",
        "Force : " => "7",
        "Agilité : " => "2",
    ]
]

?>
</main>

    
</body>
</html>