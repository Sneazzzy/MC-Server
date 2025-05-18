<?php
$connection = new mysqli("localhost", "root","","finalproject");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $issue = $_POST["issue"];

    $createTicket = "INSERT INTO tickets (name, email, issue) VALUES 
 ('$name', '$email', '$issue')";
    
    if (mysqli_query($connection, $createTicket)) {

        $ticket_id = $connection->insert_id;

        echo "<h2>Ticket Created Successfully!</h2>";
        echo "<p><strong>Your Ticket ID:</strong> $ticket_id</p>";
    } else {
        echo "<p>Error creating ticket. Please try again.</p>";
    }

    echo "<br><button onclick=\"window.location.href='index.html'\">Back to Home</button>";
    exit();
}
?>

<form method="POST">
    <h2>Create Ticket</h2>
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Issue:<br>
    <textarea name="issue" rows="4" cols="40" required></textarea><br><br>
    <input type="submit" value="Submit">
</form>
