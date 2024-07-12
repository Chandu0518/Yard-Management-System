<?php
    session_start();
    include("db.php");
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $customerno=$_POST['customerno'];
        $customername=$_POST['customername'];
        $customeraddress=$_POST['customeraddress'];
        $city=$_POST['city'];
        $pin=$_POST['pin'];
        $phoneno=$_POST['phoneno'];
        $emailid=$_POST['emailid'];
        $productgrade=$_POST['productgrade'];

        if(!empty($customerno) && !empty($emailid) &&!empty($productgrade) &&!is_numeric($city))
        {

            $query = "insert into master(customerno,customername,customeraddress,city,pin,phoneno,emailid,productgrade) values('$customerno','$customername','$customeraddress','$city','$pin','$phoneno','$emailid','$productgrade')";
            mysqli_query($con,$query);

            echo "<script type='text/javascript'> alert('Successfully Dispatched')</script>";
        }

        else
        {
            echo "<script type='text/javascript'> alert('Please Enter Valid Information')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yard Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="signup">
        <h1>Customer Master</h1>
        <form method="POST">
            <label>Customer No</label>
            <input type="text" name="customerno" required>
            <label>Customer Name</label>
            <input type="text" name="customername" required>
            <label>Customer Address</label>
            <input type="text" name="customeraddress" required>
            <label>City</label>
            <input type="text" name="city" required>
            <label>Pin</label>
            <input type="number" name="pin" required>
            <label>Phone No</label>
            <input type="number" name="phoneno" required>
            <label>Email ID</label>
            <input type="emailt" name="emailid" required>
            <label>Product Grade</label>
            <input type="text" name="productgrade" required>
            <input type="submit" value="Submit">
        </form>
        <p>By clicking on the Submit button, you agree to our <br>
        <a href="">Terms and Conditions</a> and <a href="">Policy Privacy</a>
        </p>
        
    </div>
</body>
</html>