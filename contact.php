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
                He would love to hear from you!

                    <br>
                <div class="contactt-icon"><img id="person_icon" src="images/person_icon.png" width="50" height="50"> Joseph Heckstall</a></div>
                
                <div class="contact-icon"><img id="phone_icon" src="images/phone_icon.png" width="50" height="50">404-447-3066</a></div>
                
                <div class="contact-icon"><img id="mail_icon" src="images/mail_icon.png" width="50" height="50">goofygrandad@gmail.com</a></div>
                </p>
            </div>
               
            <div class= "form">
               
                <form action="email.php" name="form" method="post">
                Name:<br>
                <input type="text" name="name"><br>
                E-mail:<br>
                <input type="text" name="mail"><br>
                Comment:<br>
                <textarea name="text" rows="14" cols="21.75" wrap="soft"></textarea>
                <input type="submit" name="submit" value="Send">
                </form>
                </div>
            </div>
   </div>
    </div>

    <?php include "footer.php";?>

    <script src="slider.js"></script>
</body>

</html>
