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
        $gender = $_POST['member_gender'] ?? 'ไม่ได้ระบุ';
        $major = $_POST['member_major'];

        echo "ชื่อ (name) = " . htmlspecialchars($name) . "<br>";
        echo "เบอร์โทรศัพท์ (tel) = " . htmlspecialchars($tel) . "<br>";
        echo "อีเมล (email) = " . htmlspecialchars($email) . "<br>";
        echo "ชื่อผู้ใช้ (user) = " . htmlspecialchars($user) . "<br>";
        echo "รหัสผ่าน (pass) = " . htmlspecialchars($pass) . "<br>";
        echo "เพศ (gender) = " . htmlspecialchars($gender) . "<br>";
        echo "สาขา (major) = " . htmlspecialchars($major) . "<br>";
    }
    ?>
</body>
</html>