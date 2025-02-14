<?php
session_start();
include("connect.php");
include("connect2.php");
// Fetch all products
$stmt = $conn->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aroma Coffee</title>

    <!---font awesome cdn link--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!---custom css file link-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin-style.css">
    <link rel="icon" href="pics/aroma.png" />
    <style>
      body{
        background-color:whitesmoke;
      }
      
     
      .product-container2 {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            justify-content: center;
        }
        .product-card2 {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 250px;
            text-align: center;
            padding: 15px;
            transition: transform 0.3s ease;
        }
        .product-card2:hover {
            transform: translateY(-5px);
        }
        .product-card2 img {
            max-width: 100%;
            border-radius: 10px;
        }
        .product-card2 h3 {
            font-size: 1.2rem;
            margin: 10px 0;
        }
        .product-card2 .price {
            font-size: 1.1rem;
            color: #573c27;
            font-weight: bold;
        }
        .product-card2 .description {
            font-size: 0.9rem;
            color: #666;
            margin: 10px 0;
        }
        /* Responsive Styles */
@media (max-width: 768px) {
    .header {
        padding: 0.1rem 3%;
    }

    .header .navbar {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: var(--bg);
        flex-direction: column;
        display: none;
    }

    .header .navbar.active {
        display: flex;
    }

    .header .navbar a {
        margin: 1rem;
        font-size: 1.2rem;
    }

    .header .icons {
        display: flex;
        align-items: center;
    }

    .header .icons #menu-btn {
        display: block;
    }

    .header .icons div {
        margin-left: 1rem;
    }

    .logout-btn a {
        margin-left: 1rem;
    }
}

@media (max-width: 480px) {
    .header .logo img {
        width: 60px;
    }

    .header .navbar a {
        font-size: 1rem;
    }

    .header .icons div {
        font-size: 1.2rem;
    }

    .logout-btn a {
        font-size: 0.9rem;
    }
}
    </style>

</head>
<body>
<!--Header section starts-->
<header class="header">
    <a href="#" class="logo">
        <img src="pics/aroma_logo.png" alt="Aroma Coffee Logo">
    </a>

    <nav class="navbar" id="navbar">
        <a href="#home">HOME</a>
        <a href="#story">STORY</a>
        <a href="#menu">MENU</a>
        <a href="#contact">CONTACTS</a>
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <a href="cart-index.php" target="_blank"> 
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
      </a>
        <a href="#"><div class="fas fa-user-alt" id="user-btn"></div></a>
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="user-name"></div>
        <div class="logout-btn"><a href="logout.php">Logout</a></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>
</header>
<!--Header section ends-->

 <!--Home section starts-->
 <section class="home" id="home">
    <div class="content">
      <h3>Espresso Yourself!</h3>
      <p>We’re all about great coffee and good vibes. Whether you’re in the mood
        <br>for a rich espresso,
        creamy latte,<br> or refreshing cold brew,
        we’ve got you covered.
        <br>Enjoy expertly brewed coffee, delicious pastries, <br>and a cozy atmosphere where you can relax or connect
        with friends.
        <br>Stop by and make us part of your day—your perfect cup is waiting!
      </p>
      <a href="#menu" class="btn">Get In</a>

    </div>

  </section>
  <!--Home section ends-->

  
  <hr style="border: 1px solid gray; width: 60%; margin: 10px auto;margin-top:40px">
  <!--menu section starts-->
  <section class="menu" id="menu">
    <h1 class="heading">Our<span> Menu</span></h1>

   
    <hr style="border: 1px solid gray; width: 53%; margin: 5px auto;">
    <div class="container">
      <h3 class="title">at home coffee</h3>
      <div class="product-container">

        <div class="product" data-name="p-1">
          <img src="pics/p/p-1.jpg" alt="">
          <h3>whole bean</h3>
          <div class="price">Rs. 450.00</div>
        </div>

        <div class="product" data-name="p-2">
          <img src="pics/p/p-2.jpg" alt="">
          <h3>ground</h3>
          <div class="price">Rs. 500.00</div>
        </div>

        <div class="product" data-name="p-3">
          <img src="pics/p/p-3.jpg" alt="">
          <h3>VIA instant</h3>
          <div class="price">Rs. 1000.00</div>
        </div>

        <div class="product" data-name="p-4">
          <img src="pics/p/p-4.jpg" alt="">
          <h3>Coffee Pods</h3>
          <div class="price">Rs. 800.00</div>
        </div>

      </div>
    </div>

    <div class="container">
      <h3 class="title">cappuccinos</h3>
      <div class="product-container">

        <div class="product" data-name="p-5">
          <img src="pics/p/p-5.jpg" alt="">
          <h3>classic cappuccino</h3>
          <div class="price">Rs. 600.00</div>
        </div>

        <div class="product" data-name="p-6">
          <img src="pics/p/p-6.jpg" alt="">
          <h3>Iced Cappuccino</h3>
          <div class="price">Rs. 600.00</div>
        </div>

        <div class="product" data-name="p-7">
          <img src="pics/p/p-7.jpg" alt="">
          <h3>Cinnamon Cappuccino</h3>
          <div class="price">Rs. 650.00</div>
        </div>

        <div class="product" data-name="p-8">
          <img src="pics/p/p-8.jpg" alt="">
          <h3>Almond Cappuccino</h3>
          <div class="price">Rs. 900.00</div>
        </div>

      </div>
    </div>

    <div class="container">
      <h3 class="title">flat whites</h3>
      <div class="product-container">

        <div class="product" data-name="p-9">
          <img src="pics/p/p-9.jpg" alt="">
          <h3>flat white</h3>
          <div class="price">Rs. 700.00</div>
        </div>

        <div class="product" data-name="p-10">
          <img src="pics/p/p-10.jpg" alt="">
          <h3>honey almondmilk flat white</h3>
          <div class="price">Rs. 900.00</div>
        </div>

      </div>
    </div>

    <div class="container">
      <h3 class="title">lattes</h3>
      <div class="product-container">

        <div class="product" data-name="p-11">
          <img src="pics/p/p-11.jpg" alt="">
          <h3>Caramel Latte</h3>
          <div class="price">Rs. 700.00</div>
        </div>

        <div class="product" data-name="p-12">
          <img src="pics/p/p-12.jpg" alt="">
          <h3>Classic Latte</h3>
          <div class="price">Rs. 600.00</div>
        </div>

        <div class="product" data-name="p-13">
          <img src="pics/p/p-13.jpg" alt="">
          <h3>Pumpkin Spice Latte</h3>
          <div class="price">Rs. 800.00</div>
        </div>

        <div class="product" data-name="p-14">
          <img src="pics/p/p-14.jpg" alt="">
          <h3>Coconut Latte</h3>
          <div class="price">Rs. 850.00</div>
        </div>

        <div class="product" data-name="p-15">
          <img src="pics/p/p-15.jpg" alt="">
          <h3>iced latte</h3>
          <div class="price">Rs. 700.00</div>
        </div>

      </div>
    </div>

    <div class="container">
      <h3 class="title">macchiatos</h3>
      <div class="product-container">

        <div class="product" data-name="p-16">
          <img src="pics/p/p-16.jpg" alt="">
          <h3>apple crip oatmilk macchiato</h3>
          <div class="price">Rs. 700.00</div>
        </div>

        <div class="product" data-name="p-17">
          <img src="pics/p/p-17.jpg" alt="">
          <h3>Vanilla Macchiato</h3>
          <div class="price">Rs. 650.00</div>
        </div>

        <div class="product" data-name="p-18">
          <img src="pics/p/p-18.jpg" alt="">
          <h3>Caramel Macchiato</h3>
          <div class="price">Rs. 650.00</div>
        </div>

        <div class="product" data-name="p-19">
          <img src="pics/p/p-19.jpg" alt="">
          <h3>iced macchiato</h3>
          <div class="price">Rs. 650.00</div>
        </div>
      </div>
    </div>


    <div class="container">
      <h3 class="title">nitro cold brews</h3>
      <div class="product-container">

        <div class="product" data-name="p-20">
          <img src="pics/p/p-20.jpg" alt="">
          <h3>Nitro Cold Brew with Milk</h3>
          <div class="price">Rs. 850.00</div>
        </div>

        <div class="product" data-name="p-21">
          <img src="pics/p/p-21.jpg" alt="">
          <h3>Nitro Cold Brew with Vanilla</h3>
          <div class="price">Rs. 900.00</div>
        </div>

        <div class="product" data-name="p-22">
          <img src="pics/p/p-22.jpg" alt="">
          <h3>Nitro Cold Brew Latte</h3>
          <div class="price">Rs. 950.00</div>
        </div>

      </div>
    </div>

    <div class="container">
      <h3 class="title">iced coffees</h3>
      <div class="product-container">

        <div class="product" data-name="p-23">
          <img src="pics/p/p-23.jpg" alt="">
          <h3>Iced Coffee</h3>
          <div class="price">Rs. 450.00</div>
        </div>

        <div class="product" data-name="p-24">
          <img src="pics/p/p-24.jpg" alt="">
          <h3>Iced Flat White</h3>
          <div class="price">Rs. 650.00</div>
        </div>

      </div>
    </div>

    <div class="container">
      <h3 class="title">pastries</h3>
      <div class="product-container">

        <div class="product" data-name="p-25">
          <img src="pics/p/p-25.jpg" alt="">
          <h3>Chocolate Croissant</h3>
          <div class="price">Rs. 450.00</div>
        </div>

        <div class="product" data-name="p-26">
          <img src="pics/p/p-26.jpg" alt="">
          <h3>Cinnamon Roll</h3>
          <div class="price">Rs. 400.00</div>
        </div>

        <div class="product" data-name="p-27">
          <img src="pics/p/p-27.jpg" alt="">
          <h3>Muffins</h3>
          <div class="price">Rs. 350.00</div>
        </div>

        <div class="product" data-name="p-28">
          <img src="pics/p/p-28.jpg" alt="">
          <h3>Brownies</h3>
          <div class="price">Rs. 350.00</div>
        </div>

      </div>
    </div>
    

     <!-- Product Section -->
     <section class="menu" id="menu">
     <hr style="border: 1px solid gray; width: 80%; margin: 20px auto;">
        <h1 class="heading">Special <span>Offer products</span></h1>
      <hr style="border: 1px solid gray; width: 43%; margin: 20px auto;">
        <div class="product-container2">
            <?php foreach ($products as $product): ?>
                <div class="product-card2">
                    <img src="pics/<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                    <h3><?= $product['name'] ?></h3>
                    <p class="description"><?= $product['description'] ?></p>
                    <p class="price">Rs. <?= $product['price'] ?></p>
                    <button class="btn">Add to Cart</button>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    
    <hr style="border: 1px solid gray; width: 60%; margin: 20px auto;">
   <!--Story section starts-->
  <section class="story" id="story">
    <h2 class="heading"><span>Our</span> Story</h2>
    <hr style="border: 1px solid gray; width: 53%; margin: 20px auto;">
  
    <div class="row">
      <div class="image">
        <img src="pics/iced-coffee-sugar-cubes-top-view.jpg" alt="">
      </div>

      <div class="content">
        <h2>Aroma Coffee</h2>
        <h3>Discover the Heart Behind the Brew</h3>
        <p>Aroma Coffee, a small, cozy café nestled in the heart of Kandy Town. Born from a passion for exceptional
          coffee and heartfelt connections, Aroma Coffee is more than just a coffee shop—it’s a place where every
          sip and every bite brings people together.</p>
        <p>Our journey began with a simple dream: to create a space where coffee enthusiasts and casual visitors alike
          could enjoy world-class coffee in
          a warm and welcoming environment. Today, Aroma Coffee is proud to be a local favorite, serving not only
          expertly crafted coffee but also a
          selection of freshly baked pastries made daily with care.</p>
        <p>We believe that quality is key, which is why we source only the finest coffee beans and ingredients. Whether
          you’re enjoying a classic espresso, a frothy cappuccino, or indulging in one of our buttery croissants, every
          item
          on our menu is made with love and attention to detail.</p>
        <p>Step into our café or order online, and let us be part of your story, one delightful sip at a time.</p>

      </div>
    </div>
  </section>
  <!--Story section ends-->

    <div class="products-preview">

      <div class="preview" data-target="p-1">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-1.jpg" alt="">
        <h3>whole beans</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 250 )</span>
        </div>
        <p>Freshly ground coffee is key to great coffee. Look for high-quality, freshly roasted beans from local
          roasters
          or specialty brands like Stumptown, Blue Bottle, and Intelligentsia.</p>
        <div class="price">Rs. 450.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="1">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-2">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-2.jpg" alt="">
        <h3>ground</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 300 )</span>
        </div>
        <p>If you don't want to grind your own beans,
          brands like Lavazza, Peet's Coffee, and Death Wish offer high-quality ground coffee.</p>
        <div class="price">Rs. 500.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="2">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-3">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-3.jpg" alt="">
        <h3>VIA instant</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 60 )</span>
        </div>
        <p>Made with 100% arabica beans, it comes in various blends like Pike Place and Colombia,
          offering rich flavor in an easy-to-use packet.</p>
        <div class="price">Rs. 1000.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="3">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-4">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-4.jpg" alt="">
        <h3>Coffee Pods</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 457 )</span>
        </div>
        <p>For convenience, brands like Keurig (K-Cups) and Nespresso (coffee and espresso pods) are widely available.
        </p>
        <div class="price">Rs. 800.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="4">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-5">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-5.jpg" alt="">
        <h3>classic cappuccino</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 57 )</span>
        </div>
        <p>A traditional blend of equal parts espresso, steamed milk, and milk foam.</p>
        <div class="price">Rs. 600.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="5">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-6">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-6.jpg" alt="">
        <h3>Iced Cappuccino</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 157 )</span>
        </div>
        <p>Chilled espresso with milk and foam, served over ice</p>
        <div class="price">Rs. 600.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="6">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-7">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-7.jpg" alt="">
        <h3>Cinnamon Cappuccino</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 57 )</span>
        </div>
        <p>Sprinkled with ground cinnamon for added warmth and spice.</p>
        <div class="price">Rs. 650.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="7">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-8">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-8.jpg" alt="">
        <h3>Almond Cappuccino</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 216 )</span>
        </div>
        <p>Made with almond milk, perfect for nutty flavor lovers.</p>
        <div class="price">Rs. 900.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="8">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-9">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-9.jpg" alt="">
        <h3>flat white</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 216 )</span>
        </div>
        <p>A smooth and velvety coffee made with a rich espresso shot and steamed milk,
          offering a balanced flavor with a creamy texture.</p>
        <div class="price">Rs. 700.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="9">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-10">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-10.jpg" alt="">
        <h3>honey almondmilk flat white</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 216 )</span>
        </div>
        <p>A dairy-free twist on the classic, featuring espresso, steamed almond milk,
          and a hint of honey for natural sweetness and nutty flavor.</p>
        <div class="price">Rs. 900.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="10">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-11">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-11.jpg" alt="">
        <h3>Caramel Latte</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 457 )</span>
        </div>
        <p>Sweet and creamy, made with caramel syrup.</p>
        <div class="price">Rs. 700.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="11">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-12">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-12.jpg" alt="">
        <h3>Classic Latte</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 45 )</span>
        </div>
        <p>Espresso with steamed milk and a light layer of milk foam on top</p>
        <div class="price">Rs. 600.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="12">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-13">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-13.jpg" alt="">
        <h3>Pumpkin Spice Latte</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 31 )</span>
        </div>
        <p>A seasonal favorite with pumpkin spice flavors, perfect for autumn.</p>
        <div class="price">Rs. 800.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="13">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-14">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-14.jpg" alt="">
        <h3>Coconut latte</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 200 )</span>
        </div>
        <p>Made with coconut milk for a tropical flavor</p>
        <div class="price">Rs. 850.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="14">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-15">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-15.jpg" alt="">
        <h3>iced latte</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 335 )</span>
        </div>
        <p>Espresso mixed with cold milk, served over ice for a refreshing treat</p>
        <div class="price">Rs. 700.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="15">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-16">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-16.jpg" alt="">
        <h3>apple crip oatmilk macchiato</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 777 )</span>
        </div>
        <p>A cozy blend of espresso, steamed oat milk, and spiced apple flavors,
          topped with a drizzle of apple brown sugar syrup for a warm, autumn-inspired treat.</p>
        <div class="price">Rs. 700.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="16">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-17">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-17.jpg" alt="">
        <h3>Vanilla Macchiato</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 47 )</span>
        </div>
        <p>Espresso combined with vanilla syrup and steamed milk, topped with foam for a smooth and sweet taste</p>
        <div class="price">Rs. 650.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="17">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-18">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-18.jpg" alt="">
        <h3>Caramel Macchiato</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 22 )</span>
        </div>
        <p>A sweet variation made with espresso, steamed milk, vanilla syrup, and topped with caramel drizzle</p>
        <div class="price">Rs. 650.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="18">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-19">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-19.jpg" alt="">
        <h3>iced macchiato</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 300 )</span>
        </div>
        <p>A chilled version of the classic macchiato,
          made with espresso poured over ice and topped with cold milk or milk foam</p>
        <div class="price">Rs. 650.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="19">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-20">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-20.jpg" alt="">
        <h3>Nitro Cold Brew with Milk</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 457 )</span>
        </div>
        <p>Classic nitro cold brew combined with a splash of milk or cream for a smoother, creamier taste</p>
        <div class="price">Rs. 850.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="20">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-21">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-21.jpg" alt="">
        <h3>Nitro Cold Brew with Vanilla</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 337 )</span>
        </div>
        <p>Cold brew coffee infused with nitrogen and flavored with vanilla syrup for a sweet and aromatic touch</p>
        <div class="price">Rs. 900.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="21">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-22">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-22.jpg" alt="">
        <h3>Nitro Cold Brew Latte</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 09 )</span>
        </div>
        <p>A creamy blend of nitro cold brew coffee and steamed milk for a smooth, frothy, and slightly sweet drink</p>
        <div class="price">Rs. 50.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="22">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-23">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-23.jpg" alt="">
        <h3>Iced Coffee</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 1100 )</span>
        </div>
        <p>Regular brewed coffee served over ice, typically sweetened and sometimes with milk or cream</p>
        <div class="price">Rs. 450.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="23">Order Now</a>
        </div>
      </div>


      <div class="preview" data-target="p-24">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-24.jpg" alt="">
        <h3>Iced Flat White</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 457 )</span>
        </div>
        <p>Espresso mixed with cold milk and ice, offering a velvety texture and a strong coffee flavor</p>
        <div class="price">Rs. 650.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="24">Order Now</a>
        </div>
      </div>


      <div class="preview" data-target="p-25">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-25.jpg" alt="">
        <h3>Chocolate Croissant</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 88 )</span>
        </div>
        <p>SA croissant filled with rich, melted chocolate, perfect for a sweet treat</p>
        <div class="price">Rs. 450.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="25">Order Now</a>
        </div>
      </div>


      <div class="preview" data-target="p-26">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-26.jpg" alt="">
        <h3>Cinnamon Roll</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 457 )</span>
        </div>
        <p>A soft, sweet roll filled with cinnamon and sugar, often topped with cream cheese icing</p>
        <div class="price">Rs. 400.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="26">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-27">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-27.jpg" alt="">
        <h3>Muffins</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 800 )</span>
        </div>
        <p>Fluffy, baked goods in various flavors such as blueberry, chocolate chip, or banana</p>
        <div class="price">Rs. 350.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="27">Order Now</a>
        </div>
      </div>

      <div class="preview" data-target="p-28">
        <i class="fas fa-times"></i>
        <img src="pics/p/p-28.jpg" alt="">
        <h3>Brownies</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>( 457 )</span>
        </div>
        <p>Rich, fudgy squares of chocolate with or without nuts</p>
        <div class="price">Rs. 350.00</div>
        <div class="button">
        <a href="cart-index.php" target="_blank" class="btn" data-id="28">Order Now</a>
        </div>
      </div>

    </div>

    <div class="content-wrapper">
      <!-- Post Section -->
      <div class="post">
        <img src="pics/pic7.jpg" alt="Post Image">
      </div>
      <!-- Coupon Section -->
      <div class="coupon">
        <div class="container">
          <h3>Aroma Coffee...</h3>
        </div>
        <img src="pics/pic6.jpg" alt="Coupon Image">
        <div class="container" style="background-color:white">
          <h2><b>25% OFF YOUR PURCHASE</b></h2>
          <p>Grab an exclusive discount and enjoy your favorite treats for less!</p>
        </div>
        <div class="container">
          <p>Use Promo Code: <span class="promo">A2GH65B3</span></p>
          <p class="expire">Expires: April 03, 2025</p>
        </div>
      </div>
    </div>

  </section>

   

  <!---menu section ends-->

  <!---contact section starts-->
  <section class="contact" id="contact">
    <h1 class="heading"><span>Contact</span> Us</h1>
    <div class="row">
      <iframe class="map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1013127.1260302422!2d79.483706046875!3d7.2944355000000245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3662b9bef5c5b%3A0x5750bfa34ed0ca!2sCafe%20Aroma%20Inn!5e0!3m2!1sen!2slk!4v1733075985682!5m2!1sen!2slk"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      <form action="https://formsubmit.co/yasithwijesuriyauniversity2002@gmail.com" method="POST">
        <h3>touch with us!</h3>
        <div class="inputBox">
          <span class="fas fa-user"></span>
          <input id="f-in" type="text" placeholder="name">
        </div>
        <div class="inputBox">
          <span class="fas fa-envelope"></span>
          <input id="f-in" type="email" placeholder="email">
        </div>
        <div class="inputBox">
          <span class="fas fa-phone"></span>
          <input id="f-in" type="number" placeholder="number">
        </div>
        <div class="inputBox">
          <span class="fas fa-map-marker-alt"></span>
          <input id="f-in" type="address" placeholder="address">
        </div>

        <input type="submit" value="contact now" class="btn">
      </form>
    </div>
  </section>

 
  <section class="contactus">
    <div class="pic-area">
      <div class="pic-area-text">
        <h2>Methods to</h2>
        <h1 class="home__name">
          Contact Us
        </h1>
        <h3>One email, phone call, or block away.</h3>

        <div class="sections" id="footerSe">
          <div class="sections-section">
            <i class="fas fa-envelope"></i> Email
            <p>AromaCoffee@email.com</p>
          </div>
          <div class="sections-section" id="footerSe">
            <i class="fas fa-mobile-alt"></i> Phone
            <p>+94 xx xxx xxxx</p>
          </div>
          <div class="sections-section" id="footerSe">
            <i class="fas fa-map-marker-alt"></i> Address
            <p>Aroma Coffee, xxxx xxx, xxxxxx, xxxxxxx</p>
          </div>
        </div>

        

        <div class="icons">
          <a href="#!">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#!">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="#!">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#!">
            <i class="fab fa-snapchat-square"></i>
          </a>
        </div>
      </div>

  </section>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

  <!---contact section ends-->

  <!---footer section strats-->
  <section class="footer">
    <div class="big">
      <a href="#" class="fab fa-facebook"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
      <a href="#">home</a>
      <a href="#">story</a>
      <a href="#">menu</a>
      <a href="#">contacts</a>
    </div>

    <div class="credit">created by <span>Aroma Coffee</span> |all right reserved</div>
  </section>

  <!---footer section ends-->








  <!---custom js link-->
  <script>
    let mybutton = document.getElementById("myBtn");
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

    //menu toggle
    document.addEventListener('DOMContentLoaded', function () {
    const menuBtn = document.querySelector('#menu-btn');
    const navbar = document.querySelector('.header .navbar');

    menuBtn.addEventListener('click', function () {
        navbar.classList.toggle('active');
    });
});
  </script>
  <script src="menu.js"></script>
</body>

</html>