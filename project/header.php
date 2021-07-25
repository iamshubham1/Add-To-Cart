<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    <head>
        <title>Ecommerce Website</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    </head>
    <body style = "opacity = 1;">
        <div class="container" >
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo.png" width="125px">
                </div>
                <nav>
                    <ul>
                        <li><a href="index1.php" style="color:purple;">Home</a></li>
                        <li><a href="" style="color:purple;">Product</a></li>
                        <li><a href="" style="color:purple;">About</a></li>
                        <li><a href="" style="color:purple;">Contact</a></li>
                        <li><a href="" style="color:purple;">Account</a></li>
                    </ul>
                </nav>
                <?php
                    $sum = 0;
                    if(isset($_SESSION['cart']))
                    {
                        foreach($_SESSION['cart'] as $key => $value)
                        {
                            $sum = $sum + $value['Quantity'];
                        }

                    }
                ?>
                <a href="add_to_cart.php"><img src="images/add to cart icon.png" width="30px" height="30px"><?php echo $sum ?></a>
            </div>
        </div>
    </body>