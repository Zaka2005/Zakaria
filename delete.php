<?php
include 'db.php';
$db = new Database();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $id = $_POST['id'];

    try {
        $db->delete($id);
        echo "Gegevens zijn succesvol verwijderd.";
    } catch (PDOException $e) {
        die("Fout bij het verwijderen van gegevens: " . $e->getMessage());
    }
}
?>
<form method="POST">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <input type="submit" name="delete" value="Delete">
</form>
