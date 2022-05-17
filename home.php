<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="description" content="Roughly 155 characters">
    <title>PS Shop</title>
        <link rel="icon" href="images/logo.png" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="slider.css">
        <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>

    <div class="container">

<div class="navbar">
    <a href="home.php"><img src="images/logo.png" class="logo2"></a>
        <nav>
            <ul id="menuList">
                <li><a href="home.php">Home</a></li>
                <li><a href="konzole.php">Products</a></li>
                <li><a href="onama.php">About us</a></li>
                <li class="cart">
                    <a href="cart.php">
                        <ion-icon name="cart-outline"></ion-icon>Cart<span>0</span></a>
                </li>
            </ul>
        </nav>
    <img src="images/menu.png" class="menu-icon" onclick="togglemenu()">
</div>

<br> <br>  
<hgroup>
    <h2>PlayStation store</h2>
    <h3>Products</h3>
</hgroup><br>
<div class="pravokutnik"></div>
<div class="slideshow-container">

    <div class="mySlides fade">
      <img src="images/ps5.png" class="slika">
    
    </div>
    
    <div class="mySlides fade">
      <img src="images/ps4.png" class="slika">
   
    </div>
    
    <div class="mySlides fade">
      <img src="images/dualsense.png" class="slika">
   
    </div>

    <div class="mySlides fade">
        <img src="images/dualshock.png" class="slika">
      </div>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
      <span class="dot" onclick="currentSlide(4)"></span> 
    </div>
  <br><br><br>
    <div class="video">
        <hgroup>
            <h2>PS5 Reveal Trailer</h2>
            <h3>Date of release: November 12, 2020</h3>
        </hgroup>
        <iframe src="https://www.youtube.com/embed/RkC0l4iekYo" title="PS5" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
    </div>
<br><br>
    <div class="video">
        <hgroup>
            <h2>PS4 Reveal Trailer</h2>
            <h3>Date of release: November 15, 2013</h3>
        </hgroup>
                <iframe src="https://www.youtube.com/embed/Jw8HCFZkBds" title="PS4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  
    <div class="social-links">
        <a href="https://www.facebook.com/playstation/" target="_blank"><img src="images/fb.png"></a>
        <a href="https://twitter.com/playstation" target="_blank"><img src="images/tw.png"></a>
        <a href="https://www.instagram.com/playstation/" target="_blank"><img src="images/ig.png"></a>
    </div>

    </div>
    <script type = "text/javascript" src="menu.js"></script>
    <script type = "text/javascript" src="main.js"></script>
    <script src="slider2.js"></script>   
</body>
</html>