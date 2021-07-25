<!DOCTYPE html>

<?php
    $total = 0;
    include("header.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-1">
        <div class="row-1">
            <div class="col-2">
                <h1 >MY CART</h1>
            </div>
            <div class="col-3">
                <table class="tables">
                    <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Item_Name</th>
                            <th>Prize</th>
                            <th>Quantity</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(isset($_SESSION['cart']))
                            {
                                foreach($_SESSION['cart'] as $key => $value)
                                {
                                    $sn = 1 + $key;
                                    $total = $total + ($value['Prize']*$value['Quantity']);
                                    echo"
                                        <tr>
                                            <td>$sn</td>
                                            <td>$value[Item_name]</td>
                                            <td>$value[Prize]</td>
                                            <td>
                                            <form action='manage.php' method='POST'>
                                                <select name='Quantity'>
                                                <option value=$value[Quantity]>$value[Quantity]</option>
                                                    <option value=1>1</option>
                                                    <option value=2>2</option>
                                                    <option value=3>3</option>
                                                    <option value=4>4</option>
                                                    <option value=5>5</option>
                                                    <option value=6>6</option>
                                                    <option value=7>7</option>
                                                    <option value=8>8</option>
                                                    <option value=9>9</option>
                                                    <option value=10>10</option>
                                                </select>
                                                <button class='remove' name='Quantity1' id='add'>ADD</button>
                                                <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                            </form>
                                            </td>
                                            <td>
                                                <form action='manage.php' method='POST'>
                                                    <input type='hidden' name='Item_name' value='$value[Item_name]'>
                                                    <button name='Remove' class='remove' id='remove'>REMOVE</button>
                                                </form>
                                            <td>
                                        </tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            
            <div class="col-5">
                    <h4>Total Prize:</h4>
                    <h5 class="text_right"> Rs: <?php echo $total ?> </h5>
                    <br>
                    <form>
                        <div class="payment">
                            <input type="radio" checked>
                            <level>Cash On Delivery</level>
                        </div>
                        <button class="btn">Make Payment</button>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>