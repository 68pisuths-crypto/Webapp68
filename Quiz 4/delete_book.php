<?php
require 'db.php';
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $conn->query("DELETE FROM books WHERE book_id=$id");
}
// เปลี่ยน Redirect จาก index.php เป็น books.php
header("Location: books.php");
exit();
?>