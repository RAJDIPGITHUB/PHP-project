<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            LOGIN FORM
        </title>
        <link rel="stylesheet" href="login-style.css">
    </head>
<body>
    <div class="center">
        <h1>LOGIN</h1>
        <form action="#" method="POST">
        <div class="form">
        <input type="text" name="username" class="textfield" placeholder="Username">
        <input type="password" name="password" class="textfield" placeholder="Password">

        <div class="forgotpass"><a href="#" class="link" onclick="message()">Forget Password ?</a></div>
        <input type="submit" name="login" value="Login" class="btn">
        <div class="sign">New member?<a href="http://localhost/registration/form.php" class="link">Register Now!</a></div>
        </div>
    </div>
    </form>
<script>
    function message()
    {   alert("Remember Password!");}
</script>
</body>
</html>

<?php
    include("db_connect.php");
    error_reporting(0);
    if($_POST['login'])
    {   $user = $_POST['username'];
        $pwd = $_POST['password'];

        $query = "SELECT * FROM dbform WHERE email='$user' && password='$pwd'";
        $data = mysqli_query($conn, $query);

        $total = mysqli_num_rows($data);
        //echo $total;
        if($total !=0)
        {   echo "Login Successful";
            $_SESSION['user_name'] = $user;
            header('location:sale.php');
        }
        else
        {echo "Login Failed!";
        }
    }

?>