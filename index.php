<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>The Human Experiment | Home</title>
    <link rel="stylesheet" href="styles/breakpoints.css"/>
</head>
<body>
    <div id="fb-root"></div>
    <div id="container">
        <?php require_once 'includes/header.php' ?>
        <div id="trailer-container">
            <div id="trailer-content" class="container_24">
                <div id="video-container" class="aspect-resize" data-ratio="1.6441">
                    <div id="video-cta">
                        <img class="video-title" src="images/trailer/trailer-cta.gif" alt="The Human Experiment" id="video-cta-text">
                        <a class="play-btn-container">
                            <img class="play-btn" src="images/trailer/play-btn.png" alt="Watch Trailer">
                            <p class="play-btn-text">WATCH THE TRAILER</p>
                        </a>
                    </div>
                </div>
                <img  id="credit-sean-penn" src="images/trailer/credit-sean-penn.png" alt="Narrated and Executive Produced by Sean Penn">
                <div class="laurels-container">
                    <a href="" class="laurel"><img src="images/laurels/mill-valley.png" alt=""></a>
                    <a href="" class="laurel"><img src="images/laurels/idfa.png" alt=""></a>
                    <a href="" class="laurel"><img src="images/laurels/mill-valley.png" alt=""></a>
                    <a href="" class="laurel"><img src="images/laurels/idfa.png" alt=""></a>
                    <a href="" class="laurel"><img src="images/laurels/mill-valley.png" alt=""></a>
                </div>
                <div class="share-container">

                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                    <script>
                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=250571575107349";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>

                    <a href="https://twitter.com/chemicalmovie" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @chemicalmovie</a>
                    <script>
                        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                    </script>
                </div>
            </div>
        </div>
        <div id="update-container">
            <div id="update" class="container_24">
                <div id="update-text" >
                    <h3>Latest Update - 11.23.13</h3>
                    <p>Take legislative action by signing the Chemical Action Petition lorem ipsum dolor sit
                amet, consectetur adipiscing elit liquam ut nunc eu velit cursus varius nec eget.</p>
                </div>
                <div id="update-actions">
                    <button id="update-button" class="btn-round green">LEARN MORE</button>
                </div>

            </div>
        </div>
        <div id="stats-container" class="aspect-resize" data-ratio="1.92">
            <div id="stats-content">
                <img src="images/stats/stat.png" alt="68%" class="stat-number">
                <h2 class="stat-text">Vivamus consectetur nunc alfiquet mattis <br/>Maecenas mauris augue scelerisque vel convallis</h2>
            </div>
        </div>
        <div id="switch-container">
            <div class="container_24">
                <div id="switch-cta">
                    <div id="switch-badge">
                        <img src="images/switch/badge-safer.png" alt="Switch to Safer" >
                    </div>
                    <div id="cta-text-container">
                        <p>Watch the film, and learn about safer products. Are your household products on our safe list?</p>
                        <button id="switch-btn" class="btn-round green">CHOOSE SAFER PRODUCTS NOW</button>
                    </div>
                </div>
                <div id="switch-products">
                    <a class="product"><img src="images/switch/products/molly.jpg" alt="Molly's Suds"></a>
                    <a class="product"><img src="images/switch/products/avalon.jpg" alt="Avalon Organics"></a>
                    <a class="product"><img src="images/switch/products/seventh.jpg" alt="Seventh Generation"></a>
                    <a class="product"><img src="images/switch/products/arm.jpg" alt="Arm and Hammer"></a>
                    <a class="product"><img src="images/switch/products/fair-trade.jpg" alt="Fair Trade"></a>
                </div>
                <div id="switch-buttons">
                    <div class="ib">
                        <div class="switch-btn-container">
                            <button class="btn-round">WHY THESE PRODUCTS</button>
                            <p>Click to learn more about<br/>these products</p>
                        </div>
                        <div class="switch-btn-container vine">
                            <button class="btn-round">IN PARTNERSHIP<br/>WITH VINE.COM</button>
                            <p>20% off your first order<br/>10% to non-profits for change</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="stats-lobby-container" class="aspect-resize" data-ratio="1.92">
            <div id="stats-lobby" class="container_24">
                <img id="lobby-img" src="images/stats/stats-lobby-number.png" alt="52,000,000">
            </div>
        </div>
        <?php require_once 'includes/join.php' ?>
        <?php require_once 'includes/credits.php' ?>
        <?php require_once 'includes/footer.php' ?>
    </div>
    <div id="overlay-container">
        <div class="overlay-bg"></div>
        <div id="overlay-vine" class="overlay-content">
            <a href="" class="close-btn"><img src="images/structure/btn-close.gif" alt="Close"></a>
            <div id="vine-logos">
                <a href=""><img src="images/overlay/logo-cancer.png" alt="Breast Cancer Foundation"></a>
                <a href=""><img src="images/overlay/logo-vine.gif" alt="Vine"></a>
                <a href=""><img src="images/overlay/logo-ecology.gif" alt="Ecology Center"></a>
                <p class="vine-promo">In partnership with <a href="http://vine.com">vine.com</a> 20% off your order.<br/>
10% goes to Breast Cancer and the Ecology Center</p>
            </div>
            <div class="promo-details">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rutrum justo sit amet
pellentesque volutpat. Vivamus fringilla mollis magna eu laoreet. Fusce scelerisque
mollis quam eu sollicitudin. Maecenas vel augue eget enim posuere facilisis. Nulla facilisi.
Mauris eget augue ultrices, sagittis arcu mattis, adipiscing velit. Mauris elementum, lorem
vitae auctor lacinia, risus massa congue mauris, porta lacinia nisl lorem eget nunc. </p><p>
Maecenas et ultricies magna. Integer eu urna a ligula consequat varius. Suspendisse
ultricies egestas ullamcorper. Nulla eu facilisis odio. Pellentesque luctus est vitae justo
pellentesque accumsan. Quisque dapibus enim vel quam condimentum, et malesuada
erat hendrerit. Cras faucibus orci ut risus tristique congue. Morbi dapibus varius leo, a
luctus neque viverra non. Praesent eu tristique augue.</p>

            </div>
        </div>
        <div id="overlay-faq" class="overlay-content" >
            <a href="" class="close-btn"><img src="images/structure/btn-close.gif" alt="Close"></a>
            <div class="overlay-text">
                <h3>Why these products?</h3>
                <p>All product decisions on this website and in the film have been
approved by our advisory board. The Human Experiment
Advisory Board consists of 12 members from top Universities and
research institutions.</p>
                <h3>Who are the members of the advisory board?</h3>
                <p>Dr. Connie Engel, is an expert on the conjunction of science and
advocacy in the environmental breast cancer movement. She is the
Science and Education Manager for the Breast Cancer Fund.</p>

<p>Dr. Sarah Janssen was a past Staff Scientist for the NRDC where she
provided scientific expertise for policy and regulatory decisions on a
number of toxic chemicals. She now is an Assistant Professor for
UCSF School of Medicine.</p>

<p>Lauren Heine is the Consulting Co-Director, Green Screen & Applied
Science for Clean Production Action. She applies green chemistry,
green engineering and design for the environment for sustainable
business practices.</p>
            </div>
        </div>
    </div>
    <script src="scripts/vendor/jquery-1.10.2.min.js"></script>
    <script src="scripts/vendor/modernizr.custom.68813.js"></script>
    <script src="scripts/modernize.js"></script>
    <script src="scripts/main.js"></script>
</body>
</html>
