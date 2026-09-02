<?php
require_once 'connect_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = $_POST['product_name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $desc  = $_POST['description'];

    $sql = "INSERT INTO tb_products (product_name, price, stock, description) 
            VALUES ('$name', '$price', '$stock', '$desc')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('บันทึกข้อมูลสำเร็จ!');
                window.location.href = 'show_product.php';
              </script>";
    } else {
        echo "เกิดข้อผิดพลาด: " . mysqli_error($conn);
    }
}
?>