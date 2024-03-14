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