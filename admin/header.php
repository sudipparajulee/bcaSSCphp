<?php session_start(); 
    if(!isset($_SESSION['loggedin']))
    {
        echo "<script>window.location.href='../login.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php if(isset($_SESSION['msg'])){ ?>
    <div class="fixed right-4 top-4 bg-green-500 px-10 py-3 rounded-lg shadow-lg" id="msg">
        <p class="text-white font-bold"><i class="ri-check-double-line text-xl"></i> <?php echo $_SESSION['msg']; ?></p>
    </div>
    <script>
        setTimeout(function(){
            document.getElementById('msg').style.display = 'none';
        },2000);
    </script>
    <?php 
        unset($_SESSION['msg']);
        }
         ?>

    <div class="flex">
        <nav class="w-56 bg-gray-100 shadow h-screen">
            <img src="https://www.bitmapitsolution.com/images/logo/logo.png" class="w-10/12 mx-auto bg-white mt-5 shadow-lg rounded-lg py-2" alt="">
            <div class="mt-5">
                <a href="dashboard.php" class="text-lg pl-5 border-b block py-2 mt-1 hover:bg-blue-500 hover:text-white">Dashboard</a>
                <a href="categories.php" class="text-lg pl-5 border-b block py-2 mt-1 hover:bg-blue-500 hover:text-white">Categories</a>
                <a href="news.php" class="text-lg pl-5 border-b block py-2 mt-1 hover:bg-blue-500 hover:text-white">News</a>
                <a href="logout.php" class="text-lg pl-5 border-b block py-2 mt-1 hover:bg-blue-500 hover:text-white">Logout</a>
            </div>
        </nav>
        <div class="flex-1 p-4">