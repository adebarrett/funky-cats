<!DOCTYPE html>
<html>
  
<head>
    <link rel="stylesheet" href="style.php" media="screen">
</head>
           
<body>
    <center style="padding-top: 50px;">
    
        <?php
        include('connect.php');
        // get values from form
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $dob =  $_REQUEST['dob'];
        $email = $_REQUEST['email'];
        // insert data
        $sql = "INSERT INTO employees  VALUES (NULL,'$first_name', 
            '$last_name','$dob','$email')";
        if(mysqli_query($conn, $sql)){
            include('show-table.php');
        }
        ?>

    </center>
</body>
  
</html>