<?php
include 'connect.php';
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. " - Phone: " . $row["phone"]. "<br>";
    }
} else {
    echo "ไม่พบข้อมูล";
}
$conn->close();
?>
