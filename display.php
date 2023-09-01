<html>
    <head>
        <title>Display</title>
        <style>
            body{
                background-color: purple;
            }
            table{
                background-color: white;
            }
        </style>
    </head>

<?php
    include("db_connect.php");
    error_reporting(0);
    $query = "SELECT * FROM dbform";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);
    
   
    

    if($total != 0)
    {   //echo "Table has records";
        ?>
        <h2 align="center"><mark>Displaying all Records</mark></h2>
        <center><table border = "1" cellspacing="7" width ="70%">
            <tr>
            <th width="10%">Company Name</th>
            <th width="10%">CEO Name</th>
            <th width="10%">Password</th>
            <th width="20%">Email</th>
            <th width="20%">Address</th>
            </tr>
        <?php
        while( $result = mysqli_fetch_assoc($data))
        {
           echo "<tr>
                 <td>".$result["company_name"]."</td>
                 <td>".$result["ceo_name"]."</td>
                 <td>".$result["password"]."</td>
                 <td>".$result["email"]."</td>
                 <td>".$result["address"]."</td>
                 </tr>"; 
        }
    }
?>
</table>
</center>
