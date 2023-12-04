<?php
class Database {
    public $pdo;
 
    public function __construct($db ="gebruikers", $host = "localhost:3306", $user = "root", $pass= "") {
    try {
    $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo "error: " . $e->getMessage();
     }
    }
    public function insert($gebruikersnaam, $wachtwoord){
        $stmt = $this->pdo->prepare("INSERT INTO gebruiker (gebruikersnaam, wachtwoord) VALUES (?, ?)");
        $stmt->execute([$gebruikersnaam, $wachtwoord]);
    }
}
$connectie = new Database();
?>