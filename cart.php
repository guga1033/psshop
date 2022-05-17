
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>PS Shop</title>
        <link rel="icon" href="images/logo.png" type="image/x-icon">
      

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

    <div class="container-products">
        <div class="product-header">
            <h5 class="product-title">PRODUCT</h5>
            <h5 class="price sm-hide">PRICE</h5>
            <h5 class="quantity">QUANTITY</h5>
            <h5 class="total">TOTAL</h5>
        </div>
        <div class="products">
  
        </div>
   
    </div>
    
    <div class="clear">
        <br>
        <a class="clear-button" onclick="deleteItems()" >Checkout</a><br><br><br>
        <a class="clear-button"href="logout.php">Logout</a>
    </div>

    <br>  <br>
    <div class="social-links">
        <a href="https://www.facebook.com/playstation/" target="_blank"><img src="images/fb.png"></a>
        <a href="https://twitter.com/playstation" target="_blank"><img href="#" src="images/tw.png"></a>
        <a href="https://www.instagram.com/playstation/" target="_blank"><img src="images/ig.png"></a>
    </div>
</div>
    <script type = "text/javascript" src="menu.js"></script>
    <script src="main.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
   
</body>
</html>