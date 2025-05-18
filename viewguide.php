<?php
$connection = new mysqli("localhost", "root", "", "finalproject");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $result = $connection->query("SELECT * FROM diy WHERE id = $id");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h2>Troubleshooting Guide Details</h2>";
        echo "ID: " . $row["id"] . "<br>";
        echo "Problem: " . $row["problem"] . "<br>";
        echo "Troubleshooting: " . $row["troubleshooting"] . "<br>";
        
    } else {
        echo "No ID found.";
        }

    echo "<br><button onclick=\"window.location.href='index.html'\">Back to Home</button>";
    exit();
}
?>

<form method="GET">
    <h2>Search ID Guide<h2>
    Enter ID: <input type="number" name="id" required>
    <input type="submit" value="Search">
</form>
