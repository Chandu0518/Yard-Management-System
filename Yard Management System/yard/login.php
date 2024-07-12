<?php
    session_start();
    include("db.php");

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $email=$_POST['email'];
        $password=$_POST['pass'];


        if(!empty($email) && !empty($password) &&!is_numeric($email)){
            $query="select *from form where email='$email' limit 1";
            $result=mysqli_query($con,$query);

            if($result){
                if($result && mysqli_num_rows($result)>0){
                    $user_data=mysqli_fetch_assoc($result);

                    if($user_data['pass']==$password){
                        header("location:index.php");
                        die;
                    }
                }
            }
            echo "<script type='text/javascript'> alert('Incorrect Username or Password')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Incorrect Username or Password')</script>";
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
    <div class="login">
        <h1>Admin Login</h1>
        <form method="POST">
            <label>E-mail</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <input type="submit" value="Submit">
        </form>
        <p>Not have an account ? <a href="signup.php">SignUp Here</a></p>
</body>
</html>