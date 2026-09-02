<html lang="th">
<head><meta charset="UTF-8"><title>ผลลัพธ์</title></head>
<body>
    <h2>ผลการเพิ่มข้อมูล</h2>
    <?php
    $p_name = $_POST['product_name'];
    $p_price = $_POST['product_price'];
    $p_detail = $_POST['product_detail'];
    $p_type = $_POST['product_type'];
    if (isset($_POST['sale_options'])) {
    $sale_options = implode(", ", $_POST['sale_options']);
    } else {
    $sale_options = "ไม่ได้ระบุ";}
    $emp_name = $_POST['employee_name'];
    $date_added = $_POST['date_added'];

    echo "<b>ชื่อสินค้า:</b> " . htmlspecialchars($p_name) . "<br>";
    echo "<b>ราคา:</b> " . htmlspecialchars($p_price) . " บาท<br>";
    echo "<b>คำอธิบายสินค้า:</b> " . nl2br(htmlspecialchars($p_detail)) . "<br>";
    echo "<b>ประเภทสินค้า:</b> " . htmlspecialchars($p_type) . "<br>";
    echo "<b>รูปแบบการขาย:</b> " . htmlspecialchars($sale_options) . "<br>";
    echo "<b>พนักงานที่เพิ่มสินค้า:</b> " . htmlspecialchars($emp_name) . "<br>";
    echo "<b>วันที่เพิ่มข้อมูลเข้าระบบ:</b> " . htmlspecialchars($date_added) . "<br>";
    ?>
</body>
</html>