<html>
<head>
    <title>Register Form</title>
</head>
<body>

    <form name="frm-register" action="result.php" method="POST">
        NAME: <input type="text" name="member_name"><br>
        TEL: <input type="text" name="member_tel"><br>
        EMAIL: <input type="text" name="member_email"><br>
        USERNAME: <input type="text" name="member_user"><br>
        PASSWORD: <input type="password" name="member_pass"><br>
        GENDER: 
        <input type="radio" name="member_gender" value="ชาย"> ชาย
        <input type="radio" name="member_gender" value="หญิง"> หญิง<br>
    MAJOR:<select name="member_major">
            <option value="วิทยาการคอมพิวเตอร์">วิทยาการคอมพิวเตอร์</option>
            <option value="เทคโนโลยีสารสนเทศ">เทคโนโลยีสารสนเทศ</option>
            <option value="วิศวกรรมซอฟต์แวร์">วิศวกรรมซอฟต์แวร์</option>
        </select><br>
        <input type="submit" name="submit" value="OK">
        <input type="reset" name="reset" value="Cancel">
    </form>

</body>
</html>