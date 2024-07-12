<?php
    include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .log a{
            color:black;
            border:4px solid white;
            text-decoration:None;
            font-size:20px;
            border-radius:10px;
            padding:5px;
            float:right;
            overflow:hidden;
            margin-left:10px;
            margin-top:auto;
        }
        .log a:hover{
            color:white;
            border:5px solid white;
            background:rgb(0, 98, 185)
        }
        h1{
            font-style:underline;
        }
        .road{
            padding:20% 39%;
            width:100%;
            
        }
        .road a{
            border:4px solid white;
            text-decoration:None;
            font-size:20px;
            border-radius:10px;
            padding:5px;
            color:white;
            
        }
        .road a:hover{
            color:white;
            border:5px solid ;
            background:violet;
           
            
        }
        


        body, html {
            height: 100%;
            }

            * {
            box-sizing: border-box;
            }

            .bg-image {
            /* The image used */
            background-image: url("st.jpeg");

            /* Add the blur effect */
            filter: blur(8px);
            -webkit-filter: blur(8px);

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }

            /* Position text in the middle of the page/image */
            .bg-text {
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
            color: white;
            font-weight: bold;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 40%;
            padding: 20px;
            text-align: center;
            }
            .bg-text a{
                text-decoration:None;
                color:white;
            }
            .bg-text h1:hover{
                color:white;
                border:5px solid white;
                background:rgb(0, 98, 185);
               
            }





            
    </style>
</head>
<body>
    <h1><u> Welcome Admin</u></h1>
   




   

    <div class="bg-image"></div>
  

    <div class="bg-text">
        <a href="receipt.php">
            <h1>Road Receipt</h1>
        </a>
        <a href="dispatches.php">
            <h1>Road Dispatches</h1>
        </a>
        <div class="log">
            <a href="login.php">Logout</a>
        </div>
    </div>
    






</body>
</html>