<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_to_cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $No_of_items = array_column($_SESSION['cart'],'Item_name');

            if(in_array($_POST['Item_name'],$No_of_items))
            {
                foreach($_SESSION['cart'] as $key => $value)
                {
                    if($_POST['Item_name'] == $value['Item_name'])
                    {
                        $_SESSION['cart'][$key]['Quantity'] += $_POST['Quantity'];
                        echo"<script>
                            alert('Item Added');
                            window.location.href='index1.php';
                            </script>";
                    }
                }
            }
            else
            {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('Item_name'=>$_POST['Item_name'], 'Prize'=>$_POST['Price'], 'image'=>$_POST['image'], 'Quantity' => 1);
                echo"<script>
                    alert('Item Added');
                    window.location.href='index1.php';
                    </script>";
            }
        }
        else
        {
            $_SESSION['cart'][0] = array('Item_name'=>$_POST['Item_name'], 'Prize'=>$_POST['Price'], 'image'=>$_POST['image'],'Quantity'=>1);
            echo"<script>
                    alert('Item Added');
                    window.location.href='index1.php';
                    </script>";
        }
    }
    else if(isset($_POST['Remove']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Item_name'] == $_POST['Item_name'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);

                $count1 = count($_SESSION['cart']);
                
                if($count1)
                {
                    echo"<script>
                    alert('Item removed');
                    window.location.href='add_to_cart.php';
                    </script>";
                }
                else
                {
                    echo"<script>
                alert('Item removed');
                window.location.href='index1.php';
                </script>";
                }
            }
        }
    }
    else if(isset($_POST['Quantity1']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($_POST['Item_name'] == $value['Item_name'])
            {
                $_SESSION['cart'][$key]['Quantity'] = $_POST['Quantity'];
                echo"<script>
                    alert('Item Added');
                    window.location.href='add_to_cart.php';
                    </script>";
            }
        }
    }
}

?>