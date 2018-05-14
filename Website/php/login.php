<?php
   $db = mysqli_connect('localhost','root','','webtech');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
       $username = mysqli_real_escape_string($db, $_POST['username']);
       $password = mysqli_real_escape_string($db, $_POST['password']);
       $password = hash('sha1', $password);
      
      $query = "SELECT * FROM accounts WHERE username = '$username' and password = '$password'";
      $result = $db->query($query);
      $row = $result->fetch_assoc();
      
      $count = $result->num_rows;
		
      if($count == 1) {
         $_SESSION['login_user'] = $username;
          echo"<script>
          alert('You are now logged in');
          window.history.back();
          </script>
          ";
      }else {
         echo "<script>
         alert('Invalid username or password');
         window.history.back();
         </script>";
      }
   }
?>