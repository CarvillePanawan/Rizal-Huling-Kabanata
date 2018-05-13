<?php
$db = mysqli_connect('localhost','root','','webtech');
if(!$db){
    die("error");
}else {
    echo "success";
}

?>