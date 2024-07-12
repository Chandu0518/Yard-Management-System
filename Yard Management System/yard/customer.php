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

            echo "<script type='text/javascript'> alert('Successfully Registered')</script>";
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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .one a{
            border:4px solid rgb(78, 193, 255 );
            text-decoration:None;
            font-size:20px;
            border-radius:10px;
            padding:10px;
    
            overflow:hidden;
            margin-left:30%;
            margin-top:auto;
        }
        h1{
            font-style:underline;
        }
        .one a:hover{
            color: rgb(78, 193, 255 ) ;
            border:5px solid rgb(78, 193, 255 );
        }


     
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
.two a{
    width: 300px;
    height: 35px;
    margin-top: 20px;
    border: none;
    background-color: #ff7200;
    color: white;
    font-size: 18px;
    cursor: pointer;
    width: 100%;
    padding: 7px;
    border: none;
    border: 1px solid grey;
    border-radius: 6px;
    outline: none;
    display: flex;
    margin-top: 20px;
    font-size: 18px;
    text-decoration:None;
    

}

.two a:hover{
    color: white;
    background: rgb(13, 211, 247);
}





    </style>
</head>
<body>
    <h1><u> Welcome User</u></h1>
    <div class="one">
        <a href="main.php">Order</a>
        <a href="login.php">Logout</a>
    </div>
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