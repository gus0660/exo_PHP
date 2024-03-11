<?php
include("../common/header.php");
include("../common/footer.php");
?>
<main class="text-center">
    <h2 class="p-4">EXERCICE 2 Affichage d'une pyramide</h2>
    <form method="post" action="#">
        <label for="table">Choisir la hauteur de la pyramide</label>
        <input type="number" id="table" name="table" required>
        <input type="submit" value="Afficher">
        <div id="result"></div>
    </form>
</main>
</body>
</html>
<?php
// if(isset($_POST['table']) && $_POST['table'] > 0){
//     $chiffre = $_POST['table'];
//     echo "<h3> Pyramide de hauteur " . $chiffre . "</h3>";
//     $text = "";
//     for($i = 0; $i < $chiffre; $i++){
//         $text .= "xx";
//         echo $text . "<br>";
//     }
//     for($i = $chiffre - 1; $i >= 0; $i--){
//         $text = substr($text,0,-2);
//         echo $text . "<br>";
//     }
// };
?>