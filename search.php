<?php
$connection = new mysqli("localhost", "root", "", "finalproject");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $result = $connection->query("SELECT * FROM tickets WHERE id = $id");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h2>Ticket Details</h2>";
        echo "ID: " . $row["id"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Issue: " . $row["issue"] . "<br>";
        echo "Created At: " . $row["created_at"] . "<br>";
    } else {
        echo "No ticket found.";
        }

    echo "<br><button onclick=\"window.location.href='index.html'\">Back to Home</button>";
    exit();
}
?>

<form method="GET">
    <h2>Search Ticket</h2>
    Enter Ticket ID: <input type="number" name="id" required>
    <input type="submit" value="Search">
</form>
