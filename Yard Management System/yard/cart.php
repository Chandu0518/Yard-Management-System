<?php
    include("header.php");
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cart</title>
    <style>
        .sale a{
            text-decoration:None;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">Serial No</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                            $total=0;
                            if(isset($_SESSION['cart']))
                            {
                                foreach($_SESSION['cart'] as $key => $value)
                                {
                                    $sr=$key+1;
                                    $total=$total+$value['Price'];
                                    echo "
                                        <tr>
                                            <td>$sr</td>
                                            <td>$value[Item_Name]</td>
                                            <td>$value[Price]</td>
                                            <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
                                            <td>
                                                <form action='manage_cart.php' method='POST'>
                                                    <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                </form>
                                            </td>
                                        </tr>
                                    ";
                                }
                            }
                        ?>
                      
                        
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4 ">
                    <h4>Total:</h4>
                    <h5 class="text-right"><?php echo $total ?></h5><br>
                    <form>

                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Cash On Delivery
                    </label>
                    </div>
                    <div class="sale">
                        <a href="saleorder.php">
                        <h3> Make Purchase</h3>
                        </a>
                    </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>