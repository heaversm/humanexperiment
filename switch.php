<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1">
    <title>The Human Experiment | Switch to Safer</title>
    <link rel="stylesheet" href="styles/breakpoints.css"/>
</head>
<body>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=250571575107349";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div id="container">
        <?php require_once 'includes/header.php' ?>
        <div id="switch-container" class="container_24 clearfix">
            <div id="nav-switch" class="nav-page scrollfx" data-id="nav-switch">
                <a href="">Shampoo</a>
                <a href="">Conditioner</a>
                <a href="">Baby Bath Products</a>
                <a href="">Shaving Cream</a>
                <a href="">Deoderant</a>
                <a href="">Moisturizers and Lotions</a>
                <a href="">Toothpaste</a>
                <a href="">Hand Soap</a>
                <a href="">Sunscreen</a>
                <a href="">All-purpose Cleaners</a>
                <a href="">Laundry Detergents</a>
                <a href="">Dishwashing Detergents</a>
            </div>

            <div id="switch-content-container" class="clearfix">
                <div id="switch-content" >
                    <div class="clearfix">
                        <div id="switch-intro">
                            <div class="switch-header">
                                <div class="switch-logo-img"><img src="images/switch/badge-safer.png" alt="Switch to safer"></div>
                                <p>Watch the film, and learn about safer products. Are your household products on our safe list?</p>
                            </div>
                            <div id="switch-buttons" class="clearfix">
                                <div class="switch-btn-container">
                                    <button class="btn-round">WHY THESE PRODUCTS</button>
                                    <p>Click to learn more about<br/>these products</p>
                                </div>
                                <div class="switch-btn-container vine">
                                    <button class="btn-round">IN PARTNERSHIP<br/>WITH VINE.COM</button>
                                    <p>20% off your first order<br/>10% goes to non-profits working for change</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="switch-section clearfix">
                        <div class="switch-section-header">
                            <h2 class="section-header">Conditioner</h2>
                        </div>
                        <div class="switch-section-content">
                            <div class="switch-section-intro">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
    rhoncus ipsum nec luctus rutrum. Phasellus id purus ligula. Donec
    in sem erat. Sed consequat ac sapien sed euismod.
                            </div>
                            <div class="switch-section-products">
                                <?php require  'includes/product.php' ?>
                                <?php require  'includes/product.php' ?>
                                <?php require  'includes/product.php' ?>
                                <?php require  'includes/product.php' ?>
                            </div>
                        </div>
                    </div>

                    <div class="switch-section clearfix">
                        <div class="switch-section-header">
                            <h2 class="section-header">Shampoo</h2>
                        </div>
                        <div class="switch-section-content">
                            <div class="switch-section-intro">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
    rhoncus ipsum nec luctus rutrum. Phasellus id purus ligula. Donec
    in sem erat. Sed consequat ac sapien sed euismod.
                            </div>
                            <div class="switch-section-products">
                                <?php require  'includes/product.php' ?>
                                <?php require  'includes/product.php' ?>
                                <?php require  'includes/product.php' ?>
                                <?php require  'includes/product.php' ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <?php require_once 'includes/join.php' ?>
        <?php require_once 'includes/credits.php' ?>
        <?php require_once 'includes/footer.php' ?>
    </div>
    <script src="scripts/vendor/jquery-1.10.2.min.js"></script>
    <script src="scripts/vendor/modernizr.custom.13264.js"></script>
    <!--<script src="scripts/vendor/modernizr.custom.68813.js"></script>-->
    <script src="scripts/modernize.js"></script>
    <script src="scripts/main.js"></script>
</body>
</html>
