<?php 
$priority = $_POST['priority'];
$categoryname = $_POST['categoryname'];

$qry = "INSERT INTO categories(priority, categoryname) VALUES ($priority, '$categoryname')";
include 'dbconnection.php';
$res = mysqli_query($conn, $qry);
include 'closeconnection.php';
if($res) {
    header('location: categories.php');
} else {
    echo "Failed to add category";
}


?>