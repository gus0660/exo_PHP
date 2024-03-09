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
        <div id="result"></div>
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
    ?>
    
</main>
<!-- <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const form = document.querySelector('form');
            
            form.addEventListener('submit', (event) => {
                console.log("derazer")
                event.preventDefault();
                let chiffre = document.querySelector('#table').value;
                const resultatDiv = document.querySelector('#result');
                
                if (chiffre !== "") {
                    for (let i = 1; i <= 10; i++) {
                        console.log(chiffre);
                        let line = document.createElement('p');
                        line.innerHTML = i + " x " + chiffre + " = " + i * chiffre;
                        resultatDiv.appendChild(line);
                    }
                } else {
                    let line = document.createElement('p');
                    line.innerHTML = "Merci de to choise a number";
                    resultatDiv.appendChild(line);
                }
            });
        });
    </script> -->
</body>

</html>