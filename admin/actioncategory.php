<?php 
session_start();
if(isset($_POST['store']))
{
    $priority = $_POST['priority'];
    $categoryname = $_POST['categoryname'];

    $qry = "INSERT INTO categories(priority, categoryname) VALUES ($priority, '$categoryname')";
    include 'dbconnection.php';
    $res = mysqli_query($conn, $qry);
    include 'closeconnection.php';
    if($res) {
        $_SESSION['msg'] = "Category Created Successfully";
        header('location: categories.php');
    } else {
        echo "Failed to add category";
    }

}

// Update category
if(isset($_POST['update']))
{
    $priority = $_POST['priority'];
    $categoryname = $_POST['categoryname'];
    $id = $_POST['categoryid'];

    $qry = "UPDATE categories SET priority = $priority, categoryname = '$categoryname' WHERE id = $id";
    include 'dbconnection.php';
    $res = mysqli_query($conn, $qry);
    include 'closeconnection.php';
    if($res) {
        $_SESSION['msg'] = "Category Updated Successfully";
        header('location: categories.php');
    } else {
        echo "Failed to update category";
    }
}

//for delete
if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    $qry = "DELETE FROM categories WHERE id = $id";
    include 'dbconnection.php';
    $res = mysqli_query($conn, $qry);
    include 'closeconnection.php';
    if($res) {
        $_SESSION['msg'] = "Category Deleted Successfully";
        header('location: categories.php');
    } else {
        echo "Failed to delete category";
    }
}

?>