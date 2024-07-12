<?php
    session_start();
    include("db.php");
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $saleorderid=$_POST['saleorderid'];
        $saleorderdate=$_POST['saleorderdate'];
        $customerid=$_POST['customerid'];
        $productid=$_POST['productid'];
        $saleorderquantity=$_POST['saleorderquantity'];
        $remarks=$_POST['remarks'];

        if(!empty($saleorderid) && !empty($customerid) &&!empty($productid) &&!is_numeric($remarks))
        {
            
            $query = "insert into saleorder(saleorderid,saleorderdate,customerid,productid,saleorderquantity,remarks) values('$saleorderid','$saleorderdate','$customerid','$productid','$saleorderquantity','$remarks')";
            mysqli_query($con,$query);

            echo "<script type='text/javascript'> alert(' Order Successfully Received')</script>";
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
    <style>
             body{
        background:url("7.jpeg");
        background-repeat:no-repeat;
        width:100%;
        height:100vh;
        background-size:cover;
    }
.signup{
    width: 360px;
    height: 800px;
    margin: auto;
    background: transparent;
    border-radius: 3px;
}
.login{
    width: 360px;
    height: 320px;
    margin: auto;
   
    border-radius: 3px;
}
h1{
    text-align: center;
    
}
h4{
    text-align: center;
    padding-top: 15px;
}
form{
    width: 300px;
    margin-left: 20px;
}
form label{
    display: flex;
    margin-top: 20px;
    font-size: 18px;

}
form input{
    width: 100%;
    padding: 7px;
    border: none;
    border: 1px solid grey;
    border-radius: 6px;
    outline: none;
}
input[type="submit"]{
    width: 320px;
    height: 35px;
    margin-top: 20px;
    border: none;
    background-color: #ff7200;
    color: white;
    font-size: 18px;
    cursor: pointer;
}
input[type="submit"]:hover{
    color: white;
    background: rgb(13, 211, 247);
}
p{
    text-align: center;
    padding-top: 20px;

}
    </style>
</head>
<body>
<div class="signup">
        <h1>Sale Order</h1>
        
        <form method="POST">
            <label>Sale Order ID</label>
            <input type="number" name="saleorderid" min="100000" max="9999999" required>
            <label>Sale Order Date</label>
            <input type="date" name="saleorderdate" required>
            <label>Customer ID</label>
            <input type="number" name="customerid" required>
            <label>Product ID</label>
            <input type="text/number" name="productid" required>
            <label>Sale Order Quantity</label>
            <input type="alphanumeric" name="saleorderquantity" required>
            <label>Remarks</label>
            <input type="text" name="remarks" required>
            <div class="two">
            <a href="main.php">
            <input type="submit" value="Submit">
            </a>
            </div>
        </form>
        <p>By clicking on the Signup button, you agree to our <br>
        <a href="">Terms and Conditions</a> and <a href="">Policy Privacy</a>
        </p>
    </div>

</body>
</html>
</body>
</html>