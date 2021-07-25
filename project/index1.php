<!DOCTYPE html>
<?php
    include("header.php");
?>

<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="small-container">
            <h2 class="title">Featured Product</h2>
            <div class="row">
                    <div class="col-4">
                        <form action="manage.php" method="POST">
                            <img src="images/image-1.jpg">
                            <h4>Pink baby frock</h4>
                            <p>Rs. 499</p>

                            <?php
                            if(isset($_SESSION['cart']))
                            {
                                $No_of_items = array_column($_SESSION['cart'],'Item_name');
                                if( -1 < array_search("Pink baby frock",$No_of_items))
                                {
                                    echo"<select name='Quantity'>
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
                                        <button class='remove' name='Add_to_cart' id='add'>ADD</button>
                                        <input type='hidden' name='Item_name' value='$value[Item_name]'>";
                                }
                                else
                                {
                                    echo"<button type='submit' class='btn' name='Add_to_cart'>Add To Cart</button>";
                                }
                            }
                            else
                            {
                                echo"<button type='submit' class='btn' name='Add_to_cart'>Add To Cart</button>";
                            }
                            ?>

                            <input type="hidden" name="Item_name" value="Pink baby frock">
                            <input type="hidden" name="Price" value="499">
                            <input type="hidden" name="image" value="images/image-1.jpg">
                        </form>
                    </div>
                    <div class="col-4">
                        <form action="manage.php" method="POST">
                            <img src="images/image-2.jpg">
                            <h4>Women top white colour </h4>
                            <p>Rs. 1999</p>
                            
                            <?php
                            if(isset($_SESSION['cart']))
                            {
                                $No_of_items = array_column($_SESSION['cart'],'Item_name');
                                if( -1 < array_search("Women top white colour",$No_of_items))
                                {
                                    echo"<select name='Quantity'>
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
                                        <button class='remove' name='Add_to_cart' id='add'>ADD</button>
                                        <input type='hidden' name='Item_name' value='$value[Item_name]'>";
                                }
                                else
                                {
                                    echo"<button type='submit' class='btn' name='Add_to_cart'>Add To Cart</button>";
                                }
                            }
                            else
                            {
                                echo"<button type='submit' class='btn' name='Add_to_cart'>Add To Cart</button>";
                            }
                            ?>

                            <input type="hidden" name="Item_name" value="Women top white colour">
                            <input type="hidden" name="Price" value="1999">
                            <input type="hidden" name="image" value="images/image-2.jpg">
                        </form>
                    </div>
                    <div class="col-4">
                        <form action="manage.php" method="POST">
                            <img src="images/image-3.jpg">
                            <h4>women's lower</h4>
                            <p>Rs. 699</p>
                            
                            <?php
                            if(isset($_SESSION['cart']))
                            {
                                $No_of_items = array_column($_SESSION['cart'],'Item_name');
                                if( -1 < array_search("women lowers",$No_of_items))
                                {
                                    echo"<select name='Quantity'>
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
                                        <button class='remove' name='Add_to_cart' id='add'>ADD</button>
                                        <input type='hidden' name='Item_name' value='$value[Item_name]'>";
                                }
                                else
                                {
                                    echo"<button type='submit' class='btn' name='Add_to_cart'>Add To Cart</button>";
                                }
                            }
                            else
                            {
                                echo"<button type='submit' class='btn' name='Add_to_cart'>Add To Cart</button>";
                            }
                            ?>

                            <input type="hidden" name="Item_name" value="women lowers">
                            <input type="hidden" name="Price" value="699">
                            <input type="hidden" name="image" value="images/image-3.jpg">
                        </form>
                    </div>
                    <div class="col-4">
                        <form action="manage.php" method="POST">
                            <img src="images/image-3.jpg">
                            <h4>women's lower white colour</h4>
                            <p>Rs. 999</p>
                            
                            <?php
                            if(isset($_SESSION['cart']))
                            {
                                $No_of_items = array_column($_SESSION['cart'],'Item_name');
                                if( -1 < array_search("womens lower white colour",$No_of_items))
                                {
                                    echo"<select name='Quantity'>
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
                                        <button class='remove' name='Add_to_cart' id='add'>ADD</button>
                                        <input type='hidden' name='Item_name' value='$value[Item_name]'>";
                                }
                                else
                                {
                                    echo"<button type='submit' class='btn' name='Add_to_cart'>Add To Cart</button>";
                                }
                            }
                            else
                            {
                                echo"<button type='submit' class='btn' name='Add_to_cart'>Add To Cart</button>";
                            }
                            ?>

                            <input type="hidden" name="Item_name" value="womens lower white colour">
                            <input type="hidden" name="Price" value="999">
                            <input type="hidden" name="image" value="images/image-3.jpg">
                        </form>
                    </div>
            </div>
        </div>
    </body>
</html>