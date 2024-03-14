<?php
include("../common/header.php");
include("../common/footer.php");
?>
<main class="text-center">
    <h2 class="p-4">EXERCICE 5 - Calculer une moyenne</h2>
    <form action="#" method="get">
        <label for="nb">Combien de notes : </label>
        <input type="number" name="nb" id="nb">
        <input type="submit" value="Valider">
    </form>
    <h3>Saisir une valeur dans le champ ci-dessus</h3>

<?php
// le but : après avoir entré une valeur dans l'input "Combien de notes", et valider, générer le nombre de notes sous forme d'inputs avec un label "note N°1, 2, etc..
// donc il faut définir la variable nbNotes en allant chercher la valeur du "get" avec $_GET et générer un tableau qui soit un fomulaire avec le nombre de notes et un bouton "calculer" pour calculer la moyenne.
// ensuite, on peut calculer la moyenne de ces notes et afficher la valeur de la moyenne dans un label "moyenne"
// pour calculer la moyenne, il faut récupérer les valeurs des notes qu'on aura entré dans le tableau qui à été généré précédemment
// pour récupérer les valeurs des notes qu'on aura entré dans le tableau qui à été généré précédemment, on peut utiliser la fonction array_sum()
if(isset($_GET['nb']) && $_GET['nb'] > 0){
$nbNotes = $_GET['nb'];
// echo "<h4>$nbNotes notes</h4>";
    for ($i = 1; $i <= $nbNotes; $i++) {
        echo "<form action='#' method='get'>";
        echo "<label class='m-1' for='note'>Note $i : </label>";
        echo "<input class='m-1' type='number' name='note' id='note'>";
        echo "<br>";
        echo "</form>";
    }
    echo "<h5 class='p-1'>Veuillez Saisir les notes pour calculer leur moyenne</h5>";
    echo "<input class='m-1' type='submit' value='Calculer'>";
}
if(isset($_GET['note']) && $_GET['note'] > 0){

}
?>

</main>

    
</body>
</html>

