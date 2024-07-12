<?php
    session_start();
    include("db.php");
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $receiptid=$_POST['receiptid'];
        $truckid=$_POST['truckid'];
        $productid=$_POST['productid'];
        $receiveddate=$_POST['receiveddate'];
        $receivedquantity=$_POST['receivedquantity'];
        $remarks=$_POST['remarks'];

        if(!empty($receiptid) && !empty($truckid) &&!empty($productid) &&!is_numeric($remarks))
        {
            
            $query = "insert into receipt(receiptid,truckid,productid,receiveddate,receivedquantity,remarks) values('$receiptid','$truckid','$productid','$receiveddate','$receivedquantity','$remarks')";
            mysqli_query($con,$query);

            echo "<script type='text/javascript'> alert('Successfully Received')</script>";
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
            background: linear-gradient(120deg,#2980b9,#8e44ad);
        }

        .signup{
            width: 360px;
            height: 800px;
            margin: auto;
            background: white;
            border-radius: 3px;
        }
        .login{
            width: 360px;
            height: 320px;
            margin: auto;
            background: rgb(218, 243, 249);
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
            background-color: black;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }
        input[type="submit"]:hover{
            color: white;
            background: linear-gradient(120deg,#2980b9,#8e44ad);
        }
        p{
            text-align: center;
            padding-top: 20px;

        }



    </style>





</head>
<body>
    <div class="signup">
        <h1>Road Receipts</h1>
        <form method="POST">
            <label>Road Receipt ID</label>
            <input type="text" name="receiptid" required>
            <label>Truck ID</label>
            <input type="text" name="truckid" required>
            <label>Product ID</label>
            <input type="text" name="productid" required>
            <label>Received Date</label>
            <input type="date" name="receiveddate" required>
            <label>Received Quantity</label>
            <input type="number" min="100" max="1000"name="receivedquantity" required>
            <label>Remarks</label>
            <input type="text" name="remarks" required>
            <a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=register&table=receipt">
                <input type="submit" value="Submit">
            </a>
        </form>
        <p>By clicking on the Submit button, you agree to our <br>
        <a href="">Terms and Conditions</a> and <a href="">Policy Privacy</a>
        </p>
        
    </div>
</body>
</html>