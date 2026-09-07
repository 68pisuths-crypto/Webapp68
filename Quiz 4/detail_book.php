<?php
require 'db.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: books.php");
    exit();
}

$id = (int)$_GET['id'];
$sql = "SELECT * FROM books WHERE book_id = $id";
$result = $conn->query($sql);

if (!$result || $result->num_rows === 0) {
    header("Location: books.php");
    exit();
}

$book = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>รายละเอียดหนังสือ - <?= htmlspecialchars($book['book_name']) ?></title>
</head>
<body>
    <h2>รายละเอียดหนังสือ</h2>
    <table border="1" cellpadding="8" style="border-collapse:collapse; width:50%;">
        <tr>
            <th align="left" width="30%" bgcolor="#f2f2f2">รหัสหนังสือ</th>
            <td>BK-<?= str_pad($book['book_id'], 4, '0', STR_PAD_LEFT); ?></td>
        </tr>
        <tr>
            <th align="left" bgcolor="#f2f2f2">ชื่อหนังสือ</th>
            <td><?= htmlspecialchars($book['book_name']) ?></td>
        </tr>
        <tr>
            <th align="left" bgcolor="#f2f2f2">ผู้แต่ง</th>
            <td><?= htmlspecialchars($book['author']) ?></td>
        </tr>
        <tr>
            <th align="left" bgcolor="#f2f2f2">ประเภท</th>
            <td><?= htmlspecialchars($book['category']) ?></td>
        </tr>
        <tr>
            <th align="left" bgcolor="#f2f2f2">ราคา</th>
            <td><?= number_format($book['price'], 2) ?> บาท</td>
        </tr>
        <tr>
            <th align="left" bgcolor="#f2f2f2">จำนวนคงเหลือ</th>
            <td><?= $book['stock'] ?> เล่ม</td>
        </tr>
    </table>
    <br>
    <a href="books.php">← กลับหน้าแสดงรายการหนังสือ</a> | 
    <a href="edit_book.php?id=<?= $book['book_id'] ?>">แก้ไขข้อมูล</a>
</body>
</html>