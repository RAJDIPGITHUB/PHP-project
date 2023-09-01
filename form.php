<?php include("db_connect.php");?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Registration form
        </title>
        <link rel="stylesheet" href="fstyle.css">
    </head>
    <body>
        <div class="container">
            <form action="#" method="POST">
            <div class="title">
                REGISTRATION FROM
            </div>
            <div class="form">
                <div class="input_field">
                    <lable>Company name</lable>
                    <input type="text" class="input" name="cn" required>
                </div>
                <div class="input_field">
                    <lable>Company's CEO's name</lable>
                    <input type="text" class="input" name="ccn" required>
                </div>
                <div class="input_field">
                    <lable>Password</lable>
                    <input type="password" class="input" name="pass" required>
                </div>
                <div class="input_field">
                    <lable>confirm password</lable>
                    <input type="password" class="input" name="cpass" required>
                </div>
                <div class="input_field">
                    <lable>Email</lable>
                    <input type="text" class="input" name="em" required>
                </div>
                <div class="input_field">
                    <lable>Address</lable>
                    <textarea name="add" required></textarea>
                </div>
                <div class="input_field_terms">
                    <lable class="check">
                    <input type="checkbox" required>
                    <span class="checkmark"></span>
                    </lable>
                    <p>Agree terms and conditions.</p>
                </div>
                <div class="input_field">
                 <input type="submit" value="SUBMIT" class="btn" name="register">
                </div>
            </div>
</form>
        </div>
        <form action="#" method="POST">
        <input type="submit" name="submit" value="LOG IN" style="background: blue;color: white; height: 30px; border: 1px solid blue; cursor: pointer;  border-radius: 5px;">
        </form>
    </body>
</html>

<?php
error_reporting(0);
    if($_POST['register'])
    {   
        $cn    = $_POST['cn'];
        $ccn   = $_POST['ccn'];
        $pass  = $_POST['pass'];
        $cpass = $_POST['cpass'];
        $em    = $_POST['em'];
        $add   = $_POST['add'];

       
        $query = "INSERT INTO dbform(company_name,ceo_name,password,cpassword,email,address) VALUES('$cn','$ccn','$pass','$cpass','$em','$add')";
        $data  = mysqli_query($conn, $query);

        if($data)
        {  // echo "data inserted"; 
        }
    }
    if($_POST['submit'])
    {   header('location: login.php');}
?>