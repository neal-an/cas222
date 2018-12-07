<!DOCTYPE html>
<html lang="en">
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

    <?php 
            include "../includes/disc.inc.html.php";
        ?>

    <div id="hero" class="hero heroStyle1"></div>
    <div class="heroBot"></div>
    <div id="events" class="events lightSub contentFill contentPad desktopPadding">
                <h2>Thank you!</h2>
                <p>Our records show you submitted the following:<br>
                  Race(s):  <?php foreach($_POST['race'] as $selected): ?><?php echo $selected; ?><br><?php endforeach; ?>
                  First Name: <?php echo htmlspecialchars($_POST['myfname'], ENT_QUOTES, 'UTF-8'); ?><br>
                  Last Name: <?php echo htmlspecialchars($_POST['mylname'], ENT_QUOTES, 'UTF-8'); ?><br>
                  Email: <?php echo htmlspecialchars($_POST['myemail'], ENT_QUOTES, 'UTF-8'); ?><br>
                  Phone: <?php echo htmlspecialchars($_POST['myphone'], ENT_QUOTES, 'UTF-8'); ?><br>
                  Special Needs: <?php echo htmlspecialchars($_POST['mycomments'], ENT_QUOTES, 'UTF-8'); ?><br>
                </p>
    </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../scripts/ham.js"></script>

</body>

</html>