<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- Font Awesome icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/home.css">
    </head>
    <body>
        <div class="container centered p-3">
            <div class="row">
                <div class="col-sm">
                    <a href="">
                        <img src="" alt="logo">
                    </a>
                </div>
                <div class="col-sm">
                    <div class="input-group mb-3">
                        <input type="search" name="q"  class="form-control" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn btn-dark" type="submit">Go</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <?php
                        if(!isset($_SESSION["seller_id"])) {
                            echo '
                                <a class="btn btn-light rounded-lg" href="seller_access/login_shop">SingIn</a>
                                <a class="btn btn-light rounded-lg" href="seller_access/register_shop">Create Shop</a>
                            ';
                        }
                        else {
                            if(!isset($data[0]["profile_id"])) {
                                echo '<a class="btn btn-light rounded-lg" href="create_seller_profile/create_seller_profile">Create Shop Profile</a>';
                            }
                            echo '<a class="btn btn-light rounded-lg" href="seller_access/logout">Logout</a>';
                        }
                    ?>
                </div>
                <div class="col-sm">
                    <!-- <img src="icon/shopping-cart.png" alt="cart"> -->
                    <i class="fas fa-shopping-cart"></i>
                </div>
            <div>
            <div class="row bg-info">
                <nav class="navbar navbar-expand-md navbar-dark ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="categories/jewelry_accessories" class="col-sm">Jewelry & Accessories</a></li>
                            <li class="nav-item"><a href="categories/clothing_shoes" class="col-sm">Clothing & Shoes</a></li>
                            <li class="nav-item"><a href="categories/home_living" class="col-sm">Home & Living</a></li>
                            <li class="nav-item"><a href="categories/wedding_party" class="col-sm">Wedding & Party</a></li>
                            <li class="nav-item"><a href="categories/toys_entertainment" class="col-sm">Toys & Entertainment</a></li>
                            <li class="nav-item"><a href="categories/art_collectibles" class="col-sm">Art & Collectibles</a></li>
                            <li class="nav-item"><a href="categories/craft_supplies_tools" class="col-sm">Craft Supplies & Tools</a></li>
                            <li class="nav-item"><a href="categories/vintage" class="col-sm">Vintage</a></li>
                        </ul>
                    <div>   
                </nav>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-sm col-lg-6">
                    <p>Yes! Send me exclusive offers, unique gift ideas, and personalized tips for shopping and selling on Etsy.</p>
                    <form action="" methode="POST">
                        <div class="input-group mb-3">
                            <label></label>
                            <input type="text" class="form-control" placeholder="enter your email">
                            <button class="btn btn-dark" type="button">Sign</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

