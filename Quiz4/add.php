<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $book_name = $conn->real_escape_string($_POST['book_name']);
    $author    = $conn->real_escape_string($_POST['author']);
    $category  = $conn->real_escape_string($_POST['category']);
    $price     = (float)$_POST['price'];
    $stock     = (int)$_POST['stock'];
    
    $sql = "INSERT INTO books (book_name, author, category, price, stock) 
            VALUES ('$book_name', '$author', '$category', $price, $stock)";
            
    if ($conn->query($sql)) {
        header("Location: books.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>เพิ่มหนังสือใหม่</title>
</head>
<body>
    <h2>เพิ่มหนังสือใหม่</h2>
    <form method="post">
        ชื่อหนังสือ: <input type="text" name="book_name" required><br><br>
        ผู้แต่ง: <input type="text" name="author" required><br><br>
        ประเภท: <input type="text" name="category" required><br><br>
        ราคา: <input type="number" step="0.01" name="price" required><br><br>
        จำนวนเล่ม: <input type="number" name="stock" required><br><br>
        <button type="submit">บันทึกข้อมูล</button> 
        <a href="books.php">ยกเลิก</a>
    </form>
</body>
</html>