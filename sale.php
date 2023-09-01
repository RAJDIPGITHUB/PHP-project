<?php include("db_connect.php");?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Sale_waste form
        </title>
        <link rel="stylesheet" href="fstyle.css">
    </head>
    <body>
        <div class="container">
            <form action="#" method="POST">
            <div class="title">
                SALE(CARBON-BASED WASTE) FROM
            </div>
            <div class="form">
                <div class="input_field">
                    <lable>Company name</lable>
                    <input type="text" class="input" name="cn" required>
                </div>
                <div class="input_field">
                    <lable>Waste manager name</lable>
                    <input type="text" class="input" name="wmn" required>
                </div>
                <div class="input_field">
                    <lable>Bank details(A/C no.)</lable>
                    <input type="text" class="input" name="bd" required>
                </div>
                <div class="input_field">
                    <lable>Email</lable>
                    <input type="text" class="input" name="em" required>
                </div>
                <div class="input_field">
                    <lable>Address</lable>
                    <textarea name="add" required></textarea>
                </div>
                <div class="input_field">
                    <lable>MSW WASTE(in Tons)</lable>
                    <input type="text" class="input" name="pr" required>
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
        <input type="submit" name="submit" value="LOG OUT" style="background: blue;color: white; height: 30px; border: 1px solid blue; cursor: pointer;  border-radius: 5px;">
        </form>
    </body>
</html>

<?php
session_start();
error_reporting(0);
    if($_POST['register'])
    {   
        $cn    = $_POST['cn'];
        $wmn   = $_POST['wmn'];
        $bd    = $_POST['bd'];
        $em    = $_POST['em'];
        $add   = $_POST['add'];
        $pr    = $_POST['pr'];

        $userprofile = $_SESSION['user_name'];
        if($userprofile == true)
        {
        }
        else
        {   header('location: login.php');}
       
        $query = "INSERT INTO sale(companyname,wmn,bank,email,address,product) VALUES('$cn','$wmn','$bd','$em','$add','$pr')";
        $data  = mysqli_query($conn, $query);

        if($data)
        {  // echo "data inserted"; 
        }
    }
    if($_POST['submit'])
    {   header('location: logout.php');}
?>