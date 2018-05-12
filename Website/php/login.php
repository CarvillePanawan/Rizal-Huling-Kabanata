<?php
include('connectDB.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$sql = "select account_id from accounts where username='$username' and password='$password'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];
    
$count = mysqli_num_rows($result);
    
if($count == 1){
    session_register("$username");
    $_SESSION['u_login'] = $username;
    header("location: index.html");
}else{
    $error = "Your Username or password is incorrect.";
}
}
?>