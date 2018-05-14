<?php
include('server.php');
$db = mysqli_connect('localhost', 'root', '', 'webtech');

$name = mysqli_real_escape_string($db, $_POST['name']);
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);

$password = hash('sha1', $password);

$user_check_query = "SELECT * FROM accounts WHERE username='$username' OR name='$name' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
if ($user) {
    if ($user['username'] === $username) {
      echo "<script>
      alert('Username already exists');
      window.history.back();
      </script>";
    }
    if ($user['name'] === $name) {
      echo "<script>
          alert('Name already exists');
          window.history.back();
          </script>";
    }
}else{
    $query = "INSERT INTO `accounts` (`name`, `username`, `password`) VALUES ('$name','$username','$password');";
    if ($db->query($query) === true) {
        echo "
            <script>
                alert('Thank you for registering.');
                window.history.back();
            </script>";
    }
}

