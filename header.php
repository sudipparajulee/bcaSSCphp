<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
    rel="stylesheet"
/>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body>
    <div class="flex justify-between py-2 px-14 bg-amber-500 text-white">
        <div>
            <i class="ri-facebook-fill bg-white text-amber-500 p-1 rounded-full"></i>
            <i class="ri-instagram-fill bg-white text-amber-500 p-1 rounded-full"></i>
            <i class="ri-whatsapp-fill bg-white text-amber-500 p-1 rounded-full"></i>
        </div>
        <div>
            <i class="ri-phone-fill"></i> +977-9876543210 
            <i class="ri-mail-fill"></i> info@mmatnepal.com
        </div>
    </div>
    <nav class="bg-blue-900 lg:flex hidden items-center justify-between px-14 sticky top-0 z-10">
        <img src="https://mmatnepal.com/images/logo.png" class="h-20 bg-white" alt="">
        <div class="text-white font-bold">
            <a class="p-4" href="index.php">Home</a>
            <a class="p-4" href="about.php">About Us</a>
            <a class="p-4" href="flights.php">Flights</a>
            <a class="p-4" href="">Packages</a>
            <a class="p-4" href="">Blog</a>
            <a class="p-4" href="gallery.php">Gallery</a>
            <a class="p-4" href="contact.php">Contact</a>
        </div>
    </nav>

    <nav class="bg-blue-900 px-4 block lg:hidden sticky top-0 z-10">
        <div class="flex justify-between items-center">
            <img src="https://mmatnepal.com/images/logo.png" class="h-20 bg-white" alt="">
            <i onclick="controlNav()" class="ri-menu-line text-3xl text-white"></i>
        </div>
        <div id="menu" class="text-white font-bold hidden">
            <a class="p-4 block" href="index.php">Home</a>
            <a class="p-4 block" href="about.html">About Us</a>
            <a class="p-4 block" href="flights.html">Flights</a>
            <a class="p-4 block" href="">Packages</a>
            <a class="p-4 block" href="">Blog</a>
            <a class="p-4 block" href="gallery.html">Gallery</a>
            <a class="p-4 block" href="contact.php">Contact</a>
        </div>
    </nav>
