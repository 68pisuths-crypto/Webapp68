<?php
require 'db.php';
$id = (int)$_GET['id'];
$b = $conn->query("SELECT * FROM books WHERE book_id=$id")->fetch_assoc();
?>
<!DOCTYPE html><html lang="th"><head><meta charset="UTF-8"><title>รายละเอียด</title></head><body>
<h2>รายละเอียดหนังสือ</h2>
<p><b>รหัสหนังสือ:</b> BK-<?= str_pad($b['book_id'], 4, '0', STR_PAD_LEFT) ?></p>
<p><b>ชื่อหนังสือ:</b> <?= $b['book_name'] ?></p>
<p><b>ผู้แต่ง:</b> <?= $b['author'] ?></p>
<p><b>ประเภท:</b> <?= $b['category'] ?></p>
<p><b>ราคา:</b> <?= number_format($b['price'], 2) ?> บาท</p>
<p><b>จำนวนคงเหลือ:</b> <?= $b['stock'] ?> เล่ม</p>
<a href="index.php">← กลับหน้าหลัก</a></body></html>