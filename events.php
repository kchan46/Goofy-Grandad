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
                
                <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FGOOFY-Grandad-304161619685945&width=600&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=435"
scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:500px; height:430px; background: white; float:left; " allowTransparency="true">
</iframe>
            </div>
        </div>


    <?php include "footer.php";?>

    <script src="slider.js"></script>
</body>

</html>
