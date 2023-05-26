
<!DOCTYPE html>
<html>
<head>
    <title>Product Toevoegen</title>
</head>
<body>

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
    echo "Connected to database " . $db;
    if (isset($_POST['knop'])) {
        $product_naam = $_POST['product_naam'];
        $prijs_per_stuk = $_POST['prijs_per_stuk'];
        $omschrijving = $_POST['omschrijving'];
    }

    if (!empty($product_naam)) {
        $sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving) VALUES (:product_naam, :prijs_per_stuk, :omschrijving)";
        $stmt = $pdo->prepare($sql);                                                                            
        $stmt->bindParam(':product_naam', $product_naam);
        $stmt->bindParam(':prijs_per_stuk', $prijs_per_stuk);
        $stmt->bindParam(':omschrijving', $omschrijving);
   

    if ($stmt->execute()) {
        echo "product goed toegevoegd";
    } else {
        echo "er is een fout";
    } }
}
catch (\PDOException $e) 
{
 throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>



    <h2>Product Toevoegen</h2>
    <form method="post" action="insert.php">
        <label for="product_naam">Product Naam:</label>
        <input type="text" name="product_naam"><br><br>

        <label for="prijs_per_stuk">Prijs per Stuk:</label>
        <input type="number" name="prijs_per_stuk" step="0.01"><br><br>

        <label for="omschrijving">Omschrijving:</label>
        <textarea name="omschrijving" rows="4" required></textarea><br><br>

        <input type="submit" name="knop" value="Product Toevoegen">
    </form>
</body>
</html>
