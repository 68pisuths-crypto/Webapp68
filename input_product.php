<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>เพิ่มสินค้าใหม่</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], input[type="number"], textarea { width: 300px; padding: 8px; }
        button { padding: 10px 20px; background-color: #007bff; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h2>ฟอร์มเพิ่มข้อมูลสินค้า</h2>
    <form action="insert_product.php" method="POST">
        <div class="form-group">
            <label>ชื่อสินค้า:</label>
            <input type="text" name="product_name" required>
        </div>
        <div class="form-group">
            <label>ราคา (บาท):</label>
            <input type="number" step="0.01" name="price" required>
        </div>
        <div class="form-group">
            <label>จำนวนสต็อก:</label>
            <input type="number" name="stock" required>
        </div>
        <div class="form-group">
            <label>รายละเอียดสินค้า:</label>
            <textarea name="description" rows="3"></textarea>
        </div>
        <button type="submit">บันทึกข้อมูล</button>
        <br>
    <a href="show_product.php">ดูรายการสินค้าทั้งหมด →</a>
    </form>
</body>
</html>