<?php
    if(isset($_POST['submit'])){
        $u = $p = "";
        if($_POST['user'] == NULL){
            echo "Please enter your username<br />";
        }
        else{
            $u = $_POST['user'];
        }
        if($_POST['pass'] == NULL){
            echo "Please enter your password<br />";
        }
        else{
            $p = $_POST['pass'];
        }

        if($u && $p){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "project";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password,$db);
            
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
    
            $sql="SELECT * FROM `user` WHERE `name` = '$u' and `password` = '$p'";
            $result = $conn->query($sql);
    
            if ($result->num_rows > 0){
               header('location: http://localhost/web_mysql/pages/index.php');
            } else{
               header('location: http://localhost/web_mysql/');
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="singup">
        <div class="container">
            <div class="login-text">
                <h1>Login</h1>
                <h3>By logging in you agree to the ridiculously long terms that you didn't bother to read</h3>
            </div>
            <div class="login">
                <form action="" method="post">
                    <div>
                        <input type="text" name="user" class="singup-input" placeholder="User">
                    </div>
                    <div>
                        <input type="password" name="pass" class="singup-input" placeholder="Password">
                    </div>
                    <input  type="submit" id="submit" name="submit" value="Login">  
                    
                </form> 
            </div>
        </div>
    </div>
</body>
</html>