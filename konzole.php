<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PS Shop</title>
<link rel="icon" href="images/logo.png" type="image/x-icon">
<meta name="description" content="Roughly 155 characters">
<link rel="stylesheet" type="text/css" href="style.css">
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

<div class="row">
    <div class="col-1">
        <h2>PS4<br>Slim</h2>
        <h3>Video game console</h3>
        <p>(Compatibile/Generic)</p>
        <h4>$199.99</h4>
        <button type="button" class="add-cart cart1" href="#">Buy Now<img src="images/arrow.png"></button>
    </div>

    <div class="col-2">
        <img src="images/ps4.png" class="PS4">
        <div class="color-box"></div>
        <div class="add-cart add-btn">
            <img src="images/add.png">
            <p><small>Add to Cart</small></p>
        </div>
    </div>
</div>
 <br>
    <div class="row">
        <div class="col-1">
            <h2>PS5<br>With Disc drive</h2>
            <h3>Video game console</h3>
            <p>(Compatibile/Generic)</p>
            <h4>$499.99</h4>
            <button type="button" class="add-cart cart2" href="#">Buy Now<img src="images/arrow.png"></button>
        </div>
      
        <div class="col-2">
            <img src="images/ps5.png" class="PS5">
            <div class="color-box"></div>
            <div class="add-cart add-btn">
                <img src="images/add.png">
                <p><small>Add to Cart</small></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-1">
            <h2>PS4 V2<br>Dualshock 4</h2>
            <h3>Wireless Controller for PlayStation 4</h3>
            <p>(Compatibile/Generic)</p>
            <h4>$32.50</h4>
            <button type="button" class="add-cart cart3" href="#">Buy Now<img src="images/arrow.png"></button>
        </div>

        <div class="col-2">
            <img src="images/dualshock.png" class="controller">
            <div class="color-box"></div>
            <div class="add-cart add-btn">
                <img src="images/add.png">
                <p><small>Add to Cart</small></p>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-1">
            <h2>PS5<br>Dualsense</h2>
            <h3>Wireless Controller for PlayStation 5</h3>
            <p>(Compatibile/Generic)</p>
            <h4>$69.99</h4>
            <button type="button" class="add-cart cart4" href="#">Buy Now<img src="images/arrow.png"></button>
        </div>
    
        <div class="col-2">
            <img src="images/dualsense.png" class="controller">
            <div class="color-box"></div>
            <div class="add-cart add-btn">
                <img src="images/add.png">
                <p><small>Add to Cart</small></p>
            </div>
        </div>
    </div>

    

    <div class="social-links">
        <a href="https://www.facebook.com/playstation/" target="_blank"><img href="#" src="images/fb.png"></a>
        <a href="https://twitter.com/playstation" target="_blank"><img href="#" src="images/tw.png"></a>
        <a href="https://www.instagram.com/playstation/" target="_blank"><img src="images/ig.png"></a>
    </div>
    </div>
    
    <script type = "text/javascript" src="menu.js"></script>
    <script type = "text/javascript" src="main.js"></script>

</body>
</html>