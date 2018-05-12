<? php
$connect = mysqli_connect('localhost', 'root', '', webtech);

$name= mysqli_real_escape_string($connection, $_POST['name']);
$username = mysqli_real_escape_string($connection, $_POST['username']);
$password=mysqli_real_escape_string($connection, $_POST['password']);

$sql = "INSERT INTO `accounts` (name,username,password) VALUES ('$name', '$username', '$password')";
?>