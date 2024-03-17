<?php
session_start();
if(isset($_POST['store']))
{
    $date = $_POST['date'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    //file store
    $filename = $_FILES['photopath']['name'];
    $tempname = $_FILES['photopath']['tmp_name'];
    //generate unique name
    $photopath = time().$filename;
    $folder = "../uploads/".$photopath;
    move_uploaded_file($tempname, $folder);

    //query to add news
    $qry = "INSERT INTO news (category_id, date, title, description, photopath) VALUES ($category_id, '$date', '$title', '$description', '$photopath')";

    include 'dbconnection.php';
    $res = mysqli_query($conn, $qry);
    include 'closeconnection.php';
    if($res)
    {
        $_SESSION['msg'] = "News Added Successfully";
        header('location: news.php');
    }
    else
    {
        $_SESSION['msg'] = "Failed to Add News";
        header('location: news.php');
    }
}


//for news update
if(isset($_POST['update']))
{
    $id = $_POST['newsid'];
    $date = $_POST['date'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $oldpath = $_POST['oldpath'];
    //file store
    if($_FILES['photopath']['name'] != "")
    {
        $filename = $_FILES['photopath']['name'];
        $tempname = $_FILES['photopath']['tmp_name'];
        //generate unique name
        $photopath = time().$filename;
        $folder = "../uploads/".$photopath;
        move_uploaded_file($tempname, $folder);
        //delete old file
        unlink("../uploads/".$oldpath);
    }
    else
    {
        $photopath = $oldpath;
    }

    //query to update news
    $qry = "UPDATE news SET category_id = $category_id, date = '$date', title = '$title', description = '$description', photopath = '$photopath' WHERE id = $id";

    include 'dbconnection.php';
    $res = mysqli_query($conn, $qry);
    include 'closeconnection.php';
    if($res)
    {
        $_SESSION['msg'] = "News Updated Successfully";
        header('location: news.php');
    }
    else
    {
        $_SESSION['msg'] = "Failed to Update News";
        header('location: news.php');
    }
}

//for news delete
if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    $qry = "SELECT photopath FROM news WHERE id = $id";
    include 'dbconnection.php';
    $result = mysqli_query($conn, $qry);
    $row = mysqli_fetch_assoc($result);
    unlink("../uploads/".$row['photopath']);
    $qry = "DELETE FROM news WHERE id = $id";
    $res = mysqli_query($conn, $qry);
    include 'closeconnection.php';
    if($res)
    {
        $_SESSION['msg'] = "News Deleted Successfully";
        header('location: news.php');
    }
    else
    {
        $_SESSION['msg'] = "Failed to Delete News";
        header('location: news.php');
    }
}