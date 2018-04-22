<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Shop Online</title>
<link rel="stylesheet" href="css/style.css">
<script language="JavaScript" type="text/JavaScript">
function makeRequestObject(){
var xmlhttp=false;
try {
xmlhttp = new ActiveXObject('Msxml2.XMLHTTP'); // #1
} catch (e) {
try {
xmlhttp = new
ActiveXObject('Microsoft.XMLHTTP'); // #2
} catch (E) {
xmlhttp = false;
}
}
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
xmlhttp = new XMLHttpRequest(); // #3
}
return xmlhttp;
}
function updateCart(){ // #4
var xmlhttp=makeRequestObject();
xmlhttp.open('GET', 'countcart.php', true); // #5
xmlhttp.onreadystatechange = function(){ // #6
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { // #7
var ajaxCart = document.getElementById("cartcountinfo"); // #8
ajaxCart.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
</script>
</head>
<body bgcolor = "#87CEFA">
<table width="100%" cellspacing="0" cellpadding="2">
<col style="width:30%">
<col style="width:40%">
<col style="width:20%">
<tr><td style="background-color:#BFEFFF;color:Blue;"></td><td style="background-color:#BFEFFF;color:Blue;"></td><td style="background-color:#BFEFFF;color:Blue;">
<?php
if (session_status() == PHP_SESSION_NONE) {
session_start();
}
if (isset($_SESSION['emailaddress']))
{
echo "Welcome " . $_SESSION['emailaddress'] . "&nbsp;&nbsp;&nbsp;"; // #9
echo "<a href=\"logout.php\">Log Out</a></td></tr>";
}
else
{
echo "<a href=\"signin.php\">Login</a>&nbsp;&nbsp;&nbsp;";
echo "<a href=\"validatesignup.php\">Signup</a></td></tr>";
}
?>
<tr><td style="font-size: 35px;color:#F0FFFF;background-color:#1E90FF;">
<b>Shop Online</b></font></td>
<td bgcolor="#1E90FF">
<form method="post" action="searchitems.php">
<input size="50" type="text" name="tosearch">
<button type="submit" name="button" id="button" style="background: #00CED1"><img src="images/search-icon.png" width="16" height="16" align="absmiddle" /> search</button>
</form></td>
<td bgcolor="#1E90FF" ><a href="cart.php"><img style="max-width:40px;max-height:40px;width:auto;height:auto;" src="images/cart1.png"></img>
<span id="cartcountinfo"></span></a>
</td></tr>
</table>
<div class="container">
<nav>
<ul class="nav">
<li><a href="index.php">Home</a></li>
<li class="dropdown">
<a href="index.php">Electronics</a>
<ul>
<li><a href="itemlist.php?category=CellPhone">Smart Phones</a></li>
<li><a href="itemlist.php?category=Laptop">Laptops</a></li>
<li><a href="itemlist.php?category=Camera">Cameras </a></li>
<li><a href="itemlist.php?category=Tv">Televisions</a></li>
</ul>
</li>
<li class="dropdown">
<a href="index.php">Home & Furniture</a>
<ul class="large">
<li><a href="index.php">Kitchen Essentials</a></li>
<li><a href="index.php">Bath Essentials</a></li>
<li><a href="index.php">Furniture</a></li>
<li><a href="index.php">Dining & Serving</a></li>
<li><a href="index.php">Cookware</a></li>
</ul>
</li>
<li><a href="index.php">Books</a></li>
</ul>
</nav>
</div>
<p>