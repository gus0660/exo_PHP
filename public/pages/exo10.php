<?php
include("../common/header.php");
include("../common/footer.php");
?>
<main class="text-center">
<h1 class="p-4">EXERCICE 10 - Sélection du personnage</h1>
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

</main>

    
</body>
</html>