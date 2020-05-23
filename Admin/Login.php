<?php
if(isset($_POST['pass'])){
require("../conn.php");
session_start();
$uname=$_POST['Uname'];
$pass=$_POST['pass'];
$q="SELECT * FROM user WHERE `username`='".$uname."' AND `password`='".$pass."'";
$result = $con->query($q);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["username"];
        $_SESSION['uname']=$row["username"];
        header('location:./admin.php');

    }
} else {
   header('location:./Login.php');
}}
?>
<!DOCTYPE html>

<head>
    <title>Login</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Raleway:300,400,700');
    * {
        margin: 0;
        padding: 0;
        outline: none;
        box-sizing: border-box;
        font-family: 'Raleway', sans-serif;
    }
    
    body {
        background: #3598dc;
    }
    
    .cont {
        position: relative;
        width: 25%;
        height: 400px;
        padding: 10px 25px;
        margin: 10vh auto;
        background: #fff;
        border-radius: 8px;
    }
    
    .form {
        width: 100%;
        height: 100%;
    }
    
    h1,
    h2,
    .user,
    .pass {
        text-align: center;
        display: block;
    }
    
    h1 {
        color: #606060;
        font-weight: bold;
        font-size: 40px;
        margin: 30px auto;
    }
    
    .user,
    .pass,
    .login {
        width: 100%;
        height: 45px;
        border: none;
        border-radius: 5px;
        font-size: 20px;
        font-weight: lighter;
        margin-bottom: 30px;
    }
    
    .user,
    .pass {
        background: #ecf0f1;
    }
    
    .login {
        color: #fff;
        cursor: pointer;
        margin-top: 20px;
        background: #3598dc;
        transition: background 0.4s ease;
    }
    
    .login:hover {
        background: #3570dc;
    }
    
    @media only screen and (min-width: 280px) {
        .cont {
            width: 90%
        }
    }
    
    @media only screen and (min-width: 480px) {
        .cont {
            width: 60%
        }
    }
    
    @media only screen and (min-width: 768px) {
        .cont {
            width: 40%
        }
    }
    
    @media only screen and (min-width: 992px) {
        .cont {
            width: 30%
        }
    }
    
    h2 {
        color: #fff;
        margin-top: 25px;
    }
</style>

<body>
    <div class="cont">

        <div class="form">
            <form action="?" method="post">
                <h1>Admin Login</h1>
                <input type="text" class="user" name='Uname' placeholder="Username" />
                <input type="password" class="pass" name='pass' placeholder="Password" />
                <button class="login">Login</button>
            </form>
        </div>


    </div>
</body>

</html>