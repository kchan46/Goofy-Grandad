<?php $currentPage = "contact"; ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Goofy Grandad</title>
    <meta name="description" content="Goofy Grandad's website."/>

    <link rel="stylesheet" href="style.css" type="text/css" media="all">
    <link rel="stylesheet"
          href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

<body>
    <?php include "header.php";?>
                
        <div class="contact">
            <div class="contactus">
                <h2>Contact Us </h2>
                <p> Reach out to Goofy Grandad! 
                <br>
                    He would love to hear from you!</p>
                <br>
            </div>
            <div style="display: flex; flex-direction: row; padding-top: 2em;">
                <img src="images/person_icon.png" width="50" height="50">
                <p class="descriptor" style="padding-left: 2em;">Joseph Heckstall</p>
            </div>

            <div style="display: flex; flex-direction: row; padding-top: 2em;">
                <img id="phone_icon" src="images/phone_icon.png" width="50" height="50">
                <p class="descriptor" style="padding-left: 2em;">404-447-3066</p>
            </div>

            <div style="display: flex; flex-direction: row; padding-top: 2em;">
                <img id="mail_icon" src="images/mail_icon.png" width="50" height="50">
                <p class="descriptor" style="padding-left: 2em;">yourgoofygrandad@gmail.com</p>
            </div>

        </div>

        <div class= "form">
            <form action="mailto:tstillman3@gatech.edu" method="post" enctype="text/plain">
            Name:<br>
                <input type="text" name="name"><br>
                E-mail:<br>
                <input type="text" name="mail"><br>
                Comment:<br>
                <textarea name="text" rows="8" wrap="soft" style="width:100%;"></textarea><br>
                <input type="submit" value="Send" class="button">
            </form>
         </div>


    <?php include "footer.php";?>

    <script src="slider.js"></script>
</body>

</html>
