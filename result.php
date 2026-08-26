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
        echo "ชื่อ (name) = " . htmlspecialchars($name) . "<br>";
        echo "เบอร์โทรศัพท์ (tel) = " . htmlspecialchars($tel) . "<br>";
        echo "อีเมล (email) = " . htmlspecialchars($email) . "<br>";
    }
    ?>
</body>
</html>