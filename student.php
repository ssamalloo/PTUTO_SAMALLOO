<?php include("header.php");
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<!--==Title==================================-->
    <title>Students' Grocery Store</title>

<!--==Stylesheet=============================-->
<link rel="stylesheet" type="text/css" href="css/accounts.css"/>

<!--==Fav-icon===============================-->
<link rel="shortcut icon" href="grocery2.jpg"/>

<!--==Using-Font-Awesome=====================-->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<!--==Import-Font-Family====================-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

</head>

<body>

    <!--==Search-banner========================-->
    <section id="search-banner">
        
        <!--bg-------->
        <img src="images/bg-1.png" class="bg-1" alt="bg">
        <img src="images/bg-2.png" class="bg-2" alt="bg-2">
        <img src="images/bg-3.png" class="bg-3" alt="bg-3">


        <!--text-------->
        <div class="search-banner-text">
            <h1>View Our Daily Groceries</h1>
            <strong>Available For Our UdMers</strong>
            <h4>To get a chance to beneficiate UdM's Grocery<br> Store facilities, start by registering yourself ;)</h4>

        </div>
        
    </section>
    <!--search-banner-end---------------->



    <section id="popular-product">
        <div class="product-heading">
            <h3>Our Products</h3>
            <span>All</span>
        </div>

        <!--product-box-container--->
        <div class="product-container">

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/salmon.jpg" alt="pacific salmon">
                <strong>Pacific Salmon</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 200</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Pacific Salmon">
                <input type="hidden" name="Price" value="200">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/tuna.jpg" alt="tuna">
                <strong>Tuna</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 150</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Tuna">
                <input type="hidden" name="Price" value="150">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/snapper.png" alt="snapper fish">
                <strong>Spanner</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 175</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Spanner">
                <input type="hidden" name="Price" value="175">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/wings.jpg" alt="wings">
                <strong>Chicken Wings</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 75</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Chicken Wings">
                <input type="hidden" name="Price" value="75">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/drumsticks.jpg" alt="drumsticks">
                <strong>Chicken Drumsticks</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 100</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Chicken Drumsticks">
                <input type="hidden" name="Price" value="100">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/breasts.png" alt="chicken breasts">
                <strong>Chicken Breasts</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 125</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Chicken Breasts">
                <input type="hidden" name="Price" value="125">
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/cheese.png" alt="cheese">
                <strong>Cheese</strong>
                <span class="quantity">1 PQT</span>
                <span class="price">Rs 40</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Cheese">
                <input type="hidden" name="Price" value="40">
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/milk.png" alt="milk">
                <strong>Liquid Milk</strong>
                <span class="quantity">1 PQT</span>
                <span class="price">Rs 50</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Liquid Milk">
                <input type="hidden" name="Price" value="50">
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/butter.png" alt="butter">
                <strong>Butter</strong>
                <span class="quantity">1 PQT</span>
                <span class="price">Rs 40</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Butter">
                <input type="hidden" name="Price" value="40">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/chili.png" alt="chilli">
                <strong>Red Chilli</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 50</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Red Chilli">
                <input type="hidden" name="Price" value="50">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/greenchilli.png" alt="green chilli">
                <strong>Green Chilli</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 40</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Green Chilli">
                <input type="hidden" name="Price" value="40">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/onion.png" alt="onion">
                <strong>Onion</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 20</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Onion">
                <input type="hidden" name="Price" value="20">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/patato.png" alt="potato">
                <strong>Potato</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 40</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Potato">
                <input type="hidden" name="Price" value="40">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/ginger.jpg" alt="ginger">
                <strong>Ginger</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 25</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Ginger">
                <input type="hidden" name="Price" value="25">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/garlic.png" alt="garlic">
                <strong>Garlic</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 40</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Garlic">
                <input type="hidden" name="Price" value="40">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/cucumber.png" alt="cucumber">
                <strong>Cucumber</strong>
                <span class="quantity">1 PC</span>
                <span class="price">Rs 20</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Cucumber">
                <input type="hidden" name="Price" value="20">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/lettuce.jpg" alt="lettuce">
                <strong>Fresh Lettuce</strong>
                <span class="quantity">1 PC</span>
                <span class="price">Rs 25</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Fresh Lettuce">
                <input type="hidden" name="Price" value="25">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/tamato.png" alt="tomato">
                <strong>Tomato</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 40</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Tomato">
                <input type="hidden" name="Price" value="40">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/carrots.jpg" alt="carrots">
                <strong>Fresh Carrots</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 30</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Fresh Carrots">
                <input type="hidden" name="Price" value="30">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/beetroot.png" alt="beetroot">
                <strong>Beetroot</strong>
                <span class="quantity">1 PC</span>
                <span class="price">Rs 25</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Beetroot">
                <input type="hidden" name="Price" value="25">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/capsicum.png" alt="yellow capsicum">
                <strong>Yellow Capsicum</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 40</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Yellow Capsicum">
                <input type="hidden" name="Price" value="40">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/apple.png" alt="apple">
                <strong>Red Apple</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 30</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Red Apple">
                <input type="hidden" name="Price" value="30">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/banana.png" alt="banana">
                <strong>Banana</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 20</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Banana">
                <input type="hidden" name="Price" value="20">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/greenapple.png" alt="apple">
                <strong>Green Apple</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 30</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Green Apple">
                <input type="hidden" name="Price" value="30">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/orange.png" alt="orange">
                <strong>Fresh Oranges</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 30</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Fresh Oranges">
                <input type="hidden" name="Price" value="30">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/grapes.png" alt="grapes">
                <strong>Red Grapes</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 40</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Red Grapes">
                <input type="hidden" name="Price" value="40">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/kiwi.jpg" alt="kiwi">
                <strong>Kiwi</strong>
                <span class="quantity">1 KG</span>
                <span class="price">Rs 50</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Kiwi">
                <input type="hidden" name="Price" value="50">
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/pepper.png" alt="pepper">
                <strong>Black Pepper</strong>
                <span class="quantity">1 FLASK</span>
                <span class="price">Rs 40</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Pepper">
                <input type="hidden" name="Price" value="40">
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/salt.jpg" alt="salt">
                <strong>Salt</strong>
                <span class="quantity">1 PQT</span>
                <span class="price">Rs 20</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Salt">
                <input type="hidden" name="Price" value="20">
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/curry.jpg" alt="curry powder">
                <strong>Curry Powder</strong>
                <span class="quantity">1 Flask</span>
                <span class="price">Rs 50</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Curry Powder">
                <input type="hidden" name="Price" value="50">
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/turmeric.jpg" alt="turmeric">
                <strong>Turmeric Powder</strong>
                <span class="quantity">1 PQT</span>
                <span class="price">Rs 30</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Turmeric">
                <input type="hidden" name="Price" value="30">
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/paprika.jpg" alt="paprika">
                <strong>Paprika Powder</strong>
                <span class="quantity">1 PQT</span>
                <span class="price">Rs 45</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Paprika">
                <input type="hidden" name="Price" value="45">
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/chilliflakes.png" alt="chilli powder">
                <strong>Chilli Powder</strong>
                <span class="quantity">1 PQT</span>
                <span class="price">Rs 45</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Chilli Powder">
                <input type="hidden" name="Price" value="45">
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/brownlentils.jpg" alt="brown lentils">
                <strong>Brown Lentils</strong>
                <span class="quantity">1 PQT</span>
                <span class="price">Rs 40</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Brown Lentils">
                <input type="hidden" name="Price" value="40">
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/redbeans.jpg" alt="red beans">
                <strong>Red Beans</strong>
                <span class="quantity">1 PQT</span>
                <span class="price">Rs 45</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Red Beans">
                <input type="hidden" name="Price" value="45">
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/redlentils.jpg" alt="red lentils">
                <strong>Whole Red Lentils</strong>
                <span class="quantity">1 PQT</span>
                <span class="price">Rs 40</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Whole Red Lentils">
                <input type="hidden" name="Price" value="40">
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/almond.jpg" alt="almond">
                <strong>Almond</strong>
                <span class="quantity">1 PQT</span>
                <span class="price">Rs 15</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Almond">
                <input type="hidden" name="Price" value="15">
            </div>
            </form>

            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/peanut.png" alt="peanut">
                <strong>Peanut</strong>
                <span class="quantity">1 PQT</span>
                <span class="price">Rs 20</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Peanut">
                <input type="hidden" name="Price" value="20">
            </div>
            </form>
            
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/cashew.jpg" alt="cashew">
                <strong>Cashew Nuts</strong>
                <span class="quantity">1 PQT</span>
                <span class="price">Rs 30</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Cashew Nuts">
                <input type="hidden" name="Price" value="30">
            </div>
            </form>

        </div>
        
    </section>
    <!--popular-product-end---------------->




    <!--Popular-bundle-pack========================-->
    <section id="popular-bundle-pack">

        <!--heading------------>
        <div class="product-heading">
            <h3>Popular Bundle Pack</h3>
        </div>

                <!--product-box-container--->
        <div class="product-container">

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/pack1.png" alt="pack1">
                <strong>Big Pack</strong>
                <span class="quantity">Lemon, Tomato, Potato + 9</span>
                <span class="price">Rs 400</span>

                <!--cart-btn-------->
                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Big Pack">
                <input type="hidden" name="Price" value="400">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/pack2.jpg" alt="pack2">
                <strong>Medium Pack</strong>
                <span class="quantity">Tomato, Brocoli, Onion + 5</span>
                <span class="price">Rs 250</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Medium Pack">
                <input type="hidden" name="Price" value="250">
            </div>
            </form>

            <!--box------------>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="images/pack3.png" alt="pack3">
                <strong>Small Pack</strong>
                <span class="quantity">Carrot, Orange, Purple Cabbage + 3</span>
                <span class="price">Rs 200</span>

                <button href="#" type="submit" name="Add_To_Cart" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add to Cart
                </button>
                <input type="hidden" name="Item_Name" value="Small Pack">
                <input type="hidden" name="Price" value="200">
            </div>
            </form>
            
        </div>
        
    </section>
    <!--popular-bundle-pack-end----------------------->

    <!--==footer=========================-->
    <footer>
        <div class="footer-container">
            
            <!--logo-container------>
            <div class="footer-logo">
                <a href="#"><span>Students'</span> Grocery Store</a>
            </div>



            <!--links------------->
            <div class="footer-links">
                <strong>Categories</strong>
                <ul>
                    <li><a href="#">Fish & Meat</a></li>
                    <li><a href="#">Vegetables</a></li>
                    <li><a href="#">Fruits</a></li>
                    <li><a href="#">Spices</a></li>
                    <li><a href="#">Dairy Products</a></li>
                    <li><a href="#">Dry Grains</a></li>
                    <li><a href="#">Nuts</a></li>
                </ul>
            </div>

            <!--links------------->
            <section id="opening-hours">
            <div class="footer-links">
                <strong>Opening Hours</strong>
                <ul>
                    <li><a href="#">Mon - Fri: 8am - 6pm</a></li>
                    <li><a href="#">Saturday: 8am - 4pm</a></li>
                    <li><a href="#">Sunday: 8am - 1pm</a></li>
                </ul>
            </div>
            </section>

            <!--links------------->
            <section id="contact">
            <div class="footer-links">
                <strong>Contact</strong>
                <ul>
                    <li><a href="#">Phone: +230 294 0000</a></li>
                    <li><a href="#">Email: sgstore@udm.ac.mu</a></li>
                </ul>
            </div>
            </section>

        </div>
    </footer>

    </body>


</html>
