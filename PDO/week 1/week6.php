<?php

$host = 'localhost:3307';
$db   = 'Winkel';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try
{
     $pdo = new PDO($dsn, $user, $pass, $options);

}

catch (\PDOException $e)
{
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}



    if (isset($_POST['knopje'])) {
        $product_naam = $_POST["product_naam"];
        $prijs_per_stuk = $_POST["prijs_per_stuk"];
        $omschrijving = $_POST["omschrijving"];
        $productcode = 2;


    if (!empty($product_naam)) {
        $sql = "UPDATE producten set product_naam = :product_naam, prijs_per_stuk = :prijs_per_stuk, omschrijving = :omschrijving where product_code=:product_code";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':product_naam', $product_naam);
        $stmt->bindParam(':prijs_per_stuk', $prijs_per_stuk);
        $stmt->bindParam(':omschrijving', $omschrijving);
        $stmt->bindParam(':product_code', $productcode);


        if ($stmt->execute()) {
            echo "Het is gelukt. <br>";
        } else {
            echo "Er is een fout. <br>";
        }
    }
 }
        $stmt = $pdo->prepare("SELECT * from producten where product_code=?");
        $productcode = 2;
        $stmt->execute([$productcode]);
        $item = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST"  action="update.php">
    <label for="product_naam">Productnaam:</label>
    <input type="text" name="product_naam">
    <br><br>
    <label for="prijs_per_stuk">Prijs per stuk:</label>
    <input type="number" name="prijs_per_stuk">
    <br><br>
    <label for="omschrijving">Omschrijving:</label>
    <input type="text" name="omschrijving">
    <br><br>
    <input type="submit"  name="knopje" value="Update">
</form>
</body>
</html>