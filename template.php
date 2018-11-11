<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ace in the Hole</title>
    <meta name="description" content="Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer Events for Every Body.">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="height=device-height, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Open+Sans+Condensed:300|Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/helper.css">
    <link rel="stylesheet" href="css/grid.css">
    <!--    <link rel="stylesheet" href="css/menu.css">-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="images/run.png">

    <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
</head>

<body class="mainBody">
    <?php 
include "includes/header.inc.html.php";
      ?>

    <main class="wrapper">
        <div class="titleDiv">
            <?php 
include "includes/title.inc.html.php";
      ?>
        </div>

            <?php 
include "includes/disc.inc.html.php";
      ?>

        <?php 
include "includes/hero.inc.html.php";
      ?>


        <div id="events" class="events lightSub contentFill contentPad desktopPadding">
            <?php 
include "includes/events.inc.html.php";
      ?>
        </div>
        <div id="starting" class="starting darkSub contentPad desktopPadding">
            <?php 
include "includes/starting.inc.html.php";
      ?>
        </div>
        <div id="details" class="details lightSub contentFill contentPad desktopPadding section group centering">
            <?php 
include "includes/socialfeed.inc.html.php";
      ?>
        </div>

        <div id="starting" class="starting darkSub contentPad desktopPadding">
            <?php 
include "includes/weather.inc.html.php";
      ?>
        </div>


    </main>

    <?php 
include "includes/footer.inc.html.php";
      ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="scripts/ham.js"></script>

</body>

</html>
