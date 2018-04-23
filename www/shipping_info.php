<?php
include('topmenu.php');
if (session_status() == PHP_SESSION_NONE) {
session_start();
}
if (isset($_SESSION['cartamount']))
{
$cartamount=$_SESSION['cartamount'];
}
$connect = mysqli_connect("localhost", "root", "", "shopping") or die("Please, check your server connection.");
$email_address="";
if (isset($_SESSION['emailaddress']))
{
$email_address=$_SESSION['emailaddress'];
}
if (isset($_SESSION['password']))
{
$password=$_SESSION['password'];
}
if ((isset($_SESSION['emailaddress']) && $_SESSION['emailaddress'] != "") ||
(isset($_SESSION['password']) && $_SESSION['password'] != "")) {
$query = "SELECT * FROM customers where email_address like '$email_address' and password like (PASSWORD('$password'))";
$results = mysqli_query($connect, $query) or die(mysql_error());
$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
extract($row);
?>
<html>
<head>
<style>
    body {
        background-color: #87CEFA;
    }
</style>
<form action="test2checkout.php" method="post">
<table border="0" cellspacing="1" cellpadding="3">
<tr><td colspan="2" align="center">Your information available with us:</td></tr>
<tr><td>Email Address:</td><td><input size="20" type="text" name="email_address" value="<?php echo $email_address; ?>" style="border: 1.5px #0000FF solid"></td></tr>
<tr><td>Complete Name: </td><td><input size="50" type="text" name="complete_name" value="<?php echo $complete_name; ?>" style="border: 1.5px #0000FF solid"></td></tr>
<tr><td>Address: </td><td><input size="80" type="text" name="address1" value="<?php echo $address_line1; ?>" style="border: 1.5px #0000FF solid"></td></tr>
<tr><td></td><td><input size="80" type="text" name="address2" value="<?php echo $address_line2; ?>" style="border: 1.5px #0000FF solid"></td></tr>
<tr><td>City: </td><td><input size="30" type="text" name="city" value="<?php echo $city; ?>" style="border: 1.5px #0000FF solid"></td></tr>
<tr><td>State: </td><td><input size="30" type="text" name="state" value="<?php echo $state; ?>" style="border: 1.5px #0000FF solid"></td></tr>
<tr><td>Country: </td><td><input size="30" type="text" name="country" value="<?php echo $country; ?>" style="border: 1.5px #0000FF solid"></td></tr>
<tr><td>Zip Code: </td><td><input size="20" type="text" name="zipcode" value="<?php echo $zipcode; ?>" style="border: 1.5px #0000FF solid"></td></tr>
<tr><td>Phone No: </td><td><input size="30" type="text" name="phone_no" value="<?php echo $cellphone_no; ?>" style="border: 1.5px #0000FF solid"></td></tr>
<tr><td colspan=2 align="center">Please update shipping information if different from the shown below: </td></tr>
<tr><td> Address to deliver at: </td><td><input type="text" size="80" name="shipping_address_line1" value="<?php echo $address_line1; ?>" style="border: 1.5px #0000FF solid"></td></tr>
<tr><td></td><td><input type="text" size="80" name="shipping_address_line2" value="<?php echo $address_line2; ?>" style="border: 1.5px #0000FF solid"></td></tr>
<tr><td> City: </td><td><input size="30" type="text" name="shipping_city" value="<?php echo $city; ?>" style="border: 1.5px #0000FF solid"></td></tr>
<tr><td> State: </td><td><input size="30" type="text" name="shipping_state" value="<?php echo $state; ?>" style="border: 1.5px #0000FF solid"></td></tr>
<tr><td> Country: </td><td><input size="30" type="text" name="shipping_country" value="<?php echo $country; ?>" style="border: 1.5px #0000FF solid"></td></tr>
<tr><td> Zip Code: </td><td><input type="text" size="20" name="shipping_zipcode" value="<?php echo $zipcode; ?>" style="border: 1.5px #0000FF solid"></td></tr>
<tr><td><input type="submit" name="submit" value="Supply Payment Information" style="background: #00CED1"></td><td>
<input type="reset" value="Cancel" style="background: #00CED1"></td></tr>
</table>
</form>
<?php
}
?>
</head>
</html>