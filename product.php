<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>เพิ่มสินค้า</title>
</head>
<body>
    <h2>เพิ่มข้อมูลสินค้า</h2>
    <form action="product_result.php" method="POST">
        ชื่อสินค้า: <input type="text" name="product_name" required><br><br>
        ราคา (บาท): <input type="text" name="product_price" required><br><br>
        คำอธิบายสินค้า:<br>
            <textarea name="product_detail" rows="4" cols="40" required></textarea><br><br>
        ประเภทสินค้า:<br>
            <input type="radio" name="product_type" value="อาหาร" checked> อาหาร
            <input type="radio" name="product_type" value="เครื่องดื่ม"> เครื่องดื่ม
            <input type="radio" name="product_type" value="ขนม"> ขนม
            <input type="radio" name="product_type" value="ของใช้ทั่วไป"> ของใช้ทั่วไป<br><br>
        รูปแบบการขาย:<br>
            <input type="checkbox" name="sale_options[]" value="ขายปลีก"> ขายปลีก
            <input type="checkbox" name="sale_options[]" value="ขายส่ง"> ขายส่ง<br><br>
        ชื่อพนักงานที่เพิ่มสินค้า:<br>
            <input type="radio" name="employee_name" value="โก้" checked> โก้
            <input type="radio" name="employee_name" value="นัทธพงศ์"> นัทธพงศ์<br><br>
        <?php 
            date_default_timezone_set("Asia/Bangkok");
            $current_datetime = date("d/m/Y H:i น."); 
?>
            <input type="hidden" name="date_added" value="<?php echo $current_datetime; ?>">
            <input type="submit" value="OK">
            <input type="reset" value="Cancel">
    </form>
</body>
</html>