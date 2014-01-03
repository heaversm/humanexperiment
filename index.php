<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1">
    <title>The Human Experiment | Home</title>
    <link rel="stylesheet" href="styles/breakpoints.css"/>
</head>
<body>
    <div id="fb-root"></div>
    <div id="container">
        <?php require_once 'includes/header.php' ?>
        <div id="trailer-container">
            <div id="trailer-content" class="container_24">
                <div id="video-positioner">
                    <div id="video-container" class="aspect-resize" data-ratio="1.777">
                        <div id="video-cta">
                            <img class="video-title" src="images/trailer/trailer-cta.gif" alt="The Human Experiment" id="video-cta-text">
                            <a class="play-btn-container video-play">
                                <img class="play-btn" src="images/trailer/play-btn.png" alt="Watch Trailer">
                                <p class="play-btn-text">WATCH THE TRAILER</p>
                            </a>
                        </div>
                        <iframe id="video-frame" src="//player.vimeo.com/video/31683038?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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
                            <button class="btn-modal btn-round" data-id="overlay-faq">WHY THESE PRODUCTS</button>
                            <p>Click to learn more about<br/>these products</p>
                        </div>
                        <div class="switch-btn-container vine">
                            <button class="btn-round btn-modal" data-id="overlay-vine">IN PARTNERSHIP<br/>WITH VINE.COM</button>
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
        <?php require_once 'includes/overlay-vine.php' ?>
        <?php require_once 'includes/overlay-faq.php' ?>
    </div>
    <script src="scripts/vendor/jquery-1.10.2.min.js"></script>
    <script src="scripts/vendor/modernizr.custom.68813.js"></script>
    <script src="scripts/modernize.js"></script>
    <script src="scripts/main.js"></script>
</body>
</html>
