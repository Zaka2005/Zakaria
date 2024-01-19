<?php
class Database {
    public $pdo;


}public function insertUser($gebruikersnaam, $email) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO klanten (naam, stad) VALUES (?, ?)");
            $stmt->execute([$username, $email]);
        } catch (PDOException $e) {
            throw new PDOException("Fout bij het toevoegen van de gebruiker: " . $e->getMessage());
        }
    }