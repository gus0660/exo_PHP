<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Générateur de mot de passe BCRIPT</h2>
    <form action="keygenGenerator" method="post">
        <label for="password">Entrez le mot de passe :</label>
        <input type="text" id="password" name="password" required>
        <input type="submit" value="Crypter">
    </form>
    
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["password"])) {
        $password = $_POST["password"];
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        echo "<p>Le mot de passe crypté est : ". $hashedPassword . "</p>";
    }
?>

