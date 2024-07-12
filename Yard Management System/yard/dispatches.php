<?php
    session_start();
    include("db.php");
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $saleorder=$_POST['saleorder'];
        $dispatchedquantity=$_POST['dispatchedquantity'];
        $dispatchdate=$_POST['dispatchdate'];
        $truckid=$_POST['truckid'];
        $remarks=$_POST['remarks'];

        if(!empty($saleorder) && !empty($dispatchedquantity) &&!empty($truckid) &&!is_numeric($remarks))
        {

            $query = "insert into dispatch(saleorder,dispatchedquantity,dispatchdate,truckid,remarks) values('$saleorder','$dispatchedquantity','$dispatchdate','$truckid','$remarks')";
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
        <h1>Dispatch System</h1>
        <form method="POST">
            <label>Sale Order</label>
            <input type="text" name="saleorder" required>
            <label>Dispatched Quantity</label>
            <input type="text" name="dispatchedquantity" required>
            <label>Dispatch Date</label>
            <input type="date" name="dispatchdate" required>
            <label>Truck ID</label>
            <input type="text" name="truckid" required>
            <label>Remarks</label>
            <input type="text" name="remarks" required>
            <input type="submit" value="Submit">
        </form>
        <p>By clicking on the Submit button, you agree to our <br>
        <a href="">Terms and Conditions</a> and <a href="">Policy Privacy</a>
        </p>
        
    </div>
</body>
</html>