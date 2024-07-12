<?php
    session_start();
    include("db.php");
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $firstname=$_POST['fname'];
        $lastname=$_POST['lname'];
        $email=$_POST['email'];
        $username=$_POST['uname'];
        $password=$_POST['pass'];
        $contact=$_POST['cno'];

        if(!empty($email) && !empty($password) &&!is_numeric($email))
        {

            $query = "insert into form(fname,lname,email,pass,cno) values('$firstname','$lastname','$email','$password','$contact')";
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
    <title>Yard Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="signup">
        <h1>Admin SignUp</h1>
        <h4>It's free and only takes a minute</h4>
        <form method="POST">
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last Name</label>
            <input type="text" name="lname" required>
            <label>User Name</label>
            <input type="text" name="uname" required>
            <label>E-mail</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <label>Contact</label>
            <input type="number" name="cno" required>
            <input type="submit" value="Submit">
        </form>
        <p>By clicking on the Signup button, you agree to our <br>
        <a href="">Terms and Conditions</a> and <a href="">Policy Privacy</a>
        </p>
        <p>Already have an account ? <a href="login.php">Login Here</a> </p>
    </div>
</body>
</html>