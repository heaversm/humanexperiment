<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>The Human Experiment | See The Film</title>
    <link rel="stylesheet" href="styles/grid.css" />
    <link rel="stylesheet" href="styles/main.css"/>
</head>
<body>
    <div id="container">
        <?php require_once 'includes/header.php' ?>
        <div id="see-header">
            <img src="images/see/see-title.png" alt="See the Film">
        </div>
        <div id="screenings" class="container_24 clearfix">
            <div class="cl">
                <h2>Upcoming Screenings</h2>
                <div id="screenings">
                    <div class="screening">
                        <h3>October 6, 2013</h3>
                        <strong>Mill Valley Film Festival - World Premiere</strong>
                        <p>Rafael Theater San Rafael, California<br/>
                8:30PM - Q&A after with cast and crew</p>
                        <button class="btn-round green">BUY TICKETS</button>
                    </div>
                    <div class="screening">
                        <h3>October 6, 2013</h3>
                        <strong>Mill Valley Film Festival - World Premiere</strong>
                        <p>Rafael Theater San Rafael, California<br/>
                8:30PM - Q&A after with cast and crew</p>
                        <button class="btn-round inactive">SOLD OUT</button>
                    </div>
                    <div class="screening">
                        <h3>October 6, 2013</h3>
                        <strong>Mill Valley Film Festival - World Premiere</strong>
                        <p>Rafael Theater San Rafael, California<br/>
                8:30PM - Q&A after with cast and crew</p>
                        <button class="btn-round green">BUY TICKETS</button>
                    </div>
                </div>
            </div>
            <div class="cr">
                <h1><img src="images/see/host-title.png" alt="Host a Screening"></h1>
                <p class="host-text">Interested in hosting your own screening
of The Human Experiment in 2014? Send
us your details and we be back in touch!</p>
                <form id="host-form">
                    <input type="text" class="host-field" placeholder="first name">
                    <input type="text" class="host-field" placeholder="last name">
                    <input type="text" class="host-field" placeholder="organization">
                    <input type="text" class="host-field" placeholder="email address">
                    <input type="text" class="host-field" placeholder="city">
                    <input type="text" class="host-field" placeholder="state">
                    <input type="text" class="host-field" placeholder="country">
                    <button id="host-submit" class="btn-round green">SUBMIT</button>
                </form>
            </div>
        </div>
        <?php require_once 'includes/join.php' ?>
        <?php require_once 'includes/credits.php' ?>
        <?php require_once 'includes/footer.php' ?>
    </div>
</body>
</html>
