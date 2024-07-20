<?php
include 'db.php';

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Class: " . $row["class"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
