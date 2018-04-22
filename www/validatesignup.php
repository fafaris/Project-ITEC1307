<?php
include('topmenu.php');
?>
<html>
<head>
<script language="JavaScript" type="text/JavaScript" src="checkform.js">
</script>
</head>
    <body bgcolor = "#87CEFA">
    <form action="addcustomer.php" method="post" onsubmit="return validate(this);">
        <table border="0" cellspacing="1" cellpadding="3">
        <tr><td colspan="2" align="center">Enter your information</td></tr>
        <tr><td>Email Address: </td><td><input size="20" type="text"
        name="emailaddress" style="border: 1.5px #0000FF solid"><span id="emailmsg" ></span></td></tr>
        <tr><td>Password: </td><td><input size="20" type="password"
        name="password" style="border: 1.5px #0000FF solid"><span id="passwdmsg"></span></td></tr>
        <tr><td>ReType Password: </td><td><input size="20"
        type="password" name="repassword" style="border: 1.5px #0000FF solid"><span id="repasswdmsg">
        </span></td></tr>
        <tr><td>Complete Name </td><td><input size="50" type="text"
        name="complete_name" style="border: 1.5px #0000FF solid"><span id="usrmsg"></span></td></tr>
        <tr><td>Address: </td><td><input size="80" type="text"
        name="address1" style="border: 1.5px #0000FF solid"></td></tr>
        <tr><td></td><td><input size="80" type="text" name="address2" style="border: 1.5px #0000FF solid">
        </td></tr>
        <tr><td>City: </td><td><input size="30" type="text"
        name="city" style="border: 1.5px #0000FF solid"></td></tr>
        <tr><td>State: </td><td><input size="30" type="text"
        name="state" style="border: 1.5px #0000FF solid"></td></tr>
        <tr><td>Country: </td><td><input size="30" type="text"
        name="country" style="border: 1.5px #0000FF solid"></td></tr>
        <tr><td>Zip Code: </td><td><input size="20" type="text"
        name="zipcode" style="border: 1.5px #0000FF solid"></td></tr>
        <tr><td>Phone No: </td><td><input size="30" type="text"
        name="phone_no" style="border: 1.5px #0000FF solid"></td></tr>
        <tr><td><input type="submit" name="submit" value="Submit" style="background: #00CED1">
        </td><td>
        <input type="reset" value="Cancel" style="background: #00CED1"></td></tr>
        </table>
    </form>
    </body>
</html>