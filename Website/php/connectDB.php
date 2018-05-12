<?php
$db = mysqli_connect('localhost','root','root','webtechlec');
if(!$db){
    die("error");
}else {
    echo "success";
}

?>