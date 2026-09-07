<?php
require 'db.php';

// หากล็อกอินอยู่แล้ว ให้ข้ามไปหน้าแสดงรายการหนังสือ
if (isset($_SESSION['user_id'])) {
    header("Location: books.php");
    exit();
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        // ตรวจสอบรหัสผ่านผ่าน password_verify เท่านั้น
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id']  = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['fullname'] = $user['fullname'];
            header("Location: books.php");
            exit();
        } else {
            $error = 'รหัสผ่านไม่ถูกต้อง';
        }
    } else {
        $error = 'ไม่พบชื่อผู้ใช้งานนี้';
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>เข้าสู่ระบบ - ระบบจัดการหนังสือ</title>
</head>
<body>
    <h2>กรุณาเข้าสู่ระบบก่อนใช้งาน</h2>
    <?php if ($error): ?>
        <p style="color: red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form method="post">
        ชื่อผู้ใช้: <input type="text" name="username" required><br><br>
        รหัสผ่าน: <input type="password" name="password" required><br><br>
        <button type="submit">เข้าสู่ระบบ</button>
    </form>
</body>
</html>