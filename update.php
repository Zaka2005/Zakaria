<?php
include 'db.php';
$db = new Database();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['id'];
    $naam = $_POST['naam'];
    $stad = $_POST['stad'];

    try {
        $db->update($id, $naam, $stad);
        echo "Gegevens zijn succesvol bijgewerkt.";
    } catch (PDOException $e) {
        die("Fout bij het bijwerken van gegevens: " . $e->getMessage());
    }
}
?>
<form method="POST">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <input type="text" name="naam" placeholder="Naam">
    <input type="text" name="stad" placeholder="Stad">
    <input type="submit" name="update" value="Update">
</form>
