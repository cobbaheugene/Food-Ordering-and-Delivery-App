<?php
    require_once "./functions/output.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mc Jean's Food</title>

   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="index.css">

</head>
<body>
    
    
    <header>
        <a href="#" class="logo"><i class="fas-fa-utensils">McJean's</i></a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#menu">Menu</a>
            <a href="order.php">Order</a>
            <a href="#review">Review</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="bars"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="order.php" class="fas fa-shopping-cart"></a>
        </div>
    </header>

<section class="home" id="home">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Welcome to Mic Jean's</span>
                    <h3>Delicious Meals</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
                    <a href="order.php" class="btn1">Place your order now</a>
                </div>
                <div class="image">
                    <img src="images/home-img-3.png" alt="">
                </div>
            </div>

    </div>

</section>


<section class="about" id="about">

    <h3 class="sub-heading"> about us </h3>
    <h1 class="heading"> why choose us? </h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.png" alt="">
        </div>

        <div class="content">
            <h3>best food on the Legon Campus</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, sequi corrupti corporis quaerat voluptatem ipsam neque labore modi autem, saepe numquam quod reprehenderit rem? Tempora aut soluta odio corporis nihil!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, nemo. Sit porro illo eos cumque deleniti iste alias, eum natus.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>free delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>easy payments</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service</span>
                </div>
            </div>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>


<section class="menu" id="menu">

    <h3 class="sub-heading"> our menu </h3>
    <h1 class="heading"> today's special</h1>

    <div class="box-container">

    <!-- fetch all food from database -->
    <?php get_menu() ?>

    </div>

</section>

<section class="review" id="review">

    <h3 class="sub-heading"> customer's review </h3>
    <h1 class="heading"> what they say </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">
            <!-- Comments here -->
            <?php get_comments(); ?>

        </div>

    </div>

</section>

<section class="comment" id="comment">

    <h3 class="sub-heading"> Speak to Us </h3>
    <h1 class="heading"> Let's get Interactive </h1>
    <p class="sub-heading"><?php create_comment(); ?></p>


    <form method="POST">
        <div class="inputBox">
            <div class="input">
                <span>What do you want us to know about our services?</span>
                <input type="text" name="name" placeholder="Full name" required>
                <textarea name="comment" placeholder="enter your comments on our services" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <input type="submit" name="btn_comment" value="comment" class="btn">
    </form>

</section>



<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>locations</h3>
            <a href="#">Legon</a>
            <a href="#">Diaspora</a>
            <a href="#">Commonwealth</a>
            <a href="#">Haatso</a>
            <a href="#">Volta Hall</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">category</a>
            <a href="#">about</a>
            <a href="#">menu</a>
            <a href="#">reivew</a>
            <a href="#">order</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+123-456-7890</a>
            <a href="#">+111-222-3333</a>
            <a href="#">email@gmail.com</a>
            <a href="#">email@gmail.com</a>
            <a href="#">Legon, Ghana - 400104</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <div class="credit"> Designed by <span>Eugene Cobbah</span> </div>

</section>



</body>
</html>