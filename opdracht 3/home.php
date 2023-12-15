 
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
    <title>Klant toevoegen</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="gebruikersnaam" placeholder="Gebruikersnaam">
        <input type="password" name="wachtwoord" placeholder="Wachtwoord">
        <input type="submit" value="Login">
    </form>
 
    <table border="1">
        <tr>
            <th>ID</th>
            <th>gebruikersnaam</th>
            <th>wachtwoord</th>
        </tr>
       
 
    <tr> <?php
      $users = $db->selectALLUsers();
      if ($users) {
        foreach ($users as $user) {?>
       <td><?php echo $user['gebruikersnaam']?></td>
       <td><?php echo $user['wachtwoord']?></td>  
    </tr> <?php } }?>
    </table>
</body>
</html>