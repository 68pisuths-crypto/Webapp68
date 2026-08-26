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
<<<<<<< HEAD
        $gender = $_POST['member_gender'] ?? 'ไม่ได้ระบุ';
        $major = $_POST['member_major'];
=======
        $gender = $_POST['member_gender'];
>>>>>>> c3cce1f95b518dd2809f00305719823ea13e030d

        echo "ชื่อ (name) = " . htmlspecialchars($name) . "<br>";
        echo "เบอร์โทรศัพท์ (tel) = " . htmlspecialchars($tel) . "<br>";
        echo "อีเมล (email) = " . htmlspecialchars($email) . "<br>";
<<<<<<< HEAD
        echo "ชื่อผู้ใช้ (user) = " . htmlspecialchars($user) . "<br>";
        echo "รหัสผ่าน (pass) = " . htmlspecialchars($pass) . "<br>";
        echo "เพศ (gender) = " . htmlspecialchars($gender) . "<br>";
        echo "สาขา (major) = " . htmlspecialchars($major) . "<br>";
=======
        echo "ชื่อผู้ใช้ (username) = " . htmlspecialchars($user) . "<br>";
        echo "รหัสผ่าน (password) = " . htmlspecialchars($pass) . "<br>";
        echo "เพศ (gender) = " . htmlspecialchars($gender) . "<br>";
>>>>>>> c3cce1f95b518dd2809f00305719823ea13e030d
    }
    ?>
</body>
</html>