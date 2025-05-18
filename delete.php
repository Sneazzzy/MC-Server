<?php
$connection = new mysqli("localhost", "root", "", "finalproject");

if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $connection->query("DELETE FROM tickets WHERE id = $id");
    echo "Ticket Deleted. <a href='index.html'> Back to Home</a>";
}
    



?>

<form method="POST">
    <h2>Delete Ticket</h2>
    Enter Ticket ID: <input type="number" name="id" required>
    <input type="submit" value="Delete">
</form>
