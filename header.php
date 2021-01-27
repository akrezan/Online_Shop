<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopee</title>

    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--Owl-carousel CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />


    <!--font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous" />


    <!--Custome CSS file -->
    <link rel="stylesheet" href="style.css">


    <?php
    //require functions.php file
    require ('functions.php');
    ?>


</head>
<body>

<!-- Start Header -->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-rale font-size-12 text-black-50 m-0">Dudweiler Straße, 66111 Saarbrücken, Deutschland</p>
        <div class="font-rale font-size-14">

            <?php
            ob_start();
            // Initialize the session
            session_start();
            // Check if the user is logged in, if not then redirect him to login page
            if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ ?>
                <a href="login.php" class="px-3 border-right border-left text-dark">Login</a>
            <?php
            }else { ?>
               <a href="reset_password.php"  class="px-3 border-right border-left "> <b ><?php echo htmlspecialchars($_SESSION["username"]); ?></b> </a>
                <a href="wishlist.php" class="px-3 border-right text-dark">
                <span class="font-size-16 px-2 "><i class="fas fa-bahai text-warning"></i></span>
                Wishlist (<span class="text-danger"><?php echo count($product->getUserData('wishlist')); ?></span>)                
                </a>
                <a href="Template/_logout.php" class="px-3 border-right">Sign Out</a>

            <?php }
            ?>

           <!-- <a href="login.php" class="px-3 border-right border-left text-dark">Login</a>-->
            

        </div>

    </div>

    <!-- Primary Navigation-->

    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <a class="navbar-brand" href="index.php">Online Shopee</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#top-sale">On Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blogs">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Comming Sonn</a>
                </li>
            </ul>
            
          

            <?php
            // Initialize the session
            //session_start();
            // Check if the user is logged in, if not then redirect him to login page
            if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ ?>
                <form action="#" class="font-size-14 font-rale">
                <a href="#" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-cart-arrow-down"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light" ><i class="fas fa-angle-double-left text-danger"></i></span>
                </a>
            </form>
            <?php
            }else { ?>
            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light">
                    <?php echo count($product->getUserData('cart')); ?>
                    </span>
                </a>
            </form>
              

            <?php }
            ?>

                

        </div>
    </nav>

    <!-- !Primary Navigation-->

</header>
<!-- End Header -->

<!-- Start main-Site -->
<main id="main-site">