<html>
<head>
    <title>Register Form</title>
</head>
<body>

    <form name="frm-register" action="result.php" method="POST">
        NAME: <input type="text" name="member_name"><br>
        TEL: <input type="text" name="member_tel"><br>
        EMAIL: <input type="email" name="member_email"><br>
        USERNAME: <input type="text" name="member_user"><br>
        PASSWORD: <input type="password" name="member_pass"><br>
                GENDER: 
        <input type="radio" name="member_gender" value="Male" checked> Male
        <input type="radio" name="member_gender" value="Female"> Female
        <input type="radio" name="member_gender" value="Other"> Other<br>
        
        <input type="submit" name="submit" value="OK">
        <input type="reset" name="reset" value="Cancel">
    </form>

</body>
</html>