<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aroma Coffee</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="pics/aroma.png" />
</head>
<body>
<header class="header">
  <a href="#" class="logo">
    <img src="pics/aroma_logo.png" alt="">
  </a>

  <nav class="navbar">
    <a href="index.php">HOME</a>
    <a href="index.php">STORY</a>
    <a href="index.php">MENU</a>
    <a href="index.php">CONTACTS</a>
  </nav>

  <div class="icons">
    <div class="fas fa-search" id="search-btn"></div>
    <div class="fas fa-shopping-cart" id="cart-btn"></div>
    <a href="userLog.php"><div class="fas fa-user-alt" id="user-btn"></div></a>
    <div class="fas fa-bars" id="menu-btn"></div>
  </div>

  <div class="search-form">
    <input type="search" id="search-box" placeholder="search here...">
    <label for="search-box" class="fas fa-search"></label>
  </div>
</header>

<div class="products-container"></div>  <script src="script.js"></script>
<script src="searchEngine.js"></script>  </body>
</html>