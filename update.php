<?php
include 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // เตรียมคำสั่ง SQL เพื่ออัปเดตข้อมูล
    $sql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "อัปเดตข้อมูลเรียบร้อยแล้ว";
    } else {
        echo "เกิดข้อผิดพลาดในการอัปเดตข้อมูล: " . $conn->error;
    }
    // ปิดการเชื่อมต่อ
    $conn->close();
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="id">ID ที่ต้องการแก้ไข</label><br>
    <input type="text" id="id" name="id"><br>
    <label for="name">ชื่อ</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="email">อีเมล์</label><br>
    <input type="text" id="email" name="email"><br>
    <label for="phone">โทรศัพท์</label><br>
    <input type="text" id="phone" name="phone"><br><br>
    <input type="submit" value="อัปเดต">
</form>
