<!doctype html>
<html>

<?php 
include "../includes/head.inc.html.php";
      ?>

<body class="mainBody">
    <?php 
include "../includes/header.inc.html.php";
      ?>

    <?php 
            include "../includes/title.inc.html.php";
        ?>

    <div id="disc" class="disc desktopPadding">
        <p class="nonPrimaryPage">Register for a Race</p>
        <p>Required fields are marked with an asterisk (*).</p>
        <p>If you are registering multiple individuals, please fill out one form for each person.</p>
    </div>

    <div id="hero" class="hero heroStyle1"></div>
    <div class="heroBot"></div>
    
    <div id="events" class="events lightSub contentFill contentPad desktopPadding">

    <?php 
            include "registerform.html.php";
        ?>
        <div>
    <h2 class="subHeader">Ticket Cost Includes</h2>
        <ul class="ticketCosts">
            <li>Food & Beer</li>
            <li>Access to the weekend’s live entertainment & Fitness Expo</li>
            <li>Commemorative Finisher medal</li>
            <li>Accurate Chip Timing for competitive races</li>
            <li>Ace in the Hole MultiSport Weekend Tech Shirt</li>
            <li>Post-event party & entertainment</li>

            <p><span class="note">NOTE: Tech shirts guaranteed to pre-registered participants only.</span></p>

        </ul>
        </div>
    </div>

</body>
    <?php 
        include "../includes/footer.inc.html.php";
    ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../scripts/ham.js"></script>

</html>
