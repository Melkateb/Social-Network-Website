<!DOCTYPE html>
<?php
$con = mysqli_connect("localhost", "root", "", "website");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<html>
    <head>
    <h1>Welcome to our Website</h1>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        .register{
            margin: 0 auto;
            margin-top: 40px;
            border: 2px solid #000000;
            width: 200px;padding:40px;
        }
        body{background:#EFEFEF;font-family:Arial,Tahoma}
        label,input,select{display: block}
        input{padding:10px;}

        fieldset{
            background: #FFF;
            border: 1px solid #CCC;
            padding: 10px;
            margin-bottom: 20px
        }
        legend{
            background: #FFF;
            border: 1px solid #CCC;
            padding: 5px;
        }
        .error{
            color: #FF0000;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <form name="register" method="post" action="check.php">
        <fieldset>
            <legend>Log in</legend>
            <label>Email</label>
            <input type="email" name="email" required=>
            <label>Password</label>
            <input type="password" name="password" required=>
            <br>
            <input type="submit" name="login" value="Log in">

        </fieldset>
    </form>
    Not Register? <a href="register.php"> Sign up Here</a>

</body>
</html>
