<?php $currentPage = "events"; ?>

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


        <div class="events">
            <div class = "eventsmessage">
                <h2> Schedule an event today! </h2>
                <p>Goofy Grandad provides services for a variety of events.
                He specializes in motivational speaking and entertainment
                for kids and seniors. </p>
                <button class="bookButton"><a href="contact.php" style="text-decoration:none; color: black;"> Contact Goofy Grandad</a></button>
            </div> 
        
            <div class="timeline">
                This is a placeholder for the facebook timeline.
                <img src="images/joe.jpg">
            </div>
        </div>


    <?php include "footer.php";?>

    <script src="slider.js"></script>
</body>

</html>
