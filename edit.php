<?php
include 'connect.php';

$x = $_GET['id'];

$sql="SELECT * FROM tb_member WHERE member_id = '$x';";
$result = mysqli_query($link, $sql);