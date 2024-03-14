<?php
include("../common/header.php");
include("../common/footer.php");
?>
<main class="text-center">
    <h2 class="p-4">EXERCICE 4 - Trouver le nombre choisi par l'ordinateur</h2>
    <form action="#" method="post">
        <input type="hidden" name="reinit" value="yes">
        <input class="m-3" type="submit" value="Reinitialiser">
    </form>
    <form class="m-3" action="#" method="post">
        <label for="chiffre">Quel est le chiffre : </label>
        <input type="number" id="chiffre" name="chiffre">
        <input type="submit" value="Valider">
    </form>
    <h3>Saisir une valeur dans le champ ci-dessus</h3>
    <p id="message"></p>
</main>
<script>
    
</script>
</body>
</html>
<?php
// le principe c'est qu'il faut stocker le nombre choisi par l'ordinateur dans une variable donc créer une session.
session_start();// commence ou continue la session(qu'on peu aller chercher avec "$_SESSION[]")

// Au départ, on offre la possibilité de réinitialisation si demandée au click sur "reinitialiser"
if (isset($_POST['reinit'])) {// on va chercher le "post"($_POST) de "reinit", si il est présent(if isset) au click sur "reinitialiser" alors :
    unset($_SESSION['chiffreAleatoire']);// on enlève(unset) la variable(chiffreAleatoire) dans la session qu'on va chercher($_SESSION)
 }

// Générer et stocker un nombre aléatoire s'il n'existe pas déjà
if(!isset($_SESSION['chiffreAleatoire'])) {// si la variable(chiffreAleatoire) n'est pas présente(if !isset) dans la session qu'on va chercher
    $_SESSION['chiffreAleatoire'] = rand(1, 10);// on génère un nombre aléatoire entre 1 et 10 et on l'enregistre dans la session qu'on va chercher
}

if (isset($_POST['chiffre'])) {// on va chercher le "post"
    $chiffre = $_POST['chiffre'];// on sauvegarde le "post" dans la variable(chiffre)
    if ($chiffre < $_SESSION['chiffreAleatoire']) {// si le "post" est inférieur
        echo "Le nombre choisi est TROP PETIT !!";
    } else if ($chiffre > $_SESSION['chiffreAleatoire']) {// si le "post" est supérieur
        echo "Le nombre choisi est TROP GRAND!!";
    } else {
        // echo "GAGNEE !!";
    // }
// }
?>