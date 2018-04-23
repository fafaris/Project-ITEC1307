<?php
include('topmenu.php');
?>
<html>
<head>
<style>
    body {
        background-color: #87CEFA;
    }
</style>
</head>
<body>
<form action="validateuser.php" method="post">
<table border="0" cellspacing="1" cellpadding="3">
<tr><td>Email Aaddress:</td><td><input type="text" name="emailaddress" style="border: 1.5px #0000FF solid">
</td></tr>
<tr><td>Password:</td><td><input type="password" name="password" style="border: 1.5px #0000FF solid"></td></tr>
<tr><td colspan=2 align="center"><input type="submit" name="submit" value="Login" style="background: #00CED1" ></td></tr>
</table>
</form>
</body>
</html>