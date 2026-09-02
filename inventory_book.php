<?php require 'db.php'; 
$res = $conn->query("SELECT * FROM books ORDER BY book_id DESC"); ?>
<!DOCTYPE html><html lang="th"><head><meta charset="UTF-8"><title>รายการหนังสือ</title></head><body>
<h2>รายการหนังสือทั้งหมด</h2>
<a href="add.php">+ เพิ่มหนังสือใหม่</a>
<table border="1" cellpadding="8" style="border-collapse:collapse; margin-top:10px; width:100%;">
<tr bgcolor="#f2f2f2"><th>รหัส</th><th>ชื่อหนังสือ</th><th>ผู้แต่ง</th><th>ประเภท</th><th>ราคา (บาท)</th><th>จำนวน (เล่ม)</th><th>จัดการ</th></tr>
<?php while($row = $res->fetch_assoc()): ?>
<tr>
    <td>BK-<?= str_pad($row['book_id'], 4, '0', STR_PAD_LEFT); ?></td>
    <td><?= $row['book_name'] ?></td>
    <td><?= $row['author'] ?></td>
    <td><?= $row['category'] ?></td>
    <td><?= number_format($row['price'], 2) ?></td>
    <td><?= $row['stock'] ?></td>
    <td>
        <a href="view.php?id=<?= $row['book_id'] ?>">ดู</a> | 
        <a href="edit_book.php?id=<?= $row['book_id'] ?>">แก้ไข</a> | 
        <a href="delete_book.php?id=<?= $row['book_id'] ?>" onclick="return confirm('ยืนยันการลบ?')">ลบ</a>
    </td>
</tr>
<?php endwhile; ?>
</table></body></html>