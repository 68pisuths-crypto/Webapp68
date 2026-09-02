<?php
require_once 'connect.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>
<html>
<body>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>E-MAIL</th>
            <th>PHONE</th>
        </tr>

        <?php
        while($arr && mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $arr['member_id']; ?></td>
                <td>
                    <a href="detail.php?id=<?php echo $arr['member_id']; ?>">
                        <?php echo $arr['member_name']; ?>
                    </a>
                </td>
                <td>
                    <a href="detail.php?id=<?php echo $arr['member_id']; ?>"Detail</a>
                    <a href="edit.php?id=<?php echo $arr['member_id']; ?>"Edit</a>
                    <a href="delete.php?id=<?php echo $arr['member_id']; ?>"Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
        </table>
</body>
</html>