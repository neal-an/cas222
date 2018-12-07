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
        <p class="nonPrimaryPage">Contact Us</p>
    </div>

    <div id="hero" class="hero heroStyle3"></div>
    <div class="heroBot"></div>

    <div id="events" class="events lightSub contentFill contentPad desktopPadding bring">


        <form method="post" action=" " id="inquiryForm">
            <input type="text" name="honeypot" id="honeypot" class="honeypot" value="" alt="if you fill this field out then your email will not be sent" />
            <table class="contactTable">
                <tr>
                    <td><label for="myName">Name:</label></td>
                    <td><input type="text" name="myName" id="myName"></td>
                </tr>
                <tr>
                    <td><label for="myEmail">E-mail:</label></td>
                    <td><input type="text" name="myEmail" id="myEmail"></td>
                </tr>
                <tr>
                    <td><label for="myQuestion">Question:</label></td>
                    <td><textarea form="inquiryForm" rows="10" cols="50" name="myQuestion" id="myQuestion"></textarea></td>
                </tr>
                <tr><td colspan="2" class="submitButtonColumn">
                    <input id="mySubmit" type="submit" value="Submit" class="submitButton"></td>
                </tr>
            </table>
        </form>

    </div>

    <?php 
        include "../includes/footer.inc.html.php";
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../scripts/ham.js"></script>
    <script src="../scripts/faq.js"></script>


</body>

</html>
