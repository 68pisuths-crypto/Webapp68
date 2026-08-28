<?php
require 'db.php';
$id = (int)$_GET['id'];
if ($_POST) {
    $book_name = $conn->real_escape_string($_POST['book_name']);
    $author = $conn->real_escape_string($_POST['author']);
    $category = $conn->real_escape_string($_POST['category']);
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $conn->query("UPDATE books SET book_name='$book_name', author='$author', category='$category', price='$price', stock='$stock' WHERE book_id=$id");
    header("Location: index.php");
    exit();
}
$b = $conn->query("SELECT * FROM books WHERE book_id=$id")->fetch_assoc();
?>
<!DOCTYPE html><html lang="th"><head><meta charset="UTF-8"><title>แก้ไขหนังสือ</title></head><body>
<h2>แก้ไขข้อมูลหนังสือ</h2>
<form method="post">
    ชื่อหนังสือ: <input type="text" name="book_name" value="<?= $b['book_name'] ?>" required><br><br>
    ผู้แต่ง: <input type="text" name="author" value="<?= $b['author'] ?>" required><br><br>
    ประเภท: <input type="text" name="category" value="<?= $b['category'] ?>" required><br><br>
    ราคา: <input type="number" step="0.01" name="price" value="<?= $b['price'] ?>" required><br><br>
    จำนวนเล่ม: <input type="number" name="stock" value="<?= $b['stock'] ?>" required><br><br>
    <button type="submit">อัปเดตข้อมูล</button> <a href="index.php">ยกเลิก</a>
</form></body></html>