<?php
require 'db.php';
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $conn->query("DELETE FROM books WHERE book_id=$id");
}
header("Location: index.php");
exit();
?>