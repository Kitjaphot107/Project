<?php
include 'config/condb.php';
session_start();

$username = $_POST['Username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user where Username ='$username' and Password ='$password' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$status = $row['ustatus'];

if ($row > 0) {
    $_SESSION['Username'] = $row['Username'];
    $_SESSION['Password'] = $row['Password'];
    $_SESSION['Name'] = $row['Name'];
    if ($status == '0') {
        $show = header('location:Login.php');
    } elseif ($status == '1') {
        $show = header('location:index.php');
    } elseif ($status == '2') {
        $show = header('location:Dashboard.php');
    }
} else {
    $_SESSION['Error'] =
        '<p style="font-size: 14px; margin-top: 25px;"> Your username or password is invalid </p>';
    $show = header('location:Login.php');
}
echo $show;
?>
