<?php
// เชื่อมต่อฐานข้อมูล
include 'connect.php';
// รับค่าค้นหา
$keyword = $_GET['keyword'];
// คำสั่ง SQL สำหรับค้นหา
$sql = "SELECT * FROM users WHERE name LIKE '%$keyword%'";
// ประมวลผลคำสั่ง SQL
$result = $conn->query($sql);
// ตรวจสอบผลลัพธ์
if ($result->num_rows > 0) {
    // แสดงข้อมูลที่พบ
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
        // เพิ่มข้อมูลอื่นๆ ตามต้องการ
    }
} else {
    echo "ไม่พบข้อมูลที่ตรงกับคำค้นหา";
}
// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>

<form action="search.php" method="GET">
    <input type="text" name="keyword" placeholder="ค้นหาข้อมูล">
    <button type="submit">ค้นหา</button>
</form>
