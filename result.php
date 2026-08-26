<html>
<head>
    <title>Result</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['member_name'];
        $tel = $_POST['member_tel'];
        $email = $_POST['member_email'];
        $user = $_POST['member_user'];
        $pass = $_POST['member_pass'];

        echo "ชื่อ (name) = " . htmlspecialchars($name) . "<br>";
        echo "เบอร์โทรศัพท์ (tel) = " . htmlspecialchars($tel) . "<br>";
        echo "อีเมล (email) = " . htmlspecialchars($email) . "<br>";
        echo "ชื่อผู้ใช้ (username) = " . htmlspecialchars($user) . "<br>";
        echo "รหัสผ่าน (password) = " . htmlspecialchars($pass) . "<br>";
    }
    ?>
</body>
</html>