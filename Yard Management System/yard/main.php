<?php
    include("header.php");
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="1.png" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Special Steel</h5>
                            <p class="card-text">8mm EN Rounds Starts From <br> Price: Rs.73750</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Special Steel">
                            <input type="hidden" name="Price" value="73750">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="2.png" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">TMT Bar</h5>
                            <p class="card-text">Mild Steel 12mm TMT Bar <br> Price: Rs.36500</p>
                            <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="TMT Bar">
                            <input type="hidden" name="Price" value="36500">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="3.png" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Structural Steel</h5>
                            <p class="card-text"> Thick TMT Structural Steels <br> Price: Rs.54250</p>
                            <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Structural Steel">
                            <input type="hidden" name="Price" value="54250">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="4.png" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Forged Rounds</h5>
                            <p class="card-text"> Forging Steel Bars in India <br> Price: Rs.38000</p>
                            <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Forged Rounds">
                            <input type="hidden" name="Price" value="38000">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>