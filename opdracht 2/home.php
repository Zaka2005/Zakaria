<?php
include 'db.php';
$db = new Database();
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $db->insert($_POST['gebruikersnaam'], $_POST['wachtwoord']);
        echo "Klant is succesvol toegevoegd aan de database.";
    } catch (PDOException $e) {
        die("Fout bij het toevoegen van de klant: " . $e->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="gebruikersnaam">
        <input type="text" name="wachtwoord">
        <input type="submit">
    </form>
 
    <table border="">
        <tr>
            <th>id</th>
            <th>gebruikersnaam</th>
            <th>wachtwoord</th>
        </tr>
    </table>
</body>
</html>