<?php
include'connect.php';

$x =$_POST['id'];
$member_name = $POST['member_name'];
$member_email = $POST['member_email'];
$member_phone = $POST['member_phone'];

$sql="UPDATE tb_member SET member_name='$member_name',member_email='$member_email',
member_phone='$member_phone' WHERE member_id = '$x';";
$result=mysqli_query($link,$sql);
if($result){
    echo "EDIT COMPLETE";
}
else{
    echo "EDIT FAIL";
}
echo "<a href= 'show.php'>BACK TO SHOW</a>";
?>