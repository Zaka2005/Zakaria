<?php
include 'db.php';

try {
    $db = new database();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $db->registerUser($username, $email, $password);
        echo "Registratie succesvol!";
    }
} catch (Exception $e) {
    echo "Fout: " . $e->getMessage();
}
?>
