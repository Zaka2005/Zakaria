<?php
include 'db.php';

$db = new Database();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    try {
        $user = $db->login($email, $password);

        if ($user) {
            session_start();
            $_SESSION['userId'] = $user['id_klanten'];
            $_SESSION['gebruikersnaam'] = $user['gebruikersnaam'];
            $_SESSION['email'] = $user['email'];
            header('Location: home.php');
            exit();
        } else {
            echo "Incorrecte gebruikersnaam of wachtwoord.";
        }
    } catch (PDOException $e) {
        echo "Fout bij het inloggen: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
</head>
<body>
    <h2>Inloggen</h2>
    <form method="post" action="">
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <br>

        <label for="password">Wachtwoord:</label>
        <input type="password" name="password" required>

        <br>

        <input type="submit" value="Inloggen">
    </form>

    <p>Nog geen account? <a href="register.php">Registreer hier</a>.</p>
</body>
</html>
