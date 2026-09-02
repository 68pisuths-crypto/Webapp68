<?php
require_once 'connect_db.php';

$sql = "SELECT * FROM tb_products ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>รายการสินค้าทั้งหมด</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; max-width: 800px; margin-top: 15px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #28a745; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
    </style>
</head>
<body>
    <a href="input_product.php" style="padding: 8px 15px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px;">+ เพิ่มสินค้าใหม่</a><br><br>
    <h2>รายการสินค้าทั้งหมดในระบบ</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ชื่อสินค้า</th>
                <th>ราคา (บาท)</th>
                <th>สต็อก</th>
                <th>รายละเอียด</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . htmlspecialchars($row['product_name']) . "</td>";
                    echo "<td>" . number_format($row['price'], 2) . "</td>";
                    echo "<td>" . $row['stock'] . "</td>";
                    echo "<td>" . htmlspecialchars($row['description']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' style='text-align:center;'>ยังไม่มีข้อมูลสินค้า</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>