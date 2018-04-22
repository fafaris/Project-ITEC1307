<?php 
include('topmenu.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    }
if (isset($_SESSION['emailaddress']))
{
$email_address=$_SESSION['emailaddress'];
echo "Welcome " . $email_address . ". <br/>";
}
if (isset($_SESSION['password']))
{
$password=$_SESSION['password'];
}
if ((isset($_SESSION['password']) && $_SESSION['emailaddress'] != "") || (isset($_SESSION['password']) && $_SESSION['password'] != "")){
    $sess = session_id();
    $connect = mysqli_connect("localhost", "root", "", "shopping") or die("Please, check your server connection.");
    $query = "SELECT * FROM cart where cart_sess = '$sess'";
    $results = mysqli_query($connect, $query) or die(mysql_error());}
    $count = 0;
?>
<html>
    <body>
        <form action='https://sandbox.2checkout.com/checkout/purchase' method='post'>
            <input type='hidden' name='sid' value='901376229' />
            <input type='hidden' name='mode' value='2CO' />
            <?php
                while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)){
                    extract($row);
                    echo"<input type='hidden' name='li_{$count}_type' value='product' />
                        <input type='hidden' name='li_{$count}_name' value='$cart_item_name'/>
                        <input type='hidden' name='li_{$count}_quantity' value='$cart_quantity'/>
                        <input type='hidden' name='li_{$count}_price' value='$cart_price'/>";
                        $count = $count + 1;
                }
            ?>
            <input type='hidden' name='card_holder_name' value=<?php echo $_POST['complete_name'] ?> />
            <input type='hidden' name='street_address' value=<?php echo $_POST['shipping_address_line1'] ?> />
            <input type='hidden' name='street_address2' value=<?php echo $_POST['shipping_address_line2'] ?> />
            <input type='hidden' name='city' value=<?php echo $_POST['shipping_city'] ?> />
            <input type='hidden' name='state' value=<?php echo $_POST['shipping_state'] ?> />
            <input type='hidden' name='zip' value= <?php echo $_POST['zipcode'] ?> />
            <input type='hidden' name='country' value='Thailand' />
            <input type='hidden' name='email' value=<?php echo $_POST['email_address'] ?> />
            <input type='hidden' name='phone' value=<?php echo $_POST['phone_no'] ?> />
            <?php echo "Please click the button to pay. "?>
            <input name='submit' type='submit' value='Checkout' style="background: #00CED1"/>
        </form>
    </body>
</html>