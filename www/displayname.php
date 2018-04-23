<?php
include('top-menu.php');
$connect = mysqli_connect("localhost", "root", "", "student") or
die("Please, check your server connection.");
$tosearch = $_POST['tosearch'];
$query = "select * from student where ";
$query_fields = Array();
$sql = "SHOW COLUMNS FROM student"; // #1
$columnlist = mysqli_query($connect, $sql) or die(mysql_error()); // #2
while($arr = mysqli_fetch_array($columnlist, MYSQLI_ASSOC)){ // #3
extract($arr);
$query_fields[] = $Field . " like('%". $tosearch . "%')";
}
$query .= implode(" OR ", $query_fields);
echo $query;
$results = mysqli_query($connect, $query) or die(mysql_error());
$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
extract($row);
echo $Name . "  " . $LastName . '<br/>';
?>