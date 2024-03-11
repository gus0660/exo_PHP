<?php
include("../common/header.php");
include("../common/footer.php");
?>
<main class="text-center">
    <h2 class="p-4">EXERCICE 2 Affichage d'une pyramide</h2>
    <form method="post" action="#" id="form">
        <label for="table">Choisir la hauteur de la pyramide</label>
        <input type="number" id="table" name="table" required>
        <input type="submit" value="Afficher">
        
    </form>
</main>
<div id="result"></div>
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
<script>
    const form = document.querySelector('#form');
    let resultat = document.querySelector('#result');
        form.addEventListener('submit', function(){
            event.preventDefault();
            let chiffre = document.querySelector('#table').value;
            let text = "";
            for(i = 1; i <= chiffre; i++){
                text = text + "xx";
                let line = document.createElement('p');
                line.innerHTML = text;
                resultat.appendChild(line);
            }
        //     for(i = chiffre; i != 0; i--){
        //         text = text - "xx";
        //         let line = document.createElement('p');
        //         line.innerHTML = text;
        //         resultat.appendChild(line);
        // };
    })
</script>