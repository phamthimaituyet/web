<?php
    $username = $_POST['user'];
    $password = $_POST['pass'];
    if($username == "admin" && $password == "12345"){
        echo "<h1>Tuyết ngốc</h1>"; 
    }else{
        header('location: http://localhost/web_mysql/index.php');
    }
?>